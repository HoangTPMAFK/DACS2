<header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="/admin/dashboard" class="flex items-center text-white py-2 pl-4 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Blank Page
        </a>
        <a href="/admin/quan-ly-san-pham" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-4 nav-item">
            <i class="fas fa-table mr-3"></i>
            Quản lý sản phẩm
        </a>
        <a href="/admin/quan-ly-danh-muc" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-4 nav-item">
            <i class="fa-solid fa-list mr-3"></i>
            Quản lý danh mục
        </a>
        <a href="/admin/quan-ly-hang" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-4 nav-item">
            <i class="fa-regular fa-building mr-3"></i>
            Quản lý hãng
        </a>
        <a href="/admin/quan-ly-don-hang" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-4 nav-item">
            <i class="fa-solid fa-file-invoice-dollar mr-3"></i> 
            Quản lý đơn hàng
        </a>
        <a href="/admin/quan-ly-tai-khoan" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-4 nav-item">
            <i class="fa-solid fa-user mr-3"></i>
            Quản lý tài khoản
        </a>
        <a href="/admin/quan-ly-chi-nhanh" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-4 nav-item">
            <i class="fa-solid fa-tree-city mr-3"></i>
            Quản lý chi nhánh
        </a>
        <a href="/admin/quan-ly-kho-hang" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-4 nav-item">
            <i class="fa-solid fa-warehouse mr-3"></i>
            Quản lý kho hàng
        </a>
        <a href="/admin/quan-ly-ma-giam-gia" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-4 nav-item">
            <i class="fa-solid fa-receipt mr-3"></i>
            Quản lý mã giảm giá
        </a>
        <a href="/admin/my-account" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-user mr-3"></i>
            My Account
        </a>
        <a href="/admin/logout" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-sign-out-alt mr-3"></i>
            Sign Out
        </a>
        <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-arrow-circle-up mr-3"></i> Upgrade to Pro!
        </button>
    </nav>
    <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
        <i class="fas fa-plus mr-3"></i> New Report
    </button> -->
</header>