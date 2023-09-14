@extends('layout.index')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border border-white">
                    <div>
                        <span>Home / Shop /Shop Checkout</span>
                    </div>
                    <div>
                        <h1 class="mt-4">Checkout</h1>
                        <span>Already have an account? Click here to Sign in.</span>
                    </div>
                    <div class="mt-4 mb-3">
                        <span>配送資訊</span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('other.checkout.delivery.store') }}" method="POST">
                                @csrf
                                <div class="card p-3">
                                    <input class="form-control" type="text" placeholder="收件者姓名" aria-label="default input example" name="name"value="{{ old('name',$name ?? '') }}" required>
                                    <input class="form-control" type="text" placeholder="收件者地址" aria-label="default input example" name="addr"value="{{ old('addr',$addr ?? '') }}" required>
                                    <input class="form-control" type="date" aria-label="default input example" name="date"value="{{ old('date',$date ?? '') }}"min="{{ substr(today(),0,10) }}" required>
                                    <input class="form-control" type="text" placeholder="收件者連絡電話" aria-label="default input example" name="tel"value="{{ old('tel',$tel ?? '') }}" required>
                                    <input class="form-control" type="text" placeholder="備註" aria-label="default input example" name="re"value="{{ old('re',$re ?? '') }}">
                                </div>
                                <div class="d-flex justify-content-between my-3">
                                    <a href="{{ route('other.checkout') }}" class="btn btn-secondary">
                                        上一步
                                    </a>
                                    <a href="">
                                        <button type="submit" class="btn btn-secondary">下一步</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
