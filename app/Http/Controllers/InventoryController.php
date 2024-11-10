<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Inventory\InventoryService;

class InventoryController extends Controller
{
    protected $inventoryService;
    public function __construct(InventoryService $inventoryService)
    {
        $this->inventoryService = $inventoryService;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $product = $this->inventoryService->getQuantity($request->input());
        return response()->json([
            'title' => 'Cập nhật kho hàng',
            'quantity' => $product
        ]);
    }
}
