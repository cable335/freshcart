<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shopping-car</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/shopping-car.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
</head>

<body>
    <div class="w-100 top-sup-color">
        <div class="container-fluid">
            <!-- 最頂端條 語言選擇  -->
            <div class="row h-27-43 m-auto">
                <div class="col d-flex align-items-center color-cjo">
                    <span>Super Value Deals - Save more with coupons</span>
                </div>
                <div class="col d-flex justify-content-end ">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle font-14-index p-x-0" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="flag-img mb-1 me-1" src="./img/flag/united-kingdom.png" alt="">
                            細節中的細節
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="11.2" fill="currentColor"
                                class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('type.index') }}"><img
                                        class="flag-img mb-1 me-2" src="./img/flag/united-kingdom.png"
                                        alt="">type list</a></li>
                            <li><a class="dropdown-item " href="{{ route('cart') }}"><img class="flag-img mb-1 me-2"
                                        src="./img/flag/germany.png" alt="">cart list</a></li>
                            <li><a class="dropdown-item " href="{{ route('oderlist') }}"><img class="flag-img mb-1 me-2"
                                        src="./img/flag/germany.png" alt="">查看訂單</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- menu -->
    <div class="row">
        <div class="col-12 py-4">
            <div class="container">
                <div class="row fake">
                    <div class="col-xxl-2 col-lg-3 col-3 d-flex align-items-center">
                        <a href="{{ route('shopping-car') }}"><img src="{{ asset('/img/freshcart-logo.svg') }}" alt=""></a>
                    </div>
                    <div class="col-xxl-7 col-lg-6 col-6">
                        <div class="row">
                            <div class="col-8 px-1 d-flex align-items-center">
                                <input type="text" class="form-control" placeholder="Search for products"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                            <div class="col-4 px-1">
                                <button class="btn px-2 p-65 border" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                    <i class="bi bi-geo-alt"></i>
                                    Location
                                </button>
                                <div class="offcanvas offcanvas-conter w-420-h-518 border-r-10 p-4" tabindex="-1"
                                    id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Choose your Delivery
                                            Location
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body p-0">
                                        <div class="row">
                                            <div class="container">
                                                <div class="col-12">
                                                    <span> Enter your address and we will specify the offer you
                                                        area.</span>
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search your area" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2">
                                                </div>
                                                <div class="col-12 pt-3 d-flex justify-content-between mb-2">
                                                    <span class="d-flex align-items-center ">Select Location</span>
                                                    <button class="btn border font-12 color-cjo" type="button">Clear
                                                        All</button>
                                                </div>
                                                <div class="col-12">
                                                    <div class="list-group">
                                                        <a href="#"
                                                            class="list-group-item list-group-item-action background-color-cjo"
                                                            aria-current="true">
                                                            The current link item
                                                        </a>
                                                        <a href="#"
                                                            class="list-group-item list-group-item-action">A
                                                            second link item</a>
                                                        <a href="#"
                                                            class="list-group-item list-group-item-action">A
                                                            third link item</a>
                                                        <a href="#"
                                                            class="list-group-item list-group-item-action">A
                                                            fourth link item</a>
                                                        <a class="list-group-item list-group-item-action disabled"
                                                            aria-disabled="true">A disabled link item</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-3 col-3 d-flex justify-content-end ">
                        @auth
                            <div style="margin: auto 0;">hi,{{ Auth::user()->name }}</div>
                            <form method="post" action="{{ route('logout') }}" style="margin: auto 0;">
                                @csrf
                                <button type="submit" class="btn border" style="padding: 3px 6px;">登出</button>
                            </form>
                        @endauth

                        @guest
                            <div style="margin: auto 15px;">
                                <a href="{{ route('login') }}">
                                    點此登入</a>

                            </div>
                        @endguest
                        <a style="margin: auto 15px;" href="{{ route('message') }}">文章大樓</a>
                        <a class="d-flex align-items-center px-2" href="{{ route('other.checkout') }}">
                            <i class="bi bi-cart w-h-20"></i>
                        </a>
                        <button class="btn px-2" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasExample-1" aria-controls="offcanvasExample">
                            <img class="w-h-27" src="{{ asset('./img/icon/person.png') }}" alt="">
                        </button>
                        <div class="offcanvas offcanvas-conter w-520-h-518 border-r-10 p-3" tabindex="-1"
                            id="offcanvasExample-1" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h3 class="offcanvas-title" id="offcanvasExampleLabel">Sign Up</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <span> Name</span>
                                        <input type="text" class="form-control mt-2" placeholder="Enter Your Name"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span> Email address</span>
                                        <input type="text" class="form-control mt-2"
                                            placeholder="Enter Your address" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span> Password</span>
                                        <input type="text" class="form-control  my-2"
                                            placeholder="Enter Your Password" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2">
                                        By Signup, you agree to our <a href=""> Terms of Service </a>& <a
                                            href="">Privacy Policy</a>
                                    </div>
                                    <div class="col-12">
                                        <button type="button"
                                            class="btn btn-success background-color-xm4 w-86-52 w-86-52 border-0">SignUp</button>
                                    </div>
                                </div>
                            </div>
                            <div class=" d-flex justify-content-center align-items-end p-3">
                                <span>Already have an account?<a href=""> Sign in</a></span>
                            </div>
                        </div>

                        <nav class="p-2 sm">
                            <button class="navbar-toggler btn btn-outline-secondary sm" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <img class="w-h-20" src="{{ asset('./img/icon/bag.png') }}" alt="">
                            </button>
                            <div class="offcanvas offcanvas-end w-560" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Shop Cart</h5>
                                        </div>
                                        <div class="col-12">
                                            <span class="color-cjo">Location in 382480</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                        <li class="nav-item">
                                            <div class="alert alert-danger p-2">
                                                <span>You’ve got FREE delivery. Start <a class="fw-bold color-red"
                                                        href="">checkout now!</a></span>
                                            </div>
                                        </li>
                                        <li class="nav-item border-top">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img class="img-64-64" src="./img/S__120037379.gif"
                                                                alt="">
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h5>ccc</h5>
                                                                </div>
                                                                <div class="col-12"><span class="font-12">1kg</span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <a href="#!"
                                                                        class="text-decoration-none text-inherit">
                                                                        <span class="me-1 align-text-bottom">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="14"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-success">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg></span><span
                                                                            class="text-muted">Remove</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex m-auto">
                                                    <button type="button" class="btn border"
                                                        id="reduse">-1</button>
                                                    <div id="total"
                                                        class="w-44-h-38 border d-flex align-items-center justify-content-center">
                                                    </div>
                                                    <button type="button" class="btn border"
                                                        id="add">+1</button>
                                                </div>
                                                <div class="col-2 d-flex align-items-center">
                                                    <h6>$5.00</h6>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img class="img-64-64" src="./img/S__120037379.gif"
                                                                alt="">
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h5>ccc</h5>
                                                                </div>
                                                                <div class="col-12"><span class="font-12">1kg</span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <a href="#!"
                                                                        class="text-decoration-none text-inherit">
                                                                        <span class="me-1 align-text-bottom">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="14"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-success">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg></span><span
                                                                            class="text-muted">Remove</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex m-auto">
                                                    <button type="button" class="btn border"
                                                        id="reduse-2">-1</button>
                                                    <div id="total-2"
                                                        class="w-44-h-38 border d-flex align-items-center justify-content-center">
                                                    </div>
                                                    <button type="button" class="btn border"
                                                        id="add-2">+1</button>
                                                </div>
                                                <div class="col-2 d-flex align-items-center">
                                                    <h6>$5.00</h6>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img class="img-64-64" src="./img/S__120037379.gif"
                                                                alt="">
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h5>ccc</h5>
                                                                </div>
                                                                <div class="col-12"><span class="font-12">1kg</span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <a href="#!"
                                                                        class="text-decoration-none text-inherit">
                                                                        <span class="me-1 align-text-bottom">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="14"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-trash-2 text-success">
                                                                                <polyline points="3 6 5 6 21 6">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                </path>
                                                                                <line x1="10" y1="11"
                                                                                    x2="10" y2="17">
                                                                                </line>
                                                                                <line x1="14" y1="11"
                                                                                    x2="14" y2="17">
                                                                                </line>
                                                                            </svg></span><span
                                                                            class="text-muted">Remove</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex m-auto">
                                                    <button type="button" class="btn border"
                                                        id="reduse-3">-1</button>
                                                    <div id="total-3"
                                                        class="w-44-h-38 border d-flex align-items-center justify-content-center">
                                                    </div>
                                                    <button type="button" class="btn border"
                                                        id="add-3">+1</button>
                                                </div>
                                                <div class="col-2 d-flex align-items-center">
                                                    <h6>$5.00</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <div class="d-flex justify-content-between mt-4">
                                            <a href="#" class="btn btn-success">Continue Shopping</a>
                                            <a href="#" class="btn btn-dark">Update Cart</a>
                                        </div>
                                </div>
                            </div>
                        </nav>
                        <nav class="p-2">
                            <button class="navbar-toggler btn btn-outline-secondary fake" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar-1"
                                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <img class="w-h-20" src="./img/icon/list.png" alt="">
                            </button>
                            <div class="offcanvas offcanvas-start w-560" tabindex="-1" id="offcanvasNavbar-1"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="./img/freshcart-logo.svg" alt="">
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                        <li class="nav-item">
                                            <input type="text" class="form-control"
                                                placeholder="Search for products" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">
                                        </li>
                                        <li class="nav-item">
                                            <button class="btn px-2 p-65 border w-100 mt-2" type="button"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample-1"
                                                aria-controls="offcanvasExample">
                                                <i class="bi bi-geo-alt"></i>
                                                Location
                                            </button>
                                        </li>
                                        <div class="d-block d-lg-none mb-4 mt-2 border-bottom">
                                            <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center"
                                                data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                aria-expanded="true" aria-controls="collapseExample">
                                                <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-grid">
                                                        <rect x="3" y="3" width="7"
                                                            height="7"></rect>
                                                        <rect x="14" y="3" width="7"
                                                            height="7"></rect>
                                                        <rect x="14" y="14" width="7"
                                                            height="7"></rect>
                                                        <rect x="3" y="14" width="7"
                                                            height="7"></rect>
                                                    </svg></span> All Departments
                                            </a>
                                            <div class="mt-2 collapse show" id="collapseExample">
                                                <div class="card card-body">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li><a class="dropdown-item" href="">Dairy, Bread &amp;
                                                                Eggs</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Snacks &amp;
                                                                Munchies</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Fruits &amp;
                                                                Vegetables</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Cold Drinks &amp;
                                                                Juices</a></li>
                                                        <li><a class="dropdown-item" href="">Breakfast &amp;
                                                                Instant
                                                                Food</a></li>
                                                        <li><a class="dropdown-item" href="">Bakery &amp;
                                                                Biscuits</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Chicken, Meat
                                                                &amp;
                                                                Fish</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-block d-lg-none mb-4 mt-2 border-bottom">
                                            <a class="color-black w-100 d-flex justify-content-start align-items-center"
                                                data-bs-toggle="collapse" href="#collapseExample-1" role="button"
                                                aria-expanded="true" aria-controls="collapseExample">
                                                <span class="me-2"> Home</span>
                                            </a>
                                            <div class="mt-2 collapse show" id="collapseExample-1">
                                                <div class="card card-body">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li><a class="dropdown-item" href="">Dairy, Bread &amp;
                                                                Eggs</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Snacks &amp;
                                                                Munchies</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Fruits &amp;
                                                                Vegetables</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Cold Drinks &amp;
                                                                Juices</a></li>
                                                        <li><a class="dropdown-item" href="">Breakfast &amp;
                                                                Instant
                                                                Food</a></li>
                                                        <li><a class="dropdown-item" href="">Bakery &amp;
                                                                Biscuits</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Chicken, Meat
                                                                &amp;
                                                                Fish</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-block d-lg-none mb-4 mt-2 border-bottom">
                                            <a class="color-black w-100 d-flex justify-content-start align-items-center"
                                                data-bs-toggle="collapse" href="#collapseExample-2" role="button"
                                                aria-expanded="true" aria-controls="collapseExample">
                                                <span class="me-2"> Shop</span>
                                            </a>
                                            <div class="mt-2 collapse show" id="collapseExample-2">
                                                <div class="card card-body">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li><a class="dropdown-item" href="">Dairy, Bread &amp;
                                                                Eggs</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Snacks &amp;
                                                                Munchies</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Fruits &amp;
                                                                Vegetables</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Cold Drinks &amp;
                                                                Juices</a></li>
                                                        <li><a class="dropdown-item" href="">Breakfast &amp;
                                                                Instant
                                                                Food</a></li>
                                                        <li><a class="dropdown-item" href="">Bakery &amp;
                                                                Biscuits</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Chicken, Meat
                                                                &amp;
                                                                Fish</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-block d-lg-none mb-4 mt-2 border-bottom">
                                            <a class="color-black w-100 d-flex justify-content-start align-items-center"
                                                data-bs-toggle="collapse" href="#collapseExample-3" role="button"
                                                aria-expanded="true" aria-controls="collapseExample">
                                                <span class="me-2"> Stores</span>
                                            </a>
                                            <div class="mt-2 collapse show" id="collapseExample-3">
                                                <div class="card card-body">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li><a class="dropdown-item" href="">Dairy, Bread &amp;
                                                                Eggs</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Snacks &amp;
                                                                Munchies</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Fruits &amp;
                                                                Vegetables</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Cold Drinks &amp;
                                                                Juices</a></li>
                                                        <li><a class="dropdown-item" href="">Breakfast &amp;
                                                                Instant
                                                                Food</a></li>
                                                        <li><a class="dropdown-item" href="">Bakery &amp;
                                                                Biscuits</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Chicken, Meat
                                                                &amp;
                                                                Fish</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-block d-lg-none mb-4 mt-2 border-bottom">
                                            <a class="color-black w-100 d-flex justify-content-start align-items-center"
                                                data-bs-toggle="collapse" href="#collapseExample-4" role="button"
                                                aria-expanded="true" aria-controls="collapseExample">
                                                <span class="me-2"> Mega menu</span>
                                            </a>
                                            <div class="mt-2 collapse show" id="collapseExample-4">
                                                <div class="card card-body">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li><a class="dropdown-item" href="">Dairy, Bread &amp;
                                                                Eggs</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Snacks &amp;
                                                                Munchies</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Fruits &amp;
                                                                Vegetables</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Cold Drinks &amp;
                                                                Juices</a></li>
                                                        <li><a class="dropdown-item" href="">Breakfast &amp;
                                                                Instant
                                                                Food</a></li>
                                                        <li><a class="dropdown-item" href="">Bakery &amp;
                                                                Biscuits</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Chicken, Meat
                                                                &amp;
                                                                Fish</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-block d-lg-none mb-4 mt-2 border-bottom">
                                            <a class="color-black w-100 d-flex justify-content-start align-items-center"
                                                data-bs-toggle="collapse" href="#collapseExample-5" role="button"
                                                aria-expanded="true" aria-controls="collapseExample">
                                                <span class="me-2"> Pages</span>
                                            </a>
                                            <div class="mt-2 collapse show" id="collapseExample-5">
                                                <div class="card card-body">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li><a class="dropdown-item" href="">Dairy, Bread &amp;
                                                                Eggs</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Snacks &amp;
                                                                Munchies</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Fruits &amp;
                                                                Vegetables</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Cold Drinks &amp;
                                                                Juices</a></li>
                                                        <li><a class="dropdown-item" href="">Breakfast &amp;
                                                                Instant
                                                                Food</a></li>
                                                        <li><a class="dropdown-item" href="">Bakery &amp;
                                                                Biscuits</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Chicken, Meat
                                                                &amp;
                                                                Fish</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-block d-lg-none mb-4 mt-2 border-bottom">
                                            <a class="color-black w-100 d-flex justify-content-start align-items-center"
                                                data-bs-toggle="collapse" href="#collapseExample-6" role="button"
                                                aria-expanded="true" aria-controls="collapseExample">
                                                <span class="me-2"> Account</span>
                                            </a>
                                            <div class="mt-2 collapse show" id="collapseExample-6">
                                                <div class="card card-body">
                                                    <ul class="mb-0 list-unstyled">
                                                        <li><a class="dropdown-item" href="">Dairy, Bread &amp;
                                                                Eggs</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Snacks &amp;
                                                                Munchies</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Fruits &amp;
                                                                Vegetables</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Cold Drinks &amp;
                                                                Juices</a></li>
                                                        <li><a class="dropdown-item" href="">Breakfast &amp;
                                                                Instant
                                                                Food</a></li>
                                                        <li><a class="dropdown-item" href="">Bakery &amp;
                                                                Biscuits</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Chicken, Meat
                                                                &amp;
                                                                Fish</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-block d-lg-none mb-4 mt-2 border-bottom">
                                            <a class="color-black w-100 d-flex justify-content-start align-items-center"
                                                data-bs-toggle="collapse" href="#collapseExample-6" role="button"
                                                aria-expanded="true" aria-controls="collapseExample">
                                                <span class="me-2"> Dashboard</span>
                                            </a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pb-4 fake">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div class="btn-group w-100">
                            <button type="button" class="btn btn-success dd-toggle border-r-10 font-14"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                All Departments
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <a href="{{ route('front.product') }}">product</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    @yield('main')

    <!-- footer -->
    <footer class="row background-color-cjo">
        <div class="col-12">
            <div class="container">
                <div class="row g-4 py-4">
                    <div class="col-12 col-md-12 col-lg-4">
                        <h6 class="mb-4">Categories</h6>
                        <div class="row">
                            <div class="col-6">
                                <!-- list -->
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables &amp;
                                            Fruits</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link"> Breakfast &amp;
                                            instant
                                            food</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link"> Bakery &amp;
                                            Biscuits</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Atta, rice &amp;
                                            dal</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Sauces &amp;
                                            spreads</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Organic &amp;
                                            gourmet</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link"> Baby care</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Cleaning
                                            essentials</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Personal care</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <!-- list -->
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread &amp;
                                            eggs</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link"> Cold drinks &amp;
                                            juices</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link"> Tea, coffee &amp;
                                            drinks</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Masala, oil &amp;
                                            more</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Chicken, meat &amp;
                                            fish</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Paan corner</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link"> Pharma &amp;
                                            wellness</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Home &amp;
                                            office</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Pet care</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="row g-4">
                            <div class="col-6 col-sm-6 col-md-3">
                                <h6 class="mb-4">Get to know us</h6>
                                <!-- list -->
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
                                    <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <h6 class="mb-4">For Consumers</h6>
                                <ul class="nav flex-column">
                                    <!-- list -->
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
                                    <li class="nav-item mb-2"><a href="./pages/shop-checkout.html"
                                            class="nav-link">Shop
                                            Checkout</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <h6 class="mb-4">Become a Shopper</h6>
                                <ul class="nav flex-column">
                                    <!-- list -->
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper
                                            Opportunities</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas &amp;
                                            Guides</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <h6 class="mb-4">Freshcart programs</h6>
                                <ul class="nav flex-column">
                                    <!-- list -->
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart
                                            programs</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos &amp;
                                            Coupons</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 py-4 border-top border-bottom">
                    <div class="col-12 col-md-5 col-lg-6 mt-0 ps-0 d-flex align-items-center">
                        <span class="me-2">Payment Partners</span>
                        <a class="me-2" href=""><img src="./img/pay/amazonpay.svg" alt=""></a>
                        <a class="me-2" href=""><img src="./img/pay/american-express.svg"
                                alt=""></a>
                        <a class="me-2" href=""><img src="./img/pay/mastercard.svg" alt=""></a>
                        <a class="me-2" href=""><img src="./img/pay/paypal.svg" alt=""></a>
                        <a class="me-2" href=""><img src="./img/pay/visa.svg" alt=""></a>
                    </div>
                    <div class="col-12 col-md-7 col-lg-6 mt-0 pe-0 d-flex justify-content-end align-items-center">
                        <span class="me-3">Get deliveries with FreshCart</span>
                        <a class="me-3" href=""><img class="img-140-41-41" src="./img/pay/appstore-btn.svg"
                                alt=""></a>
                        <a href=""><img class="img-140-41-41" src="./img/pay/googleplay-btn.svg"
                                alt=""></a>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-8 p-0"><span class="font-12 color-cjo">© 2022 - 2023 FreshCart eCommerce HTML
                            Template. All rights reserved. Powered by <a class="color-xm4" href="">
                                Codescandy.</a></span></div>
                    <div class="col-4 p-0 d-flex justify-content-end">
                        <span class="color-cjo me-3">Follow us on</span>
                        <a class="color-cjo me-3" href=""><i class="bi bi-facebook"></i></a>
                        <a class="color-cjo me-3" href=""><i class="bi bi-twitter"></i></a>
                        <a class="color-cjo" href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    @yield('js')
</body>

</html>
