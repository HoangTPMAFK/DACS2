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
                <h1 class="w-full text-3xl text-black pb-6">Thêm mã giảm giá</h1>

                <form action="/admin/sua-ma-giam-gia/{{$voucher['id']}}" method="post" class="flex flex-wrap">
                    @csrf
                    @include('admin/error')
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chung</div>
                        <div class="flex flex-col gap-4 md:gap-0 md:gap-y-4 flex-wrap md:flex-row justify-around p-4 bg-white rounded-lg shadow-lg text-lg">
                            <div class="md:w-1/3">
                                <span>Mã giảm giá</span>
                                <input class="p-2 border border-slate-300" type="text" name="voucher_code" id="voucher_code" value="{{$voucher['voucher_code']}}">
                            </div>
                            <div class="md:w-1/3">
                                <span>Thời gian bắt đầu</span>
                                <input class="p-2 border border-slate-300" type="datetime-local" name="start_at" id="start_at" value="{{$voucher['start_at']}}">
                            </div>
                            <div class="md:w-1/3">
                                <span>Thời gian hết hiệu lực</span>
                                <input class="p-2 border border-slate-300" type="datetime-local" name="end_at" id="end_at" value="{{$voucher['end_at']}}">
                            </div>
                            
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div class="text-xl rounded-t-lg text-white bg-black p-2 font-semibold">Thông tin chi tiết</div>
                        <div class="bg-white rounded-b-lg shadow-lg border-b border-slate-300">
                            <div class="columns-2 p-4 bg-white rounded-lg shadow-lg text-lg mb-4">
                                <!-- Apply to All Products Checkbox -->
                                <div class="mb-4">
                                    <input type="checkbox" name="allProduct" id="allProduct" @if($voucher['allProduct']) checked @endif onchange="toggleProductList()" disabled>
                                    <label for="allProduct">Áp dụng cho mọi sản phẩm</label>
                                </div>
                                
                                <!-- Unit Selection -->
                                <div class="mb-4">
                                    <span>Đơn vị</span>
                                    <select name="unit" id="unit" class="p-2 border border-slate-300" disabled>
                                        <option value="%" @if($voucher['unit'] == '%') selected @endif>%</option>
                                        <option value="VND" @if($voucher['unit'] == 'VND') selected @endif>VND</option>
                                    </select>
                                </div>
                                
                                <!-- Hide from Customers Checkbox -->
                                <div class="mb-4">
                                    <span>Ẩn khỏi khách hàng</span>
                                    <input type="checkbox" name="hidden" id="hidden" @if($voucher['hidden']) checked @endif disabled>
                                </div>
                                
                                <!-- Discount Amount -->
                                <div class="mb-4">
                                    <span>Lượng giảm</span>
                                    <input class="p-2 border border-slate-300" type="number" name="discountAmount" id="discountAmount" value="{{ $voucher['discountAmount'] }}"  readonly>
                                </div>
                                
                                <!-- Maximum Discount -->
                                <div class="mb-4">
                                    <span>Lượng giảm tối đa</span>
                                    <input class="p-2 border border-slate-300" type="number" name="maxDiscount" id="maxDiscount" value="{{ $voucher['maxDiscount'] }}" readonly>
                                </div>
                            </div>
                        
                            <!-- Product Search Input -->
                            <div class="flex flex-col w-full">
                                {{-- <div class="shrink-0 mb-4 mx-auto">
                                    <span>Tìm sản phẩm</span>
                                    <div class="group w-full md:w-[500px]">
                                        <input class="p-2 border border-slate-300 w-full" type="text" id="product_search" oninput="searchProduct(this)" placeholder="Tìm kiếm sản phẩm">
                                        <div id="dropdown" class="absolute z-10 w-full md:w-[500px] mt-1 bg-white border border-gray-300 rounded-md shadow-lg hidden">
                                            <ul class="max-h-48 overflow-y-auto">
                                                <!-- Dynamic product search results will go here -->
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                
                                <!-- Selected Products List -->
                                <div class="w-full shrink-0">
                                    <div id="product_list" class="flex flex-row flex-wrap w-full">
                                        @foreach ($products as $product)
                                            <div class="md:w-1/2 flex flex-row justify-between items-center mb-4">
                                                <div class="flex flex-row gap-4">
                                                    <input type="hidden" name="product_id[]" value="{{ $product['id'] }}">
                                                    <img src="@if(!is_null($product['thumbnail'])) /{{ $product['thumbnail'] }} @endif" alt="" class="h-28 md:h-32">
                                                    <div class="flex flex-col">
                                                        <div>
                                                            {{ $product['product_name'] }}
                                                            @if(!is_null($product['edition'])) - {{ $product['edition'] }} @endif
                                                            @if(!is_null($product['color'])) - {{ $product['color'] }} @endif
                                                        </div>
                                                        <div class="font-semibold text-red-500">{{ number_format($product['price']) }} đ</div>
                                                    </div>
                                                </div>
                                                <button type="button" onclick="removeProductInProductList(this)" class="bg-red-300 p-2">x</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Add Discount Button -->
                            <div class="mb-2 text-right">
                                <button class="bg-blue-600 p-2 text-lg text-white mr-2 rounded-lg shadow-lg">Thêm mã giảm giá</button>
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
        document.addEventListener('DOMContentLoaded', function() {
            toggleProductList();
        }, false);
        
    </script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
