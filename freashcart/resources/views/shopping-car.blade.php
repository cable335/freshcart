@extends('layout.index')
@section('main')
    <!-- swiper -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="background-img-w-100-3">
                                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 p-5 pb-100px-pt-84px">
                                    <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                                    <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery </h2>
                                    <p class="lead">Introduced a new model for online grocery shopping
                                        and convenient home delivery.</p>
                                    <a href="#!" class="btn btn-dark mt-3" tabindex="-1">Shop Now <i
                                            class="feather-icon icon-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="background-img-w-100-4">
                                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 p-5 pb-100px-pt-84px">
                                    <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                                    <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> orders over <span
                                            class="text-primary">$100</span></h2>
                                    <p class="lead">Free Shipping to First-Time Customers Only, After promotions and
                                        discounts are applied.
                                    </p>
                                    <a href="#!" class="btn btn-dark mt-3" tabindex="-1">Shop Now <i
                                            class="feather-icon icon-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- 特色專區 -->
    <div class="row">
        <div class="col-12 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <h5 class="h3 d-flex justify-content-start mb-3">Featured Categories</h5>
                        <div class="swiper-button position-absolute">
                            <div class="swiper-button-next position-absolute"></div>
                            <div class="swiper-button-prev position-absolute"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper mySwiper-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                        <div class="swiper-slide border"><a href=""><img src="./img/S__120037379.gif"
                                    alt=""><span class="color-cjo">ccc</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 打折專區 -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 col-12 mb-15px">
                        <!-- <img class="background-img-w-100" src="./img/grocery-banner.png" alt=""> -->
                        <div class="p-5 background-img-w-100">
                            <h3 class="fw-bold mb-1">Fruits &amp; Vegetables
                            </h3>
                            <p class="mb-4">Get Upto <span class="fw-bold">30%</span> Off</p>
                            <a href="#!" class="btn btn-dark">Shop Now</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <!-- <img class="background-img-w-100 " src="./img/grocery-banner-2.jpg" alt=""> -->
                        <div class="p-5 background-img-w-100-2">
                            <h3 class="fw-bold mb-1">Freshly Baked
                                Buns
                            </h3>
                            <p class="mb-4">Get Upto <span class="fw-bold">25%</span> Off</p>
                            <a href="#!" class="btn btn-dark">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- 熱燒專區 -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="container">
                <h5 class="h3 d-flex justify-content-start">Popular Products</h5>
                <div class="row row-cols-2 row-cols-lg-5 row-cols-md-3 g-2 g-lg-3">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card-body p-3 border-r-10 border">
                                <div class="card-img">
                                    <img class="w-100" src="{{ $product->img_path }}" alt="">
                                    <div class="card-text mb-2">
                                        <a class="d-flex justify-content-start color-cjo" href="">along</a>
                                    </div>
                                    <h2><a class="d-flex justify-contnent-start fs-6 color-black"
                                            href="">{{ $product->name }}</a></h2>
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center">${{ $product->price }}</div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <button type="button" class="btn btn-success ">+Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- 每日熱銷 -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="container">
                <h5 class="h3 d-flex justify-content-start">Daily Best Sells</h5>
                <div class="row overflow-x">
                    <div class="col w-100 border-r-10 pt-5 px-4 ms-12px">
                        <div>
                            <h3 class="fw-bold text-white">100% Organic
                                Coffee Beans.
                            </h3>
                            <p class="text-white">Get the best deal before close.</p>
                            <a href="#!" class="btn btn-primary">Shop Now
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body p-3 border-r-10 border h470">
                            <div class="card-img">
                                <a href="">
                                    <img class="w-100" src="./img/S__120037379.gif" alt="">

                                </a>
                                <div class="card-text mb-2">
                                    <a class="d-flex justify-content-start color-cjo" href="">along</a>
                                </div>
                                <h2><a class="d-flex justify-contnent-start fs-6 color-black" href="">ccc</a></h2>
                                <div class="row justify-content-center">
                                    <div class="col-12 d-flex align-items-center">$7</div>
                                    <div class="col-12"></div>
                                    <button type="button" class="btn btn-success w-95 ">+Add</button>
                                    <div class="row gap-1 d-flex justify-content-center mt-2">
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="days"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Days
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="hours"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Hours
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="mins"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Mins
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="sec"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Sec
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body p-3 border-r-10 border h470">
                            <div class="card-img">
                                <a href="">
                                    <img class="w-100" src="./img/S__120037379.gif" alt="">
                                </a>
                                <div class="card-text mb-2">
                                    <a class="d-flex justify-content-start color-cjo" href="">along</a>
                                </div>
                                <h2><a class="d-flex justify-contnent-start fs-6 color-black" href="">ccc</a></h2>
                                <div class="row justify-content-center">
                                    <div class="col-12 d-flex align-items-center">$7</div>
                                    <div class="col-12"></div>
                                    <button type="button" class="btn btn-success w-95 ">+Add</button>
                                    <div class="row gap-1 d-flex justify-content-center mt-2">
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="days-2"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Days
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="hours-2"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Hours
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="mins-2"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Mins
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="sec-2"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Sec
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body p-3 border-r-10 border h470">
                            <div class="card-img">
                                <a href="">
                                    <img class="w-100" src="./img/S__120037379.gif" alt="">
                                </a>
                                <div class="card-text mb-2">
                                    <a class="d-flex justify-content-start color-cjo" href="">along</a>
                                </div>
                                <h2><a class="d-flex justify-contnent-start fs-6 color-black" href="">ccc</a></h2>
                                <div class="row justify-content-center">
                                    <div class="col-12 d-flex align-items-center">$7</div>
                                    <div class="col-12"></div>
                                    <button type="button" class="btn btn-success w-95 ">+Add</button>
                                    <div class="row gap-1 d-flex justify-content-center mt-2">
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="days-3"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Days
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="hours-3"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Hours
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="mins-3"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Mins
                                        </div>
                                        <div class="col-3 border h-100 w-62-h-57-color-cjo d-grid justify-content-center">
                                            <div id="sec-3"
                                                class="color-black d-flex align-items-end justify-content-center"></div>
                                            Sec
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

    <!-- 費話區 -->
    <div class="row my-5">
        <div class="col-12">
            <div class="container">
                <div class="row ">
                    <div class="col">
                        <div class="card-body p-3 ">
                            <img class="mb-3" src="./img/icon/clock.svg" alt="">
                            <div class="card-text mb-2">
                                <h5 class="d-flex justify-content-start color-black" href="">10 minute grocery now
                                </h5>
                            </div>
                            <h2><span class="d-flex justify-contnent-start fs-6 color-cjo" href="">Get your order
                                    delivered to your doorstep at the earliest from FreshCart pickup stores near
                                    you.</span></h2>
                            <div class="row justify-content-center">
                                <div class="col-12"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body p-3 ">
                            <img class="mb-3" src="./img/icon/gift.svg" alt="">
                            <div class="card-text mb-2">
                                <h5 class="d-flex justify-content-start color-black" href="">Best Prices & Offers
                                </h5>
                            </div>
                            <h2><span class="d-flex justify-contnent-start fs-6 color-cjo" href="">Cheaper prices
                                    than
                                    your local supermarket, great cashback offers to top it off. Get best pricess &
                                    offers.</span></h2>
                            <div class="row justify-content-center">
                                <div class="col-12"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body p-3 ">
                            <img class="mb-3" src="./img/icon/package.svg" alt="">
                            <div class="card-text mb-2">
                                <h5 class="d-flex justify-content-start color-black" href="">10 minute grocery now
                                </h5>
                            </div>
                            <h2><span class="d-flex justify-contnent-start fs-6 color-cjo" href="">Get your order
                                    delivered to your doorstep at the earliest from FreshCart pickup stores near
                                    you.</span></h2>
                            <div class="row justify-content-center">
                                <div class="col-12"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body p-3 ">
                            <img class="mb-3" src="./img/icon/refresh-cw.svg" alt="">
                            <div class="card-text mb-2">
                                <h5 class="d-flex justify-content-start color-black" href="">10 minute grocery now
                                </h5>
                            </div>
                            <h2><span class="d-flex justify-contnent-start fs-6 color-cjo" href="">Get your order
                                    delivered to your doorstep at the earliest from FreshCart pickup stores near
                                    you.</span></h2>
                            <div class="row justify-content-center">
                                <div class="col-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
