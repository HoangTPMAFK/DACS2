<header class="header bg-white border-b border-gray-100" >
    <div class="container container-lg" style="z-index:10">
        <nav class="header-inner flex justify-between gap-8">
            <div class="flex items-center menu-category-wrapper">
                <div class="category block on-hover-item bg-main-600 text-white">
                    <button type="button" class="category__button flex items-center gap-8 font-[500] p-16 border-r border-l border-gray-100 text-white">
                        <span class="icon text-2xl sm:flex hidden"><i class="ph ph-dots-nine"></i></span>
                        <span class="md:flex hidden">Danh mục</span>
                        <span class="arrow-icon text-xl flex"><i class="ph ph-caret-down"></i></span>
                    </button>
                    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                        <button type="button" class="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex">
                            <i class="ph ph-x"></i>
                        </button>
                        <div class="logo px-16 xl:hidden block">
                            <a href="index.html" class="link">
                                <img src="images/logo.png" alt="Logo">
                            </a>
                        </div>
                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            @foreach ($vendors as $category_slug => $vendorsList)
                                <li class="has-submenus-submenu">
                                    <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                        <span class="text-xl flex"></span> 
                                        <span onclick="javascript:window.location.href='/danh-muc/{{ $category_slug }}'">{{ $vendorsList[1] }}</span>
                                        <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                    </a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">{{ $vendorsList[1] }}</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            @foreach ($vendorsList[0] as $vendorItem)
                                                <li><a href="/danh-muc/{{ $category_slug }}/{{ $vendorItem['slug'] }}">{{ $vendorItem['vendor_name'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-right flex items-center">
                <div class="select-dropdown-for-home-two xl:block hidden">
                </div>
                <div class="me-8 xl:hidden block">
                    <div class="header-two-activities flex items-center flex-wrap gap-32"><button type="button"
                            class="items-center search-icon xl:hidden flex gap-4 item-hover-two"><span
                                class="text-2xl text-white flex relative item-hover__text"><i
                                    class="ph ph-magnifying-glass"></i></span></button> <a href="/tai-khoan-cua-toi"
                            class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative item-hover__text"><i
                                    class="ph ph-user"></i> </span><span
                                class="text-md text-white item-hover__text hidden xl:flex">Tài khoản</span> </a><a
                            href="/quan-ly-don-hang" class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                    class="ph ph-mailbox"></i> <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Đơn hàng</span>
                        </a><a href="/gio-hang" class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                    class="ph ph-shopping-cart-simple"></i> <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Giỏ hàng</span></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>