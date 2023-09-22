@extends('layout.template')
@section('main')
    <div class="container container-md p-5">
        <!-- Order List標題 -->
        <div class="order">edit</div>
        <!-- Dashboard標題 -->
        <div class="text">
            <a href="#" class="green">Dashboard</a>&nbsp&nbsp&nbsp/&nbsp&nbsp&nbspOrder List
        </div>
        <!-- 標題結束 -->

        <!-- 大方塊 -->
        <div class="big-box p-4 rounded rounded-4 border mt-4">
            <!-- 大方塊裡的head -->
            <div class="box-head">
                <div class="row">
                    <div class="col-12">
                        {{-- enctype="multipart/form-data" 存照片必要 --}}
                        {{-- form必要加入method="POST" --}}
                        <form action="{{ route('update', ['id' => $product->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div>產品名稱
                                <input name="name" type="text" value="{{ $product->name }}" required>
                            </div>
                            <div>產品圖片
                                <img style="width: 80px" src="{{ asset($product->img_path) }}" alt="">
                                <input name="image" type="file" id="productImg">
                                <div id="Img"></div>

                            </div>
                            <div>產品價格
                                <input name="price" type="number" value="{{ $product->price }}" accept="image/*"
                                    required>
                            </div>
                            <div>顯示狀態

                                <input name="status" type="radio" value="1"
                                    @if ($product->status == 1) checked @endif>要顯示
                                <input name="status" type="radio" value="0"
                                    @if ($product->status == 0) checked @endif>不顯示
                            </div>
                            <label for="thirdCheckob">產品描述
                                <textarea name="desc" class="w-100" id="" cols="30" rows="10">{{ $product->desc }}</textarea>
                            </label>

                            <a class="btn btn-success" href="{{ route('cart') }}"> 取消</a>
                            <button class="btn btn-success" type="submit">新增</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- 搜索欄結束 -->

            <!-- body裡的商品 -->
            <div class="body mt-3">
                <!-- 清單群組 -->

                <!-- 清單結束 -->
            </div>
            <hr>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const productImg = document.querySelector('#productImg');
        const Img = document.querySelector('#Img');
        productImg.addEventListener('change', (event) => {
            uploadImage(event);
        });

        function uploadImage(event) {
            const reader = new FileReader();
            reader.readAsDataURL(event.target.files[0]);
            reader.onload = () => {
                console.log(reader.result);
                Img.innerHTML = '';
                Img.innerHTML += `<img src="${reader.result}" class="" alt="上傳的照片" style="width:100px; height=100px";>`;
            };
            reader.onerror = (error) => {
                console.log('Error: ', error);
            };
        }
    </script>
@endsection
