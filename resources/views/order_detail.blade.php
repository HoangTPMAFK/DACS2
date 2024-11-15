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
    <form action="cart.html#" class="search-box"><button type="button"
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
                <h6 class="mb-0">Cart</h6>
                <ul class="flex items-center gap-8 flex-wrap">
                    <li class="text-sm"><a href="index.html"
                            class="text-gray-900 flex items-center gap-8 hover-text-main-600"><i
                                class="ph ph-house"></i> Home</a></li>
                    <li class="flex items-center"><i class="ph ph-caret-right"></i></li>
                    <li class="text-sm text-main-600">Product Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="cart py-80">
        <div class="container container-lg">
            <div class="row g-4">
                <form action="/cap-nhat-gio-hang/{{Auth::user()->id}}" method="get" class="2xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-8/12">
                    <div class="cart-table border border-gray-100 rounded-8 px-40 py-48">
                        <div class="overflow-x-auto scroll-sm scroll-sm-horizontal">
                            <table class="table style-three">
                                <thead>
                                    <tr>
                                        <th class="h6 mb-0 text-lg font-[700]">Tên sản phẩm</th>
                                        <th class="h6 mb-0 text-lg font-[700]">Giá</th>
                                        <th class="h6 mb-0 text-lg font-[700]">Số luợng</th>
                                        <th class="h6 mb-0 text-lg font-[700]">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                    <tr>
                                        <td>
                                            <div class="table-product flex items-center gap-24"><a
                                                    href="/san-pham/{{$item['getProduct']['slug_vi']}}"
                                                    class="table-product__thumb border border-gray-100 rounded-8 flex items-center justify-center"><img
                                                        src="/{{$item['getProduct']['thumbnail']}}" alt="Image"></a>
                                                <div class="table-product__content text-start min-w-44">
                                                    <h6 class="title text-lg font-[600] mb-8"><a
                                                            href="/san-pham/{{$item['getProduct']['slug_vi']}}" class="link text-line-2"
                                                            tabindex="0">{{ $item['getProduct']['product_name'] }}</a>
                                                    </h6>
                                                    <input type="hidden" name="product_id[]" value="{{$item['product_id']}}">
                                                    <div class="flex items-center gap-16 mb-16">
                                                        <div class="flex items-center gap-6"><span
                                                                class="text-md font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span> <span
                                                                class="text-md font-[600] text-gray-900">4.8</span>
                                                        </div><span class="text-sm font-[500] text-gray-200">|</span>
                                                        <span class="text-neutral-600 text-sm">128 Reviews</span>
                                                    </div>
                                                    <div class="flex items-center gap-16 flex-wrap">
                                                        @if (!is_null($item['getProduct']['edition']))
                                                        <a href="#"
                                                        class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex items-center justify-center gap-8 font-[500]">{{ $item['getProduct']['edition'] }} </a>
                                                        @endif
                                                        @if (!is_null($item['getProduct']['color']))
                                                        <a href="#"
                                                        class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex items-center justify-center gap-8 font-[500]">{{ $item['getProduct']['color'] }}</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-lg h6 mb-0 font-[600]">{{ number_format($item['getProduct']['price']) }} đ</span></td>
                                        <td>
                                            <div class="flex rounded-4 overflow-hidden">
                                                <input type="number" name="quantity[]" value="{{ $item['quantity'] }}"
                                                class="quantity__input flex-grow border border-gray-100 border-l-0 border-r-0 text-center w-32 px-4"
                                                value="1" min="1" readonly> 
                                            </div>
                                        </td>
                                        <td><span class="product_subtotal text-lg h6 mb-0 font-[600]">{{ number_format($item['getProduct']['price'] * $item['quantity']) }} đ</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
                <div class="2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12">
                    <div class="cart-sidebar border border-gray-100 rounded-8 px-24 py-40">
                        @include('voucher_error')
                        <form action="/gio-hang/kiem-tra-ma-giam-gia" method="post" class="flex-between flex-wrap gap-16 mb-16">
                            @csrf
                            <div class="flex items-center gap-16 font-semibold text-black">
                                Địa chỉ: {{$order['province'].', '.$order['district'].', '.$order['address']}}
                            </div>
                        </form>
                        <h6 class="text-xl mb-32">Giá trị đơn hàng</h6>
                        <div class="bg-color-three rounded-8 p-24">
                            <div class="mb-32 flex-between gap-8"><span
                                    class="text-gray-900 font-heading-two">Tên khách hàng</span> <span
                                    class="text-gray-900 font-[600]">{{ $order['customer_name'] }}</span>
                            </div>
                            <div class="mb-32 flex-between gap-8"><span
                                class="text-gray-900 font-heading-two" style="min-width: 54px">Địa chỉ</span> <span
                                class="text-gray-900 font-[600]">{{$order['province'].', '.$order['district'].', '.$order['address']}}</span>
                            </div>
                            <div class="mb-32 flex-between gap-8"><span
                                class="text-gray-900 font-heading-two" style="min-width: 54px">Trạng thái thanh toán</span> <span
                                class="text-gray-900 font-[600]">{{$order['paymentStatus']}}</span>
                            </div>
                            <div class="mb-32 flex-between gap-8"><span
                                class="text-gray-900 font-heading-two">Ngày tạo</span> <span
                                class="text-gray-900 font-[600]">{{$order['created_at']}}</span>
                            </div>
                            <div class="mb-32 flex-between gap-8"><span
                                class="text-gray-900 font-heading-two">SĐT</span> <span
                                class="text-gray-900 font-[600]">{{$order['phone']}}</span>
                            </div>
                            @if (!is_null($order['email']))
                            <div class="mb-32 flex-between gap-8"><span
                                class="text-gray-900 font-heading-two" style="min-width: 54px">Email</span> <span
                                class="text-gray-900 font-[600]">{{$order['email']}}</span>
                            </div>
                            @endif
                        </div>
                        <div class="bg-color-three rounded-8 p-24 mt-24">
                            <div class="flex-between gap-8"><span class="text-gray-900 text-xl font-[600]">Tổng cộng</span>
                                <span class="text-gray-900 text-xl font-[600]">{{ number_format($order['total_price'])." đ" }}</span></div>
                        </div><form action="/cap-nhat-don-hang/{{$order['order_code']}}" method="post" class="btn btn-main mt-40 w-full rounded-8" style="padding: 0">
                            @csrf
                            <button type="submit" class="w-full py-18">Đã nhận</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hidden" id="cart"></section>
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