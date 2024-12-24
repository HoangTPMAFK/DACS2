<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Services\Inventory\InventoryService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Agency\AgencyService;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Vendor\VendorService;
use App\Http\Requests\InventoryFormRequest;
use App\Models\Inventory;
use Exception;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    protected $inventoryService;
    protected $productService;
    protected $agencyService;
    protected $categoryService;
    protected $vendorService;
    public function __construct(InventoryService $inventoryService, ProductService $productService, AgencyService $agencyService, CategoryService $categoryService, VendorService $vendorService)
    {
        $this->inventoryService = $inventoryService;
        $this->productService = $productService;
        $this->agencyService = $agencyService;
        $this->categoryService = $categoryService;
        $this->vendorService = $vendorService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/inventory/list', [
            'title' => 'Quản lý kho hàng',
            'products' => $this->inventoryService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/inventory/add', [
            'title' => 'Thêm vào kho hàng',
            'products' => $this->inventoryService->get(),
            'categories' => $this->categoryService->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventoryFormRequest $request)
    {
        // return dd($request->input());
        $this->inventoryService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $product)
    {
        $product = $product->attributesToArray();
        return view('admin/inventory/show', [
            'title' => 'Cập nhật kho hàng',
            'product' => $product,
            'product_info' => $this->productService->get($product['product_id']),
            'categories' => $this->categoryService->get(),
            'agency' => $this->agencyService->get('id', $product['agency_id'])[0]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $product)
    {
        $product = $product->attributesToArray();
        return view('admin/inventory/edit', [
            'title' => 'Cập nhật kho hàng',
            'product' => $product,
            'product_info' => $this->productService->get($product['product_id']),
            'categories' => $this->categoryService->get(),
            'agency' => $this->agencyService->get('id', $product['agency_id'])[0]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InventoryFormRequest $request, Inventory $product)
    {
        try {
            $this->inventoryService->update($request, $product);
            return redirect()->back();
        } catch (Exception $err) {
            Session::flash('error', $err->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->inventoryService->destroy($request);
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
