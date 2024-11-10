<!doctype html>
<html lang="en" class="color-two font-exo">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MarketPro - E-commerce HTML5 Tailwind CSS Template</title>
    <link rel="shortcut icon" href="images/favicon.png">
    <script defer="defer" src="js/app.bundle.js"></script>
    <link href="css/app.min.css" rel="stylesheet">
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
    <form action="account.html#" class="search-box"><button type="button"
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
                    <form action="account.html#" class="flex items-center flex-wrap form-location-wrapper">
                        <div class="search-category style-two h-48 search-form md:flex hidden"><select
                                class="js-example-basic-single border-gray-200 border-r-0 rounded-none border-0"
                                name="state">
                                <option value="1" selected="selected" disabled="disabled">All Categories</option>
                                <option value="1">Grocery</option>
                                <option value="1">Breakfast & Dairy</option>
                                <option value="1">Vegetables</option>
                                <option value="1">Milks and Dairies</option>
                                <option value="1">Pet Foods & Toy</option>
                                <option value="1">Breads & Bakery</option>
                                <option value="1">Fresh Seafood</option>
                                <option value="1">Fronzen Foods</option>
                                <option value="1">Noodles & Rice</option>
                                <option value="1">Ice Cream</option>
                            </select>
                            <div class="search-form__wrapper relative"><input
                                    class="search-form__input common-input py-13 ps-16 pe-18 rounded-none border-0"
                                    placeholder="Search for a product or brand"></div><button type="submit"
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
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Profile</span>
                        </a><a href="wishlist.html" class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                    class="ph ph-heart"></i> <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Wishlist</span>
                        </a><a href="cart.html" class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                    class="ph-fill ph-shuffle"></i> <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Compare</span>
                        </a><a href="cart.html" class="flex items-center flex-col gap-8 item-hover-two"><span
                                class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                    class="ph ph-shopping-cart-simple"></i> <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span><span class="text-md text-white item-hover__text hidden xl:flex">Cart</span></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <header class="header bg-white border-b border-gray-100">
        <div class="container container-lg">
            <nav class="header-inner flex justify-between gap-8">
                <div class="flex items-center menu-category-wrapper">
                    <div class="category-two hidden"><button type="button"
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
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Cell
                                            Phone</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Cell Phone</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Wear</span>
                                        <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Wear</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Computer</span>
                                        <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Computer</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Headphone</span>
                                        <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Smart
                                            Screen</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Smart
                                            Home</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Smart Home</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Digital
                                            Accessories</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Digital Accessories</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Value
                                            Added Services</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Value Added Services</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Car
                                            Products</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Car Products</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Ecological
                                            Products</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Ecological Products</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Flat</span>
                                        <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Flat</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Commercial
                                            Terminal</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Commercial Terminal</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Headphone</span>
                                        <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span>Smart
                                            Screen</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Samsung</a></li>
                                            <li><a href="shop.html">Iphone</a></li>
                                            <li><a href="shop.html">Vivo</a></li>
                                            <li><a href="shop.html">Oppo</a></li>
                                            <li><a href="shop.html">Itel</a></li>
                                            <li><a href="shop.html">Realme</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="category block on-hover-item bg-main-600 text-white"><button type="button"
                            class="category__button flex items-center gap-8 font-[500] p-16 border-r border-l border-gray-100 text-white"><span
                                class="icon text-2xl sm:flex hidden"><i class="ph ph-dots-nine"></i></span> <span
                                class="md:flex hidden">All</span> Categories <span class="arrow-icon text-xl flex"><i
                                    class="ph ph-caret-down"></i></span></button>
                        <div
                            class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                            <button type="button"
                                class="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex"><i
                                    class="ph ph-x"></i></button>
                            <div class="logo px-16 xl:hidden block"><a href="index.html" class="link"><img
                                        src="images/logo.png" alt="Logo"></a></div>
                            <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span
                                            class="text-xl flex"><i class="ph ph-carrot"></i></span> <span>Vegetables
                                            &amp; Fruit</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Potato &amp; Tomato</a></li>
                                            <li><a href="shop.html">Cucumber &amp; Capsicum</a></li>
                                            <li><a href="shop.html">Leafy Vegetables</a></li>
                                            <li><a href="shop.html">Root Vegetables</a></li>
                                            <li><a href="shop.html">Beans &amp; Okra</a></li>
                                            <li><a href="shop.html">Cabbage &amp; Cauliflower</a></li>
                                            <li><a href="shop.html">Gourd &amp; Drumstick</a></li>
                                            <li><a href="shop.html">Specialty</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span
                                            class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                        <span>Beverages</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Soda &amp; Cocktail Mix</a></li>
                                            <li><a href="shop.html">Sports &amp; Energy Drinks</a></li>
                                            <li><a href="shop.html">Non Alcoholic Drinks</a></li>
                                            <li><a href="shop.html">Packaged Water</a></li>
                                            <li><a href="shop.html">Spring Water</a></li>
                                            <li><a href="shop.html">Flavoured Water</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span
                                            class="text-xl flex"><i class="ph ph-brandy"></i></span> <span>Meats &amp;
                                            Seafood</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Meats &amp; Seafood</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Fresh Meat</a></li>
                                            <li><a href="shop.html">Frozen Meat</a></li>
                                            <li><a href="shop.html">Marinated Meat</a></li>
                                            <li><a href="shop.html">Fresh &amp; Frozen Meat</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span
                                            class="text-xl flex"><i class="ph ph-brandy"></i></span> <span>Breakfast
                                            &amp; Dairy</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Breakfast &amp; Dairy</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Oats &amp; Porridge</a></li>
                                            <li><a href="shop.html">Kids Cereal</a></li>
                                            <li><a href="shop.html">Muesli</a></li>
                                            <li><a href="shop.html">Flakes</a></li>
                                            <li><a href="shop.html">Granola &amp; Cereal Bars</a></li>
                                            <li><a href="shop.html">Instant Noodles</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span
                                            class="text-xl flex"><i class="ph ph-brandy"></i></span> <span>Frozen
                                            Foods</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Instant Noodles</a></li>
                                            <li><a href="shop.html">Hakka Noodles</a></li>
                                            <li><a href="shop.html">Cup Noodles</a></li>
                                            <li><a href="shop.html">Vermicelli</a></li>
                                            <li><a href="shop.html">Instant Pasta</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span
                                            class="text-xl flex"><i class="ph ph-brandy"></i></span> <span>Biscuits
                                            &amp; Snacks</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Biscuits &amp; Snacks</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Salted Biscuits</a></li>
                                            <li><a href="shop.html">Marie, Health, Digestive</a></li>
                                            <li><a href="shop.html">Cream Biscuits &amp; Wafers</a></li>
                                            <li><a href="shop.html">Glucose &amp; Milk biscuits</a></li>
                                            <li><a href="shop.html">Cookies</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-submenus-submenu"><a href="javascript:void(0)"
                                        class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none"><span
                                            class="text-xl flex"><i class="ph ph-brandy"></i></span> <span>Grocery &amp;
                                            Staples</span> <span class="icon text-md flex ms-auto"><i
                                                class="ph ph-caret-right"></i></span></a>
                                    <div class="submenus-submenu py-16">
                                        <h6 class="text-lg px-16 submenus-submenu__title">Grocery &amp; Staples</h6>
                                        <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                            <li><a href="shop.html">Lemon, Ginger &amp; Garlic</a></li>
                                            <li><a href="shop.html">Indian &amp; Exotic Herbs</a></li>
                                            <li><a href="shop.html">Orangic Vegetables</a></li>
                                            <li><a href="shop.html">Orangic Fruits</a></li>
                                            <li><a href="shop.html">Orangic Dry Fruits</a></li>
                                            <li><a href="shop.html">Orangic Dals &amp; pulses</a></li>
                                            <li><a href="shop.html">Orangic Millet &amp; Flours</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-menu xl:block hidden">
                        <ul class="nav-menu flex items-center">
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
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop</a>
                                    </li>
                                    <li class="common-dropdown__item nav-submenu__item"><a href="product-details.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop
                                            Details</a></li>
                                    <li class="common-dropdown__item nav-submenu__item"><a
                                            href="product-details-two.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop
                                            Details Two</a></li>
                                </ul>
                            </li>
                            <li class="on-hover-item nav-menu__item has-submenu"><span
                                    class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                                <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                                <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                    <li class="common-dropdown__item nav-submenu__item"><a href="cart.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Cart</a>
                                    </li>
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
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendors
                                            Two</a></li>
                                    <li class="common-dropdown__item nav-submenu__item"><a
                                            href="vendor-two-details.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendors
                                            Two Details</a></li>
                                </ul>
                            </li>
                            <li class="on-hover-item nav-menu__item has-submenu"><a href="javascript:void(0)"
                                    class="nav-menu__link">Blog</a>
                                <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                    <li class="common-dropdown__item nav-submenu__item"><a href="blog.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Blog</a>
                                    </li>
                                    <li class="common-dropdown__item nav-submenu__item"><a href="blog-details.html"
                                            class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Blog
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-menu__item"><a href="contact.html" class="nav-menu__link">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-right flex items-center">
                    <div class="select-dropdown-for-home-two xl:block hidden">
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
                    <div class="me-8 xl:hidden block">
                        <div class="header-two-activities flex items-center flex-wrap gap-32"><button type="button"
                                class="items-center search-icon xl:hidden flex gap-4 item-hover-two"><span
                                    class="text-2xl text-white flex relative item-hover__text"><i
                                        class="ph ph-magnifying-glass"></i></span></button> <a href="account.html"
                                class="flex items-center flex-col gap-8 item-hover-two"><span
                                    class="text-2xl text-white flex relative item-hover__text"><i
                                        class="ph ph-user"></i> </span><span
                                    class="text-md text-white item-hover__text hidden xl:flex">Profile</span> </a><a
                                href="wishlist.html" class="flex items-center flex-col gap-8 item-hover-two"><span
                                    class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                        class="ph ph-heart"></i> <span
                                        class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                                </span><span class="text-md text-white item-hover__text hidden xl:flex">Wishlist</span>
                            </a><a href="cart.html" class="flex items-center flex-col gap-8 item-hover-two"><span
                                    class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                        class="ph-fill ph-shuffle"></i> <span
                                        class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                                </span><span class="text-md text-white item-hover__text hidden xl:flex">Compare</span>
                            </a><a href="cart.html" class="flex items-center flex-col gap-8 item-hover-two"><span
                                    class="text-2xl text-white flex relative me-6 mt-6 item-hover__text"><i
                                        class="ph ph-shopping-cart-simple"></i> <span
                                        class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-two-600 text-white text-xs absolute top-n6 end-n4">2</span>
                                </span><span class="text-md text-white item-hover__text hidden xl:flex">Cart</span></a>
                        </div>
                    </div><button type="button" class="toggle-mobileMenu xl:hidden ms-3n text-gray-800 text-4xl flex"><i
                            class="ph ph-list"></i></button>
                </div>
            </nav>
        </div>
    </header>
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">My Account</h6>
                <ul class="flex items-center gap-8 flex-wrap">
                    <li class="text-sm"><a href="index.html"
                            class="text-gray-900 flex items-center gap-8 hover-text-main-600"><i
                                class="ph ph-house"></i> Home</a></li>
                    <li class="flex items-center"><i class="ph ph-caret-right"></i></li>
                    <li class="text-sm text-main-600">Account</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="account py-80">
        <div class="container container-lg">
            <form action="/dang-nhap" method="post">
                @csrf
                <div class="row g-4 flex justify-center">
                    <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto pe-xl-5">
                        @include('error')
                        <div
                            class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-full">
                            <h6 class="text-xl mb-32">Login</h6>
                            <div class="mb-24"><label for="username"
                                    class="text-neutral-900 text-lg mb-8 font-[500]">Username or email address <span
                                        class="text-danger">*</span></label> <input class="common-input" name="name" id="username"
                                    placeholder="First Name"></div>
                            <div class="mb-24"><label for="password"
                                    class="text-neutral-900 text-lg mb-8 font-[500]">Password</label>
                                <div class="relative"><input type="password" class="common-input" name="password" id="password"
                                        placeholder="Enter Password"> <span
                                        class="toggle-password absolute top-[50%] right-0 me-16 translate-y-[-50%] cursor-pointer ph ph-eye-slash"
                                        id="#password"></span></div>
                            </div>
                            <div class="mb-24 mt-48">
                                <div class="flex items-center gap-48 flex-wrap"><button type="submit"
                                        class="btn btn-main py-18 px-40">Log in</button>
                                    <div class="form-check common-check"><input class="form-check-input" type="checkbox"
                                            name="remember" id="remember"> <label class="form-check-label flex-grow"
                                            for="remember">Remember me</label></div>
                                </div>
                            </div>
                            <div class="mt-48"><a href="index.html"
                                    class="text-danger-600 text-sm font-[600] hover-text-decoration-underline">Forgot
                                    your password?</a></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="shipping mb-24" id="shipping">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="400">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"><i
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
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"><i
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
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"><i
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
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"><i
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