<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Order\OrderService;

class DashboardController extends Controller
{
    protected $productService;
    protected $orderService;
    public function __construct(ProductService $productService, OrderService $orderService)
    {
        $this->productService = $productService;
        $this->orderService = $orderService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return dd($this->productService->getMostSoldProducts()->pluck('product_name'));
        // return $this->productService->getMostSoldProducts()->pluck('product_name');
        return view('admin.dashboard', [
            'title' => 'Trang quản trị',
            'products_name' => $this->productService->getMostSoldProducts()->pluck('product_name'),
            'total_solds' => $this->productService->getMostSoldProducts()->pluck('total_sold'),
            'orders' => $this->orderService->get(),
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
