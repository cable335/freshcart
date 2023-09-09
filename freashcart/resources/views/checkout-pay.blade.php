@extends('layout.index')
@section('main')
    <!-- 結帳標題 -->
    <h1>Checkout</h1>
    <p>Already have an account? Click here to <a href="#">Sign in</a> .</p>
    <!-- 付款資訊 -->
    <div class="payment">
        <i class="bi bi-credit-card"></i> 付款資訊
    </div>
    <!-- 銀行匯款 -->
    <form action="{{ route('chekout.pay.store') }}" method="POST" method="POST">
        @csrf
        <div class="container"  style="position: relative">
    <div class="pay-options border" style="position:relative">
        <input type="radio" id="bank-checkbox" name="pay" style="position: absolute;top:70px;">
        <label for="bank-checkbox" class="ms-3">
            <ul>臨櫃匯款</ul>
            <li>0000-1234456789-123456</li>
            <li>007第一銀行</li>
            <li>戶名:洪券雅</li>
            <li>匯款後請聯繫洪先生(09878787870)</li>
            <li>請告知帳號後五碼以便對帳</li>
        </label>
    </div>
    <!-- 線上刷卡 -->
    <div class="pay-options border mt-2">
    <input type="radio" id="online-creditcard-checkbox" name="pay"  style="position: absolute;top:175px;">
        <label for="online-creditcard-checkbox">
            <ul>線上付款</ul>
            <li>本站線上付款為綠界金流</li>
        </label>
    </div>
    <!-- 上一步 下一步 -->
    <div class="prev-next-step-group">
        <a href="{{ route('chekout.information') }}"><button type="button" class="btn border" style="position: absolute; lift:0px">上一步</button></a>
        <button type="submit" class="btn border" style="position: absolute; right:0px">下一步</button>
    </div>
</div>
</form>
@endsection
