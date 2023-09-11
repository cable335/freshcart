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
                    <a href="{{ route('infomation') }}"><img
                            src="https://freshcart.codescandy.com/assets/images/logo/freshcart-logo.svg"
                            alt=""></a>
                </h5>
            </div>

            <div class="offcanvas-body p-4">
                <div class="row col-12">
                    <!-- 內標題DashBoard -->
                    {{--           currentRouteName() 函式判斷當前套用哪個路由(route) --}}
                    <a @if (Route::currentRouteName() == 'backend.index') class="nav-link border"
                @else
                    class="nav-link" @endif
                        href="{{ route('backend.index') }}">
                        <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                            <img src="{{ asset('img/left-menu/house.svg') }}" alt="" class="menu-img">
                            Dashboard</button>
                    </a>
                    <!-- 內標題DashBoard結束 -->
                    <div class="menutext">Store Managements</div>
                    <!-- 內標題Products -->
                    <a @if (Route::currentRouteName() == 'cart') class="nav-link border"
                @else
                    class="nav-link" @endif
                        href="{{ route('cart') }}">
                        <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                            <img src="{{ asset('img/left-menu/cart.svg') }}" alt="" class="menu-img">
                            Products</button>
                    </a>
                    <a @if (Route::currentRouteName() == 'type.index') class="nav-link border"
                    @else
                        class="nav-link" @endif
                        href="{{ route('type.index') }}">
                        <button class="menuBtn box-no-border d-flex justify-content-start align-items-center">
                            <img src="{{ asset('img/left-menu/cart.svg') }}" alt="" class="menu-img">
                            type</button>
                    </a>

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
            <!-- 標題結束 -->
            @yield('main')
        </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    @yield('js')
</body>

</html>
