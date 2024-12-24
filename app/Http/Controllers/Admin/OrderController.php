<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Services\Order\OrderService;
use App\Http\Services\Order\ItemInOrderService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    protected $orderService;
    protected $itemInOrderService;
    public function __construct(OrderService $orderService, ItemInOrderService $itemInOrderService)
    {
        $this->orderService = $orderService;
        $this->itemInOrderService = $itemInOrderService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/order/list', [
            'title' => 'Quản lý đơn hàng',
            'orders' => $this->orderService->get()
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('admin/order/show', [
            'title' => 'Xem đơn hàng',
            'order' => $order->attributesToArray(),
            'products' => $this->itemInOrderService->get($order['order_code']),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('admin/order/edit', [
            'title' => 'Cập nhật đơn hàng',
            'order' => $order->attributesToArray(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $this->orderService->update($request, $order);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->orderService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'msg' => 'Xóa hàng thành công'
            ]);
        } else {
            return response()->json([
                'error' => true
            ]);
        }
    }
}
