<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Voucher\VoucherService;
use App\Http\Services\FlagService;
use App\Models\Voucher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CTF extends Controller
{
    protected $categoryService;
    protected $flagService;
    protected $voucherService;
    public function __construct(CategoryService $categoryService, FlagService $flagService, VoucherService $voucherService)
    {
        $this->categoryService = $categoryService;
        $this->flagService = $flagService;
        $this->voucherService = $voucherService;
    }
    public function ctf1(Request $request)
    {
        if (!isset($request->session()->get('ctf_players')[Auth::user()->id])) {
            $request->session()->put('ctf_players.' . Auth::user()->id, 1);
        }
        return view('ctf', [
            'title' => 'Trò chơi tìm cờ (CTF)',
            'description' => 'Hãy tìm cờ ở trong trang chủ của website',
            'n' => 1,
            'vendors' => $this->categoryService->getVendors()
        ]);
    }
    public function postctf1(Request $request) {
        if (!is_null($this->flagService->get($request))) {
            $ctf_response = $this->flagService->get($request)->attributesToArray();
            if ($ctf_response['id'] == 1) {
                if ($request->session()->get('ctf_players')[Auth::user()->id] < 2)
                $request->session()->put('ctf_players.' . Auth::user()->id, 2);
                return redirect()->route('ctf3');
            }
        }
        Session::flash('error', 'Cờ bị sai');
        return redirect()->back();
    }
    public function ctf2(Request $request)
    {
        if ($request->session()->get('ctf_players')[Auth::user()->id] < 2) {
            return redirect()->route('ctf1');
        }

        // Render CTF level 2 view
        return view('ctf', [
            'title' => 'Trò chơi tìm cờ (CTF)',
            'description' => 'Bạn đã thử tìm tôi chưa?',
            'n' => 2,
            'vendors' => $this->categoryService->getVendors(),
        ]);
    }

    public function postctf2(Request $request)
    {
        if (!is_null($this->flagService->get($request))) {
            $ctf_response = $this->flagService->get($request)->attributesToArray();
            if ($ctf_response['id'] == 2) {
                if ($request->session()->get('ctf_players')[Auth::user()->id] < 3)
                $request->session()->put('ctf_players.' . Auth::user()->id, 3);
                return redirect()->route('ctf3');
            }
        }
        Session::flash('error', 'Cờ bị sai');
        return redirect()->back();
    }
    public function ctf3(Request $request)
    {
        if ($request->session()->get('ctf_players')[Auth::user()->id] < 3) {
            return redirect()->route('ctf2');
        }
        return view('ctf', [
            'title' => 'Trò chơi tìm cờ (CTF)',
            'description' => 'Bạn vẫn có thể tìm thấy tôi nhưng bằng một cách khác TXT',
            'n' => 3,
            'vendors' => $this->categoryService->getVendors()
        ]);
    }
    public function postctf3(Request $request) {
        if (!is_null($this->flagService->get($request))) {
            if ($this->flagService->get($request)->id == 3) {
                if ($request->session()->get('ctf_players')[Auth::user()->id] < 4)
                $request->session()->put('ctf_players.' . Auth::user()->id, 4);
                return redirect()->route('ctf4');
            }
        }
        Session::flash('error', 'Cờ bị sai');
        return redirect()->back();
    }
    public function ctf4(Request $request)
    {
        if ($request->session()->get('ctf_players')[Auth::user()->id] < 4) {
            return $this->ctf3($request);
        }
        return view('ctf', [
            'title' => 'Trò chơi tìm cờ (CTF)',
            'n' => 4,
            'description' => 'Thumbnail sản phẩm Realme C33 có gì đặc biệt?',
            'vendors' => $this->categoryService->getVendors()
        ]);
    }
    public function postctf4(Request $request) {
        if (!is_null($this->flagService->get($request))) {
            if ($this->flagService->get($request)->id == 4) {
                if ($request->session()->get('ctf_players')[Auth::user()->id] < 5)
                $request->session()->put('ctf_players.' . Auth::user()->id, 5);
                return redirect()->route('ctf5');
            }
        }
        Session::flash('error', 'Cờ bị sai');
        return redirect()->back();
    }
    public function ctf5(Request $request)
    {
        if ($request->session()->get('ctf_players')[Auth::user()->id] < 5) {
            return redirect()->route('ctf4');
        }
        return view('ctf', [
            'title' => 'Trò chơi tìm cờ (CTF)',
            'description' => 'Hãy tìm kiếm trong phần bình luận của sản phẩm Realme C33',
            'n' => 5,
            'vendors' => $this->categoryService->getVendors()
        ]);
    }
    public function postctf5(Request $request) {
        if (!is_null($this->flagService->get($request))) {
            if ($this->flagService->get($request)->id == 5) {
                $request->session()->put('ctf_players.' . Auth::user()->id, 6);
                return redirect()->route('ctf.completed');
            }
        }
        Session::flash('error', 'Cờ bị sai');
        return redirect()->back();
    }
    public function completed(Request $request) {
        if ($request->session()->get('ctf_players')[Auth::user()->id] < 6) {
            return redirect()->back();
        }
        return view('ctf_completed', [
            'title' => 'Trò chơi tìm cờ (CTF)',
            'vendors' => $this->categoryService->getVendors(),
            'products' => $this->voucherService->getProducts(1, 'ctfgame_2024'),
        ]);
    }
}
