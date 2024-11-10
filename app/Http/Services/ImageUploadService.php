<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ImageUploadService {
    public function create($request) {
        
    }
    public function get() {
        
        
    }
    public function store($request, $type) {
        if ($type == "thumbnail") {
            try {
                if ($request->hasFile('file')) {
                    $request->file('file')->storeAs('/public/images/products/'.$request->input('slug'), $request->file('file')->getClientOriginalName());
                    return 'storage/images/products/'.$request->input('slug').'/'.$request->file('file')->getClientOriginalName();
                }
            } catch (\Throwable $err) {
               return false;
            } 
        } else if ($type == "avatar") {
            try {
                if ($request->hasFile('file')) {
                    $request->file('file')->storeAs('/public/images/users/', $request->file('file')->getClientOriginalName());
                    return 'storage/images/users/'.$request->file('file')->getClientOriginalName();
                }
            } catch (\Throwable $err) {
               return false;
            } 
        } else if ($type == "productImage") {
            try {
                if ($request->hasFile('file')) {
                    $request->file('file')->storeAs('/public/images/products/'.$request->input('slug'), $request->file('file')->getClientOriginalName());
                    return 'storage/images/products/'.$request->input('slug').'/'.$request->file('file')->getClientOriginalName();
                }
            } catch (\Throwable $err) {
               return false;
            } 
        }
        
    }
    public function storeAvatar($request) {
        
    }
    public function destroy ($request) {
        
    }
    public function update($request, $category) {
        
    }
}
?>