@extends('layout.template')
@section('main')
        <!-- 大方塊 -->
        <div class="big-box p-4 rounded rounded-4 border mt-4">
          <!-- 大方塊裡的head -->
          <div class="box-head">
            <div class="row">
                <div class="col-12">
                    {{-- enctype="multipart/form-data" 存照片必要--}}
                    {{-- form必要加入method="POST" --}}
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div>產品名稱
                            <input name="name" type="text" required>
                    </div>
                    <div>產品圖片
                        <input name="image" type="file" accept="image/*" required>
                    </div>
                    <div>產品價格
                        <input name="price" type="number" required>
                    </div>
                    <div>顯示狀態
                        <input name="status" type="radio" value="1">要顯示<input name="status" type="radio" value="0" required>不顯示
                    </div>
                        <label for="thirdCheckob">產品描述
                            <textarea name="desc" class="w-100" id="" cols="30" rows="10"></textarea>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
@endsection
