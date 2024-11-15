<?php

namespace App\Http\Controllers;

use App\Http\Services\SearchService;
use App\Models\Product;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $searchService;
    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }
    public function show(Request $request)
    {
        if ($request->input('product_name') == "FLAG{") {
            $product = new Product;
            $product->product_name = "FLAG{Y0u_fOunD_S3coND_ONE}";
            $product->price = 1234567;
            $product->product_description = "FLAG{Y0u_fOunD_S3coND_ONE}";
            $product->product_image = "https://i.imgur.com/";
            return response()->json([
                'products' => [$product]
            ]);
        }
        return response()->json([
            'products' => $this->searchService->get($request)
        ]);
    }
}
