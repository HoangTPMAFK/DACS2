<?php
namespace App\Http\Services\Product;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductService {
    public function create($request) {
        $thumbnailPath = NULL;
        $slug_vi = Str::slug((string) $request->input('product_name') . ' ' . (string) $request->input('edition') . ' ' . (string) $request->input('color'), '-');
        $description = NULL;
        $imgPaths = NULL;

        try {
            if ($request->input('thumbnail') != "") {
                $thumbnailPath = 'storage/images/products/'.$slug_vi.'/'.$request->input('thumbnail');
            }
            if ($request->input('description') != "") {
                $description = base64_encode($request->input('description'));
            }
            if ($request->hasFile('images')) {
                $imgPaths = [];
                foreach($request->file('images') as $file) {
                    $imgPaths[] = 'storage/images/products/'.$slug_vi.'/'.$file->getClientOriginalName();
                }
                $imgPaths = json_encode($imgPaths);
            }
            Product::create([
                'product_name' => (string) $request->input('product_name'),
                'thumbnail' => $thumbnailPath,
                'slug_vi' => $slug_vi,
                'category' => Str::slug($request->input('category', '-')),
                'vendor' => (string) $request->input('vendor'),
                'edition' => (string) $request->input('edition'),
                'price' => (int) $request->input('price'),
                'description' => (string) $description,
                'images' => json_decode($imgPaths)
            ]);
            Session::flash('success', 'Thêm sản phẩm thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return true;
    }
    public function get($id = NULL) {
        if ($id == NULL) {
            return Product::
            orderBy('id')->paginate(10);
        } else {
            return Product::where('id', (int) $id)->first();
        }
    }
    public function getCustomerProducts($column = NULL, $value = NULL, array $array = NULL) {
        $result = NULL;
        $productsPerPage = 5;
    
        if (!is_array($array)) {
            if (!isset($_GET['sort'])) {
                if ($column == "slug_vi" || $column == "id") {
                    return Product::where($column, $value)->first();
                } else {
                    $result = Product::where($column, $value);
                }
            } else {
                switch ($_GET['sort']) {
                    case 1:
                        $result = Product::where($column, $value)->orderBy('created_at', 'DESC');
                        break;
                    case 2:
                        $result = Product::where($column, $value)->orderBy('product_name');
                        break;
                    case 3:
                        $result = Product::where($column, $value)->orderBy('product_name', 'DESC');
                        break;
                    case 4:
                        $result = Product::where($column, $value)->orderBy('price');
                        break;
                    case 5:
                        $result = Product::where($column, $value)->orderBy('price', 'DESC');
                        break;
                }
            }
    
            // Apply additional filters based on query parameters
            if (isset($_GET['color'])) {
                $result = $result->where('color', $_GET['color']);
            }
            if (isset($_GET['ram'])) {
                $result = $result->whereLike('edition', $_GET['ram'].'%');
            }
            if (isset($_GET['capacity'])) {
                $result = $result->whereLike('edition', '%'.$_GET['capacity'].'%');
            }
            if (isset($_GET['price_level'])) {
                // Apply price filter based on `price_level`
                switch ($_GET['price_level']) {
                    case '0-3000000':
                        $result = $result->whereBetween('price', [0, 3000000]);
                        break;
                    case '3000000-5000000':
                        $result = $result->whereBetween('price', [3000000, 5000000]);
                        break;
                    case '5000000-10000000':
                        $result = $result->whereBetween('price', [5000000, 10000000]);
                        break;
                    case '10000000-15000000':
                        $result = $result->whereBetween('price', [10000000, 15000000]);
                        break;
                    case '15000000-20000000':
                        $result = $result->whereBetween('price', [15000000, 20000000]);
                        break;
                    case '20000000-30000000':
                        $result = $result->whereBetween('price', [20000000, 30000000]);
                        break;
                    case '30000000+':
                        $result = $result->where('price', '>', 30000000);
                        break;
                }
            }
    
            return $result->paginate($productsPerPage);
        } else {
            // Handle filtering using an array of conditions
            return Product::where($array)->paginate(18);
        }
    }
    
    public function getProductListById(array $array) {
        return Product::whereIn('id', $array)->get();
    }

    public function update($request, $product) {
        try {
            $oldThumbnailPath = $request->input('oldThumbnailPath');
            $product->fill($request->input());
            $slug_vi = Str::slug((string) $request->input('product_name') . ' ' . (string) $request->input('edition'), '-');
            $imgPaths = NULL;
            if (Product::where('slug', $slug_vi)->first() != NULL ) {
                $slug_vi = Str::slug($slug_vi.' '.(string) $request->input('color'), '-');
            }
            $product->slug_vi = $slug_vi;
            if (!$request->hasFile('thumbnail')) {
                $product->thumbnail = $oldThumbnailPath;
            } else {
                $product->thumbnail = 'storage/images/products/'.$slug_vi.'/'.$request->file('thumbnail')->getClientOriginalName();
            }
            if ($request->hasFile('images')) {
                $imgPaths = [];
                foreach($request->file('images') as $file) {
                    $imgPaths[] = 'storage/images/products/'.$slug_vi.'/'.$file->getClientOriginalName();
                }
                $imgPaths = json_encode($imgPaths);
                $product->images = $imgPaths;
            }
            if ($request->input('description') != "") {
                $product->description = base64_encode($request->input('description'));
            }
            $product->save();
            Session::flash('success', 'Cập nhật sản phẩm thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }
    public function destroy($request) {
        $id = $request->input('id');
        $product = Product::where('id', $id)->first();
        if ($product) {
            return Product::where('id', $id)->delete();
        }
        return false;
    }
}
?>