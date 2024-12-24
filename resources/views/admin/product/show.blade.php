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
                <h1 class="w-full text-3xl text-black pb-6">Sửa sản phẩm: {{ $product['product_name'] }}</h1>

                <form action="/admin/sua-san-pham/{{$product['id']}}" method="post" class="flex flex-wrap" enctype="multipart/form-data">
                    @csrf
                    @include('admin/error')
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chung</div>
                        <div class="flex flex-col gap-4 md:gap-0 md:gap-y-4 flex-wrap md:flex-row justify-around p-4 bg-white rounded-lg shadow-lg text-lg">
                            <input type="hidden" id="product_id" name="product_id" value="{{$product['id']}}">
                            <div class="md:w-1/3">
                                <span>Tên sản phẩm</span>
                                <input class="p-2 border border-slate-300" type="text" name="product_name" id="product_name" value="{{$product['product_name']}}" readonly>
                            </div>
                            
                            <div class="md:w-1/3">
                                <span>Danh mục</span>
                                <select name="category" id="category" disabled class="p-2">
                                    <option selected hidden></option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category['slug_vi']}}" <?php if($product['category']==$category['slug_vi']) echo "selected" ?>>{{$category['category_name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md:w-1/3">
                                <span>Hãng</span>
                                <select name="vendor" id="vendor" class="p-2" disabled>
                                    {{-- <option value="" hidden>Chọn danh mục</option> --}}
                                </select>
                            </div>
                            <div class="md:w-1/3">
                                <span>Phiên bản </span>
                                <input class="p-2 border border-slate-300" type="text" name="edition" id="edition" value="{{$product['edition']}}" readonly>
                            </div>
                            <div class="md:w-1/3">
                                <span>Màu </span>
                                <input class="p-2 border border-slate-300" type="text" name="color" id="color" value="{{$product['color']}}" readonly>
                            </div>
                            <div class="md:w-1/3">
                                <span>Giá </span>
                                <input class="p-2 border border-slate-300" type="number" min="0" name="price" id="" value="{{$product['price']}}" readonly>
                            </div>
                            <div class="md:w-1/2 flex flex-col">
                                <span>Thumbnail sản phẩm </span>
                                <div class="flex">
                                    <input type="hidden" name="oldThumbnailPath" value="{{$product['thumbnail']}}">
                                    <img src="<?php echo $product['thumbnail'] != null || strlen($product['thumbnail']) > 0 ? 'http://127.0.0.1:8000/'.$product['thumbnail'] : "" ?>" id="thumbnail-image" class="w-28 md:w-56" alt="">
                                </div>
                                {{-- <input type="file" name="thumbnail" id="thumbnail" accept="image/*" onchange="uploadThumbnail(this)"> --}}
                            </div>
                            <div class="md:w-1/2 py-2">
                                <div>Hình ảnh thêm</div>
                                <div id="images_container" class="overflow-x-auto w-full flex flex-row gap-4">
                                    @if (!is_null($product['images']))
                                    @foreach (json_decode($product['images']) as $image)
                                    <img src="/{{$image}}" class="h-20">
                                    @endforeach
                                    @endif
                                </div>
                                <div id="image_paths">
                                    <input type="hidden" name="">
                                </div>
                                <div id="image_uploaders_container">
                                    <div class="img-upload-row flex flex-col md:flex-row justify-between my-2">
                                        {{-- <input type="file" class="hidden" name="images[]" multiple id="images-input" accept="image/*" onchange="uploadImg(this)"> --}}
                                    </div>
                                </div>
                                {{-- <button id="" type="button" class="bg-violet-600 p-2 text-lg text-white rounded-lg shadow-lg"><label for="images-input">Thêm hình ảnh</label></button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chi tiết</div>
                        <div class="bg-white rounded-b-lg shadow-lg border-b border-slate-300">
                            <textarea name="description" id="content" class="w-full" readonly>{{ base64_decode($product['description']) }}</textarea>
                            <div class="mb-2 text-right">
                                {{-- <button class="bg-blue-600 p-2 text-lg text-white mr-2 rounded-lg shadow-lg">Sửa sản phẩm</button> --}}
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
    <script>
        $('document').ready(function() {
            $('#add-btn').on('click', function() {
                $("#image_uploaders_container").append(
`<div class="img-upload-row flex flex-col md:flex-row justify-between my-2">
    <input onchange="uploadImg(this)" type="file" accept="image/*" name="images[]" multiple>
    <button type="button" class="bg-red-200 text-red-500 px-4" onclick="deleteImgUpload(this)">x</button>
</div>
                `);
            })
        });
        CKEDITOR.replace('content');
    </script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
