<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\User\UserService;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/user/list', [
            'title' => 'Quản lý tài khoản',
            'users' => $this->userService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/user/add', [
            'title' => 'Thêm tài khoản'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserFormRequest $request)
    {
        
        $this->validate($request, [
            'password' => 'required|min:8',
            'retype_password' => 'required|same:password',
        ], [
            'password.required' => 'Không được để trống mật khẩu',
            'retype_password.required' => 'Phải nhập lại mật khẩu',
            'retype_password.same' => 'Phải nhập lại mật khẩu',

        ]);
        $this->userService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin/user/show', [
            'title' => 'Xem tài khoản',
            'user' => $user->attributesToArray()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin/user/edit', [
            'title' => 'Sửa tài khoản',
            'user' => $user->attributesToArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserFormRequest $request, User $user)
    {
        $this->userService->update($request, $user);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->userService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'msg' => 'Xóa hàng thành công'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
