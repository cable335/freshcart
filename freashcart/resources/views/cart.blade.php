@extends('layout.template')
@section('main')
    <div class="big-box p-4 rounded rounded-4 border mt-4">
        <!-- 大方塊裡的head -->
        <div class="box-head">
            <div class="row">
                <!-- 搜索输入框 -->
                <div class="col-md-4 mb-2">
                    <div class="row">
                        <div class="col-12 d-flex">
                            <form action="{{ route('cart') }}" method="GET" role="search">
                                <input name="keyword" type="search" class="form-control rounded w-50" placeholder="搜尋名稱或描述" value="{{ $keyword }}" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="submit" class="btn border">搜尋</button>
                            </form>
                        </div>
                        <div class="col-12">
                            <a class="btn btn-success" href="{{ route('create') }}"> 新增</a>
                        </div>
                    </div>
                </div>

                <!-- 中间的分隔 div -->
                <div class="col-md-4"></div>

                <!-- 下拉菜单 -->
                <div class="col-md-4">
                    <div class="dropdown text-end">
                        <button class="btn dropdown-toggle box-no-border bg-light box-head-dropdown" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Status
                        </button>
                        <ul class="dropdown-menu box-head-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Status</a></li>
                            <li><a class="dropdown-item" href="#">Success</a></li>
                            <li><a class="dropdown-item" href="#">Pending</a></li>
                            <li><a class="dropdown-item" href="#">Cancel</a></li>
                        </ul>
                    </div>
                    <!-- 下拉菜单结束 -->
                </div>
            </div>
        </div>
        <!-- 搜索欄結束 -->

        <!-- body裡的商品 -->
        <div class="body mt-3">
            <!-- 清單群組 -->
            <div class="table-responsive">
                <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                    <thead class="bg-secondary">
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input type="checkbox">
                                </div>
                            </th>
                            <th scope="col" class="text">Image</th>
                            <th scope="col" class="text">產品名稱</th>
                            <th scope="col" class="text">產品描述</th>
                            <th scope="col" class="text">新增日期</th>
                            <th scope="col" class="text">顯示</th>
                            <th scope="col" class="text">產品價格</th>
                        </tr>
                    </thead>
                    <tbody class="text">
                        @foreach ($products as $item)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <img src="{{ asset($item->img_path) }}" alt="" class="listImg">
                                </td>
                                <td><a href="#" class="text textnodecoration">{{ $item->name }}</a></td>
                                <td class="text-secondary">{{ $item->desc }}</td>
                                <td class="text-secondary">{{ $item->created_at->format('Y/m/d') }}</td>
                                <td>
                                    @if ($item->status == 1)
                                        <div class="badge bg-primary text-dark-primary">顯示</div>
                                    @else
                                        <div class="badge bg-danger">不顯示</div>
                                    @endif
                                </td>
                                <td class="text-secondary">{{ $item->price }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('edit', [$item->id]) }}"> 編輯</a>
                                    <form action="{{ route('delete', [$item->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">刪除</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- 清單結束 -->
            </div>
            <hr>
            {{ $products->links() }}
        <!-- body結束 -->
        {{-- <div class="footer align-items-center text-nowrap d-md-flex justify-content-md-between">
            <div class="text">Showing 1 to 8 of 12 entries</div>
            <div class="btn-group1 text-nowrap">
                <button class="btn bg-light marginR text" type="submit">Previous</button>
                <button class="btn btn btn-outline-success text marginR" type="submit">1</button>
                <button class="btn btn btn-outline-success text marginR" type="submit">2</button>
                <button class="btn btn btn-outline-success text marginR" type="submit">3</button>
                <button class="btn btn btn-outline-success text marginR" type="submit">Next</button>
            </div>
        </div> --}}
    </div>
@endsection
