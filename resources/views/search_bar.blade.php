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