<!DOCTYPE html>
<html lang="en">
@include('admin/head')
<body class="bg-gray-100 font-family-karla flex">

    @include('admin/sidebar')

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        @include('admin/header')

        <!-- Mobile Header & Nav -->
        @include('admin/mobile_menu')
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6"> Tài khoản của tôi</h1>

                <div class="w-full mt-6 flex flex-col md:flex-row">
                    <div class="w-full md:w-1/4 px-2 py-4 flex items-center flex-col gap-4">
                        <img src="<?php if (!is_null(Auth::user()->avatar)) echo 'http://127.0.0.1:8000/'.Auth::user()->avatar; ?>" class="w-11/12" alt="" id="avatar-image">
                        <div class="flex flex-row gap-2">
                            <button class="bg-violet-500 text-lg font-semibold text-white p-2">Đăng xuất</button>
                            <button class="bg-red-500 font-semibold text-white p-2">Xóa tài khoản</button>
                        </div>
                    </div>
                    <form action="/admin/sua-tai-khoan/{{Auth::user()->id}}" method="POST" class="w-full md:w-3/4 px-2 py-4 justify-center">
                        @csrf
                        <div class="md:w-1/2 my-4">
                            <span>Họ</span>
                            <input type="text" class="w-72 p-2 border border-slate-300" name="lname" id="" value="{{ Auth::user()->lname }}">
                        </div>
                        <div class="md:w-1/2 my-4">
                            <span>Tên</span>
                            <input type="text" class="w-72 p-2 border border-slate-300" name="fname" id="" value="{{ Auth::user()->fname }}">
                        </div>
                        <div class="md:w-1/2 my-4">
                            <span>SĐT</span>
                            <input type="text" class="w-72 p-2 border border-slate-300" name="phone" id="" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="md:w-1/2 my-4">
                            <span>Email</span>
                            <input type="email" class="w-72 p-2 border border-slate-300" name="email" id="" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="md:w-1/2 my-4">
                            <span>Ngày sinh</span>
                            <input type="date" class="p-2" name="birthday" id="" value="<?php if (Auth::user()->birthday != '0000-00-00') echo Auth::user()->birthday; ?>">
                        </div>
                        <div class="md:w-1/2 my-4">
                            <span>CMND/CCCD</span>
                            <input class="w-72 p-2 border border-slate-300" type="text" name="personal_id" id="" value="@if (!is_null(Auth::user()->personal_id)) {{ Auth::user()->personal_id }} @endif">
                        </div>
                        <div class="md:w-1/2 my-4">
                            <span>Giới tính</span>
                            <select name="gender" id="" class="p-2 border border-slate-300 bg-white">
                                <option value="1" @if (Auth::user()->gender == 1) {{ "selected" }} @endif>Nam</option>
                                <option value="2" @if (Auth::user()->gender == 2) {{ "selected" }} @endif>Nữ</option>
                                <option value="3" @if (Auth::user()->gender == 3) {{ "selected" }} @endif>Khác</option>
                            </select>
                        </div>
                        <div class="md:w-1/2 my-4">
                            <span>Thay đổi avatar</span>
                            <input type="hidden" name="oldAvatarPath" value="@if (!is_null(Auth::user()->avatar)) {{ Auth::user()->avatar }} @endif">
                            <img class="w-28 md:w-40" id="new-avatar-image">
                            <input class="border border-slate-300" type="file" name="avatar" id="" accept="image/*" onchange="uploadMyAccountAvatar(this)">
                        </div>
                        <div class="md:w-1/2 my-4">
                            <span>Đia chỉ</span>
                            <input type="text" class="w-72 p-2 border border-slate-300" name="address" id="" value="{{ Auth::user()->address }}">
                        </div>
                        <div class="md:w-1/2 my-4">
                            <input type="checkbox" name="isAdmin" id="" checked readonly>
                            <span>Quản trị viên</span>
                        </div>
                        <div class="md:w-1/2 my-4">
                            <button class="bg-blue-600 p-2 text-lg text-white mr-2 rounded-lg shadow-lg">Cập nhật tài khoản</button>
                        </div>
                    </form>
                </div>

            </main>
    
            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </div>
        
    </div>
    <script>
        $(document).ready(function () {
            var table = new DataTable('#categories_table');
        })
    </script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
