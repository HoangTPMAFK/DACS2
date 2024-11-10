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
                <h1 class="w-full text-3xl text-black pb-6">Sửa hãng: {{ $vendor['vendor_name'] }}</h1>

                <div class="flex flex-wrap">
                    @include('admin/error')
                    <form action="/admin/sua-hang/{{$vendor['id']}}" method="POST" class="w-full mb-4">
                        @csrf
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chung</div>
                        <div class="flex flex-col md:flex-row justify-around p-4 bg-white rounded-lg shadow-lg text-lg mb-4">
                            <div>
                                <span>Tên hãng </span>
                                <input class="p-2 border border-slate-300 w-full md:w-[400px]" type="text" name="vendor_name" id="vendor_name" value="{{$vendor["vendor_name"]}}">
                            </div>
                        </div>
                        <div class="w-full mb-4">
                            <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chi tiết</div>
                            <div class="bg-white rounded-b-lg shadow-lg border-b border-slate-300">
                                <div class="mb-2">
                                    <div class="border-b mx-2 px-2 border-slate-300 py-2 text-lg font-semibold">Thuộc danh mục</div>
                                    <div class="flex flex-col md:flex-row flex-wrap px-2">
                                        <?php $vendor_categories = json_decode($vendor['categories'], true) ?>
                                        @foreach ($categories as $category)
                                        <div class="w-full flex flex-row justify-between md:px-[150px] text-lg py-2">
                                            <div>{{ $category['category_name'] }}</div>
                                            <input type="checkbox" name="{{ $category['slug_vi'] }}" id="" <?php if (isset($vendor_categories[$category['slug_vi']])) echo "checked" ?>>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                <div class="mb-2 text-right">
                                    <button type="submit" class="bg-blue-600 p-2 text-lg text-white mr-2 rounded-lg shadow-lg">Sửa hãng</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
