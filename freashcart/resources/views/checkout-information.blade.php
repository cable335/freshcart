@extends('layout.index')
@section('main')
    <div class="container container-md p-5">
        <!-- Order List標題 -->
        <div class="order">Checkout</div>
        <!-- Dashboard標題 -->
        <div class="text">
            <a href="#" class="green">Dashboard</a>&nbsp&nbsp&nbsp/&nbsp&nbsp&nbspOrder List
        </div>
        <form action="{{ route('chekout.information.store') }}" style="position: relative" method="POST" >
            @csrf
            <div class="mb-5" >
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="收件者姓名" value="{{ old('name',$name) }}">
                <input type="text" class="form-control" id="exampleInputPassword1" name="addr" placeholder="收件者地址" value="{{ old('addr',$addr)}}">
                <input type="date" class="form-control" id="exampleInputPassword1"name="date" value="{{ old('date',$date)}}">
                <input type="tel" class="form-control" id="exampleInputPassword1" name="tel" placeholder="收件者聯絡電話" value="{{ old('tel',$tel)}}">
                <input type="text" class="form-control" id="exampleInputPassword1" name="re" placeholder="備註" value="{{ old('re',$re)}}">

            </div>
            <div class="button w-100" style="position: absolute; bottom:0px; ">
                <a href="{{ route('chekout') }}"><button type="button" class="btn border" style="position: absolute; lift:0px">上一步</button></a>
                <button type="submit" class="btn border" style="position: absolute; right:0px">下一步</button>
            </div>
        </form>
    @endsection
