<aside class="relative bg-sidebar h-screen w-64 hidden sm:flex flex-col shadow-xl">
    <div class="p-6">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button>
    </div>
    <nav class="text-white text-base font-semibold pt-3 overflow-auto h-[calc(100vh-144px)]">
        <a href="/admin/dashboard" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        {{-- <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Blank Page
        </a> --}}
        <a href="/admin/quan-ly-san-pham" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Quản lý sản phẩm
        </a>
        <a href="/admin/quan-ly-danh-muc" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-list mr-3"></i>
            Quản lý danh mục
        </a>
        <a href="/admin/quan-ly-hang" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-regular fa-building mr-3"></i>
            Quản lý hãng
        </a>
        <a href="/admin/quan-ly-don-hang" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-file-invoice-dollar mr-3"></i> 
            Quản lý đơn hàng
        </a>
        <a href="/admin/quan-ly-tai-khoan" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-user mr-3"></i>
            Quản lý tài khoản
        </a>
        <a href="/admin/quan-ly-chi-nhanh" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-tree-city mr-3"></i>
            Quản lý chi nhánh
        </a>
        <a href="/admin/quan-ly-kho-hang" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-warehouse mr-3"></i>
            Quản lý kho hàng
        </a>
        <a href="/admin/quan-ly-ma-giam-gia" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-receipt mr-3"></i>
            Quản lý mã giảm giá
        </a>
        {{-- <a href="/admin/them-san-pham" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a> --}}
    </nav>
</aside>