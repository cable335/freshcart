@extends('layout.index')
@section('main')
    <div class="container container-md p-5">
        <!-- Order List標題 -->
        <div class="order">Checkout</div>
        <!-- Dashboard標題 -->
        <div class="text">
            <a href="#" class="green">Dashboard</a>&nbsp&nbsp&nbsp/&nbsp&nbsp&nbspOrder List
        </div>
        <form action="{{ route('chekout.store') }}" style="position: relative;" method="PoST">
            @csrf
            <div class="border m-5">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="w-100 border">
                                <div class="w100 border-bottom">
                                    <span>Oder Details</span>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{ asset('img/list-img/product-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-7 d-flex flex-column justify-content-center">
                                        <span>Cadbury 5 star Chocolate</span>
                                        <span>1kg</span>
                                    </div>
                                    <div class="col-1 d-flex align-items-center">
                                        <span>+</span>
                                        <span>1</span>
                                        <span>-</span>
                                    </div>
                                    <div class="col-1 d-flex align-items-center">
                                        <span>$15.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="w-100 border">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{ asset('img/list-img/product-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-7 d-flex flex-column justify-content-center">
                                        <span>Cadbury 5 star Chocolate</span>
                                        <span>1kg</span>
                                    </div>
                                    <div class="col-1 d-flex align-items-center">
                                        <span>+</span>
                                        <span>1</span>
                                        <span>-</span>
                                    </div>
                                    <div class="col-1 d-flex align-items-center">
                                        <span>$15.00</span>
                                    </div>
                                </div>
                            </div>
                            </col-12>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <span class="ms-2">
                            subtotal
                        </span>
                        <span class="me-2">
                            $30
                        </span>
                    </div>
                </div>
            </div>
                <button type="submit" class="btn border" style="position: absolute; bottom:-40px; right:50px">下一步</button>
        </form>
    @endsection
