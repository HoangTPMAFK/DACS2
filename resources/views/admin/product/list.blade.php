<!DOCTYPE html>
<html lang="en">
{{-- <?php dd($products) ?> --}}
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
                <h1 class="text-3xl text-black pb-6">Quản lý sản phẩm</h1>

                <div class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Danh sách sản phẩm
                    </p>
                    <p class="text-lg mb-4">
                        <a href="/admin/them-san-pham" class="text-white bg-blue-600 py-2 px-6">Thêm sản phẩm</a>
                    </p>
                    <div class="bg-white overflow-auto">
                        <table id="product_table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Hãng</th>
                                    <th>Phiên bản</th>
                                    <th>Màu</th>
                                    <th>Giá</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product['id'] }}</td>
                                    <td>{{ $product['product_name'] }}</td>
                                    <td>{{ $product['getCategory']['category_name'] }}</td>
                                    <td>{{ $product['vendor'] }}</td>
                                    <td>{{ $product['edition'] }}</td>
                                    <td>{{ $product['color'] }}</td>
                                    <td>{{ $product['price'] }}đ</td>
                                    <td class="flex gap-2">
                                        <a href="/admin/xem-san-pham/{{$product['id']}}" class="bg-violet-500 py-2 px-6 text-white"><i class="fa-regular fa-eye"></i></a>
                                        <a href="/admin/sua-san-pham/{{$product['id']}}" class="bg-green-500 py-2 px-6 text-white"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="#" onclick="removeRow({{$product['id']}}, '{{url('/admin/xoa-san-pham')}}')" class="bg-red-500 py-2 px-6 text-white"><i class="fa-solid fa-delete-left"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Hãng</th>
                                    <th>Phiên bản</th>
                                    <th>Màu</th>
                                    <th>Giá</th>
                                    <th id="actions_footer"></th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="text-lg">{{ $products->links('pagination::tailwind2') }}</div>
                    </div>
                </div>
            </main>
    
            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </div>
        
    </div>
    <script>
        $(document).ready(function () {
            var table = $('#product_table').DataTable({
                lengthChange: false,
                paging: false,
                bInfo: false
            });
            $('#product_table tfoot th').each(function (i) {
                if ($(this).is('#actions_footer')) return false;
                var title = $('#product_table thead th')
                    .eq($(this).index())
                    .text();
                $(this).html(
                    '<input class="border border-slate-300 py-2 pl-1" type="text" placeholder="' + title + '" data-index="' + i + '" />'
                );
            });
            $(table.table().container()).on('keyup', 'tfoot input', function () {
                table
                    .column($(this).data('index'))
                    .search(this.value)
                    .draw();
            });
        })
    </script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
