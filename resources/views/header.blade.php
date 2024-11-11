<div class="preloader fixed inset-0 z-[9999] flex justify-center items-center bg-white"><img
    src="images/preloader.gif" alt="Image"></div>
<div class="overlay"></div>
<div class="side-overlay"></div>
<div
class="progress-wrap fixed right-[36px] bottom-[36px] h-[46px] w-[46px] leading-[46px] cursor-pointer block rounded-[50px] shadow-inset z-[10000] opacity-0 invisible translate-y-[15px] transition-all duration-200 ease-linear bg-transparent max-lg:right-[24px] max-lg:bottom-[24px] max-lg:h-[40px] max-lg:w-[40px] max-lg:leading-[40px] hover:scale-[1.06] after:absolute after:font-[900] after:text-center after:w-[46px] after:h-[46px] after:leading-[46px] after:text-[18px] after:left-0 after:top-0 after:cursor-pointer after:block after:content-['\e08e'] after:font-phospor after:z-[1] after:transition-all after:duration-200 after:ease-linear after:text-main max-lg:after:h-[40px] max-lg:after:w-[40px] max-lg:after:leading-[40px]">
<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
</svg></div>
<form action="index-two.html#" class="search-box"><button type="button"
    class="search-box__close absolute inset-block-start-0 right-0 m-16 w-48 h-48 border border-gray-100 rounded-[50%] flex items-center justify-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1"><i
        class="ph ph-x"></i></button>
<div class="container">
    <div class="relative"><input
            class="form-control block w-full p-[0.375rem_0.75rem] leading-6 text-[#495057] bg-white bg-clip-padding border border-[#ced4da] transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none py-16 px-24 text-xl rounded-[50rem] pe-64 h-[64px]"
            placeholder="Search for a product or brand"> <button type="submit"
            class="w-48 h-48 bg-main-600 rounded-[50%] flex items-center justify-center text-xl text-white absolute top-[50%] translate-y-[-50%] right-0 me-8"><i
                class="ph ph-magnifying-glass"></i></button></div>
</div>
</form>
<header class="header-middle style-two bg-color-neutral">
<div class="container container-lg">
    <nav class="header-inner flex-between">
        <div class="logo">
            <a href="index.html" class="link"><img src="images/logo-two.png" alt="Logo"></a>
        </div>
        <div class="flex items-center md:gap-[16px] max-sm:gap-0">
            <form action="index-two.html#" class="flex items-center flex-wrap form-location-wrapper relative">
                <div class="search-category style-two h-48 search-form md:flex hidden">
                    <div class="search-form__wrapper relative">
                        <input
                            class="search-form__input common-input py-13 ps-16 pe-18 rounded-none border-0"
                            placeholder="Tìm kiếm sản phẩm" oninput="searchProduct(this)">
                    </div>
                    <button type="submit"
                        class="bg-main-two-600 items-center justify-center text-xl text-white flex-shrink-0 w-48 hover-bg-main-two-700 xl:flex hidden">
                        <i class="ph ph-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="header-right items-center xl:block hidden">
            <div class="header-two-activities flex items-center flex-wrap gap-32">
                <button type="button" class="items-center search-icon xl:hidden flex gap-4 item-hover-two">
                    <span class="text-2xl text-white flex relative item-hover__text"><i class="ph ph-magnifying-glass"></i></span>
                </button>
                <a href="/tai-khoan-cua-toi" class="flex items-center flex-col gap-8 item-hover-two">
                    <span class="text-2xl text-white flex relative item-hover__text"><i class="ph ph-user"></i></span>
                    <span class="text-md text-white item-hover__text hidden xl:flex">Tài khoản</span>
                </a>
                <a href="/quan-ly-don-hang" class="flex items-center flex-col gap-8 item-hover-two">
                    <span class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i class="ph ph-mailbox"></i></span>
                    <span class="text-md text-white item-hover__text hidden xl:flex">Đơn hàng</span>
                </a>
                <a href="/gio-hang" class="flex items-center flex-col gap-8 item-hover-two">
                    <span class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i class="ph ph-shopping-cart-simple"></i></span>
                    <span class="text-md text-white item-hover__text hidden xl:flex">Giỏ hàng</span>
                </a>
            </div>
        </div>
    </nav>
    <div id="dropdown" class="absolute z-10 w-full md:w-[500px] mt-2 bg-white border border-gray-300 rounded-md shadow-lg hidden" style=" max-width: 100%; position: absolute;">
        <ul class="max-h-48 overflow-y-auto" style="list-style-type: none; padding: 0; margin: 0; z-index: 50; max-height: 200px; overflow-y: auto;">
            <!-- Dynamic search results will appear here -->
        </ul>
        <style>
            /* Webkit-based browsers (Chrome, Safari) */
            #dropdown ul::-webkit-scrollbar {
                width: 8px;
            }
            #dropdown ul::-webkit-scrollbar-track {
                background: #f0f0f0;
                border-radius: 10px;
            }
            #dropdown ul::-webkit-scrollbar-thumb {
                background-color: #c0c0c0;
                border-radius: 10px;
                border: 2px solid #f0f0f0;
            }
            #dropdown ul::-webkit-scrollbar-thumb:hover {
                background-color: #a0a0a0;
            }
        </style>
    </div>
</div>
</header>
<header class="header bg-white border-b border-gray-100" >
<div class="container container-lg" style="z-index:10">
    <nav class="header-inner flex justify-between gap-8">
        <div class="flex items-center menu-category-wrapper">
            <div class="category-two block"><button type="button"
                    class="category__button flex items-center gap-8 font-[500] bg-main-two-600 p-16 text-white"><span
                        class="icon text-2xl sm:flex hidden"><i class="ph ph-dots-nine"></i></span> <span
                        class="md:flex hidden"></span> Danh mục <span class="arrow-icon text-xl flex"><i
                            class="ph ph-caret-down"></i></span></button>
                <div
                    class="responsive-dropdown common-dropdown xl:hidden block nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100">
                    <button type="button"
                        class="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex"><i
                            class="ph ph-x"></i></button>
                    <div class="logo px-16 xl:hidden block"><a href="index.html" class="link"><img
                                src="images/logo.png" alt="Logo"></a></div>
                    <ul class="scroll-sm p-0 py-8 overflow-y-auto">
                        @foreach ($vendors as $category_slug => $vendorsList)
                        <li class="has-submenus-submenu">
                            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center justify-between gap-8 rounded-none">
                                <span onclick="javascript:window.location.href='/danh-muc/{{$category_slug}}'">{{ $vendorsList[1] }}</span> 
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
        <div class="me-8 xl:hidden block">

            <div class="header-two-activities flex items-center flex-wrap gap-32 pt-16"><button type="button"
                    class="items-center search-icon xl:hidden flex gap-4 item-hover-two"><span
                        class="text-2xl text-white flex relative item-hover__text"><i
                            class="ph ph-magnifying-glass"></i></span></button> <a href="/tai-khoan-cua-toi"
                    class="flex items-center flex-col gap-8 item-hover-two"><span
                        class="text-2xl text-white flex relative item-hover__text"><i
                            class="ph ph-user"></i> </span><span
                        class="text-md text-white item-hover__text hidden xl:flex">Tài khoản của tôi</span> </a><a
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
    </nav>
</div>
</header>
<div class="banner-two">
<div class="container container-lg">
    <div class="banner-two-wrapper flex items-start">
        <div class="w-265 xl:block hidden flex-shrink-0">
            <div
                class="responsive-dropdown style-two common-dropdown nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100 !relative border-t-0">
                <button type="button"
                    class="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex"><i
                        class="ph ph-x"></i></button>
                <div class="logo px-16 xl:hidden block"><a href="index.html" class="link"><img
                            src="images/logo.png" alt="Logo"></a></div>
                <ul class="responsive-dropdown__list scroll-sm p-0 py-8 overflow-y-auto">
                    @foreach ($vendors as $category_slug => $vendorsList)
                    <li class="has-submenus-submenu"><a href="/danh-muc/{{ $category_slug }}"
                            class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>{{ $vendorsList[1] }}</span>
                            <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span></a>
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
        {{-- <div class="banner-item-two-wrapper rounded-24 overflow-hidden relative arrow-center flex-grow mb-0">
            <img src="images/banner-two-bg.png" alt="Image"
                class="banner-img absolute inset-block-start-0 inset-inline-start-0 w-full h-full z-[-1] object-fit-cover rounded-24">
            <div class="banner-item-two__slider">
                <div class="banner-item-two">
                    <div class="banner-item-two__content"><span
                            class="text-white mb-8 h6 wow bounceInDown">Starting at only $250</span>
                        <h2 class="banner-item-two__title bounce text-white wow bounceInLeft">Get The Sound You
                            Love For Less</h2><a href="shop.html"
                            class="btn btn-outline-white inline-flex items-center rounded-[50rem] gap-8 mt-48 wow bounceInUp">Shop
                            Now<span class="icon text-xl flex"><i
                                    class="ph ph-shopping-cart-simple"></i></span></a>
                    </div>
                    <div class="banner-item-two__thumb absolute bottom-0 wow bounceInUp" data-wow-duration="1s"
                        data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000"
                        data-tilt-scale="1.06"><img src="images/banner-two-img.png" alt="Image"></div>
                </div>
                <div class="banner-item-two">
                    <div class="banner-item-two__content"><span
                            class="text-white mb-8 h6 wow bounceInDown">Starting at only $250</span>
                        <h2 class="banner-item-two__title bounce text-white wow bounceInLeft">Get The Sound You
                            Love For Less</h2><a href="shop.html"
                            class="btn btn-outline-white inline-flex items-center rounded-[50rem] gap-8 mt-48 wow bounceInUp">Shop
                            Now<span class="icon text-xl flex"><i
                                    class="ph ph-shopping-cart-simple"></i></span></a>
                    </div>
                    <div class="banner-item-two__thumb absolute bottom-0 wow bounceInUp" data-wow-duration="1s"
                        data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000"
                        data-tilt-scale="1.06"><img src="images/banner-two-img2.png" alt="Image"></div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
</div>