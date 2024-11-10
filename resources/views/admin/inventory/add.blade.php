<!DOCTYPE html>
<html lang="en-us">
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
                <h1 class="w-full text-3xl text-black pb-6">Thêm vào kho</h1>

                <div class="flex flex-wrap">
                    @include('admin/error')
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chung</div>
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="id">
                            <div class="mb-4 w-full">
                                <div class="flex flex-col md:flex-row justify-around p-4 bg-white rounded-lg shadow-lg text-lg">
                                    <div>
                                        <span>Tìm sản phẩm </span>
                                        <div class="group w-full md:w-[500px]">
                                            <input class="p-2 border border-slate-300 w-full" type="text" name="" id="product_seach" oninput="searchProduct(this)" placeholder="Tìm kiếm sản phẩm">
                                            <div
                                            id="dropdown"
                                            class="absolute z-10 w-full md:w-[500px] mt-1 bg-white border border-gray-300 rounded-md shadow-lg hidden"
                                            >
                                                <ul class="max-h-48 overflow-y-auto">
                                                    <!-- Replace with dynamic items as needed -->
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 w-full bg-white rounded-lg shadow-lg">
                                <div class="flex justify-center mb-4">
                                    <img id="thumbnail" src="" alt="" class="w-full md:w-2/3">
                                </div>
                                <input type="hidden" name="product_id" id="product_id">
                                <div class="flex flex-col md:flex-row flex-warp justify-around p-4 text-lg">
                                    <div>
                                        <span>Tên sản phẩm</span>
                                        <input class="p-2 border border-slate-300" type="text" name="product_name" id="product_name" disabled>
                                    </div>
                                    <div>
                                        <span>Phiên bản</span>
                                        <input class="p-2 border border-slate-300" type="text" name="edition" id="edition" disabled>
                                    </div>
                                    <div>
                                        <span>Màu</span>
                                        <input class="p-2 border border-slate-300" type="text" name="color" id="color" disabled>
                                    </div>
                                    <div>
                                        <span>Giá</span>
                                        <input class="p-2 border border-slate-300" type="number" name="price" id="price" disabled>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row flex-warp justify-around p-4 text-lg">
                                    <div>
                                        <span>Danh mục</span>
                                        <select name="category" id="category" onchange="changeVendorEdit()" class="p-2" disabled>
                                            <option selected hidden></option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category['slug_vi']}}">{{$category['category_name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <span>Hãng</span>
                                        <select name="vendor" id="vendor" class="p-2" disabled>
                                            <option value="" hidden>Chọn danh mục</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row justify-around p-4 text-lg">
                                    <div>
                                        <span>Tỉnh/Thành phố</span>
                                        <select name="province" id="province" class="p-2" onchange="changeAgency()">
                                            <option hidden></option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Vinh">Vinh</option>
                                            <option value="Huế">Huế</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Thành Phố Hồ Chí Minh">Thành Phố Hồ Chí Minh</option>
                                            <option value="Cần Thơ">Cần Thơ</option>
                                        </select>
                                    </div>
                                    <div>
                                        <span>Cơ sở</span>
                                        <select name="agency_id" id="agency" class="p-2">
                                            <option hidden>Chọn tỉnh/thành phố</option>
                                        </select>
                                    </div>
                                    <div>
                                        <span>Số lượng </span>
                                        <input class="w-24 p-2 border border-slate-300" type="number" name="quantity" id="" min="1" step="1">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 w-full">
                            </div>
                            <div class="mb-2 text-right">
                                <button class="bg-blue-600 p-2 text-lg text-white mr-2 rounded-lg shadow-lg">Thêm vào kho</button>
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
