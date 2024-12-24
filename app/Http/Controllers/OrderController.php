<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Services\Order\ItemInOrderService;
use App\Http\Services\Order\OrderService;
use App\Http\Services\Cart\CartService;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Product\ProductService;
use App\Models\ItemInOrder;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    protected $itemInOrderService;
    protected $orderService;
    protected $cartService;
    protected $categoryService;
    public function __construct(ItemInOrderService $itemInOrderService, OrderService $orderService, CartService $cartService, CategoryService $categoryService)
    {
        $this->itemInOrderService = $itemInOrderService;
        $this->orderService = $orderService;
        $this->cartService = $cartService;
        $this->categoryService = $categoryService;
    }

    public function orderlist() {
        return view('order_list', [
            'title' => 'Danh sách đơn hàng',
            'vendors' => $this->categoryService->getVendors(),
            'orders' => $this->orderService->getCustomerOrders(),
        ]);
    }

    public function order_detail($order_code) {
        return view('order_detail', [
            'title' => 'Chi tiết đơn hàng',
            'vendors' => $this->categoryService->getVendors(),
            'order' => $this->orderService->getByCode($order_code),
            'products' => $this->itemInOrderService->get($order_code),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productList = json_decode(json_encode($this->cartService->get()));
        $totalPrice = 0;
        foreach($productList as $product) {
            $totalPrice += $product->get_product->price * $product->quantity;
        }
        return view('checkout', [
            'title' => 'Thanh toán đơn hàng',
            'products' => $this->cartService->get(),
            'totalPrice' => $totalPrice,
            'vendors' => $this->categoryService->getVendors(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $paymentType)
    {
        try {
            if ($paymentType == "vnpay") {
                // Step 1: Create a pending order without items
                $orderData = $request->only(['customer_name', 'total_price', 'order_code', 'address', 'phone', 'email', 'province', 'district']);
                $orderData['deliveryStatus'] = 'Đang giao';
                $orderData['paymentStatus'] = 'Chưa thanh toán';
                 // Set initial status to 'pending'
                $order = $this->orderService->create($request); // Create order in pending state
                $this->itemInOrderService->create($request);

                // Step 2: Redirect to VNPay payment
                return $this->vnpay_payment($request);
            } else if ($paymentType == "cod") {
                $this->orderService->create($request);
                $this->itemInOrderService->create($request);
                return redirect(url('/'));
            } else if ($paymentType == "momo") {
                $orderData = $request->only(['customer_name', 'total_price', 'order_code', 'address', 'phone', 'email', 'province', 'district']);
                $orderData['deliveryStatus'] = 'Đang giao'; // Set initial status to 'pending'
                $orderData['paymentStatus'] = 'Chưa thanh toán';
                $order = $this->orderService->create($request); // Create order in pending state
                $this->itemInOrderService->create($request);
                return $this->momo_atm_payment($request);
            }

            // Handle other payment types here

        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return redirect(url('/thanh-toan'));
        }
    }

    public function vnpay_payment(Request $request) {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = url('/thanh-toan/vnpay/return');
        $vnp_TmnCode = "UJQXKJB6";//Mã website tại VNPAY 
        $vnp_HashSecret = "B6Y0QUDGUMHE1D6EHC5OOQK7PD1C205O"; //Chuỗi bí mật
        
        $vnp_TxnRef = $request->input('order_code'); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán đơn hàng';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = (int) $request->input('total_price') * 100;
        $vnp_Locale = 'VN';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            // "vnp_ExpireDate"=>$vnp_ExpireDate,
        );
        
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }
    public function vnpay_return(Request $request) {
        
        $inputData = $request->all();
        $vnp_ResponseCode = $inputData['vnp_ResponseCode'] ?? null;
        $vnp_TransactionStatus = $inputData['vnp_TransactionStatus'] ?? null;
        $orderCode = $inputData['vnp_TxnRef'] ?? null;
        // Find the order using the order code
        $order = $this->orderService->getByCode($orderCode);
        if ($order && $vnp_ResponseCode == '00' && $vnp_TransactionStatus == '00') {
            // Step 1: Update order status to 'paid'
            $order->paymentStatus = "Đã thanh toán";
            $order->save();
            Cart::where('customer_id', Auth::user()->id)->delete();
            return redirect(url('/'))->with('success', 'Payment successful!');
        } else {
            // Payment failed or was canceled
            if ($order) {
                Order::where('order_code', $order->order_code)->delete();
                ItemInOrder::where('order_code', $order->order_code)->delete();
            }
            return redirect(url('/thanh-toan'))->with('error', 'Payment failed or was canceled.');
        }
    }
    public function momo_atm_payment(Request $request) {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = $request->input('total_price');
        $orderId = $request->input('order_code') . "";
        $redirectUrl = url("/thanh-toan/momo/return");
        $ipnUrl = url("/thanh-toan");
        $extraData = "";


        if (!empty($_POST)) {

            $requestId = time() . "";
            $requestType = "payWithATM";
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array('partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);
            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json
            //Just a example, please check more in there

            return redirect($jsonResult['payUrl']);
        }
    }
    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function momo_atm_return(Request $request) {
        // Verify the signature here to ensure the request is from MoMo
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $receivedSignature = $request->input('signature');

        // Recreate the signature to verify
        $rawHash = "accessKey=" . $request->input('accessKey') . "&amount=" . $request->input('amount') . "&extraData=" . $request->input('extraData') . "&orderId=" . $request->input('orderId') . "&orderInfo=" . $request->input('orderInfo') . "&partnerCode=" . $request->input('partnerCode') . "&requestId=" . $request->input('requestId') . "&requestType=" . $request->input('requestType');
        $generatedSignature = hash_hmac("sha256", $rawHash, $secretKey);

        $orderCode = $request->input('orderId');
        $order = $this->orderService->getByCode($orderCode);
        if ($generatedSignature === $receivedSignature && $request->input('resultCode') == '0') { // '0' indicates success in MoMo's API
            // Payment is successful
            if ($order) {
                // Update order status to 'paid'
                $order->paymentStatus = "Đã thanh toán";
                $order->save();

                return redirect(url('/'))->with('success', 'Payment successful!');
            }
        } else {
            Order::where('order_code', $order->order_code)->delete();
            ItemInOrder::where('order_code', $order->order_code)->delete();
            // Cart::where('customer_id', Auth::user()->id)->delete();
            return redirect(url('/thanh-toan'))->with('error', 'Payment failed or was canceled.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $order_code)
    {
        $request->request->add(['deliveryStatus' => 'Đã giao']);
        $order = $this->orderService->getByCode($order_code);
        $order = $order->toArray();
        $this->orderService->customerUpdate($request, $order);
        return redirect()->route('orderlist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
