<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FPT Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <main class="max-w-4xl mx-auto">
        <section>
            <form action="/admin/dang-nhap" method="post" class="mx-auto flex flex-col items-center gap-4 py-16">
                @csrf
                <div class="flex justify-center">
                    <img src="{{url('images/logo.jpg')}}" class="w-3/4" alt="">
                </div>
                <div class="flex justify-center">
                    <img src="/private/images/admin_logo.png" class="h-40" alt="">
                </div>
                <div class="text-4xl font-bold py-2">Đăng nhập</div>
                @include('admin/error')
                <div class="w-3/4 text-center">
                    <input type="text" name="name" id="" class="border border-black w-full h-10 px-2" placeholder="Số điện thoại">
                </div>
                <div class="w-3/4 text-center">
                    <input type="password" name="password" id="" class="border border-black w-full h-10 px-2" placeholder="Mật khẩu">
                </div>
                
                <div class="w-3/4 relative text-left flex justify-between">
                    <div>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="" class="text-left text-blue-600">Quên mật khẩu?</a>
                </div>
                <button type="submit" class="w-3/4 p-2 bg-blue-600 text-white">Đăng nhập</button>
            </form>
        </section>
    </main>
</body>
</html>

<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="https://cdn.tailwindcss.com"></script>