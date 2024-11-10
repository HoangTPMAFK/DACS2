<?php
namespace App\Http\Services\Inventory;

use App\Models\Inventory;
use Illuminate\Support\Facades\Session;

class InventoryService {
    public function create($request) {
        try {
            Inventory::create([
                'product_id' => (int) $request->input('product_id'),
                'agency_id' => (int) $request->input('agency_id'),
                'quantity' => (int) $request->input('quantity')
            ]);
            Session::flash('success', 'Thêm sản phẩm  vào kho thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return true;
    }
    public function get($id = NULL, array $array = NULL) {
        if ($id == NULL) {
            return Inventory::
            orderBy('id')->paginate(10);
        } else {
            return Inventory::where('id', (int) $id)->get();
        }
    }
    public function getQuantity(array $array) {
        return Inventory::where($array)->first();
    }
    public function update($request, $product) {
        try {
            $product->fill($request->input());
            $product->save();
            Session::flash('success', 'Cập nhật sản phẩm trong kho thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        
    }
    public function destroy($request) {
        $id = $request->input('id');
        $product = Inventory::where('id', $id)->first();
        if ($product) {
            return Inventory::where('id', $id)->delete();
        }
        return false;
    }
}
?>