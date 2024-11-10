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
                <h1 class="w-full text-3xl text-black pb-6">Thêm người dùng</h1>
                @include('admin/error')
                <form action="/admin/them-tai-khoan" method="post" class="flex flex-wrap">
                    @csrf
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chung</div>
                        <div class="flex flex-col flex-wrap md:flex-row justify-around p-4 bg-white rounded-lg shadow-lg text-lg">
                            <div class="w-1/2 my-2">
                                <span>Họ</span>
                                <input class="p-2 w-72 border border-slate-300" type="text" name="lname" id="">
                            </div>
                            <div class="w-1/2 my-2">
                                <span>Tên</span>
                                <input class="p-2 w-72 border border-slate-300" type="text" name="fname" id="">
                            </div>
                            <div class="w-1/2 my-2">
                                <span>SĐT</span>
                                <input class="p-2 w-72 border border-slate-300" type="tel" name="phone" id="" minlength="10" maxlength="10">
                            </div>
                            <div class="w-1/2 my-2">
                                <span>Email</span>
                                <input class="p-2 w-72 border border-slate-300" type="email" name="email" id="">
                            </div>
                            <div class="w-1/2 my-2">
                                <span>Mật khẩu</span>
                                <input class="p-2 w-72 border border-slate-300" type="text" name="password" id="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chi tiết</div>
                        <div class="bg-white rounded-b-lg shadow-lg border-b border-slate-300">
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row flex-wrap px-2">
                                    <div class="w-1/2 py-2">
                                        <div>Giới tính</div>
                                        <select name="gender" id="" class="p-2">
                                            <option value="1">Nam</option>
                                            <option value="2">Nữ</option>
                                            <option value="3">Khác</option>
                                        </select>
                                    </div>
                                    <div class="w-1/2 py-2">
                                        <div>CCCD/CMND</div>
                                        <input class="w-72 border border-slate-300" type="text" name="personal_id" id="">
                                    </div>
                                    <div class="w-1/2 py-2">
                                        <div>Ngày sinh</div>
                                        <input class="w-72 border border-slate-300" type="date" name="birthday" id="" required>
                                    </div>
                                    <div class="w-1/2 py-2">
                                        <div>Avatar</div>
                                        <img id="avatar-image" class="w-28 md:w-40">
                                        <input class="border border-slate-300" type="file" name="avatar" id="avatar-upload" accept="image/*" onchange="uploadAvatar(this)">
                                    </div>
                                    <div class="w-1/2 py-2">
                                        <div>Địa chỉ</div>
                                        <input class="w-72 p-2 border border-slate-300" type="text" name="address" id="">
                                    </div>
                                    <div class="w-1/2 py-2">
                                        <input type="checkbox" name="isAdmin" id="">
                                        <span>Quản trị viên</span>                                        
                                    </div>
                                </div>
                                <div class="mb-2 text-right">
                                    <button class="bg-blue-600 p-2 text-lg text-white mr-2 rounded-lg shadow-lg">Thêm tài khoản</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
    
            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
