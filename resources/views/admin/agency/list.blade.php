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
                <h1 class="text-3xl text-black pb-6">Quản lý chi nhánh</h1>

                <div class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Danh sách chi nhánh
                    </p>
                    <p class="text-lg mb-4">
                        <a href="/admin/them-chi-nhanh" class="text-white bg-blue-600 py-2 px-6">Thêm cơ sở</a>
                    </p>
                    <div class="bg-white overflow-auto">
                        <table id="agencies_table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Tên cơ sở</td>
                                    <td>Tỉnh/TP</td>
                                    <td>Địa chỉ</td>
                                    <td>Hành động</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agencies as $agency)
                                <tr>
                                    <td>{{$agency['id']}}</td>
                                    <td>{{$agency['agency_name']}}</td>
                                    <td>{{$agency['province']}}</td>
                                    <td>{{$agency['address']}}</td>
                                    <td class="flex gap-2">
                                        <a href="/admin/xem-chi-nhanh/{{$agency['id']}}" class="bg-violet-500 py-2 px-6 text-white"><i class="fa-regular fa-eye"></i></a>
                                        <a href="/admin/sua-chi-nhanh/{{$agency['id']}}" class="bg-green-500 py-2 px-6 text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="javascript:removeRow({{$agency['id']}}, '{{url('/admin/xoa-chi-nhanh')}}')" class="bg-red-500 py-2 px-6 text-white"><i class="fa-solid fa-delete-left"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <p class="pt-3 text-gray-600">
                        Source: <a class="underline" href="https://tailwindcomponents.com/component/striped-table">https://tailwindcomponents.com/component/striped-table</a>
                    </p>
                </div>
            </main>
    
            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </div>
        
    </div>
    <script>
        $(document).ready(function () {
            var table = new DataTable('#agencies_table');
        })
    </script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
