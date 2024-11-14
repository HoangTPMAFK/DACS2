<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Cart\CartService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Voucher\VoucherService;
use App\Http\Services\Category\CategoryService;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;
    protected $productService;
    protected $voucherService;
    protected $categoryService;
    public function __construct(CartService $cartService, ProductService $productService, VoucherService $voucherService, CategoryService $categoryService)
    {
        $this->cartService = $cartService;
        $this->productService = $productService;
        $this->voucherService = $voucherService;
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productList = json_decode(json_encode($this->cartService->get()));
        $totalPrice = 0;
        foreach($productList as $product) {
            $totalPrice += $product->get_product->price * $product->quantity;
        }
        return view('cart', [
            'title' => 'Giỏ hàng',
            'cart' => $this->cartService->get(),
            'totalPrice' => $totalPrice,
            'vendors' => $this->categoryService->getVendors(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $this->cartService->create($request);
        return $result;
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
    public function update(Request $request)
    {
        $this->cartService->update($request);
        return redirect()->back();
    }

    public function check_voucher(Request $request) {
        $voucher =  $this->voucherService->getByCode($request->input('voucher_code'));
        if ($voucher) {
            $request->session()->put('voucher', $this->voucherService->getByCode($request->input('voucher_code')));
            Session::flash('voucher_success', 'Đã áp dụng mã giảm giá thành công');
            return redirect()->back();
        } else {
            Session::flash('voucher_error', 'Mã giảm giá không tồn tại hoặc đã quá thời hạn hiệu lực');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
