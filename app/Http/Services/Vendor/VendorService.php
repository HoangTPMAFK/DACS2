<?php
namespace App\Http\Services\Vendor;

use App\Models\Vendor;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class VendorService {
    public function create($request) {
        try {
            Vendor::create([
                'vendor_name' => (string) $request->input('vendor_name'),
                'slug' => Str::slug((string) $request->input('vendor_name')),
                'categories' => json_encode($request->except(['vendor_name', '_token']))
            ]);
            Session::flash('success', 'Thêm hãng thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return true;
    }
    public function get($column = NULL, $value = NULL) {
        if ($column == NULL && $value == NULL)
            return Vendor::get();
        else if (($column != NULL && $value != NULL)) {
            if ($column == "categories") {
                return Vendor::whereJsonContains($column.'->'.$value, 'on')->get();
            }
        }
    }
    public function update($request, $vendor) {
        try {
            $vendor->vendor_name = (string) $request->input('vendor_name');
            $vendor->slug = Str::slug((string) $request->input('vendor_name'));
            $vendor->categories = json_encode($request->except(['vendor_name', '_token']));
            $vendor->save();
            Session::flash('success', 'Cập nhật hãng thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        
    }
    public function destroy($request) {
        $id = $request->input('id');
        $vendor = Vendor::where('id', $id)->first();
        if ($vendor) {
            // Nhớ xóa luôn cả sản phẩm có hãng là hãng bị xóa
            return  Vendor::where('id', $id)->delete();
        }
        return false;
    }
}
?>