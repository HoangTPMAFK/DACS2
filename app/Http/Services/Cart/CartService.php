<?php
namespace App\Http\Services\Cart;

use App\Models\Product;
use App\Models\Cart;
use App\Http\Services\Vendor\VendorService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CartService {
    protected $vendorService;
    public function __construct(VendorService $vendorService)
    {
        $this->vendorService = $vendorService;
    }
    public function create($request) {
        $product_id = $request->input('product_id');
        $item = Cart::where([
            'product_id' => $product_id,
            'customer_id' => Auth::user()->id
        ])->first();
        if (!$item) {
            try {
                Cart::create([
                    'customer_id' => Auth::user()->id,
                    'product_id' => (int) $request->input('product_id'),
                    'agency_id' => (int) $request->input('agency_id'),
                    'quantity' => 1
                ]);
                return response()->json([
                    'msg' => 'Đã thêm vào giỏ hàng'
                ]);
            } catch (\Exception $err) {
                return response()->json([
                    'msg' => $err->getMessage()
                ]);
            }
        } else {
            $item->quantity = $item->quantity + 1; 
            $item->save();
            return response()->json([
                'msg' => 'Tăng 1 số lượng của sản phẩm đã tồn tại trong giỏ hàng'
            ]);
        }
    }
    public function get(): \Illuminate\Support\Collection {   
        return Cart::with('getProduct')->where('customer_id', Auth::user()->id)->get();   
    }
    public function destroy ($request) {
        $id = $request->input('id');
        $item = Cart::where('id', $id)->first();
        if ($item) {
            return Cart::where('id', $id)->delete();
        }
        return false;
    }
    public function update($request) {
        try {
            $product_id = $request->input('product_id');
            $quantity = $request->input('quantity');
            for ($i = 0; $i < sizeof($product_id); $i++) {
                Cart::where([
                    'customer_id' => Auth::user()->id,
                    'product_id' => $product_id[$i]
                ])->update(['quantity' => $quantity[$i]]);
            }
            Cart::whereNotIn('product_id', $product_id)->where('customer_id', Auth::user()->id)->delete();
            Session::flash('success', 'Cập nhật giỏ hàng thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }
}
?>