<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
</head>

<body>
    <div class="content">
        <!-- 菜單 -->
        <div class="menu-hide p-3">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                    <a href="{{ route('shopping-car') }}"><img
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
                        </div>
                    </div>
                </div>
                <!-- menu漢堡條結束 -->

                <!-- 搜尋欄結束 -->
                <div class="bell-and-user d-flex flex-shrink-0">
                    <!-- 小鈴鐺 -->

                </div>
                <!-- 人物結束 -->
            </div>
            <div class="container container-md p-5">
                <!-- Order List標題 -->
                <div class="order">留言板</div>
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
