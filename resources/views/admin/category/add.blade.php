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
                <h1 class="w-full text-3xl text-black pb-6">Thêm danh mục</h1>

                <form action="/admin/them-danh-muc" method="post" class="flex flex-wrap">
                    @csrf
                    @include('admin/error')
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chung</div>
                        <div class="flex flex-col md:flex-row justify-around p-4 bg-white rounded-lg shadow-lg text-lg">
                            <div>
                                <span>Tên danh mục</span>
                                <input class="p-2 border border-slate-300" type="text" name="category_name" id="">
                            </div>
                            <div>
                                <span>slug</span>
                                <input class="p-2 border border-slate-300" type="text" name="slug" id="">
                            </div>
                            <div>
                                <span>slug_vi</span>
                                <input class="p-2 border border-slate-300" type="text" name="slug_vi" id="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chi tiết</div>
                        <div class="bg-white rounded-b-lg shadow-lg border-b border-slate-300">
                            <table id="table" class="w-full text-center">
                                <tr class="mb-2">
                                    <td>Label</td>
                                    <td>Name</td>
                                    <td>Group name</td>
                                    <td>Text</td>
                                    <td>Number</td>
                                    <td>Short description</td>
                                    <td>Long description</td>
                                    <td>Unit</td>
                                    <td>Quantity</td>
                                </tr>
                            </table>
                            <div class="mb-2">
                                
                            </div>
                            <div class="mb-2 mx-2 flex justify-between">
                                <button id="add-btn" type="button" class="bg-blue-600 p-2 text-lg text-white rounded-lg shadow-lg">Thêm trường</button>
                                <button type="submit" class="bg-blue-600 p-2 text-lg text-white rounded-lg shadow-lg">Thêm danh mục</button>
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
<script>
    $('document').ready(function() {
        let count = 0;
        $('#add-btn').on('click', function() {
            $("#table").append(
`<tr>
    <td class="mb-2"><input class="p-2 mb-2 border border-slate-300" type="text" name="label[]" id=""></td>
    <td class="mb-2"><input class="p-2 border border-slate-300" type="text" name="name[]" id=""></td>
    <td><input type="radio" name="field_type_${count}" id="" value="0"></td>
    <td><input type="radio" name="field_type_${count}" id="" value="1"></td>
    <td><input type="radio" name="field_type_${count}" id="" value="2"></td>
    <td><input type="radio" name="field_type_${count}" id="" value="3"></td>
    <td><input type="radio" name="field_type_${count}" id="" value="4"></td>
    <td><input class="p-2 border border-slate-300" type="text" name="unit[]"></td>
    <td><input class="p-2 border border-slate-300" type="number" name="quantity[]"></td>
</tr>`
            );
            count++;

        })
    });
</script>