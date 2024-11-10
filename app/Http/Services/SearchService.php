<?php
namespace App\Http\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchService {
    public function create($request) {
        
    }
    public function get(Request $request) {
        return Product::whereLike('product_name','%'.$request->input('product_name').'%',false)->get();
    }
    public function store($request) {
                
    }
    public function destroy ($request) {
        
    }
    public function update($request, $category) {
        
    }
}
?>