<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ImageUploadService;

class ImageUploadController extends Controller
{
    protected $imgUpload;
    public function __construct(ImageUploadService $imgUpload)
    {
        $this->imgUpload = $imgUpload;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $type)
    {
        //
        $url = $this->imgUpload->store($request, $type);
        if ($url)
            return response()->json([
                'error' => false,
                'msg' => $url
                
            ]);
        else return response()->json([
            'error' => true
        ]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
