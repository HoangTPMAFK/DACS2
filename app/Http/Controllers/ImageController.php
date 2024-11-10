<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function getImage($image = NULL) {
        $path = "private/images/{$image}";
        if (Storage::exists($path)) {
            // return Storage::download($path);
            $file = Storage::get($path);
            $type = Storage::mimeType($path);
            return response($file, 200)->header("Content-Type", $type);
        }
        abort(404);
        // return "<h2>Hello World!</h2>";
    }
}
