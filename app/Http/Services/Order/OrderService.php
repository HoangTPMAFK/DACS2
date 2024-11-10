<?php
namespace App\Http\Services\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OrderService {
    public function get($id = NULL) {
        if ($id == NULL) {
            return Order::
            orderBy('created_at', 'DESC')->paginate(10);
        } else {
            return Order::where('id', (int) $id)->first();
        }
    }
    public function getByCode($order_code) {
        return Order::where('order_code', $order_code)->first();
    }
    public function create($request) {
        try {
            Order::create([
                'customer_name' => (string) $request->input('customer_name'),
                'order_code' => (string) $request->input('order_code'),
                'phone'  => (string) $request->input('phone'),
                'email'  => (string) $request->input('email'),
                'province' => (string) $request->input('province'),
                'district' => (string) $request->input('district'),
                'address' => (string) $request->input('address'),
                'total_price' => (string) $request->input('total_price'),
                'state' => 'Đang giao hàng',
            ]);
            Session::flash('success', 'Tạo đơn hàng thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        
    }
    public function update($request, $order) {
        try {
            Order::where('id', $order['id'])->update([
                'state' => $request->input('state')
            ]);
            Session::flash('success', 'Cập nhật đơn hàng thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }
    public function destroy($request) {
        $id = $request->input('id');
        $product = Order::where('id', $id)->first();
        if ($product) {
            return Order::where('id', $id)->delete();
        }
        return false;
    }
}
?>