<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return view ('admin/category/list', [
            'title' => 'Quản lý danh mục',
            'categories' => $this->categoryService->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin/category/add', [
            'title' => 'Thêm danh mục'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryFormRequest $request)
    {
        //
        $result = $this->categoryService->create($request);
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
    public function edit(Category $category)
    {
        return view('admin/category/edit', [
            'title' => 'Sửa danh mục',
            'category' => $category->attributesToArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category, CategoryFormRequest $request)
    {
        $this->categoryService->update($request, $category);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->categoryService->destroy($request);
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
