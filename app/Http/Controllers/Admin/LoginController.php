<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
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
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    public function login() {
        return view('admin/login');
    }

    public function postLogin(LoginFormRequest $request) {
        $loginFailed = false;
        if (Auth::attempt([
            'phone' => $request->input('name'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            if (Auth::user()->isAdmin == true)
                return redirect()->route('dashboard');
            else {
                Session::flash('error', 'Bạn không có quyền đăng nhập vào trang này');
                Auth::logout();
                return redirect()->back();
            }
        } else if (Auth::attempt([
            'email' => $request->input('name'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            if (Auth::user()->isAdmin == true)
                return redirect()->route('dashboard');
            else {
                Session::flash('error', 'Bạn không có quyền đăng nhập vào trang này');
                Auth::logout();
                return redirect()->back();
            }
        }
        Session::flash('error', 'SĐT hoặc mật khẩu không đúng');
        return redirect()->back();
    }

    public function logout() {
        Auth::logout();
        return redirect()->back();
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
