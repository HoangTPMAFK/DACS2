<!doctype html>
<html lang="en" class="color-two font-exo">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <script defer="defer" src="js/app.bundle.js"></script>
    @vite('resources/css/app.css')
    <link href="css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
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
    <div class="mobile-menu scroll-sm xl:hidden block"><button type="button" class="close-button"><i
                class="ph ph-x"></i></button>
        <div class="mobile-menu__inner"><a href="index.html" class="mobile-menu__logo"><img src="images/logo.png"
                    alt="Logo"></a>
            <div class="mobile-menu__menu">
                <ul class="nav-menu flex items-center nav-menu--mobile">
                    <li class="on-hover-item nav-menu__item has-submenu activePage"><a href="javascript:void(0)"
                            class="nav-menu__link">Home</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item activePage"><a href="index.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Home
                                    Grocery</a></li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="index-two.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Home
                                    Electronics</a></li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="index-three.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Home
                                    Fashion</a></li>
                        </ul>
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu"><a href="javascript:void(0)"
                            class="nav-menu__link">Shop</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item"><a href="shop.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop</a></li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="product-details.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop
                                    Details</a></li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="product-details-two.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop Details
                                    Two</a></li>
                        </ul>
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu"><span
                            class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item"><a href="cart.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Cart</a></li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="wishlist.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Wishlist</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="checkout.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Checkout</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="become-seller.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Become
                                    Seller</a></li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="account.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu"><span
                            class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                        <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item"><a href="vendor.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendors</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="vendor-details.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendor
                                    Details</a></li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="vendor-two.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendors Two</a>
                            </li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="vendor-two-details.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendors Two
                                    Details</a></li>
                        </ul>
                    </li>
                    <li class="on-hover-item nav-menu__item has-submenu"><a href="javascript:void(0)"
                            class="nav-menu__link">Blog</a>
                        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                            <li class="common-dropdown__item nav-submenu__item"><a href="blog.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Blog</a></li>
                            <li class="common-dropdown__item nav-submenu__item"><a href="blog-details.html"
                                    class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Blog
                                    Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-menu__item"><a href="contact.html" class="nav-menu__link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="header-middle style-two bg-color-neutral">
        <div class="container container-lg">
            <nav class="header-inner flex-between">
                <div class="logo"><a href="index.html" class="link"><img src="images/logo-two.png" alt="Logo"></a></div>
                <div class="flex items-center md:gap-[16px] max-sm:gap-0">
                    <div class="select-dropdown-for-home-two xl:hidden block">
                        <ul class="header-top__right style-two flex items-center flex-wrap">
                            <li
                                class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                                <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">Eng</a>
                                <ul
                                    class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm !px-0 py-8">
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag1.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> English</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag2.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> Japan</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag3.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> French</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag4.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> Germany</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag6.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> Bangladesh</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag5.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> South Korea</a></li>
                                </ul>
                            </li>
                            <li
                                class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                                <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">USD</a>
                                <ul
                                    class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag1.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> USD</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag2.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> Yen</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag3.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> Franc</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag4.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> EURO</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag6.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> BDT</a></li>
                                    <li><a href="javascript:void(0)"
                                            class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none"><img
                                                src="images/flag5.png" alt="Image"
                                                class="w-16 h-12 rounded-4 border border-gray-100"> WON</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <form action="index-two.html#" class="flex items-center flex-wrap form-location-wrapper">
                        <div class="search-category style-two h-48 search-form md:flex hidden">
                            <div class="search-form__wrapper relative">
                                <input
                                    class="search-form__input common-input py-13 ps-16 pe-18 rounded-none border-0"
                                    placeholder="Tìm kiếm sản phẩm">
                            </div>
                            <button type="submit"
                                class="bg-main-two-600 items-center justify-center text-xl text-white flex-shrink-0 w-48 hover-bg-main-two-700 xl:flex hidden"><i
                                    class="ph ph-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <div class="header-right items-center xl:block hidden">
                    <div class="header-two-activities flex items-center flex-wrap gap-32"><button type="button"
                            class="items-center search-icon xl:hidden flex gap-4 item-hover-two"><span
                                class="text-2xl text-white flex relative item-hover__text"><i
                                    class="ph ph-magnifying-glass"></i></span></button> <a href="account.html"
                            class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative item-hover__text"><i class="ph ph-user"></i>
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Tài khoản</span>
                        </a><a href="wishlist.html" class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                    class="ph ph-mailbox"></i> <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Đơn hàng</span>
                        </a><a href="cart.html" class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                    class="ph ph-shopping-cart-simple"></i> <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Giỏ hàng</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <header class="header bg-white border-b border-gray-100">
        <div class="container container-lg">
            <nav class="header-inner flex justify-between gap-8">
                <div class="flex items-center menu-category-wrapper">
                    <div class="category-two block"><button type="button"
                            class="category__button flex items-center gap-8 font-[500] bg-main-two-600 p-16 text-white"><span
                                class="icon text-2xl sm:flex hidden"><i class="ph ph-dots-nine"></i></span> <span
                                class="md:flex hidden">All</span> Categories <span class="arrow-icon text-xl flex"><i
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
                <div class="banner-item-two-wrapper rounded-24 overflow-hidden relative arrow-center flex-grow mb-0">
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
                </div>
            </div>
        </div>
    </div>
    <section class="promotional-banner mt-32">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="fade-up"
                    data-aos-duration="600">
                    <div class="relative rounded-16 overflow-hidden z-[1] p-32"><img src="images/promo-bg-img1.png"
                            alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                        <div class="flex-between flex-wrap gap-16">
                            <div><span class="text-heading text-sm mb-8">Latest Deal</span>
                                <h6 class="mb-0">iPhone 15 Pro Max</h6><a href="shop.html"
                                    class="inline-flex items-center gap-8 mt-16 text-heading text-md font-[500] border border-t-0 border-r-0 border-l-0 border-gray-900 hover-text-main-two-600 hover-border-main-two-600">Shop
                                    Now <span class="icon text-md flex"><i class="ph ph-plus"></i></span></a>
                            </div>
                            <div class="pe-xxl-4"><img src="images/promo-img1.png" alt="Image"></div>
                        </div>
                    </div>
                </div>
                <div class="xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="fade-up"
                    data-aos-duration="800">
                    <div class="relative rounded-16 overflow-hidden z-[1] p-32"><img src="images/promo-bg-img2.png"
                            alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                        <div class="flex-between flex-wrap gap-16">
                            <div class=""><span class="text-heading text-sm mb-8">Get 60% Off</span>
                                <h6 class="mb-0">Instax Mini 11 Camera</h6><a href="shop.html"
                                    class="inline-flex items-center gap-8 mt-16 text-heading text-md font-[500] border border-t-0 border-r-0 border-l-0 border-gray-900 hover-text-main-two-600 hover-border-main-two-600">Shop
                                    Now <span class="icon text-md flex"><i class="ph ph-plus"></i></span></a>
                            </div>
                            <div class="pe-xxl-4"><img src="images/promo-img2.png" alt="Image"></div>
                        </div>
                    </div>
                </div>
                <div class="xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="relative rounded-16 overflow-hidden z-[1] p-32"><img src="images/promo-bg-img3.png"
                            alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                        <div class="flex-between flex-wrap gap-16">
                            <div class=""><span class="text-heading text-sm mb-8">Start From $250</span>
                                <h6 class="mb-0">Airpod Headphone</h6><a href="shop.html"
                                    class="inline-flex items-center gap-8 mt-16 text-heading text-md font-[500] border border-t-0 border-r-0 border-l-0 border-gray-900 hover-text-main-two-600 hover-border-main-two-600">Shop
                                    Now <span class="icon text-md flex"><i class="ph ph-plus"></i></span></a>
                            </div>
                            <div class="pe-xxl-4"><img src="images/promo-img3.png" alt="Image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deals-weeek pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="border border-gray-100 p-24 rounded-16">
                <div class="section-heading mb-24">
                    <div class="flex-between flex-wrap gap-8">
                        <h5 class="mb-0 wow bounceInLeft">Deal of The Week</h5>
                        <div class="flex items-center gap-16 wow bounceInRight"><a href="shop.html"
                                class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                                All Deals</a>
                            <div class="flex items-center gap-8"><button type="button" id="deal-week-prev"
                                    class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"><i
                                        class="ph ph-caret-left"></i></button> <button type="button" id="deal-week-next"
                                    class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"><i
                                        class="ph ph-caret-right"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="deal-week-box rounded-16 overflow-hidden flex-between relative z-[1] mb-24"><img
                        src="images/week-deal-bg.png" alt="Image"
                        class="absolute inset-block-start-0 inset-block-start-0 w-full h-full z-[-1] object-fit-cover">
                    <div class="xl:block hidden ps-32 flex-shrink-0" data-aos="zoom-in"><img
                            src="images/week-deal-img1.png" alt="Image"></div>
                    <div class="deal-week-box__content px-sm-4 block w-full text-center">
                        <h6 class="mb-20 wow bounceIn">Apple AirPods Max, Over Ear Headphones</h6>
                        <div class="countdown mt-20" id="countdown4">
                            <ul class="countdown-list style-four flex items-center justify-center flex-wrap">
                                <li
                                    class="countdown-list__item flex items-center flex-col text-sm font-[500] text-white rounded-[50%] bg-neutral-600">
                                    <span class="days"></span>Days</li>
                                <li
                                    class="countdown-list__item flex items-center flex-col text-sm font-[500] text-white rounded-[50%] bg-neutral-600">
                                    <span class="hours"></span>Hour</li>
                                <li
                                    class="countdown-list__item flex items-center flex-col text-sm font-[500] text-white rounded-[50%] bg-neutral-600">
                                    <span class="minutes"></span>Min</li>
                                <li
                                    class="countdown-list__item flex items-center flex-col text-sm font-[500] text-white rounded-[50%] bg-neutral-600">
                                    <span class="seconds"></span>Sec</li>
                            </ul>
                        </div>
                    </div>
                    <div class="xl:block hidden flex-shrink-0 pe-xl-5" data-aos="zoom-in">
                        <div class="me-xxl-5"><img src="images/week-deal-img2.png" alt="Image"></div>
                    </div>
                </div>
                <div class="deals-week-slider arrow-style-two">
                    <div data-aos="fade-up" data-aos-duration="200">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold
                                </span><img src="images/product-two-img1.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16">
                                <div class="flex items-center gap-6"><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-15 font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span> <span
                                        class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets
                                        Vegetables</a></h6>
                                <div class="flex items-center gap-4"><span class="text-tertiary-600 text-md flex"><i
                                            class="ph-fill ph-storefront"></i></span> <span
                                        class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                <div class="mt-8">
                                    <div class="progress w-full bg-color-three rounded-[50rem] h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-tertiary-600 rounded-[50rem]" style="width:35%">
                                        </div>
                                    </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                </div>
                                <div class="product-card__price my-20"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="400">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                    50% </span><img src="images/product-two-img2.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16">
                                <div class="flex items-center gap-6"><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-15 font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span> <span
                                        class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets
                                        Vegetables</a></h6>
                                <div class="flex items-center gap-4"><span class="text-tertiary-600 text-md flex"><i
                                            class="ph-fill ph-storefront"></i></span> <span
                                        class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                <div class="mt-8">
                                    <div class="progress w-full bg-color-three rounded-[50rem] h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-tertiary-600 rounded-[50rem]" style="width:35%">
                                        </div>
                                    </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                </div>
                                <div class="product-card__price my-20"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New
                                </span><img src="images/product-two-img3.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16">
                                <div class="flex items-center gap-6"><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-15 font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span> <span
                                        class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets
                                        Vegetables</a></h6>
                                <div class="flex items-center gap-4"><span class="text-tertiary-600 text-md flex"><i
                                            class="ph-fill ph-storefront"></i></span> <span
                                        class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                <div class="mt-8">
                                    <div class="progress w-full bg-color-three rounded-[50rem] h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-tertiary-600 rounded-[50rem]" style="width:35%">
                                        </div>
                                    </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                </div>
                                <div class="product-card__price my-20"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="800">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                    seller</span> <img src="images/product-two-img4.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16">
                                <div class="flex items-center gap-6"><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-15 font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span> <span
                                        class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets
                                        Vegetables</a></h6>
                                <div class="flex items-center gap-4"><span class="text-tertiary-600 text-md flex"><i
                                            class="ph-fill ph-storefront"></i></span> <span
                                        class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                <div class="mt-8">
                                    <div class="progress w-full bg-color-three rounded-[50rem] h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-tertiary-600 rounded-[50rem]" style="width:35%">
                                        </div>
                                    </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                </div>
                                <div class="product-card__price my-20"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                    Seller </span><img src="images/product-two-img5.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16">
                                <div class="flex items-center gap-6"><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-15 font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span> <span
                                        class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets
                                        Vegetables</a></h6>
                                <div class="flex items-center gap-4"><span class="text-tertiary-600 text-md flex"><i
                                            class="ph-fill ph-storefront"></i></span> <span
                                        class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                <div class="mt-8">
                                    <div class="progress w-full bg-color-three rounded-[50rem] h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-tertiary-600 rounded-[50rem]" style="width:35%">
                                        </div>
                                    </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                </div>
                                <div class="product-card__price my-20"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1200">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                    seller</span> <img src="images/product-two-img6.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16">
                                <div class="flex items-center gap-6"><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-15 font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span> <span
                                        class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets
                                        Vegetables</a></h6>
                                <div class="flex items-center gap-4"><span class="text-tertiary-600 text-md flex"><i
                                            class="ph-fill ph-storefront"></i></span> <span
                                        class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                <div class="mt-8">
                                    <div class="progress w-full bg-color-three rounded-[50rem] h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-tertiary-600 rounded-[50rem]" style="width:35%">
                                        </div>
                                    </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                </div>
                                <div class="product-card__price my-20"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1400">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New
                                </span><img src="images/product-two-img9.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16">
                                <div class="flex items-center gap-6"><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-15 font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span> <span
                                        class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                <h6 class="title text-lg font-[600] mt-12 mb-8"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets
                                        Vegetables</a></h6>
                                <div class="flex items-center gap-4"><span class="text-tertiary-600 text-md flex"><i
                                            class="ph-fill ph-storefront"></i></span> <span
                                        class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                <div class="mt-8">
                                    <div class="progress w-full bg-color-three rounded-[50rem] h-4" role="progressbar"
                                        aria-label="Basic example" aria-valuenow="35" aria-valuemin="0"
                                        aria-valuemax="100">
                                        <div class="progress-bar bg-tertiary-600 rounded-[50rem]" style="width:35%">
                                        </div>
                                    </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                </div>
                                <div class="product-card__price my-20"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><a
                                    href="cart.html"
                                    class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                    tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-selling-products pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="border border-gray-100 p-24 rounded-16">
                <div class="section-heading mb-24">
                    <div class="flex-between flex-wrap gap-8">
                        <h5 class="mb-0 wow bounceInLeft">Top Selling Products</h5>
                        <div class="flex items-center gap-16 wow bounceInRight"><a href="shop.html"
                                class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                                All Deals</a>
                            <div class="flex items-center gap-8"><button type="button" id="top-selling-prev"
                                    class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"><i
                                        class="ph ph-caret-left"></i></button> <button type="button"
                                    id="top-selling-next"
                                    class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"><i
                                        class="ph ph-caret-right"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="row g-12">
                    <div class="lg:w-4/12 flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in"
                        data-aos-duration="800">
                        <div class="relative rounded-16 h-full overflow-hidden p-28 z-[1] text-center"><img
                                src="images/deal-bg.png" alt="Image"
                                class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full">
                            <div class="2xl:py-[1.5rem]">
                                <h6 class="mb-4 font-[600]">Polaroid Now+ Gen 2 - White</h6>
                                <h5 class="mb-40 font-[600]">Fresh Vegetables</h5><a href="cart.html"
                                    class="btn text-heading border-neutral-600 hover-bg-neutral-600 hover-text-white py-16 px-24 flex items-center justify-center inline-flex rounded-[50rem] gap-8 font-[500]"
                                    tabindex="0">Shop Now <i class="ph ph-shopping-cart text-xl flex"></i></a>
                            </div>
                            <div class="lg:block hidden mt-36"><img src="images/deal-img.png" alt="Image"></div>
                        </div>
                    </div>
                    <div class="lg:w-8/12 flex-grow-0 flex-shrink-0 basis-auto">
                        <div class="top-selling-product-slider arrow-style-two">
                            <div data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold
                                        </span><img src="images/product-two-img7.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16">
                                        <div class="flex items-center gap-6"><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span> <span
                                                class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                        <h6 class="title text-lg font-[600] mt-12 mb-8"><a
                                                href="product-details-two.html" class="link text-line-2"
                                                tabindex="0">Taylor Farms Broccoli Florets Vegetables</a></h6>
                                        <div class="flex items-center gap-4"><span
                                                class="text-tertiary-600 text-md flex"><i
                                                    class="ph-fill ph-storefront"></i></span> <span
                                                class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                        <div class="mt-8">
                                            <div class="progress w-full bg-color-three rounded-[50rem] h-4"
                                                role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-[50rem]"
                                                    style="width:35%"></div>
                                            </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                        </div>
                                        <div class="product-card__price my-20"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><a
                                            href="cart.html"
                                            class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                            tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50% </span><img src="images/product-two-img8.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16">
                                        <div class="flex items-center gap-6"><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span> <span
                                                class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                        <h6 class="title text-lg font-[600] mt-12 mb-8"><a
                                                href="product-details-two.html" class="link text-line-2"
                                                tabindex="0">Taylor Farms Broccoli Florets Vegetables</a></h6>
                                        <div class="flex items-center gap-4"><span
                                                class="text-tertiary-600 text-md flex"><i
                                                    class="ph-fill ph-storefront"></i></span> <span
                                                class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                        <div class="mt-8">
                                            <div class="progress w-full bg-color-three rounded-[50rem] h-4"
                                                role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-[50rem]"
                                                    style="width:35%"></div>
                                            </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                        </div>
                                        <div class="product-card__price my-20"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><a
                                            href="cart.html"
                                            class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                            tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New
                                        </span><img src="images/product-two-img9.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16">
                                        <div class="flex items-center gap-6"><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span> <span
                                                class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                        <h6 class="title text-lg font-[600] mt-12 mb-8"><a
                                                href="product-details-two.html" class="link text-line-2"
                                                tabindex="0">Taylor Farms Broccoli Florets Vegetables</a></h6>
                                        <div class="flex items-center gap-4"><span
                                                class="text-tertiary-600 text-md flex"><i
                                                    class="ph-fill ph-storefront"></i></span> <span
                                                class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                        <div class="mt-8">
                                            <div class="progress w-full bg-color-three rounded-[50rem] h-4"
                                                role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-[50rem]"
                                                    style="width:35%"></div>
                                            </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                        </div>
                                        <div class="product-card__price my-20"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><a
                                            href="cart.html"
                                            class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                            tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            seller</span> <img src="images/product-two-img10.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16">
                                        <div class="flex items-center gap-6"><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span> <span
                                                class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                        <h6 class="title text-lg font-[600] mt-12 mb-8"><a
                                                href="product-details-two.html" class="link text-line-2"
                                                tabindex="0">Taylor Farms Broccoli Florets Vegetables</a></h6>
                                        <div class="flex items-center gap-4"><span
                                                class="text-tertiary-600 text-md flex"><i
                                                    class="ph-fill ph-storefront"></i></span> <span
                                                class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                        <div class="mt-8">
                                            <div class="progress w-full bg-color-three rounded-[50rem] h-4"
                                                role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-[50rem]"
                                                    style="width:35%"></div>
                                            </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                        </div>
                                        <div class="product-card__price my-20"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><a
                                            href="cart.html"
                                            class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                            tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-main-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img8.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16">
                                        <div class="flex items-center gap-6"><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span> <span
                                                class="text-xs font-[500] text-gray-500">(17k)</span></div>
                                        <h6 class="title text-lg font-[600] mt-12 mb-8"><a
                                                href="product-details-two.html" class="link text-line-2"
                                                tabindex="0">Taylor Farms Broccoli Florets Vegetables</a></h6>
                                        <div class="flex items-center gap-4"><span
                                                class="text-tertiary-600 text-md flex"><i
                                                    class="ph-fill ph-storefront"></i></span> <span
                                                class="text-gray-500 text-xs">By Lucky Supermarket</span></div>
                                        <div class="mt-8">
                                            <div class="progress w-full bg-color-three rounded-[50rem] h-4"
                                                role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                                aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar bg-tertiary-600 rounded-[50rem]"
                                                    style="width:35%"></div>
                                            </div><span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                        </div>
                                        <div class="product-card__price my-20"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><a
                                            href="cart.html"
                                            class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                            tabindex="0">Add To Cart <i class="ph ph-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trending-productss pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="border border-gray-100 p-24 rounded-16">
                <div class="section-heading mb-24">
                    <div class="flex-between flex-wrap gap-8">
                        <h5 class="mb-0 wow bounceInLeft">Trending Products</h5>
                        <ul class="nav common-tab style-two nav-pills wow bounceInRight" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn-p active"
                                    data-target="#pills-all" id="pills-all-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                    aria-selected="true">All</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn-p"
                                    data-target="#pills-mobile" id="pills-mobile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-mobile" type="button" role="tab" aria-controls="pills-mobile"
                                    aria-selected="false">Mobile</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn-p"
                                    data-target="#pills-headphone" id="pills-headphone-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-headphone" type="button" role="tab"
                                    aria-controls="pills-headphone" aria-selected="false">Headphone</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn-p"
                                    data-target="#pills-usb" id="pills-usb-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-usb" type="button" role="tab" aria-controls="pills-usb"
                                    aria-selected="false">USB</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn-p"
                                    data-target="#pills-camera" id="pills-camera-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-camera" type="button" role="tab" aria-controls="pills-camera"
                                    aria-selected="false">Camera</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn-p"
                                    data-target="#pills-laptop" id="pills-laptop-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-laptop" type="button" role="tab" aria-controls="pills-laptop"
                                    aria-selected="false">Laptop</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn-p"
                                    data-target="#pills-accessories" id="pills-accessories-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-accessories" type="button" role="tab"
                                    aria-controls="pills-accessories" aria-selected="false">Accessories</button></li>
                        </ul>
                    </div>
                </div>
                <div class="trending-products-box rounded-16 overflow-hidden flex-between relative mb-24">
                    <div class="lg:block hidden ps-xxl-5 ps-md-4" data-aos="zoom-in" data-aos-duration="800"><img
                            src="images/trending-products-img1.png" alt="Image"></div>
                    <div class="trending-products-box__content px-4 block w-full text-center py-32 wow bounceIn">
                        <h6 class="mb-0 trending-products-box__title">Laptop Pro <span class="h4 mb-0 font-[600]">20%
                            </span>off All Time On Order Now $980</h6>
                    </div>
                    <div class="lg:block hidden pe-xxl-5 me-xxl-5 pe-md-4" data-aos="zoom-in" data-aos-duration="800">
                        <img src="images/trending-products-img2.png" alt="Image"></div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane bt-pane-p fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img1.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50%</span> <img src="images/product-two-img3.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="images/product-two-img4.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img5.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img6.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane bt-pane-p fade" id="pills-mobile" role="tabpanel"
                        aria-labelledby="pills-mobile-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img1.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50%</span> <img src="images/product-two-img3.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="images/product-two-img4.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img5.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img6.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane bt-pane-p fade" id="pills-headphone" role="tabpanel"
                        aria-labelledby="pills-headphone-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img1.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50%</span> <img src="images/product-two-img3.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="images/product-two-img4.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img5.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img6.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane bt-pane-p fade" id="pills-usb" role="tabpanel" aria-labelledby="pills-usb-tab"
                        tabindex="0">
                        <div class="row g-12">
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img1.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50%</span> <img src="images/product-two-img3.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="images/product-two-img4.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img5.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img6.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane bt-pane-p fade" id="pills-camera" role="tabpanel"
                        aria-labelledby="pills-camera-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img1.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50%</span> <img src="images/product-two-img3.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="images/product-two-img4.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img5.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img6.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane bt-pane-p fade" id="pills-laptop" role="tabpanel"
                        aria-labelledby="pills-laptop-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img1.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50%</span> <img src="images/product-two-img3.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="images/product-two-img4.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img5.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img6.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane bt-pane-p fade" id="pills-accessories" role="tabpanel"
                        aria-labelledby="pills-accessories-tab" tabindex="0">
                        <div class="row g-12">
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img1.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50%</span> <img src="images/product-two-img3.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="images/product-two-img4.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img5.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                                data-aos="fade-up" data-aos-duration="1200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img6.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-success-600 bg-success-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discount py-80">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in" data-aos-duration="600">
                    <div
                        class="discount-item rounded-16 overflow-hidden relative z-[1] h-full flex flex-col items-start justify-center">
                        <img src="images/discount-bg1.jpg" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full z-[-1]">
                        <div class="w-full flex-between gap-20">
                            <div class="discount-item__content"><span class="font-[600] text-tertiary-600 mb-20">UP TO
                                    30% OFF</span>
                                <h6 class="mb-20">57" Odyssey Neo G9 Dual 4K UHD Quantum Mini-LED</h6><a
                                    href="shop.html" class="btn btn-outline-black rounded-[50rem] gap-8"
                                    tabindex="0">Shop Now</a>
                            </div><img src="images/discount-img1.png" alt="Image" class="md:block hidden">
                        </div>
                    </div>
                </div>
                <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in" data-aos-duration="800">
                    <div
                        class="discount-item rounded-16 overflow-hidden relative z-[1] h-full flex flex-col items-center justify-center">
                        <img src="images/discount-bg2.jpg" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full z-[-1]">
                        <div class="w-full flex-between gap-20">
                            <div class="discount-item__content"><span class="font-[600] text-tertiary-600 mb-20">UP TO
                                    30% OFF</span>
                                <h6 class="mb-20">57" Odyssey Neo G9 Dual 4K UHD Quantum Mini-LED</h6><a
                                    href="shop.html" class="btn btn-outline-black rounded-[50rem] gap-8"
                                    tabindex="0">Shop Now</a>
                            </div><img src="images/discount-img2.png" alt="Image" class="md:block hidden">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="big-deal rounded-16 overflow-hidden flex-between relative mb-24 py-80">
        <div class="container container-lg">
            <div class="big-deal-box relative z-[1] rounded-16 py-40 overflow-hidden"><img
                    src="images/big-deal-pattern.png" alt="Image"
                    class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full cover-img">
                <div class="row g-4 items-center">
                    <div class="lg:w-3/12 flex-grow-0 flex-shrink-0 basis-auto text-center lg:block hidden"
                        data-aos="zoom-out" data-aos-duration="1000"><img src="images/big-deal1.png" alt="Image"></div>
                    <div class="lg:w-6/12 flex-grow-0 flex-shrink-0 basis-auto big-deal-box__content text-center">
                        <h4 class="mb-20 text-uppercase" data-aos="zoom-in" data-aos-duration="1000">WATCHES BIG DEAL
                        </h4>
                        <p class="text-heading font-[500]" data-aos="zoom-in" data-aos-duration="1000">Wonlex KT07 4G
                            positioning watches</p>
                    </div>
                    <div class="lg:w-3/12 flex-grow-0 flex-shrink-0 basis-auto text-center lg:block hidden"
                        data-aos="zoom-out" data-aos-duration="1000"><img src="images/big-deal2.png" alt="Image"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="recommended overflow-hidden pb-80">
        <div class="container container-lg">
            <div class="row g-12">
                <div class="custom-2xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="relative rounded-16 bg-light-purple overflow-hidden p-28 z-[1] text-center h-full"
                        data-aos="zoom-in" data-aos-duration="800"><img src="images/recommended-bg.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full cover-img">
                        <div class="2xl:py-[1.5rem] text-center"><span class="h6 mb-20 text-white">Insta360 GO 3S Action
                                Camera - White</span>
                            <div class="flex items-center justify-center gap-12 text-white"><span class="">FROM</span>
                                <h4 class="mb-8 text-white">$430</h4><span
                                    class="badge-style-two relative me-8 bg-main-two-600 text-white text-sm py-2 px-8 rounded-4">20%
                                    off</span>
                            </div>
                        </div><img src="images/recommended-img.png" alt="Image"
                            class="mt-48 custom-2xl:block hidden wow bounceIn">
                    </div>
                </div>
                <div class="custom-2xl:w-8/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="border border-gray-100 p-24 rounded-16">
                        <div class="section-heading mb-24">
                            <div class="flex-between flex-wrap gap-8">
                                <h5 class="mb-0 wow bounceInLeft">Recommended For You</h5>
                                <div class="flex items-center gap-16 wow bounceInRight"><a href="shop.html"
                                        class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                                        All</a>
                                    <div class="flex items-center gap-8"><button type="button" id="recommended-prev"
                                            class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"><i
                                                class="ph ph-caret-left"></i></button> <button type="button"
                                            id="recommended-next"
                                            class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-neutral-600 text-xl hover-bg-neutral-600 hover-text-white transition-1"><i
                                                class="ph ph-caret-right"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="recommended-slider">
                            <div data-aos="fade-up" data-aos-duration="400">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Seller </span><img src="images/product-two-img1.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="800">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                            50%</span> <img src="images/product-two-img3.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                        <img src="images/product-two-img4.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1200">
                                <div
                                    class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                    <a href="product-details-two.html"
                                        class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                            class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                        <img src="images/product-two-img2.png" alt="Image"
                                            class="!w-auto max-w-[unset]"></a>
                                    <div class="product-card__content mt-16"><span
                                            class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                        <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                                class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera
                                                - Green</a></h6>
                                        <div class="flex items-center gap-6">
                                            <div class="flex items-center gap-8"><span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span> <span
                                                    class="text-15 font-[500] text-warning-600 flex"><i
                                                        class="ph-fill ph-star"></i></span></div><span
                                                class="text-xs font-[500] text-gray-500">4.8</span> <span
                                                class="text-xs font-[500] text-gray-500">(12K)</span>
                                        </div><span
                                            class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                            by Marketpro</span>
                                        <div class="product-card__price mt-16 mb-30"><span
                                                class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                            <span class="text-heading text-md font-[600]">$14.99 <span
                                                    class="text-gray-500 font-normal">/Qty</span></span></div><span
                                            class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                                02</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="day-sale">
        <div class="container container-lg">
            <div class="day-sale-box rounded-16 overflow-hidden flex-between relative mb-24 z-[1]"><img
                    src="images/day-sale-bg.png" alt="Image"
                    class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full cover-img">
                <div class="xl:block hidden" data-aos="zoom-in" data-aos-duration="800"><img
                        src="images/day-sale-img1.png" alt="Image"></div>
                <div class="day-sale-box__content block w-full text-start py-32 ps-lg-0 ps-24">
                    <h3 class="text-white font-[500] mb-24">CYBER MONDAY SALE</h3>
                    <h6 class="text-white font-[500] mb-8">UP TO 30% OFF</h6>
                    <h6 class="text-white font-[500] mb-0">COMPUTER & MOBILE ACCESSORIES</h6><a href="shop.html"
                        class="btn btn-outline-white flex items-center inline-flex rounded-[50rem] gap-8 mt-28"
                        tabindex="0">Shop Now <i class="ph ph-plus text-xl flex"></i></a>
                </div>
                <div class="lg:block hidden pe-xxl-5 pe-md-4" data-aos="zoom-in" data-aos-duration="800"><img
                        src="images/day-sale-img2.png" alt="Image"></div>
            </div>
        </div>
    </section>
    <section class="recently-viewed py-80 overflow-hidden">
        <div class="container container-lg">
            <div class="border border-gray-100 p-24 rounded-16">
                <div class="section-heading mb-24">
                    <div class="flex-between flex-wrap gap-8">
                        <h5 class="mb-0 wow bounceInLeft">Recently Viewed Products</h5>
                        <div class="flex items-center gap-16 wow bounceInRight"><a href="shop.html"
                                class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                                All Products</a></div>
                    </div>
                </div>
                <div class="row g-12">
                    <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        data-aos="fade-up" data-aos-duration="200">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                    Seller </span><img src="images/product-two-img1.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16"><span
                                    class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera -
                                        Green</a></h6>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center gap-8"><span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-xs font-[500] text-gray-500">(12K)</span>
                                </div><span
                                    class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>
                                <div class="product-card__price mt-16 mb-30"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><span
                                    class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                        02</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        data-aos="fade-up" data-aos-duration="400">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                <img src="images/product-two-img2.png" alt="Image" class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16"><span
                                    class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera -
                                        Green</a></h6>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center gap-8"><span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-xs font-[500] text-gray-500">(12K)</span>
                                </div><span
                                    class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>
                                <div class="product-card__price mt-16 mb-30"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><span
                                    class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                        02</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        data-aos="fade-up" data-aos-duration="600">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sale
                                    50%</span> <img src="images/product-two-img3.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16"><span
                                    class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera -
                                        Green</a></h6>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center gap-8"><span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-xs font-[500] text-gray-500">(12K)</span>
                                </div><span
                                    class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>
                                <div class="product-card__price mt-16 mb-30"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><span
                                    class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                        02</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        data-aos="fade-up" data-aos-duration="800">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-success-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Sold</span>
                                <img src="images/product-two-img4.png" alt="Image" class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16"><span
                                    class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera -
                                        Green</a></h6>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center gap-8"><span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-xs font-[500] text-gray-500">(12K)</span>
                                </div><span
                                    class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>
                                <div class="product-card__price mt-16 mb-30"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><span
                                    class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                        02</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        data-aos="fade-up" data-aos-duration="1000">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-tertiary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                    Seller </span><img src="images/product-two-img5.png" alt="Image"
                                    class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16"><span
                                    class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera -
                                        Green</a></h6>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center gap-8"><span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-xs font-[500] text-gray-500">(12K)</span>
                                </div><span
                                    class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>
                                <div class="product-card__price mt-16 mb-30"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><span
                                    class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                        02</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="custom-2xl:w-2/12 flex-grow-0 flex-shrink-0 basis-auto 2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                        data-aos="fade-up" data-aos-duration="1200">
                        <div
                            class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="product-details-two.html"
                                class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative"><span
                                    class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">New</span>
                                <img src="images/product-two-img6.png" alt="Image" class="!w-auto max-w-[unset]"></a>
                            <div class="product-card__content mt-16"><span
                                    class="text-main-600 bg-main-50 text-sm font-[500] py-4 px-8">19%OFF</span>
                                <h6 class="title text-lg font-[600] my-16"><a href="product-details-two.html"
                                        class="link text-line-2" tabindex="0">Instax Mini 12 Instant Film Camera -
                                        Green</a></h6>
                                <div class="flex items-center gap-6">
                                    <div class="flex items-center gap-8"><span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span> <span
                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span></div><span
                                        class="text-xs font-[500] text-gray-500">4.8</span> <span
                                        class="text-xs font-[500] text-gray-500">(12K)</span>
                                </div><span
                                    class="py-2 px-8 text-xs rounded-[50rem] text-main-two-600 bg-main-two-50 mt-16">Fulfilled
                                    by Marketpro</span>
                                <div class="product-card__price mt-16 mb-30"><span
                                        class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    <span class="text-heading text-md font-[600]">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span></span></div><span
                                    class="text-neutral-600">Delivered by <span class="text-main-600">Aug
                                        02</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shipping mb-80" id="shipping">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="400">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-car-profile"></i></span>
                        <div class="">
                            <h6 class="mb-0">Free Shipping</h6><span class="text-sm text-heading">Free shipping all over
                                the US</span>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="600">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-hand-heart"></i></span>
                        <div class="">
                            <h6 class="mb-0">100% Satisfaction</h6><span class="text-sm text-heading">Free shipping all
                                over the US</span>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="800">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-credit-card"></i></span>
                        <div class="">
                            <h6 class="mb-0">Secure Payments</h6><span class="text-sm text-heading">Free shipping all
                                over the US</span>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="1000">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-two-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-chats"></i></span>
                        <div class="">
                            <h6 class="mb-0">24/7 Support</h6><span class="text-sm text-heading">Free shipping all over
                                the US</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="newsletter-two bg-neutral-600 py-32 overflow-hidden" data-aos="fade-up" data-aos-duration="600">
        <div class="container container-lg">
            <div class="flex-between gap-20 flex-wrap">
                <div class="flex items-center gap-22"><span class="flex"><img src="images/envelop.png"
                            alt="Image"></span>
                    <div>
                        <h5 class="text-white mb-12 font-[500]">Join Our Newsletter, Get 10% Off</h5>
                        <p class="text-white font-[300]">Get all latest information on events, sales and offer</p>
                    </div>
                </div>
                <form action="index-two.html#" class="newsletter-two__form w-[50%]">
                    <div class="flex items-center gap-16"><input
                            class="common-input style-two rounded-8 flex-grow py-14"
                            placeholder="Enter your email address"> <button type="submit"
                            class="btn btn-main-two flex-shrink-0 rounded-8 py-16">Subscribe</button></div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer py-80 overflow-hidden">
        <div class="container container-lg">
            <div class="footer-item-two-wrapper flex items-start flex-wrap">
                <div class="footer-item max-w-275" data-aos="fade-up" data-aos-duration="200">
                    <div class="footer-item__logo"><a href="index.html"><img src="images/logo-two-black.png"
                                alt="Image"></a></div>
                    <p class="mb-24">Marketpro become the largest computer parts, gaming pc parts, and other IT related
                        products.</p>
                    <div class="flex items-center gap-16 mb-16"><span
                            class="w-32 h-32 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i
                                class="ph-fill ph-phone-call"></i></span> <a href="tel:+00123456789"
                            class="text-md text-gray-900 hover-text-main-600">+00 123 456 789</a></div>
                    <div class="flex items-center gap-16 mb-16"><span
                            class="w-32 h-32 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i
                                class="ph-fill ph-envelope"></i></span> <a href="mailto:support24@marketpro.com"
                            class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a></div>
                    <div class="flex items-center gap-16 mb-16"><span
                            class="w-32 h-32 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i
                                class="ph-fill ph-map-pin"></i></span> <span class="text-md text-gray-900">789 Inner
                            Lane, California, USA</span></div>
                </div>
                <div class="footer-item" data-aos="fade-up" data-aos-duration="400">
                    <h6 class="footer-item__title">About us</h6>
                    <ul class="footer-menu">
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Company
                                Profile</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">All Retail
                                Store</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Merchant
                                Center</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Affiliate</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Contact Us</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Feedback</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Huawei Group</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Rules &
                                Policy</a></li>
                    </ul>
                </div>
                <div class="footer-item" data-aos="fade-up" data-aos-duration="600">
                    <h6 class="footer-item__title">Customer Support</h6>
                    <ul class="footer-menu">
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Help Center</a>
                        </li>
                        <li class="mb-16"><a href="contact.html" class="text-gray-600 hover-text-main-600">Contact
                                Us</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Gift Card</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Report Abuse</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Submit and
                                Dispute</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Policies &
                                Rules</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Online
                                Shopping</a></li>
                        <li class=""><a href="shop.html" class="text-gray-600 hover-text-main-600">Redeem Voucher</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-item" data-aos="fade-up" data-aos-duration="800">
                    <h6 class="footer-item__title">My Account</h6>
                    <ul class="footer-menu">
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">My Account</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Order
                                History</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Shoping Cart</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Compare</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Help Ticket</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Wishlist</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Order
                                History</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Product
                                Support</a></li>
                    </ul>
                </div>
                <div class="footer-item" data-aos="fade-up" data-aos-duration="1000">
                    <h6 class="footer-item__title">Information</h6>
                    <ul class="footer-menu">
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Become a
                                Vendor</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Affiliate
                                Program</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Privacy
                                Policy</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Our
                                Suppliers</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Extended
                                Plan</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Extended
                                Plan</a></li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Community</a>
                        </li>
                        <li class="mb-16"><a href="shop.html" class="text-gray-600 hover-text-main-600">Community</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-item" data-aos="fade-up" data-aos-duration="1200">
                    <h6 class="">Shop on The Go</h6>
                    <p class="mb-16">Marketpro App is available. Get it now</p>
                    <div class="flex items-center gap-8 my-32"><a href="https://www.apple.com/store" class=""><img
                                src="images/store-img1.png" alt="Image"> </a><a
                            href="https://play.google.com/store/apps?hl=en" class=""><img src="images/store-img2.png"
                                alt="Image"></a></div>
                    <ul class="flex items-center gap-16">
                        <li><a href="https://www.facebook.com"
                                class="w-44 h-44 flex items-center justify-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white"><i
                                    class="ph-fill ph-facebook-logo"></i></a></li>
                        <li><a href="https://www.twitter.com"
                                class="w-44 h-44 flex items-center justify-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white"><i
                                    class="ph-fill ph-twitter-logo"></i></a></li>
                        <li><a href="https://www.linkedin.com"
                                class="w-44 h-44 flex items-center justify-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white"><i
                                    class="ph-fill ph-instagram-logo"></i></a></li>
                        <li><a href="https://www.pinterest.com"
                                class="w-44 h-44 flex items-center justify-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white"><i
                                    class="ph-fill ph-linkedin-logo"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="bottom-footer bg-color-three py-8">
        <div class="container container-lg">
            <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
                <p class="bottom-footer__text wow fadeInLeftBig">Marketpro eCommerce &copy; 2024. All Rights Reserved
                </p>
                <div class="flex items-center gap-8 flex-wrap wow fadeInRightBig"><span class="text-heading text-sm">We
                        Are Accepting</span> <img src="images/payment-method.png" alt="Image"></div>
            </div>
        </div>
    </div>
</body>

</html>