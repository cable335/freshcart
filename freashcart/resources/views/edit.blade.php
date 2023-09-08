<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
</head>

<body>
    <div class="content">
        <!-- 菜單 -->
        <div class="menu-hide p-3">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                    <a href="https://freshcart.codescandy.com/dashboard/order-list.html"><img
                            src="https://freshcart.codescandy.com/assets/images/logo/freshcart-logo.svg"
                            alt=""></a>
                </h5>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row col-12">
                    <!-- 內標題DashBoard -->
                    <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                        <img src="{{ asset('img/left-menu/house.svg') }}" alt="" class="menu-img">
                        Dashboard</button>
                    <!-- 內標題DashBoard結束 -->
                    <div class="menutext">Store Managements</div>
                    <!-- 內標題Products -->
                    <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                        <img src="{{ asset('img/left-menu/cart.svg') }}" alt="" class="menu-img">
                        Products</button>
                    <!-- 內標題Products結束 -->

                    <!-- 內標題Categories -->
                    <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                        <img src="./img/left-menu/list-stars.svg" alt="" class="menu-img">
                        Categories</button>
                    <!-- 內標題Categories結束 -->

                    <!-- 內標題Orders -->
                    <p class="d-inline-flex gap-1">
                        <button class="menuBtn box-no-border d-flex justify-content-start align-items-center collapsed"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                            aria-expanded="false" aria-controls="collapseExample">
                            <img src="./img/left-menu/bag.svg" alt="" class="menu-img">
                            Orders
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="box-no-border">
                            <ul>
                                <li><button
                                        class="menuBtn box-no-border d-flex justify-content-start align-items-center">List</button>
                                </li>
                                <li><button
                                        class="menuBtn box-no-border d-flex justify-content-start align-items-center">Single</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 內標題Orders結束 -->

                    <!-- 內標題Sellers/Vendors -->
                    <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                        <img src="./img/left-menu/shop.svg" alt="" class="menu-img">
                        Sellers/Vendors</button>
                    <!-- 內標題Sellers/Vendors結束 -->

                    <!-- 內標題Customers -->
                    <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                        <img src="./img/left-menu/people.svg" alt="" class="menu-img">
                        Customers</button>
                    <!-- 內標題Customers結束 -->

                    <!-- 內標題Reviews -->
                    <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                        <img src="./img/left-menu/star.svg" alt="" class="menu-img">
                        Reviews</button>
                    <!-- 內標題Reviews結束-->
                    <div class="menutext">Site Settings<span class="ComingSoon">Coming Soon</span></div>
                    <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path
                                d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z">
                            </path>
                            <path
                                d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z">
                            </path>
                        </svg>&nbsp;&nbsp;&nbsp;Blog</div>
                    <div class="menutext2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-images" viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                            <path
                                d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z">
                            </path>
                        </svg>&nbsp;&nbsp;&nbsp;Media
                    </div>
                    <div class="menutext2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z">
                            </path>
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z">
                            </path>
                        </svg>&nbsp;&nbsp;&nbsp;Store Settings
                    </div>

                    <div class="menutext">Support<span class="ComingSoon">Coming Soon</span></div>
                    <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                            <path
                                d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z">
                            </path>
                        </svg>&nbsp;&nbsp;&nbsp;Support Ticket</div>
                    <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path
                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z">
                            </path>
                        </svg>&nbsp;&nbsp;&nbsp;Help Center</div>
                    <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-infinity" viewBox="0 0 16 16">
                            <path
                                d="M5.68 5.792 7.345 7.75 5.681 9.708a2.75 2.75 0 1 1 0-3.916ZM8 6.978 6.416 5.113l-.014-.015a3.75 3.75 0 1 0 0 5.304l.014-.015L8 8.522l1.584 1.865.014.015a3.75 3.75 0 1 0 0-5.304l-.014.015L8 6.978Zm.656.772 1.663-1.958a2.75 2.75 0 1 1 0 3.916L8.656 7.75Z">
                            </path>
                        </svg>&nbsp;&nbsp;&nbsp;How FreshCart Works</div>

                    <div class="menutext">Our Apps</div>
                    <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                            <path
                                d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z">
                            </path>
                            <path
                                d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z">
                            </path>
                        </svg>&nbsp;&nbsp;&nbsp;Apple Store</div>
                    <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-google-play" viewBox="0 0 16 16">
                            <path
                                d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295ZM1 13.396V2.603L6.846 8 1 13.396ZM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z">
                            </path>
                        </svg>&nbsp;&nbsp;&nbsp;Google Play Store</div>

                </div>
            </div>
        </div>
        <!-- 菜單結束 -->
        <div class="Nav p-3">
            <div class="navbar d-flex justify-content-between align-items-center w-100">
                <div class="d-flex align-items-center">
                    <!-- menu 漢堡條 -->
                    <button class="menu box-no-border d-xl-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-text-indent-right" viewBox="0 0 16 16">
                            <path
                                d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm10.646 2.146a.5.5 0 0 1 .708.708L11.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zM2 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z">
                            </path>
                        </svg>
                    </button>
                    <!-- 搜尋欄 -->
                    <div class="input-group rounded container-fluid">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                    </div>
                </div>

                <div class="menu-offcanvas offcanvas offcanvas-start p-3 " tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                            <a href="https://freshcart.codescandy.com/dashboard/order-list.html"><img
                                    src="https://freshcart.codescandy.com/assets/images/logo/freshcart-logo.svg"
                                    alt=""></a>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="row col-12">
                            <!-- 內標題DashBoard -->
                            <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                                <img src="./img/left-menu/house.svg" alt="" class="menu-img">
                                Dashboard</button>
                            <!-- 內標題DashBoard結束 -->
                            <div class="menutext">Store Managements</div>
                            <!-- 內標題Products -->
                            <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                                <img src="./img/left-menu/cart.svg" alt="" class="menu-img">
                                Products</button>
                            <!-- 內標題Products結束 -->

                            <!-- 內標題Categories -->
                            <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                                <img src="./img/left-menu/list-stars.svg" alt="" class="menu-img">
                                Categories</button>
                            <!-- 內標題Categories結束 -->

                            <!-- 內標題Orders -->
                            <p class="d-inline-flex gap-1">
                                <button class="menuBtn box-no-border d-flex justify-content-start align-items-center"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <img src="./img/left-menu/bag.svg" alt="" class="menu-img">
                                    Orders
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="box-no-border">
                                    <ul>
                                        <li><button
                                                class="menuBtn box-no-border d-flex justify-content-start align-items-center">List</button>
                                        </li>
                                        <li><button
                                                class="menuBtn box-no-border d-flex justify-content-start align-items-center">Single</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- 內標題Orders結束 -->

                            <!-- 內標題Sellers/Vendors -->
                            <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                                <img src="./img/left-menu/shop.svg" alt="" class="menu-img">
                                Sellers/Vendors</button>
                            <!-- 內標題Sellers/Vendors結束 -->

                            <!-- 內標題Customers -->
                            <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                                <img src="./img/left-menu/people.svg" alt="" class="menu-img">
                                Customers</button>
                            <!-- 內標題Customers結束 -->

                            <!-- 內標題Reviews -->
                            <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                                <img src="./img/left-menu/star.svg" alt="" class="menu-img">
                                Reviews</button>
                            <!-- 內標題Reviews結束-->
                            <div class="menutext">Site Settings<span class="ComingSoon">Coming Soon</span></div>
                            <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                    <path
                                        d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                                </svg>&nbsp;&nbsp;&nbsp;Blog</div>
                            <div class="menutext2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    <path
                                        d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                </svg>&nbsp;&nbsp;&nbsp;Media
                            </div>
                            <div class="menutext2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                    <path
                                        d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                </svg>&nbsp;&nbsp;&nbsp;Store Settings
                            </div>

                            <div class="menutext">Support<span class="ComingSoon">Coming Soon</span></div>
                            <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z" />
                                </svg>&nbsp;&nbsp;&nbsp;Support Ticket</div>
                            <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-question-circle"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg>&nbsp;&nbsp;&nbsp;Help Center</div>
                            <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-infinity" viewBox="0 0 16 16">
                                    <path
                                        d="M5.68 5.792 7.345 7.75 5.681 9.708a2.75 2.75 0 1 1 0-3.916ZM8 6.978 6.416 5.113l-.014-.015a3.75 3.75 0 1 0 0 5.304l.014-.015L8 8.522l1.584 1.865.014.015a3.75 3.75 0 1 0 0-5.304l-.014.015L8 6.978Zm.656.772 1.663-1.958a2.75 2.75 0 1 1 0 3.916L8.656 7.75Z" />
                                </svg>&nbsp;&nbsp;&nbsp;How FreshCart Works</div>

                            <div class="menutext">Our Apps</div>
                            <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                                    <path
                                        d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                                    <path
                                        d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                                </svg>&nbsp;&nbsp;&nbsp;Apple Store</div>
                            <div class="menutext2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-google-play"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295ZM1 13.396V2.603L6.846 8 1 13.396ZM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z" />
                                </svg>&nbsp;&nbsp;&nbsp;Google Play Store</div>

                        </div>
                    </div>
                </div>
                <!-- menu漢堡條結束 -->

                <!-- 搜尋欄結束 -->
                <div class="bell-and-user d-flex flex-shrink-0">
                    <!-- 小鈴鐺 -->
                    <div class="btn-group">
                        <button type="button" class="bell box-no-border  position-relative"
                            data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <img src="./img/bell.svg" />
                            <div
                                class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
                                2
                            </div>
                        </button>
                        <div class="bell dropdown-menu dropdown-menu-end bellpos">
                            <div class="bellNav p-3 d-flex justify-content-between">
                                <div>
                                    <div class="fw-bold fs-5">Notifications</div>
                                    <div class="text">You have 2 unread messages</div>
                                </div>
                                <button class="circleMark box-no-border btn btn-light"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                        <path
                                            d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                    </svg></button>
                            </div>
                            <div class="bellBody">
                                <ul class="m-0 p-0">
                                    <a href="#" class="textnodecoration">
                                        <li class="list-group-item list-group-item-action active p-3 d-flex justify-content-between"
                                            style="background-color:#f0f3f2;">
                                            <div><img src="./img/avatar-1.jpg" alt="" class="circleMark m">
                                            </div>
                                            <div><span class="text-dark belltext">Your order is placed&nbsp;&nbsp;<span
                                                        class="text">waiting
                                                        for shipping</span></span>
                                                <div class="belltextsm"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-clock" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>&nbsp;&nbsp;1 minute ago</div>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="#" class="textnodecoration">
                                        <li
                                            class="list-group-item list-group-item-action active p-3 d-flex justify-content-between">
                                            <div><img src="./img/avatar-5.jpg" alt="" class="circleMark m">
                                            </div>
                                            <div><span class="text-dark belltext">Jitu Chauhan &nbsp;<span
                                                        class="text"> answered to your
                                                        pending order list with notes
                                                    </span></span>
                                                <div class="belltextsm"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-clock" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>&nbsp;&nbsp;2 days ago</div>
                                            </div>
                                        </li>
                                    </a>
                                    <hr>
                                    <a href="#" class="textnodecoration">
                                        <li
                                            class="list-group-item list-group-item-action active p-3 d-flex justify-content-between">
                                            <div><img src="./img/avatar-2.jpg" alt="" class="circleMark m">
                                            </div>
                                            <div><span class="text-dark belltext">You have new messages &nbsp;<span
                                                        class="text"> 2 unread
                                                        messages
                                                    </span></span>
                                                <div class="belltextsm"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-clock" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                    </svg>&nbsp;&nbsp;3 days ago</div>
                                            </div>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                            <hr>
                            <div class="bellFoot d-flex justify-content-center p-2">
                                <a href="#" class="textnodecoration belltext viewAll">View All</a>
                            </div>
                        </div>

                    </div>
                    <!-- 小鈴鐺結束 -->

                    <!-- 人物 -->
                    <div class="btn-group">
                        <button type="button" class="box-no-border" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="./img/avatar-1.jpg" class="user" />
                        </button>
                        <div class="dropdown-menu dropdown-menu-end p-0 show" data-bs-popper="static">
                            <div class="lh-1 p-4 py-4 border-bottom">
                                <h1 class="mb-1 h6 fw-bold">FreshCart Admin</h1>
                                <p class="text">admindemo@email.com</p>
                            </div>
                            <ul class="list-unstyled px-2 py-3">
                                <li>
                                    <a class="dropdown-item text" href="#!">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text" href="#!">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text" href="#!">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="border-top px-5 py-3">
                                <a href="#" class="textnodecoration belltext viewAll">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 人物結束 -->
            </div>
            <div class="container p-4 container-md p-5">
                <!-- Order List標題 -->
                <div class="order">edit</div>
                <!-- Dashboard標題 -->
                <div class="text">
                    <a href="#" class="green">Dashboard</a>&nbsp&nbsp&nbsp/&nbsp&nbsp&nbspOrder List
                </div>
                <!-- 標題結束 -->

                <!-- 大方塊 -->
                <div class="big-box p-4 rounded rounded-4 border mt-4">
                    <!-- 大方塊裡的head -->
                    <div class="box-head">
                        <div class="row">
                            <div class="col-12">
                                {{-- enctype="multipart/form-data" 存照片必要 --}}
                                {{-- form必要加入method="POST" --}}
                                <form action="{{ route('prod.update', ['id'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div>產品名稱
                                        <input name="name" type="text" value="{{ $product->name }}" required>
                                    </div>
                                    <div>產品圖片
                                        <img style="width: 80px" src="{{ asset($product->img_path) }}" alt="">
                                        <input name="image" type="file"  >

                                    </div>
                                    <div>產品價格
                                        <input name="price" type="number" value="{{ $product->price }}" accept="image/*" required>
                                    </div>
                                    <div>顯示狀態

                                            <input name="status" type="radio" value="1"
                                                @if ($product->status == 1) checked @endif>要顯示
                                            <input name="status" type="radio" value="0"
                                                @if ($product->status == 0) checked @endif>不顯示
                                    </div>
                                    <label for="thirdCheckob">產品描述
                                        <textarea name="desc" class="w-100" id="" cols="30" rows="10">{{ $product->desc }}</textarea>
                                    </label>

                                    <a class="btn btn-success" href="{{ route('cart') }}"> 取消</a>
                                    <button class="btn btn-success" type="submit">新增</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- 搜索欄結束 -->

                    <!-- body裡的商品 -->
                    <div class="body mt-3">
                        <!-- 清單群組 -->

                        <!-- 清單結束 -->
                    </div>
                    <hr>
                </div>
            </div>
        </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
