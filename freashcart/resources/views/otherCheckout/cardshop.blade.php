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
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('other.checkout.store') }}" method="POST">
                                @csrf
                                <div class="card">
                                    <h3>order Details</h3>
                                </div>
                                @foreach ($product as $item)
                                    <div id="row{{ $item->id }}"
                                        class="card d-flex flex-row justify-content-between align-items-center">
                                        <div>
                                            <img src="{{ asset($item->product->img_path) }}" class="card-img" alt="..."
                                                style="width: 80px;">
                                        </div>
                                        <div>
                                            <span>產品名稱</span>
                                            <p>{{ $item->product->name }}</p>
                                            <span>單價</span>
                                            <p>{{ $item->product->price }}</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button type="button"
                                                class="btn btn-secondary btn-subtracts d-flex align-items-center"
                                                style="height: 30px" onclick="minus('{{ $item->id }}')">-</button>
                                            <input id="cart{{ $item->id }}" type="number" class="inputs"
                                                value="{{ $item->qty }}" style="width: 50px; text-align:end;"
                                                onchange="inputQty('{{ $item->id }}')">
                                            <button type="button"
                                                class="btn btn-secondary btn-adds d-flex align-items-center"
                                                style="height: 30px" onclick="plus('{{ $item->id }}')">+</button>
                                        </div>
                                        <div id="price{{ $item->id }}" class="me-2">
                                            <span>${{ $item->product->price * $item->qty }}</span>
                                        </div>
                                        <div>
                                            <button type="button" onclick="deleteCart('{{ $item->id }}')">移除</button>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="card">
                                    總金額<span id="totals"> ${{ $total }}</span>
                                </div>
                                <div id="nextStep" class="d-flex justify-content-end my-3">
                                    @if ($product->count())
                                        <button type="submit" class="btn btn-secondary">下一步</button>
                                    @endif
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        function plus(id) {
            const input = document.querySelector(`#cart${id}`);
            input.value++;
            fetchQty(id, input.value);
        }

        function minus(id) {
            const input = document.querySelector(`#cart${id}`);
            if (input.value <= 1) return
            input.value--;
            fetchQty(id, input.value);
        }

        function inputQty(id) {
            const input = document.querySelector(`#cart${id}`);
            if (input.value <= 0) {
                input.value = 1;
            }
            fetchQty(id, input.value);
        }

        //  id => cart_id
        //  qty => 商品數量
        function fetchQty(id, qty) {
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('cart_id', id);
            formData.append('_method', 'put');
            formData.append('qty', qty);
            fetch('{{ route('other.checkout.updateQty') }}', {
                method: 'POST',
                body: formData,
            }).then((res) => {
                return res.json();
            }).then((data) => {
                const price = document.querySelector(`#price${id}`);
                const totalEl = document.querySelector('#totals');
                price.textContent = '$' + `${data.price}`;

                const all_price = document.querySelectorAll('[id^=price]');
                console.log(totalEl);
                let total = 0;
                all_price.forEach(element => {
                    const price = parseInt(element.textContent.trim().substring(1));
                    total += price;
                });
                totalEl.textContent = '$' + total;
            });
        }



        function deleteCart(id) {
            Swal.fire({
                title: '確定要刪除此筆資料嗎?',
                showDenyButton: true,
                showCancelButton: true,
                showConfirmButton: false,
                denyButtonText: `刪除`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isDenied) {
                    const formData = new FormData();
                    formData.append('_token', '{{ csrf_token() }}');
                    formData.append('_method', 'DELETE');
                    formData.append('cart_id', id);
                    fetch('{{ route('other.checkout.delete') }}', {
                        method: 'POST',
                        body: formData,
                    }).then((res) => {
                        return res.json();
                    }).then((data) => {
                        if (data.code === 1) {
                            const row = document.querySelector(`#row${data.id}`);
                            const nextBtn = document.querySelector(`#nextStep`);
                            const total = document.querySelector('#totals');
                            row.remove();

                            const rows = document.querySelectorAll('[id^=row]');

                            total.textContent = '$' + data.total;

                            if (rows.length === 0) {
                                nextBtn.textContent = '';
                            }
                        } else {
                            location.reload();
                        }
                    });
                }
            });
        }
    </script>
@endsection
