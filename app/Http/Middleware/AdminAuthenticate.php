<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin) {
                return $next($request);
            } else {
                Session::flash('error', 'Bạn không có quyền đăng nhâp vào trang này');
            }
        } else {
            Session::flash('error', 'Bạn chưa đăng nhập');
        }
        return redirect()->route('admin.login');
    }
}
