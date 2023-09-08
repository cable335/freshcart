@extends('layout.message')
@section('main')
    <section class="messageBoard">
        <div class="container">
            <h1>文章大樓</h1>
            <div class="d-flex flex-column justify-content-center flex-wrap align-items-center">
                @foreach ($messages as $item)
                    <div class="card w-100">
                        <div class="card-body">
                            這裡是{{ $item->id }}樓
                            <div class="d-flex">
                                <h5 class="card-title" style="width:800px">{{ $item->desc }}</h5>
                                <button type="button" class="btn mb-2 btn-success  btn-success-self edit-mese"
                                    data-id="{{ $item->id }}" onclick="editMese({{ $item->id }})">Edit</button>
                                <form action="{{ route('messageDestroy', ['id' => $item->id]) }}" method="post"
                                    class="delete-alert" data-name="{{ $item->name }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn  btn-success  btn-success-self">Delete</button>
                                </form>
                            </div>
                            <form action="{{ route('messageUpdate', ['id' => $item->id]) }}" method="post"
                                class="mod-form d-none" data-id="{{ $item->id }}">
                                @csrf
                                @method('put')
                                <div class="form-floating mb-3">
                                    <input type="text" name="message" class="form-control" id="floatingInput"
                                        placeholder="修改您的訊息" value="{{ $item->desc }}">
                                    <label for="floatingInput">修改訊息</label>
                                </div>
                                <button type="button" class="btn btn-primary cancel-mod"
                                    onclick="cancelMod({{ $item->id }})" data-id="{{ $item->id }}">取消修改</button>
                                <button type="submit" class="btn btn-primary submit-mod"
                                    onclick="submitMod({{ $item->id }})">確認修改</button>
                            </form>

                            @foreach ($item->reply as $reply)
                                <form id="replyForm{{ $reply->id }}"
                                    action="{{ route('replyUpdate', ['id' => $reply->id]) }}" method="POST"
                                    class="d-flex align-items-center">
                                    @csrf
                                    @method('PUT')
                                    回{{ $reply->product_type_id }}樓樓主：
                                    <div id="replyTitle{{ $reply->id }}" class="card-title me-auto">{{ $reply->desc }}
                                    </div>
                                    <div id="replyInput{{ $reply->id }}" class="form-floating mb-3 me-auto d-none">
                                        <input type="text" name="reply" class="form-control" id="floatingInput"
                                            placeholder="留下您的訊息" value="{{ $reply->desc }}">
                                        <label for="floatingInput">編輯回覆</label>
                                    </div>
                                    <button class="border btn" type="button"
                                        onclick="editReply({{ $reply->id }}, this)">編輯</button>
                                    <button id="updateReply{{ $reply->id }}" type="submit"
                                        class="border btn d-none">儲存更動</button>
                                    <button type="button" class="border btn"
                                        onclick="deleteReply({{ $reply->id }})">刪除</button>
                                </form>
                            @endforeach
                            <form action="{{ route('replayStore', ['id' => $item->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="message_id" value="{{ $item->id }}">
                                <div class="form-floating mb-3">
                                    <input type="text" name="reply" class="form-control" id="floatingInput"
                                        placeholder="留下您的訊息" required>
                                    <label for="floatingInput">輸入回覆訊息</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">回文</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                {{-- 初始欄位 --}}
                <div class="card w-100">
                    <div class="card-body">
                        <form action="{{ route('messageStore') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="message" class="form-control" id="floatingInput"
                                    placeholder="留下您的訊息" name="desc" required>
                                <label for="floatingInput">輸入訊息</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">蓋大樓</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function cancelMod(id) {
            console.log(`Canceling form with ID ${id}`);
            const form = document.querySelector(`.mod-form[data-id="${id}"]`);
            const cancel = document.querySelector(`.cancel-mod[data-id="${id}"]`);

            if (cancel) {
                form.classList.add('d-none');
            }

        }

        function editMese(id) {
            console.log(`editMesewith ID ${id}`);
            const form = document.querySelector(`.mod-form[data-id="${id}"]`);
            const editMese = document.querySelector(`.edit-mese[data-id="${id}"]`);

            if (editMese) {
                form.classList.remove('d-none');
            }

        }

        function submitMod(id) {
            console.log(`submitMod with ID ${id}`);
            const form = document.querySelector(`.mod-form[data-id="${id}"]`);
            const submit = document.querySelector(`.submit-mod[data-id="${id}"]`);

            if (submit) {
                form.classList.add('d-none');
            }

        }

        function editReply(id, el) {
            const title = document.querySelector(`#replyTitle${id}`);
            const input = document.querySelector(`#replyInput${id}`);
            const replyBtn = document.querySelector(`#updateReply${id}`);

            title.classList.toggle('d-none');
            input.classList.toggle('d-none');
            replyBtn.classList.toggle('d-none');

            if (title.classList.contains('d-none')) {
                el.textContent = '取消編輯';
            } else {
                el.textContent = '編輯';
            }
        }

        function deleteReply(id) {
            Swal.fire({
                title: '確認要刪除嗎?',
                showDenyButton: true,
                showCancelButton: true,
                showConfirmButton: false,
                denyButtonText: `刪除`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isDenied) {
                    // Swal.fire('執行刪除')
                    const formData = new FormData();
                    formData.append('_token', '{{ csrf_token() }}');
                    formData.append('_method', 'delete');
                    fetch(`/reply/destroy/${id}`, {
                        method: 'post',
                        body: formData,
                    }).then((res) => {
                        return res.text();
                    }).then((data) => {
                        if (data != 'success') return;
                        const form = document.querySelector(`form#replyForm${id}`);
                        form.remove();
                    });
                }
            });
        }
    </script>
@endsection
