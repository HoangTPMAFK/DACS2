<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Vendor\VendorService;
use App\Http\Services\Product\ProductService;
use App\Models\Vendor;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     protected $categoryService;
     protected $vendorService;
     protected $productService;
 
     public function __construct(VendorService $vendorService, CategoryService $categoryService, ProductService $productService)
     {
        $this->vendorService = $vendorService;
        $this->categoryService = $categoryService;
        $this->productService = $productService;
     }

    public function index()
    {
        return view('admin/vendor/list', [
            'title' => 'Quản lý hãng',
            'vendors' => $this->vendorService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/vendor/add', [
            'title' => 'Thêm hãng',
            'categories' => $this->categoryService->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // unset($request->input()->vendor_name);
        // dd($request->except(['vendor_name', '_token']));
        $this->vendorService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor, Request $request)
    {
        // return ([$request->input('product'), $request->input()]);
        if ($vendor['id'] == NULL) {
            $vendors = $this->vendorService->get('categories', $request->input('category'));
            if ($request->input('product') != NULL) { 
                $product = $this->productService->get((int) $request->input('product'));
                $html = '';
                foreach($vendors as $vendor) {
                    $html .= '<option value="'.$vendor['slug'];
                    if ($vendor['slug'] == $product['vendor']) {
                        $html .= '" selected>'.$vendor['vendor_name'].'</option>';
                    } else {
                        $html .= '">'.$vendor['vendor_name'].'</option>';
                    }
                }
                return response()->json([
                    'html' => $html
                ]);
            } else {
                return response()->json([
                    'vendors' => $vendors
                ]);
            }
        } else if ($vendor['id'] != NULL) {
            return view('admin/vendor/edit', [
                'title' => 'Sửa hãng',
                'vendor' => $vendor->attributesToArray(),
                'categories' => $this->categoryService->get()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        return view('admin/vendor/edit', [
            'title' => 'Sửa hãng',
            'vendor' => $vendor->attributesToArray(),
            'categories' => $this->categoryService->get()
        ]);
        // return "Hello World!";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        $result = $this->vendorService->update($request, $vendor);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->vendorService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'msg' => 'Xóa hãng thành công'
            ]);
        } else {
            return response()->json([
                'error' => true
            ]);
        }
    }
}
