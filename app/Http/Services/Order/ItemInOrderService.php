<?php
namespace App\Http\Services\Order;

use App\Models\ItemInOrder;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ItemInOrderService {
    public function get($id = NULL) {
        
    }
    public function create($request) {
        try {
            for ($i = 0; $i < sizeof($request->input('product_id')); $i++) {
                ItemInOrder::create([
                    'order_code' => (string) $request->input('order_code'),
                    'product_id' => (int) $request->input('product_id')[$i],
                    'agency_id' => (int) $request->input('agency_id')[$i],
                    'quantity' => (int) $request->input('quantity')[$i],
                ]);
            }
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        
    }
    public function destroy($request) {
        $order_code = $request->input('order_code');
        $list = ItemInOrder::where('order_code', $order_code)->first();
        if ($list) {
            return ItemInOrder::where('order_code', $order_code)->delete();
        }
        return false;
    }
}
?>