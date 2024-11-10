<?php
namespace App\Http\Services\Agency;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\Agency;

class AgencyService {
    public function create($request) {
        try {
            Agency::create([
                'agency_name' => (string) $request->input('agency_name'),
                'province' => (string) $request->input('province'),
                'address' => (string) $request->input('address')
            ]);
            Session::flash('success', 'Thêm chi nhánh thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return true;
    }
    public function get($column = NULL, $value = NULL) {
        if ($column == NULL && $value == NULL)
            return Agency::get();
        else if (($column != NULL && $value != NULL)) {
            return Agency::where($column, $value)->get();
        }
    }
    public function update($request, $product) {
        try {
            $product->fill($request->input());
            $product->save();
            Session::flash('success', 'Cập nhật chi nhánh thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        
    }
    public function destroy($request) {
        $id = $request->input('id');
        $agency = Agency::where('id', $id)->first();
        if ($agency) {
            return Agency::where('id', $id)->delete();
        }
        return false;
    }
}
?>