@extends('layout.template')
@section('main')
    <div class="container container-md p-5">
        <!-- Order List標題 -->
        <div class="order">type List</div>
        <!-- Dashboard標題 -->
        <div class="text">
            <a href="#" class="green">Dashboard</a>&nbsp&nbsp&nbsp/&nbsp&nbsp&nbsptype List
        </div>
    </div>
    <div class="big-box p-4 rounded rounded-4 border mt-4">
        <!-- 大方塊裡的head -->
        <div class="box-head">
            <div class="row">
                <!-- 搜索输入框 -->
                <div class="col-md-4 mb-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />

                        </div>
                        <div class="col-6">
                            <a class="btn btn-success" href="{{ route('type.create') }}"> 新增</a>
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
                        </tr>
                    </thead>
                    <tbody class="text">
                        @foreach ($types as $type)
                            <tr id="dataCol{{ $type->id }}">
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    @foreach ($type->ProductTypeImg ?? [] as $img)
                                        <img src="{{ asset($img->img_path) }}" alt="" class="listImg">
                                    @endforeach
                                </td>
                                <td><a href="#" class="text textnodecoration">{{ $type->name }}</a></td>
                                <td class="text-secondary">{{ $type->desc }}</td>
                                <td class="text-secondary">{{ $type->created_at->format('Y/m/d') }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('type.edit', [$type->id]) }}"> 編輯</a>
                                    {{-- <form action="{{ route('type.destroy', ['type' => $type->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">刪除</button>
                                    </form> --}}
                                    <button type="button" onclick="deleteData({{ $type->id }},'{{ $type->name }}')"
                                        class="btn btn-danger">刪除</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- 清單結束 -->
        </div>
        <hr>
        <!-- body結束 -->
        <div class="footer align-items-center text-nowrap d-md-flex justify-content-md-between">
            <div class="text">Showing 1 to 8 of 12 entries</div>
            <div class="btn-group1 text-nowrap">
                <button class="btn bg-light marginR text" type="submit">Previous</button>
                <button class="btn btn btn-outline-success text marginR" type="submit">1</button>
                <button class="btn btn btn-outline-success text marginR" type="submit">2</button>
                <button class="btn btn btn-outline-success text marginR" type="submit">3</button>
                <button class="btn btn btn-outline-success text marginR" type="submit">Next</button>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteData(id, name) {
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('_method', 'delete');
            Swal.fire({
                title: `確認要刪除${name}資料嗎?`,
                showDenyButton: true,
                confirmButtonText: '取消',
                denyButtonText: '刪除',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isDenied) {
                    fetch(`/type/${id}`, {
                        method: 'post',
                        body: formData,
                    }).then((res) => {
                        return res.text();
                    }).then((data) => {
                        if (data == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: '刪除成功',
                            });
                            const tr = document.querySelector(`tr#dataCol${id}`);
                            tr.remove();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: '刪除失敗',
                                text: '查無資料',
                            });
                        }
                    });
                }
            });
        }
    </script>
@endsection
