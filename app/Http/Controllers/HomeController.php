<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Comment\CommentService;
use App\Models\Category;

class HomeController extends Controller
{
    protected $categoryService;
    protected $productService;
    protected $commentService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CategoryService $categoryService, ProductService $productService, CommentService $commentService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
        $this->commentService = $commentService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd($this->categoryService->getVendors());
        return view('home', [
            'title' => 'Trang chủ',
            'vendors' => $this->categoryService->getVendors()
        ]);
    }
    public function category($category_slug, $vendor = NULL) {
        if ($vendor == NULL) {
            $category = $this->categoryService->get('slug_vi', $category_slug)->attributesToArray();
            return view('category', [
                'title' => $category['category_name'],
                'products' => $this->productService->getCustomerProducts('category', $category['slug_vi']),
                'vendors' => $this->categoryService->getVendors(),
            ]);
        } else {
            $category = $this->categoryService->get('slug_vi', $category_slug)->attributesToArray();
            return view('category', [
                'title' => $category['category_name'],
                'products' => $this->productService->getCustomerProducts([
                    'category' => $category['slug_vi'],
                    'vendor' => $vendor
                ]),
                'vendors' => $this->categoryService->getVendors(),
            ]);
        }
    }
    public function product($slug) {
        $product = $this->productService->getCustomerProducts('slug_vi', $slug)->attributesToArray();
        $comments = $this->commentService->get($product['id']);
        $editions = $this->productService->getCustomerProducts('product_name', $product['product_name']);
        return view('product', [
            'title' => $product['product_name'],
            'product' => $product,
            'comments' => $comments,
            'vendors' => $this->categoryService->getVendors(),
            'editions' => $editions,
        ]);
    }
    public function myaccount() {
        return view('my_account', [
            'title' => 'Tài khoản của tôi',
            'vendors' => $this->categoryService->getVendors(),
        ]);
    }
}
