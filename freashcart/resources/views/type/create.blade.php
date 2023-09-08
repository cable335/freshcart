@extends('layout.template')
@section('main')
      <div class="container p-4 container-md p-5">
        <!-- Order List標題 -->
        <div class="order">create</div>
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
                    {{-- enctype="multipart/form-data" 存照片必要--}}
                    {{-- form必要加入method="POST" --}}
                    <form action="{{ route('type.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div>類別名稱
                            <input name="name" type="text" required>
                    </div>
                    <div>類別圖片
                        <input name="image[]" type="file" accept="image/*" multiple required>
                    </div>
                        <label for="thirdCheckob">類別描述
                            <textarea name="desc" class="w-100" id="" cols="30" rows="10"></textarea>
                        </label>

                    <a class="btn btn-success" href="{{ route('type.index') }}"> 取消</a>
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
