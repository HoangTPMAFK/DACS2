<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Services\User\UserService;
use App\Http\Services\Category\CategoryService;
use App\Mail\VerifyEmail;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    protected $userService;
    protected $categoryService;
    public function __construct(UserService $userService, CategoryService $categoryService)
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
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
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    public function adminLogin() {
        return view('admin/login');
    }
    public function login() {
        return view('login', [
            'title' => 'Đăng nhâp',
            'vendors' => $this->categoryService->getVendors(),
        ]);
    }

    public function postLogin(Request $request) {
        if (Auth::attempt([
            'phone' => $request->input('name'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            
            return redirect()->route('home');
        } else if (Auth::attempt([
            'email' => $request->input('name'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            Mail::to($request->input('name'))->send(new VerifyMail(Auth::user()));
            return redirect()->route('home');
        }
        Session::flash('error', 'SĐT hoặc mật khẩu không đúng');
        return redirect()->back();
    }
    public function signup() {
        return view('signup', [
            'title' => 'Đăng ký tài khoản',
            'vendors' => $this->categoryService->getVendors(),
        ]);
    }
    public function postSignup(Request $request) {
        $this->validate($request, [
            'password' => 'required'
        ], [
            'password.required' => 'Không được để trống mật khẩu'
        ]);
        $this->userService->create($request);
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
