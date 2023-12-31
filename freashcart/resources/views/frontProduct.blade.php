@extends('layout.index')
@section('main')
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 row-cols-md-3 g-2 g-lg-3">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card" style="min-height:450px;">
                        <img src="{{ $product->img_path }}" class="card-img-top" alt="..." style="height: 200px">
                        <div class="card-body" style="position: relative;">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">價格：${{ $product->price }}</p>
                            <p class="card-text" style="margin-bottom: 10px">商品資訊：{{ $product->desc }}</p>
                            <div class="border">
                                <button class="btn" onclick="minus({{ $product->id }})">-</button>
                                <input id="product{{ $product->id }}" type="number"value="1"
                                    onchange="checkQty(this)" style="width: 62%;">
                                <button class="btn" onclick="plus({{ $product->id }})">+</button>
                            </div>
                            @if (Auth::check())
                            <button type="button" class="btn btn-success" style="position: absolute; right:16px; bottom:10px;"
                                onclick="addCart({{ $product->id }})">加入購物車</button>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-success" style="position: absolute; right:16px; bottom:10px;">加入購物車</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <input id="addCartRoute" type="hidden" value="{{ route('front.addcart') }}">
    </div>
@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        const addCartRoute = document.querySelector('input#addCartRoute').value;
        function minus(id) {
            const input = document.querySelector(`input#product${id}`);
            if(input.value === '1'){
                input.value++;
            }
            input.value--;
        }

        function plus(id) {
            const input = document.querySelector(`input#product${id}`);
            input.value++;
        }

        function checkQty(el) {
            if (el.value <= 0) {
                el.value = 1;
            }
        }

        function addCart(id) {
            const input = document.querySelector(`input#product${id}`);
            if (parseInt(input.value) <= 0) return;
                const formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('qty', input.value);
                formData.append('product_id', id);
                fetch(addCartRoute, {
                    method: 'POST',
                    body: formData,
                }).then((res)=>{
                    return res.json();
                }).then((data)=>{
                    if(data.code == 1){
                        Swal.fire('成功加入商品');
                    }
                });
        }
    </script>
@endsection
