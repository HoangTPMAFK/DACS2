<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-family-karla flex">

    @include('admin/sidebar')

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        @include('admin/header')

        <!-- Mobile Header & Nav -->
        @include('admin/mobile_menu')
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Sửa chi nhánh: {{ $agency['agency_name'] }}</h1>

                <div class="flex flex-wrap">
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chi nhánh</div>
                        @include('admin/error')
                        <form action="/admin/sua-chi-nhanh/{{ $agency['id'] }}" method="post" class="flex flex-col md:flex-row justify-around p-4 bg-white rounded-lg shadow-lg text-lg">
                            @csrf
                            <div>
                                <span>Tỉnh/Thành phố</span>
                                <select name="province" id="" class="p-2" disabled>
                                    <option value="Hà Nội" <?php if($agency['province'] === "Hà Nội") echo "selected"; ?>>Hà Nội</option>
                                    <option value="Hải Phòng" <?php if($agency['province'] === "Hải Phòng") echo "selected"; ?>>Hải Phòng</option>
                                    <option value="Vinh" <?php if($agency['province'] === "Vinh") echo "selected"; ?>>Vinh</option>
                                    <option value="Huế" <?php if($agency['province'] === "Huế") echo "selected"; ?>>Huế</option>
                                    <option value="Đà Nẵng" <?php if($agency['province'] === "Đà Nẵng") echo "selected"; ?>>Đà Nẵng</option>
                                    <option value="Thành Phố Hồ Chí Minh" <?php if($agency === "Thành Phố Hồ Chí Minh") echo "selected"; ?>>Thành Phố Hồ Chí Minh</option>
                                    <option value="Cần Thơ" <?php if($agency === "Cần Thơ") echo "selected"; ?>>Cần Thơ</option>
                                </select>
                            </div>
                            <div>
                                <span>Tên cơ sở </span>
                                <input class="p-2 border border-slate-300" type="text" name="agency_name" id="" value="{{$agency['agency_name']}}" readonly>
                            </div>
                            <div>
                                <span>Địa chỉ </span>
                                <input class="p-2 border border-slate-300" type="text" name="address" id="" value="{{$agency['address']}}" readonly>
                            </div>
                            <div class="mb-2 text-right">
                                <a href="/admin/sua-chi-nhanh/{{$agency['id']}}" class="bg-blue-600 p-2 text-lg text-white mr-2 rounded-lg shadow-lg">Sửa chi nhánh</a>
                            </div>
                        </form>
                    </div>
                </div>
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
