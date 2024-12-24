<!doctype html>
<html lang="en" class="color-two font-exo">

@include('head')
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
    <form action="product-details-two.html#" class="search-box"><button type="button"
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
    @include('search_bar')
    @include('categories_bar')
    <div class="breadcrumb mb-0 py-26 bg-main-two-50">
        <div class="container container-lg">
            <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
                <h6 class="mb-0">Product Details</h6>
                <ul class="flex items-center gap-8 flex-wrap">
                    <li class="text-sm"><a href="index.html"
                            class="text-gray-900 flex items-center gap-8 hover-text-main-600"><i
                                class="ph ph-house"></i> Home</a></li>
                    <li class="flex items-center"><i class="ph ph-caret-right"></i></li>
                    <li class="text-sm text-main-600">Lay's Potato Chips</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="product-details py-80">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="2xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="row g-4">
                        <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
                            <div class="product-details__left">
                                <div class="product-details__thumb-slider border border-gray-100 rounded-16">
                                    @if (!is_null($product['images']))
                                    @foreach (json_decode($product['images']) as $img)
                                    <div class="">
                                        <div class="product-details__thumb flex items-center justify-center h-full"><img
                                                src="{{$img}}" alt="Image" class="w-full"></div>
                                    </div>
                                    @endforeach
                                    @endif                                    
                                </div>
                                <div class="mt-24">
                                    <div class="product-details__images-slider">
                                        @if (!is_null($product['images']))
                                        @foreach (json_decode($product['images']) as $img)
                                        <div>
                                            <div
                                                class="max-w-120 max-h-120 h-full flex items-center justify-center border border-gray-100 rounded-16 p-8">
                                                <img src="/{{$img}}" alt="Image"></div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
                            <div class="product-details__content">
                                <div
                                    class="flex items-center justify-center mb-24 flex-wrap gap-16 bg-color-one rounded-8 py-16 px-24 relative z-[1]">
                                    <img src="images/details-offer-bg.png" alt="Image"
                                        class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full z-[-1]">
                                    <div class="flex items-center gap-16"><span class="text-white text-sm">Special
                                            Offer:</span></div>
                                    <div class="countdown" id="countdown11">
                                        <ul class="countdown-list flex items-center flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-xs font-[500] w-28 h-28 rounded-4 border border-main-600 !p-0 justify-center">
                                                <span class="days"></span></li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-xs font-[500] w-28 h-28 rounded-4 border border-main-600 !p-0 justify-center">
                                                <span class="hours"></span></li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-xs font-[500] w-28 h-28 rounded-4 border border-main-600 !p-0 justify-center">
                                                <span class="minutes"></span></li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-xs font-[500] w-28 h-28 rounded-4 border border-main-600 !p-0 justify-center">
                                                <span class="seconds"></span></li>
                                        </ul>
                                    </div><span class="text-white text-xs">Remains untill the end of the offer</span>
                                </div>
                                <h5 class="mb-12">{{ $product['product_name'] }}
                                </h5>
                                <div class="flex items-center flex-wrap gap-12">
                                    <div class="flex items-center gap-12 flex-wrap">
                                        <div class="flex items-center gap-8">
                                            @php
                                            if ($product['rating_times'] != 0) {
                                                for ($i = 1; $i <= round($product['rating']/$product['rating_times']); $i++) {
                                                    echo '<span class="text-15 font-[500] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>';
                                                }
                                            }
                                            @endphp
                                            </div><span
                                            class="text-sm font-[500] text-neutral-600">@if ($product['rating_times'] == 0) {{0}} @else {{number_format($product['rating']/$product['rating_times'], 1)}} @endif sao</span> <span
                                            class="text-sm font-[500] text-gray-500">(21,671)</span>
                                    </div>
                                </div>
                                <div class="my-32 flex items-center gap-16 flex-wrap">
                                    <div class="flex items-center gap-8">
                                        <div class="flex items-center gap-8 text-main-two-600">Giá tiền: </div>
                                        <h6 class="mb-0">{{ number_format($product['price']) }} đ</h6>
                                    </div>
                                </div>
                                <span class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span>
                                <div class="my-32 flex items-center flex-wrap gap-12"><a href="index.html"
                                        class="px-12 py-8 text-sm rounded-8 flex items-center gap-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">Monthyly
                                        EMI USD 15.00 <i class="ph ph-caret-right"></i> </a><a href="index.html"
                                        class="px-12 py-8 text-sm rounded-8 flex items-center gap-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">Shipping
                                        Charge <i class="ph ph-caret-right"></i> </a><a href="index.html"
                                        class="px-12 py-8 text-sm rounded-8 flex items-center gap-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">Security
                                        & Privacy <i class="ph ph-caret-right"></i></a></div><span
                                    class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span>
                                <div class="mt-32">
                                    <h6 class="mb-16">Tổng quan sản phẩm</h6>
                                    <div class="flex-between items-start flex-wrap gap-16">
                                        <div><span class="text-gray-900 block mb-12">Màu: <span
                                                    class="font-[500]">{{ $product['color'] }}</span></span>
                                            <div class="color-list flex items-center gap-8">
                                                @foreach ($editions as $edition)
                                                @switch($edition['color'])
                                                    @case("Xanh dương")
                                                        <button type="button" onclick="javascript:window.location.href='/san-pham/{{ $edition['slug_vi'] }}"
                                                        class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-info-600"></button>
                                                        @break
                                                    @case("Xanh lá")
                                                        <button type="button" onclick="javascript:window.location.href='/san-pham/{{ $edition['slug_vi'] }}"
                                                        class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-success-600"></button>
                                                        @break
                                                    @case("Đỏ")
                                                        <button type="button" onclick="javascript:window.location.href='/san-pham/{{ $edition['slug_vi'] }}"
                                                        class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-error-600"></button>
                                                        @break
                                                    @case("Vàng")
                                                        <button type="button" onclick="javascript:window.location.href='/san-pham/{{ $edition['slug_vi'] }}"
                                                        class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-warning-600"></button>
                                                        @break
                                                    @case("Trắng")
                                                        <button type="button" onclick="javascript:window.location.href='/san-pham/{{ $edition['slug_vi'] }}"
                                                        class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-white"></button>
                                                        @break
                                                    @case("Tím")
                                                        <button type="button" onclick="javascript:window.location.href='/san-pham/{{ $edition['slug_vi'] }}"
                                                        class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-tertiary-600"></button>
                                                        @break
                                                    @case("Xám")
                                                        <button type="button" onclick="javascript:window.location.href='/san-pham/{{ $edition['slug_vi'] }}"
                                                        class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-gray-100"></button>
                                                        @break
                                                    @case("Đen")
                                                        <button type="button" onclick="javascript:window.location.href='/san-pham/{{ $edition['slug_vi'] }}"
                                                        class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-black"></button>
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                                @endforeach
                                            </div>
                                        </div>
                                        <div><span class="text-gray-900 block mb-12">Phiên bản: <span
                                                    class="font-[500]">{{ $product['edition'] }}</span></span>
                                            <div class="flex items-center gap-8 flex-wrap">
                                                @foreach ($editions as $edition)
                                                <a href="/san-pham/{{$edition['slug_vi']}}"
                                                    class="px-12 py-8 text-sm rounded-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">{{ $edition['edition'] }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div><span class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span> <a
                                    href="https://www.whatsapp.com"
                                    class="btn btn-black flex items-center justify-center gap-8 rounded-8 py-16"><i
                                        class="ph ph-whatsapp-logo text-lg"></i> Cần Thêm Thông Tin</a>
                                <div class="mt-32"><span class="font-[500] text-gray-900">Đảm bảo 100% thanh toán an toàn</span>
                                    <div class="mt-10"><img src="images/gateway-img.png" alt="Image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <form action="/them-vao-gio" method="post" class="product-details__sidebar py-40 px-32 border border-gray-100 rounded-16">
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product['id'] }}">
                        <div class="mb-32"><label for="delivery"
                                class="h6 activePage mb-8 text-heading font-[600] block">Giao hàng</label>
                            <div class="flex items-center border border-gray-100 rounded-4 px-16 my-16">
                                <span
                                    class="text-xl flex text-main-600"><i class="ph ph-map-pin"></i> </span>
                                <select
                                    class="common-input !border-0 px-8 rounded-4" id="province" name="province" onchange="changeAgency()">
                                        <option hidden>Chọn tỉnh thành</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Hải Phòng">Hải Phòng</option>
                                        <option value="Vinh">Vinh</option>
                                        <option value="Huế">Huế</option>
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Thành Phố Hồ Chí Minh">Thành Phố Hồ Chí Minh</option>
                                        <option value="Cần Thơ">Cần Thơ</option>
                                </select>
                            </div>
                            <div class="flex items-center border border-gray-100 rounded-4 px-16">
                                <span
                                    class="text-xl flex text-main-600"><i class="ph ph-map-pin"></i> </span>
                                <select
                                    class="common-input !border-0 px-8 rounded-4" id="agency" name="agency" onchange="getQuantity()">
                                        <option value="" hidden>Chọn tỉnh thành</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-32"><label id="stock" for="quantity" class="text-lg mb-8 text-heading font-[600] block"></label> <span class="text-xl flex"><i class="ph ph-location"></i></span>
                            <div class="flex rounded-4 overflow-hidden"><button type="button"
                                    class="quantity__minus flex-shrink-0 h-48 w-48 text-neutral-600 bg-gray-50 flex items-center justify-center hover-bg-main-600 hover-text-white"><i
                                        class="ph ph-minus"></i></button> <input type="number"
                                    class="quantity__input flex-grow border border-gray-100 border-l-0 border-r-0 text-center w-32 px-16"
                                    id="quantity" name="quantity" value="1" min="1"> <button type="button"
                                    class="quantity__plus flex-shrink-0 h-48 w-48 text-neutral-600 bg-gray-50 flex items-center justify-center hover-bg-main-600 hover-text-white"><i
                                        class="ph ph-plus"></i></button></div>
                        </div>
                        <div class="mb-32">
                            <div class="flex-between flex-wrap gap-8 border-b border-gray-100 pb-16 mb-16"><span
                                    class="text-gray-500">Giá</span>
                                <h6 class="text-lg mb-0">{{ number_format($product['price']).' đ' }}</h6>
                            </div>
                            <div class="flex-between flex-wrap gap-8"><span class="text-gray-500">Vận chuyển</span>
                                <h6 class="text-lg mb-0">Miễn phí</h6>
                            </div>
                        </div>
                        <a href="javascript:addToCart({{ $product['id'] }})"
                            class="btn btn-main flex items-center justify-center gap-8 rounded-8 py-16 font-normal mt-48"><i
                                class="ph ph-shopping-cart-simple text-lg"></i> Thêm vào giỏ hàng </a>
                                <a href="javascript:addToCart({{ $product['id'] }})"
                            class="btn btn-outline-main ritu rounded-8 py-16 font-normal mt-16 w-full">Mua ngay</a>
                        <div class="mt-32">
                            <div class="px-16 py-8 bg-main-50 rounded-8 flex-between gap-24 mb-14"><span
                                    class="w-32 h-32 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-xl flex-shrink-0"><i
                                        class="ph-fill ph-truck"></i> </span><span class="text-sm text-neutral-600">Ship
                                    from <span class="font-[600]">MarketPro</span></span></div>
                            <div class="px-16 py-8 bg-main-50 rounded-8 flex-between gap-24 mb-0"><span
                                    class="w-32 h-32 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-xl flex-shrink-0"><i
                                        class="ph-fill ph-storefront"></i> </span><span
                                    class="text-sm text-neutral-600">Sold by: <span class="font-[600]">MR Distribution
                                        LLC</span></span></div>
                        </div>
                        <div class="mt-32">
                            <div class="px-32 py-16 rounded-8 border border-gray-100 flex-between gap-8"><a
                                    href="index.html" class="flex text-main-600 text-28"><i
                                        class="ph-fill ph-chats-teardrop"></i></a> <span
                                    class="h-26 border border-gray-100"></span>
                                <div class="dropdown on-hover-item"><button class="flex text-main-600 text-28"
                                        type="button"><i class="ph-fill ph-share-network"></i></button>
                                    <div
                                        class="on-hover-dropdown common-dropdown border-0 inset-inline-start-auto right-0">
                                        <ul class="flex items-center gap-16">
                                            <li><a href="https://www.facebook.com"
                                                    class="w-44 h-44 flex items-center justify-center bg-main-100 text-main-600 text-xl rounded-[50%] hover-bg-main-600 hover-text-white"><i
                                                        class="ph-fill ph-facebook-logo"></i></a></li>
                                            <li><a href="https://www.twitter.com"
                                                    class="w-44 h-44 flex items-center justify-center bg-main-100 text-main-600 text-xl rounded-[50%] hover-bg-main-600 hover-text-white"><i
                                                        class="ph-fill ph-twitter-logo"></i></a></li>
                                            <li><a href="https://www.linkedin.com"
                                                    class="w-44 h-44 flex items-center justify-center bg-main-100 text-main-600 text-xl rounded-[50%] hover-bg-main-600 hover-text-white"><i
                                                        class="ph-fill ph-instagram-logo"></i></a></li>
                                            <li><a href="https://www.pinterest.com"
                                                    class="w-44 h-44 flex items-center justify-center bg-main-100 text-main-600 text-xl rounded-[50%] hover-bg-main-600 hover-text-white"><i
                                                        class="ph-fill ph-linkedin-logo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="pt-80">
                <div class="product-dContent border rounded-24">
                    <div class="product-dContent__header border-b border-gray-100 flex-between flex-wrap gap-16">
                        <ul class="nav common-tab nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn active"
                                    data-target="#pills-description" id="pills-description-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-description" type="button" role="tab"
                                    aria-controls="pills-description" aria-selected="true">Mô tả</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link bt-tb-btn"
                                    data-target="#pills-reviews" id="pills-reviews-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-reviews" type="button" role="tab"
                                    aria-controls="pills-reviews" aria-selected="false">Đánh giá</button></li>
                        </ul><a href="index.html"
                            class="btn bg-color-one rounded-16 flex items-center gap-8 text-main-600 hover-bg-main-600 hover-text-white"><img
                                src="images/satisfaction-icon.png" alt="Image"> Đảm bảo 100% thanh toán an toàn</a>
                    </div>
                    <div class="product-dContent__box">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane bt-tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab" tabindex="0">
                                <div class="mb-40">
                                    {!! base64_decode($product['description']) !!}
                                </div>
                            </div>
                            <div class="tab-pane bt-tab-pane fade" id="pills-reviews" role="tabpanel"
                                aria-labelledby="pills-reviews-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
                                        <h6 class="mb-24">Product Description</h6>
                                        <div id="comments-container">
                                        @foreach ($comments as $comment)
                                        <div class="flex items-start gap-24 pb-44 border-b border-gray-100 mb-44"><img
                                                src="/{{$comment['getUser']['avatar']}}" alt="Image"
                                                class="w-52 h-52 object-fit-cover rounded-[50%] flex-shrink-0">
                                            <div class="flex-grow">
                                                <div class="flex-between items-start gap-8">
                                                    <div>
                                                        <h6 class="mb-12 text-md">{{ $comment['getUser']['lname'].' '.$comment['getUser']['fname']}}</h6>
                                                        <div class="flex items-center gap-8 star">
                                                            @for ($i = 1; $i <= $comment['rating']; $i++)
                                                            <span
                                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                            @endfor
                                                            @for ($i = 5; $i > $comment['rating']; $i--)
                                                            <span
                                                            class="text-15 font-[500] text-warning-600 flex"><i
                                                                class="ph ph-star"></i></span>
                                                            @endfor
                                                        </div>
                                                    </div><span class="text-gray-800 text-xs">{{ $comment['created_at'] }}</span>
                                                </div>
                                                <h6 class="mb-14 text-md mt-24">{{ $comment['title'] }}</h6>
                                                <p class="text-gray-700">@if (!is_null($comment['content'])) {{$comment['content']}} @endif</p>
                                                <div class="flex items-center gap-20 mt-44"><button
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"><i
                                                            class="ph-bold ph-thumbs-up"></i> Like</button> <a
                                                        href="product-details-two.html#comment-form"
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"><i
                                                            class="ph-bold ph-arrow-bend-up-left"></i> Replay</a></div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        <div class="flex items-start gap-24"><img src="images/comment-img1.png"
                                                alt="Image"
                                                class="w-52 h-52 object-fit-cover rounded-[50%] flex-shrink-0">
                                            <div class="flex-grow">
                                                <div class="flex-between items-start gap-8">
                                                    <div>
                                                        <h6 class="mb-12 text-md">Nicolas cage</h6>
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
                                                                    class="ph-fill ph-star"></i></span></div>
                                                    </div><span class="text-gray-800 text-xs">3 Days ago</span>
                                                </div>
                                                <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                                                <p class="text-gray-700">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered alteration in some
                                                    form, by injected humour</p>
                                                <div class="flex items-center gap-20 mt-44"><button
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"><i
                                                            class="ph-bold ph-thumbs-up"></i> Like</button> <a
                                                        href="product-details-two.html#comment-form"
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600"><i
                                                            class="ph-bold ph-arrow-bend-up-left"></i> Replay</a></div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="mt-56">
                                            <div class="">
                                                <h6 class="mb-24">Write a Review</h6><span
                                                    class="text-heading mb-8">What is it like to Product?</span>
                                                <div class="rating-star flex items-center gap-8"><label for="rating-1"
                                                        class="text-24 font-[500] text-warning-600 flex"><i
                                                            class="ph ph-star"></i></label> <label for="rating-2"
                                                        class="text-24 font-[500] text-warning-600 flex"><i
                                                            class="ph ph-star"></i></label> <label for="rating-3"
                                                        class="text-24 font-[500] text-warning-600 flex"><i
                                                            class="ph ph-star"></i></label> <label for="rating-4"
                                                        class="text-24 font-[500] text-warning-600 flex"><i
                                                            class="ph ph-star"></i></label> <label for="rating-5"
                                                        class="text-24 font-[500] text-warning-600 flex"><i
                                                            class="ph ph-star"></i></label>
                                                </div>
                                                <div class="hidden">
                                                    <input type="radio" name="rating" value="1" id="rating-1">
                                                    <input type="radio" name="rating" value="2" id="rating-2">
                                                    <input type="radio" name="rating" value="3" id="rating-3">
                                                    <input type="radio" name="rating" value="4" id="rating-4">
                                                    <input type="radio" name="rating" value="5" id="rating-5">
                                                </div>
                                            </div>
                                            <div class="mt-32">
                                                <div>
                                                    <div class="mb-32"><label for="title"
                                                            class="text-neutral-600 mb-8">Review Title</label> <input
                                                            class="common-input rounded-8" id="title" name="title"
                                                            placeholder="Tiêu đề"></div>
                                                    <div class="mb-32"><label for="desc"
                                                            class="text-neutral-600 mb-8">Review Content</label>
                                                        <textarea class="common-input rounded-8"
                                                            id="desc" name="content" placeholder="Nội dung"></textarea>
                                                    </div><button type="button" id="submit-cmt" onclick="submitComment({{$product['id']}})"
                                                        class="btn btn-main rounded-[50rem] mt-48">Gửi đánh giá</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
                                        <div class="ms-xxl-5">
                                            <h6 class="mb-24">Customers Feedback</h6>
                                            <div class="flex flex-wrap gap-44">
                                                <div
                                                    class="border border-gray-100 rounded-8 px-40 py-52 flex items-center justify-center flex-col flex-shrink-0 text-center">
                                                    <h2 class="mb-6 text-main-600">@if ($product['rating_times'] == 0) {{0}} @else {{number_format($product['rating']/$product['rating_times'], 1)}} @endif</h2>
                                                    <div class="flex items-center justify-center gap-8">
                                                        @php
                                                        if ($product['rating_times'] != 0) {
                                                            for ($i = 1; $i <= round($product['rating']/$product['rating_times']); $i++) {
                                                                echo '<span class="text-15 font-[500] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>';
                                                            }
                                                        }
                                                        @endphp
                                                        </div><span
                                                        class="mt-16 text-gray-500">Average Product Rating</span>
                                                </div>
                                                {{-- <div class="border border-gray-100 rounded-8 px-24 py-40 flex-grow">
                                                    <div class="flex items-center gap-8 mb-20"><span
                                                            class="text-gray-900 flex-shrink-0">5</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width:70%"></div>
                                                        </div>
                                                        <div class="flex items-center gap-4"><span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span></div><span
                                                            class="text-gray-900 flex-shrink-0">124</span>
                                                    </div>
                                                    <div class="flex items-center gap-8 mb-20"><span
                                                            class="text-gray-900 flex-shrink-0">4</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width:50%"></div>
                                                        </div>
                                                        <div class="flex items-center gap-4"><span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span></div><span
                                                            class="text-gray-900 flex-shrink-0">52</span>
                                                    </div>
                                                    <div class="flex items-center gap-8 mb-20"><span
                                                            class="text-gray-900 flex-shrink-0">3</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width:35%"></div>
                                                        </div>
                                                        <div class="flex items-center gap-4"><span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span></div><span
                                                            class="text-gray-900 flex-shrink-0">12</span>
                                                    </div>
                                                    <div class="flex items-center gap-8 mb-20"><span
                                                            class="text-gray-900 flex-shrink-0">2</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width:20%"></div>
                                                        </div>
                                                        <div class="flex items-center gap-4"><span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span></div><span
                                                            class="text-gray-900 flex-shrink-0">5</span>
                                                    </div>
                                                    <div class="flex items-center gap-8 mb-0"><span
                                                            class="text-gray-900 flex-shrink-0">1</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width:5%"></div>
                                                        </div>
                                                        <div class="flex items-center gap-4"><span
                                                                class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-xs font-[500] text-gray-400 flex"><i
                                                                    class="ph-fill ph-star"></i></span></div><span
                                                            class="text-gray-900 flex-shrink-0">2</span>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shipping mb-24" id="shipping">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12">
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
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12">
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
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12">
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
                <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12">
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
    <div class="newsletter">
        <div class="container container-lg">
            <div class="newsletter-box relative rounded-16 flex items-center gap-16 flex-wrap z-[1]"><img
                    src="images/newsletter-bg.png" alt="Image"
                    class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                <div class="row items-center">
                    <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto">
                        <div class="">
                            <h1 class="text-white mb-12 wow fadeInUp">Don't Miss Out on Grocery Deals</h1>
                            <p class="text-white h5 mb-0 wow fadeInUp">SING UP FOR THE UPDATE NEWSLETTER</p>
                            <form action="product-details-two.html#" class="relative mt-40 wow fadeInUp"><input
                                    class="form-control block w-full p-[0.375rem_0.75rem] text-base leading-6 placeholder:text-[#495057] bg-white bg-clip-padding border border-[#ced4da] transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none common-input !rounded-[50rem] text-white py-22 px-16 pe-144"
                                    placeholder="Your email address..."> <button type="submit"
                                    class="btn btn-main-two !rounded-[50rem] !absolute top-[50%] translate-y-[-50%] right-0 mr-[10px]">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="2xl:w-6/12 flex-grow-0 flex-shrink-0 basis-auto text-center xl:block hidden"><img
                            src="images/newsletter-img.png" alt="Image" class="wow fadeInUp"></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-80 overflow-hidden">
        <div class="container container-lg">
            <div class="footer-item-two-wrapper flex items-start flex-wrap">
                <div class="footer-item max-w-275 wow fadeInUp">
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
                <div class="footer-item wow fadeInUp">
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
                <div class="footer-item wow fadeInUp">
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
                <div class="footer-item wow fadeInUp">
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
                <div class="footer-item wow fadeInUp">
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
                <div class="footer-item wow fadeInUp">
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
    <div class="bottom-footer bg-color-one py-8">
        <div class="container container-lg">
            <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
                <p class="bottom-footer__text wow fadeInLeftBig">Marketpro eCommerce &copy; 2024. All Rights Reserved
                </p>
                <div class="flex items-center gap-8 flex-wrap wow fadeInRightBig"><span class="text-heading text-sm">We
                        Are Accepting</span> <img src="images/payment-method.png" alt="Image"></div>
            </div>
        </div>
    </div>
    <script>
        var stars = document.querySelectorAll('.rating-star label i');
        stars.forEach((item, index1) => {
            item.addEventListener('click', () => {
                stars.forEach((star, index2) => {
                    if (index1 >= index2) {
                        star.classList.add('ph-fill');
                        star.classList.remove('ph');
                    } else {
                        star.classList.remove('ph-fill');
                        star.classList.add('ph');
                    }
                })
            });
        });
    </script>
</body>

</html>