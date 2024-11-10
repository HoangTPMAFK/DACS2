<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;
use App\Http\Requests\AgencyFormRequest;
use App\Http\Services\Agency\AgencyService;

class AgencyController extends Controller
{

    protected $agencyService;
    public function __construct(AgencyService $agencyService)
    {
        $this->agencyService = $agencyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/agency/list', [
            'title' => 'Danh sách chi nhánh',
            'agencies' => $this->agencyService->get()
        ]);
    }

    public function show(Agency $agency = NULL, Request $request) 
    {
        if ($agency['id'] == NULL) {
            $agencies = $this->agencyService->get('province', $request->input('province'));
            $html = '';
            if ($request->input('agency_id') != NULL) {
                $html = '';
                foreach($agencies as $agency) {
                    $html .= '<option value="'.$agency['id'];
                    if ($agency['id'] == $request->input('agency_id')) {
                        $html .= '" selected>'.$agency['agency_name'].'</option>';
                    } else {
                        $html .= '">'.$agency['agency_name'].'</option>';
                    }
                }
                return response()->json([
                    'html' => $html
                ]);
            } else {
                return response()->json([
                    'agencies' => $agencies
                ]);
            }
        } else if ($agency['id'] != "") {
            return [1, 2, 3];
        }
    }
}
