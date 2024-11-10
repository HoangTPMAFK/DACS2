<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VoucherFormRequest;
use App\Http\Services\Voucher\VoucherService;
use App\Http\Services\Product\ProductService;
use App\Models\Voucher;

class VoucherController extends Controller
{
    protected $voucherService;
    protected $productService;
    public function __construct(VoucherService $voucherService, ProductService $productService)
    {
        $this->voucherService = $voucherService;
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/voucher/list', [
            'title' => 'Quản lý mã giảm giá',
            'vouchers' => $this->voucherService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/voucher/add', [
            'title' => 'Thêm mã giảm giá'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VoucherFormRequest $request)
    {
        $this->voucherService->create($request);
        return redirect()->back();
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
    public function edit(Voucher $voucher)
    {
        $products = $this->productService->getProductListById(json_decode($voucher['productsList']));
        return view('admin/voucher/edit', [
            'title' => 'Sửa mã giảm giá',
            'voucher' => $voucher->attributesToArray(),
            'products' => $products,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voucher $voucher)
    {
        $this->voucherService->update($request, $voucher);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->voucherService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'msg' => 'Xóa hàng thành công'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
