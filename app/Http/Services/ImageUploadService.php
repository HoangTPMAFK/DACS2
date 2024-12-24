<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;

class ImageUploadService {
    public function create($request) {
        
    }
    public function get() {
        
        
    }
    public function store(Request $request, $type) {
        $validator = Validator::make($request->all(), [
            'file' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
        ]);
        if ($validator->fails()) {
            return false;
        }
        $fileName = $request->file('file')->getClientOriginalName();
        if (preg_match('/^[a-zA-Z0-9_\-\.]+$/', $fileName)) {
            $sanitizedFileName = $fileName;
        } else {
            return false;
        }
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