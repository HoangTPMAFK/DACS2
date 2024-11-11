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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer type="text/javascript" src="/js/main.js"></script>
    
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
    <form action="checkout.html#" class="search-box"><button type="button"
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
                <h6 class="mb-0">Checkout</h6>
                <ul class="flex items-center gap-8 flex-wrap">
                    <li class="text-sm"><a href="index.html"
                            class="text-gray-900 flex items-center gap-8 hover-text-main-600"><i
                                class="ph ph-house"></i> Home</a></li>
                    <li class="flex items-center"><i class="ph ph-caret-right"></i></li>
                    <li class="text-sm text-main-600">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="checkout py-80">
        <div class="container container-lg">
            <div class="border border-gray-100 rounded-8 px-30 py-20 mb-40"><span class="">Have a coupon? <a
                        href="cart.html"
                        class="font-[600] text-gray-900 hover-text-decoration-underline hover-text-main-600">Click here
                        to enter your code</a></span></div>
            <form id="checkout-form" action="/thanh-toan" method="post" class="row">
                @csrf
                <input type="hidden" name="order_code" value="{{ str()->random(10) }}">
                <div class="2xl:w-9/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-8/12">
                    <div class="pe-xl-5">
                        @include('error')
                        <div class="row g-3">
                            <div class="w-full flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12"><input
                                    class="common-input border-gray-100" placeholder="Họ và tên *" name="customer_name" value="{{ Auth::user()->lname." ".Auth::user()->fname }}" required></div>
                            <div class="w-full flex-grow-0 flex-shrink-0 basis-auto"><input
                                    class="common-input border-gray-100" placeholder="Số điện thoại *" name="phone" value="<?php if(!is_null(Auth::user()->phone)) { echo Auth::user()->phone; } ?>" required></div>
                            <div class="w-full flex-grow-0 flex-shrink-0 basis-auto"><input
                                    class="common-input border-gray-100" placeholder="Email" name="email" value="@if(!is_null(Auth::user()->email)) {{Auth::user()->email}} @endif"></div>
                            <div class="w-full flex-grow-0 flex-shrink-0 basis-auto"><input
                                    class="common-input border-gray-100" placeholder="Tỉnh/Thành phố *" name="province" required></div>
                            <div class="w-full flex-grow-0 flex-shrink-0 basis-auto"><input
                                    class="common-input border-gray-100" placeholder="Quận/Huyện *" name="district" required></div>
                            <div class="w-full flex-grow-0 flex-shrink-0 basis-auto"><input
                                    class="common-input border-gray-100" placeholder="Địa chỉ *" name="address" required></div>
                            <div class="w-full flex-grow-0 flex-shrink-0 basis-auto">
                                <div class="my-40">
                                    <h6 class="text-lg mb-24">Thông tin thêm</h6><input
                                        class="common-input border-gray-100"
                                        placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt khi giao hàng.">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12">
                    <div class="checkout-sidebar">
                        <div class="bg-color-three rounded-8 p-24 text-center"><span
                                class="text-gray-900 text-xl font-[600]">Your Orders</span></div>
                        <div class="border border-gray-100 rounded-8 px-24 py-40 mt-24">
                            <div class="mb-32 pb-32 border-b border-gray-100 flex-between gap-8"><span
                                    class="text-gray-900 font-[500] text-xl font-heading-two">Product</span> <span
                                    class="text-gray-900 font-[500] text-xl font-heading-two">Subtotal</span></div>
                            @foreach ($products as $product)
                            <div class="flex-between gap-24 mb-32">
                                <input type="hidden" name="product_id[]" value="{{ $product['product_id'] }}">
                                <input type="hidden" name="quantity[]" value="{{ $product['quantity'] }}">
                                <input type="hidden" name="agency_id[]" value="{{ $product['agency_id'] }}">
                                <div class="flex items-center gap-12"><span
                                        class="text-gray-900 font-normal text-md font-heading-two w-144">{{ $product['getProduct']['product_name'] }} @if (!is_null($product['getProduct']['edition'])) {{ "(".$product['getProduct']['edition'].")" }} @endif @if (!is_null($product['getProduct']['color'])) {{ "(".$product['getProduct']['color'].")" }} @endif</span> <span
                                        class="text-gray-900 font-normal text-md font-heading-two"><i
                                            class="ph-bold ph-x"></i></span> <span
                                        class="text-gray-900 font-[600] text-md font-heading-two">{{ $product['quantity'] }}</span></div><span
                                    class="text-gray-900 font-[700] text-md font-heading-two">{{ number_format($product['quantity']*$product['getProduct']['price'])." đ" }}</span>
                            </div>
                            @endforeach
                            <div class="border-t border-gray-100 pt-30 mt-30">
                                <div class="mb-32 flex-between gap-8"><span
                                        class="text-gray-900 font-heading-two text-xl font-[600]">Tổng cộng</span> <span
                                        class="text-gray-900 font-heading-two text-md font-[700]">{{ number_format($totalPrice)." đ" }}</span></div>
                                <div class="mb-32 flex-between gap-8"><span
                                        class="text-gray-900 font-heading-two text-xl font-[600]">Vận chuyển</span> <span
                                        class="text-gray-900 font-heading-two text-md font-[700]">Miễn phí</span></div>
                                @if (Illuminate\Support\Facades\Session::has('voucher'))
                                <div class="mb-32 flex-between gap-8"><span
                                    class="text-gray-900 font-heading-two text-xl font-[600]">Giảm còn</span> 
                                    @if (Illuminate\Support\Facades\Session::get('voucher')->allProduct)
                                        @if (Illuminate\Support\Facades\Session::get('voucher')->unit == "%")
                                            @php
                                                if (Illuminate\Support\Facades\Session::get('voucher')->discountAmount / 100 * $totalPrice <= Illuminate\Support\Facades\Session::get('voucher')->maxDiscount)
                                                    $totalPrice = (100 - Illuminate\Support\Facades\Session::get('voucher')->discountAmount) / 100 * $totalPrice;
                                                else $totalPrice = $totalPrice - Illuminate\Support\Facades\Session::get('voucher')->maxDiscount;
                                            @endphp
                                        @else
                                            @php
                                                $totalPrice = $totalPrice - Illuminate\Support\Facades\Session::get('voucher')->discountAmount;
                                            @endphp
                                        @endif
                                    @else
                                        @php
                                        $promotedProductList = json_decode(Illuminate\Support\Facades\Session::get('voucher')->productsList);
                                        $discountAmount = 0;
                                        foreach (json_decode(json_encode($products)) as $item) {
                                            if (in_array($item->product_id, $promotedProductList)) {
                                                if (Illuminate\Support\Facades\Session::get('voucher')->unit == "%") {
                                                    if ($discountAmount <= Illuminate\Support\Facades\Session::get('voucher')->maxDiscount) {
                                                        $discountAmount += (Illuminate\Support\Facades\Session::get('voucher')->discountAmount) / 100 * $item->get_product->price;
                                                    } else {
                                                        $discountAmount = Illuminate\Support\Facades\Session::get('voucher')->maxDiscount;
                                                        break;
                                                    }
                                                } else {
                                                    $discountAmount = Illuminate\Support\Facades\Session::get('voucher')->maxDiscount;
                                                    break;
                                                }
                                            }
                                        }
                                        $totalPrice -= $discountAmount;
                                        @endphp
                                    @endif
                                    <span
                                    class="text-gray-900 font-heading-two text-md font-[700]">{{ number_format($totalPrice)." đ" }}</span>
                                </div>
                                @endif
                                <div class="mb-0 flex-between gap-8">
                                    <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                                    <span
                                        class="text-gray-900 font-heading-two text-xl font-[600]">Tổng tiền</span> <span
                                        class="text-gray-900 font-heading-two text-md font-[700]">{{ number_format($totalPrice)." đ" }}</span></div>
                            </div>
                        </div>
                        <div class="mt-32">
                            <div class="payment-item">
                                <div id="payment-item-1" class="form-check common-check common-radio py-16 mb-0"><input
                                        class="form-check-input" type="radio" name="payment" value="cod" id="payment1"
                                        checked="checked"> <label class="form-check-label font-[600] text-neutral-600"
                                        for="payment1">Trả khi nhận hàng (COD)</label></div>
                                <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 relative">
                                    <p class="text-gray-800">Trả tiền khi đã nhận hàng</p>
                                </div>
                            </div>
                            <div class="payment-item">
                                <div id="payment-item-2" class="form-check common-check common-radio py-16 mb-0"><input
                                        class="form-check-input" type="radio" name="payment" value="momo" id="payment2"> <label
                                        class="form-check-label font-[600] text-neutral-600" for="payment2">Thanh toán qua MOMO</label></div>
                                <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 relative">
                                    <p class="text-gray-800">Thanh toán qua ví MOMO</p>
                                </div>
                            </div>
                            <div class="payment-item">
                                <div id="payment-item-3" class="form-check common-check common-radio py-16 mb-0"><input
                                        class="form-check-input" type="radio" name="payment" value="vnpay" id="payment3"> <label
                                        class="form-check-label font-[600] text-neutral-600" for="payment3">Thanh toán qua VNPAY</label></div>
                                <div class="payment-item__content px-16 py-24 rounded-8 bg-main-50 relative">
                                    <p class="text-gray-800">Thanh toán qua ví VNPAY</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-32 pt-32 border-t border-gray-100">
                            <p class="text-gray-500">Your personal data will be used to process your order, support your
                                experience throughout this website, and for other purposes described in our <a
                                    href="index.html" class="text-main-600 text-decoration-underline">privacy policy</a>
                                .</p>
                        </div><button type="submit" id="checkout-btn" name="redirect"
                            class="btn btn-main py-18 w-full rounded-8 mt-56 text-center">Đặt hàng</button>
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