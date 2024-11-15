<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\VendorController as AdminVendorController;
use App\Http\Controllers\Admin\AgencyController as AdminAgencyController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\InventoryController as AdminInventoryController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\VoucherController as AdminVoucherController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminAuthenticate;
use App\Http\Middleware\CustomerAuthenticate;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CTF;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/danh-muc/{category}', [HomeController::class, 'category']);
Route::get('/danh-muc/{category}/{vendor}', [HomeController::class, 'category']);
Route::get('/san-pham/{product}', [HomeController::class, 'product']);

Route::get('/dang-nhap', [LoginController::class, 'login'])->name('login');
Route::post('/dang-nhap', [LoginController::class, 'postLogin']);
Route::get('/dang-ky', [LoginController::class, 'signup']);
Route::post('/dang-ky', [LoginController::class, 'postSignup']);
Route::get('/ma-giam-gia', [HomeController::class, 'voucherlist']);
Route::prefix('/')->middleware(CustomerAuthenticate::class)->group(function () {
    Route::post('/gui-binh-luan/{product}', [CommentController::class, 'store']);
    Route::post('/cap-nhat-tai-khoan/{user}', [UserController::class, 'update']);
    Route::post('/them-vao-gio', [CartController::class, 'store']);
    Route::get('/cap-nhat-gio-hang/{customer_id}', [CartController::class, 'update']);
    Route::get('/tai-khoan-cua-toi', [HomeController::class, 'myaccount']);
    Route::get('/thanh-toan', [OrderController::class, 'create']);
    Route::post('/thanh-toan/{paymentType}', [OrderController::class, 'store']);
    Route::get('/thanh-toan/vnpay/return', [OrderController::class, 'vnpay_return']);
    Route::get('/thanh-toan/momo/return', [OrderController::class, 'momo_atm_return']);
    Route::post('/upload/services/{type}', [ImageUploadController::class, 'store']);
    Route::get('/gio-hang', [CartController::class, 'index']);
    Route::get('/quan-ly-don-hang', [OrderController::class, 'orderlist'])->name('orderlist');
    Route::get('/quan-ly-don-hang/{order_code}', [OrderController::class, 'order_detail']);
    Route::post('/cap-nhat-don-hang/{order_code}', [OrderController::class, 'update']);
    Route::prefix('/')->group(function () {
        Route::get('/ctf1', [CTF::class, 'ctf1'])->name('ctf1');
        Route::post('/ctf1', [CTF::class, 'postctf1']);
        Route::get('/ctf2', [CTF::class, 'ctf2'])->name('ctf2');
        Route::post('/ctf2', [CTF::class, 'postctf2']);
        Route::get('/ctf3', [CTF::class, 'ctf3'])->name('ctf3');
        Route::post('/ctf3', [CTF::class, 'postctf3']);
        Route::get('/ctf4', [CTF::class, 'ctf4'])->name('ctf4');
        Route::post('/ctf4', [CTF::class, 'postctf4']);
        Route::get('/ctf5', [CTF::class, 'ctf5'])->name('ctf5');
        Route::post('/ctf5', [CTF::class, 'postctf5']);
        Route::get('/ctf/completed', [CTF::class, 'completed'])->name('ctf.completed');
    });
});
Route::post('/gio-hang/kiem-tra-ma-giam-gia', [CartController::class, 'check_voucher']);
Route::get('/admin/dang-nhap', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/dang-nhap', [AdminLoginController::class, 'postLogin']);
Route::prefix('admin')->middleware(AdminAuthenticate::class)->group(function () {
    Route::get('dashboard', function () {
        return view('admin/dashboard', [
            'title' => 'Bảng điều khiển'
        ]);
    })->name('dashboard');

    Route::get('quan-ly-san-pham', [AdminProductController::class, 'index']);
    Route::get('them-san-pham', [AdminProductController::class, 'create']);
    Route::post('them-san-pham', [AdminProductController::class, 'store']);
    Route::delete('xoa-san-pham', [AdminProductController::class, 'destroy']);
    Route::get('sua-san-pham/{product}', [AdminProductController::class, 'edit']);
    Route::post('sua-san-pham/{product}', [AdminProductController::class, 'update']);
    
    Route::get('quan-ly-danh-muc', [AdminCategoryController::class, 'index']);
    Route::get('them-danh-muc', [AdminCategoryController::class, 'create']);
    Route::post('them-danh-muc', [AdminCategoryController::class, 'store']);
    Route::delete('xoa-danh-muc', [AdminCategoryController::class, 'destroy']);
    Route::get('sua-danh-muc/{category}', [AdminCategoryController::class, 'edit']);
    Route::post('sua-danh-muc/{category}', [AdminCategoryController::class, 'update']);

    Route::get('quan-ly-hang', [AdminVendorController::class, 'index']);
    Route::get('them-hang', [AdminVendorController::class, 'create']);
    Route::post('them-hang', [AdminVendorController::class, 'store']);
    Route::delete('xoa-hang', [AdminVendorController::class, 'destroy']);
    Route::get('sua-hang/{vendor}', [AdminVendorController::class, 'edit']);
    Route::post('sua-hang/{vendor}', [AdminVendorController::class, 'update']);
    Route::get('xem-hang/{vendor}', [AdminVendorController::class, 'show']);
    Route::post('xem-hang', [AdminVendorController::class, 'show']);

    Route::get('quan-ly-chi-nhanh', [AdminAgencyController::class, 'index']);
    Route::get('them-chi-nhanh', [AdminAgencyController::class, 'create']);
    Route::post('them-chi-nhanh', [AdminAgencyController::class, 'store']);
    Route::delete('xoa-chi-nhanh', [AdminAgencyController::class, 'destroy']);
    Route::get('sua-chi-nhanh/{agency}', [AdminAgencyController::class, 'edit']);
    Route::post('sua-chi-nhanh/{agency}', [AdminAgencyController::class, 'update']);
    Route::get('xem-chi-nhanh/{agency}', [AdminAgencyController::class, 'show']);
    Route::post('xem-chi-nhanh', [AdminAgencyController::class, 'show']);

    Route::get('quan-ly-kho-hang', [AdminInventoryController::class, 'index']);
    Route::get('them-vao-kho', [AdminInventoryController::class, 'create']);
    Route::post('them-vao-kho', [AdminInventoryController::class, 'store']);
    Route::delete('xoa-khoi-kho', [AdminInventoryController::class, 'destroy']);
    Route::get('cap-nhat-kho/{product}', [AdminInventoryController::class, 'edit']);
    Route::post('cap-nhat-kho/{product}', [AdminInventoryController::class, 'update']);

    Route::get('quan-ly-don-hang', [AdminOrderController::class, 'index']);
    Route::delete('xoa-don-hang', [AdminOrderController::class, 'destroy']);
    Route::get('sua-don-hang/{order}', [AdminOrderController::class, 'edit']);
    Route::post('sua-don-hang/{order}', [AdminOrderController::class, 'update']);

    Route::get('quan-ly-tai-khoan', [AdminUserController::class, 'index']);
    Route::get('them-tai-khoan', [AdminUserController::class, 'create']);
    Route::post('them-tai-khoan', [AdminUserController::class, 'store']);
    Route::delete('xoa-tai-khoan', [AdminUserController::class, 'destroy']);
    Route::get('sua-tai-khoan/{user}', [AdminUserController::class, 'edit']);
    Route::post('sua-tai-khoan/{user}', [AdminUserController::class, 'update']);

    Route::get('quan-ly-ma-giam-gia', [AdminVoucherController::class, 'index']);
    Route::get('them-ma-giam-gia', [AdminVoucherController::class, 'create']);
    Route::post('them-ma-giam-gia', [AdminVoucherController::class, 'store']);
    Route::delete('xoa-ma-giam-gia', [AdminVoucherController::class, 'destroy']);
    Route::get('sua-ma-giam-gia/{voucher}', [AdminVoucherController::class, 'edit']);
    Route::post('sua-ma-giam-gia/{voucher}', [AdminVoucherController::class, 'update']);

    Route::post('/upload/services/{type}', [ImageUploadController::class, 'store']);

    Route::get('/my-account', function () {
        return view('admin/my_account', [
            'title' => 'Tài khoản của tôi'
        ]);
    });
    Route::get('/logout', [AdminLoginController::class, 'logout']);
});
Route::post('/xem-chi-nhanh', [AgencyController::class, 'show']);
Route::get('/xem-so-luong', [InventoryController::class, 'show']);
Route::get('/private/images/{image}', [ImageController::class, 'getImage']);
Route::post('/tim-kiem-san-pham', [SearchController::class, 'show']);
