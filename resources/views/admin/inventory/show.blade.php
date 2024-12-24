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
                <h1 class="w-full text-3xl text-black pb-6">Câp nhật kho: {{ $product_info['product_name'] }}</h1>

                <div class="flex flex-wrap">
                    @include('admin/error')
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chung</div>
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$product['id']}}">
                            <div class="mb-4 w-full bg-white rounded-lg shadow-lg">
                                <div class="flex justify-center mb-4">
                                    <img id="thumbnail" src="http://127.0.0.1:8000/{{$product_info['thumbnail']}}" alt="" class="w-full md:w-2/3">
                                </div>
                                <input type="hidden" name="product_id" id="product_id">
                                <div class="flex flex-col md:flex-row flex-warp justify-around p-4 text-lg">
                                    <div>
                                        <span>Tên sản phẩm</span>
                                        <input class="p-2 border border-slate-300" type="text" name="product_name" id="product_name" disabled value="{{$product_info['product_name']}}">
                                    </div>
                                    <div>
                                        <span>Phiên bản</span>
                                        <input class="p-2 border border-slate-300" type="text" name="edition" id="edition" disabled value="{{$product_info['edition']}}">
                                    </div>
                                    <div>
                                        <span>Màu</span>
                                        <input class="p-2 border border-slate-300" type="text" name="color" id="color" disabled value="{{$product_info['color']}}">
                                    </div>
                                    <div>
                                        <span>Giá</span>
                                        <input class="p-2 border border-slate-300" type="number" name="price" id="price" disabled value="{{$product_info['price']}}">
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row flex-warp justify-around p-4 text-lg">
                                    <div>
                                        <span>Danh mục</span>
                                        <select name="category" id="category" onchange="changeVendorEdit()" class="p-2" disabled>
                                            <option selected hidden></option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category['slug_vi']}}" <?php if($product_info['category']==$category['slug_vi']) echo "selected" ?>>{{$category['category_name']}}</option>
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
                                        <select name="province" id="province" class="p-2" disabled>
                                            <option hidden></option>
                                            <option value="Hà Nội" <?php if($agency['province'] === "Hà Nội") echo "selected"; ?>>Hà Nội</option>
                                            <option value="Hải Phòng" <?php if($agency['province'] === "Hải Phòng") echo "selected"; ?>>Hải Phòng</option>
                                            <option value="Vinh" <?php if($agency['province'] === "Vinh") echo "selected"; ?>>Vinh</option>
                                            <option value="Huế" <?php if($agency['province'] === "Huế") echo "selected"; ?>>Huế</option>
                                            <option value="Đà Nẵng" <?php if($agency['province'] === "Đà Nẵng") echo "selected"; ?>>Đà Nẵng</option>
                                            <option value="Thành Phố Hồ Chí Minh" <?php if($agency['province'] === "Thành Phố Hồ Chí Minh") echo "selected"; ?>>Thành Phố Hồ Chí Minh</option>
                                            <option value="Cần Thơ" <?php if($agency['province'] === "Cần Thơ") echo "selected"; ?>>Cần Thơ</option>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            changeAgencyEdit({{$product['agency_id']}})
        }, false);
    </script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
