<?php
namespace App\Http\Services\Category;

use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;
use App\Http\Services\Vendor\VendorService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryService {
    protected $vendorService;
    public function __construct(VendorService $vendorService)
    {
        $this->vendorService = $vendorService;
    }
    public function create($request) {
        try {
            Category::create([
                'category_name' => (string) $request->input('category_name'),
                'slug' => (string) $request->input('slug'),
                'slug_vi' => Str::slug((string) $request->input('category_name'))
            ]);
            Session::flash('success', 'Thêm danh mục thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return true;
    }
    public function get($column = NULL, $value = NULL) {
        if ($column == NULL && $value == NULL) {
            return Category::get();
        } else if ($column != NULL && $value != NULL) {
            if ($column == "slug_vi" || $column == "slug" || $column == "id")
                return Category::where($column, $value)->first();
        }        
    }
    public function destroy ($request) {
        $id = $request->input('id');
        $category = Category::where('id', $id)->first();
        if ($category) {
            return Category::where('id', $id)->delete();
        }
        return false;
    }
    public function update($request, $category) {
        try {
            $category->fill($request->input());
            $category->save();
            Session::flash('success', 'Sửa danh mục thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }
    public function getVendors() {
        $vendors = [];
        $categories = Category::get();
        $categories = json_decode(json_encode($categories), true);
        foreach ($categories as $categoryIndex => $category) {
            $vendors[$category['slug_vi']] = [json_decode(json_encode($this->vendorService->get('categories', $category['slug_vi'])), true), $category['category_name']];
        }
        return $vendors;
    }
}
?>