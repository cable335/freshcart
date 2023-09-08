@extends('layout.template')
@section('main')
                <!-- 大方塊 -->
                <div class="big-box p-4 rounded rounded-4 border mt-4">
                    <!-- 大方塊裡的head -->
                    <div class="box-head">
                        <div class="row">
                            <div class="col-12">
                                {{-- enctype="multipart/form-data" 存照片必要 --}}
                                {{-- form必要加入method="POST" --}}
                                {{--因為route使用resource 所以['type'=>$...部分是要與Route::resource('/type',.....  的type一樣 --}}
                                <form action="{{ route('type.update',['type'=>$type->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div>產品名稱
                                        <input name="name" type="text" value="{{ $type->name }}" required>
                                    </div>
                                    <div>產品圖片
                                        @foreach ($type->ProductTypeImg ?? [] as $item)
                                        <img style="width: 80px" src="{{ asset($item->img_path) }}" alt="">
                                        @endforeach
                                        <input name="image[]" type="file" multiple >

                                    </div>
                                    <label for="thirdCheckob">產品描述
                                        <textarea name="desc" class="w-100" id="" cols="30" rows="10">{{ $type->desc }}</textarea>
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
@endsection
