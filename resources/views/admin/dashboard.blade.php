<!DOCTYPE html>
<html lang="en">
@include('admin/head')
<body class="bg-gray-100 font-family-karla flex">

    @include('admin/sidebar')

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        @include('admin/header')

        <!-- Mobile Header & Nav -->
        @include('admin/mobile_menu')
    
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Dashboard</h1>
    
                <div class="flex flex-wrap mt-6">
                    <div class="w-full lg:w-4/5 pr-0 lg:pr-2 mx-auto">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-plus mr-3"></i> Các sản phẩm bán chạy nhất
                        </p>
                        <div class="p-6 bg-white">
                            {{-- <canvas id="chartOne" class="hidden md:block w-full max-w-[800px] mx-auto"></canvas> --}}
                            <canvas id="chartTwo" class="md:hidden w-full max-w-[800px] mx-auto"></canvas>
                        </div>
                    </div>
                    {{-- <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-check mr-3"></i> Thu nhập hàng quý
                        </p>
                        <div class="p-6 bg-white">
                            <canvas id="chartTwo" width="400" height="200"></canvas>
                        </div>
                    </div> --}}
                </div>
    
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Các đơn hàng mới nhất
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Mã đơn hàng</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Họ và tên</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">SĐT</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Địa chỉ</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($orders as $order)
                                <tr>
                                    <td class="text-left py-3 px-4">{{$order['order_code']}}</td>
                                    <td class="text-left py-3 px-4">{{$order['customer_name']}}</td>
                                    <td class="text-left py-3 px-4">{{$order['phone']}}</td>
                                    <td class="text-left py-3 px-4">{{$order['address'].', '.$order['district'].', '.$order['province']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var products_name = [];
        var total_sold = [];
        @foreach($products_name as $product_name)
            products_name.push("{{ $product_name }}");
        @endforeach
        @foreach($total_solds as $total_sold)
            total_sold.push("{{ $total_sold }}");
        @endforeach
        // Có thể làm bảng so sánh các danh mục hoặc các hãng
        var chartOne = document.getElementById('chartOne');
        // var myChart = new Chart(chartOne, {
        //     type: 'bar',
        //     data: {
        //         labels: products_name,  // Assuming 'products_name' is an array of product names
        //         datasets: [{
        //             label: 'Các sản phẩm',
        //             data: total_sold,  // Assuming 'total_sold' is an array of corresponding sales data
        //             backgroundColor: [
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 206, 86, 0.2)',
        //                 'rgba(75, 192, 192, 0.2)',
        //                 'rgba(153, 102, 255, 0.2)',
        //                 'rgba(255, 159, 64, 0.2)',
        //                 'rgba(255, 105, 180, 0.2)', 
        //                 'rgba(0, 255, 255, 0.2)'
        //             ],
        //             borderColor: [
        //                 'rgba(255, 99, 132, 1)',
        //                 'rgba(54, 162, 235, 1)',
        //                 'rgba(255, 206, 86, 1)',
        //                 'rgba(75, 192, 192, 1)',
        //                 'rgba(153, 102, 255, 1)',
        //                 'rgba(255, 159, 64, 1)',
        //                 'rgba(255, 105, 180, 1)',
        //                 'rgba(0, 255, 255, 1)' 
        //             ],
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         scales: {
        //             y: {
        //                 ticks: {
        //                     beginAtZero: true
        //                 }
        //             }
        //         }
        //     }
        // });
        var chartTwo = document.getElementById('chartTwo');
        var myChart2 = new Chart(chartTwo, {
            type: 'bar',
            data: {
                labels: products_name,  // Assuming 'products_name' is an array of product names
                datasets: [{
                    label: 'Các sản phẩm',
                    data: total_sold,  // Assuming 'total_sold' is an array of corresponding sales data
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 105, 180, 0.2)', 
                        'rgba(0, 255, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 105, 180, 1)',
                        'rgba(0, 255, 255, 1)' 
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            callback: function(value, index, values) {
                                return value.length > 5 ? value.slice(0, 5) + '...' : value;
                            }
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // có thể làm bảng so sánh thu nhập qua các tuần
        var chartTwo = document.getElementById('chartTwo');
        // var myLineChart = new Chart(chartTwo, {
        //     type: 'line',
        //     data: {
        //         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        //         datasets: [{
        //             label: '# of Votes',
        //             data: [12, 19, 3, 5, 2, 3],
        //             backgroundColor: [
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 206, 86, 0.2)',
        //                 'rgba(75, 192, 192, 0.2)',
        //                 'rgba(153, 102, 255, 0.2)',
        //                 'rgba(255, 159, 64, 0.2)'
        //             ],
        //             borderColor: [
        //                 'rgba(255, 99, 132, 1)',
        //                 'rgba(54, 162, 235, 1)',
        //                 'rgba(255, 206, 86, 1)',
        //                 'rgba(75, 192, 192, 1)',
        //                 'rgba(153, 102, 255, 1)',
        //                 'rgba(255, 159, 64, 1)'
        //             ],
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         scales: {
        //             yAxes: [{
        //                 ticks: {
        //                     beginAtZero: true
        //                 }
        //             }]
        //         }
        //     }
        // });
        var chartThree = document.getElementById('chartThree');
        // var myLineChart = new Chart(chartThree, {
        //     type: 'line',
        //     data: {
        //         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        //         datasets: [{
        //             label: '# of Votes',
        //             data: [12, 19, 3, 5, 2, 3],
        //             backgroundColor: [
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 206, 86, 0.2)',
        //                 'rgba(75, 192, 192, 0.2)',
        //                 'rgba(153, 102, 255, 0.2)',
        //                 'rgba(255, 159, 64, 0.2)'
        //             ],
        //             borderColor: [
        //                 'rgba(255, 99, 132, 1)',
        //                 'rgba(54, 162, 235, 1)',
        //                 'rgba(255, 206, 86, 1)',
        //                 'rgba(75, 192, 192, 1)',
        //                 'rgba(153, 102, 255, 1)',
        //                 'rgba(255, 159, 64, 1)'
        //             ],
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         scales: {
        //             yAxes: [{
        //                 ticks: {
        //                     beginAtZero: true
        //                 }
        //             }]
        //         }
        //     }
        // });
    </script>
</body>
</html>
