<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductFormRequest;
use App\Http\Services\Category\CategoryService;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $productService;
    protected $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return view ('admin/product/list', [
            'title' => 'Quản lý sản phẩm',
            'products' => $this->productService->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin/product/add', [
            'title' => 'Thêm sản phẩm',
            'categories' => $this->categoryService->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        $result = $this->productService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin/product/show', [
            'title' => 'Xem sản phẩm',
            'product' => $product->attributesToArray(),
            'categories' => $this->categoryService->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin/product/edit', [
            'title' => 'Sửa sản phẩm',
            'product' => $product->attributesToArray(),
            'categories' => $this->categoryService->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product, ProductFormRequest $request)
    {
        $result = $this->productService->update($request, $product);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->productService->destroy($request);
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
