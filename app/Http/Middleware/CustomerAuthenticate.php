<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CustomerAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (!Auth::user()->isAdmin) {
                return $next($request);
            } else {
                Session::flash('error', 'Tài khoản bạn đăng nhập không phải là khách hàng');
            }
        } else {
            Session::flash('error', 'Bạn chưa đăng nhập');
        }
        return redirect()->route('login');
    }
}
