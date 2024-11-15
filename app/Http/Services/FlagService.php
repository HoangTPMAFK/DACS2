<?php
namespace App\Http\Services;

use App\Models\Flag;
use Illuminate\Http\Request;

class FlagService {
    public function create($request) {
        
    }
    public function get(Request $request) {
        return Flag::where('flag', $request->input('flag'))->first();
    }
}
?>