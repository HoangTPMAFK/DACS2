<?php
namespace App\Http\Services\Voucher;

use App\Models\Voucher;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class VoucherService {
    public function get($id = NULL) {
        if ($id == NULL) {
            return Voucher::
            orderBy('created_at', 'DESC')->paginate(10);
        } else {
            return Voucher::where('id', (int) $id)->first();
        }
    }
    public function customerGet($id = NULL) {
        if ($id == NULL) {
            return Voucher::
            orderBy('created_at', 'DESC')->where('hidden', 0)->paginate(10);
        } else {
            return Voucher::where('id', (int) $id)->first();
        }
    }
    public function getByCode($voucher_code) {
        return Voucher::where('voucher_code', $voucher_code)
                ->where('start_at', '<=', now())
                ->where('end_at', '>=', now())
                ->first();
    }
    public function create($request) {
        try {
            Voucher::create([
                'voucher_code' => (string) $request->input('voucher_code'), 
                'start_at' => $request->input('start_at'), 
                'end_at' => $request->input('end_at'), 
                'allProduct' => ((string) $request->input('allProduct') != null), 
                'productsList' => json_encode($request->input('product_id') != null ? $request->input('product_id') : []), 
                'discountAmount' => (int) $request->input('discountAmount'), 
                'unit' => (string) $request->input('unit'), 
                'maxDiscount' => (int) $request->input('maxDiscount'),
                'hidden' => (string) $request->input('hidden') == 'on' ? 1 : 0,
            ]);
            Session::flash('success', 'Tạo mã giảm giá thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        
    }
    public function update($request, $voucher) {
        try {
            Voucher::where('id', $voucher['id'])->update([
                'voucher_code' => (string) $request->input('voucher_code'), 
                'start_at' => $request->input('start_at'), 
                'end_at' => $request->input('end_at'), 
                'allProduct' => ((string) $request->input('allProduct') != null), 
                'productsList' => json_encode($request->input('product_id') != null ? $request->input('product_id') : []), 
                'discountAmount' => (int) $request->input('discountAmount'), 
                'unit' => (string) $request->input('unit'), 
                'maxDiscount' => (int) $request->input('maxDiscount')
            ]);
            Session::flash('success', 'Cập nhật mã giảm giá thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }
    public function destroy($request) {
        $id = $request->input('id');
        $voucher = Voucher::where('id', $id)->first();
        if ($voucher) {
            return Voucher::where('id', $id)->delete();
        }
        return false;
    }
    public function getProducts($hidden = 0, $voucher_code = NULL) {
        $voucher = Voucher::where('hidden', $hidden);
        if ($voucher_code != NULL) {
            $voucher = $voucher->where('voucher_code', $voucher_code);
        }
        $voucher = $voucher->get();
        $voucher = json_decode(json_encode($voucher), true);
        $products = [];
        foreach ($voucher as $voucherIndex => $voucher) {
            if ($voucher['allProduct'] == 1) {
                $products[$voucher['voucher_code']] = [['Tất cả sản phẩm'], $voucher];
            } else {
                $products[$voucher['voucher_code']] = [json_decode(json_encode(Product::whereIn('id', json_decode($voucher['productsList']))->get()), true), $voucher];
            }
        }
        return ($products);
    }
}
?>