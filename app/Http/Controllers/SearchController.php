<?php

namespace App\Http\Controllers;

use App\Http\Services\SearchService;

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
        return response()->json([
            'products' => $this->searchService->get($request)
        ]);
    }
}
