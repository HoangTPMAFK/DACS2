<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Agency;
use App\Http\Requests\AgencyFormRequest;
use App\Http\Services\Agency\AgencyService;
use App\Http\Controllers\Controller;

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
            'title' => 'Quản lý chi nhánh',
            'agencies' => $this->agencyService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/agency/add', [
            'title' => 'Thêm chi nhánh',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgencyFormRequest $request)
    {
        $this->agencyService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agency $agency)
    {
        return view('admin/agency/edit', [
            'title' => 'Sửa chi nhánh',
            'agency' => $agency->attributesToArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Agency $agency, AgencyFormRequest $request)
    {
        $this->agencyService->update($request, $agency);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $agency = $this->agencyService->destroy($request);
        if ($agency) {
            return response()->json([
                'error' => false,
                'msg' => 'Xóa chi nhánh thành công'
            ]);
        } else {
            return response()->json([
                'error' => true
            ]);
        }
    }
}
