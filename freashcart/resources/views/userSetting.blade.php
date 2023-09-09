@extends('layout.index')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{ route('user.info.update') }}" method="POST" class="d-flex flex-column row-gap-5">
                    @csrf
                    <h1>帳號資訊</h1>
                    <div>帳號:{{ $user->email }}</div>
                    <div>
                        <div>
                            姓名:
                            <span class="username">
                                {{ $user->name }}
                            </span>
                            <input name="name" type="text" value="{{ $user->name }}"class="d-none">
                        </div>
                    </div>
                    <div class="d-none column-gap-3">
                        <button type="submit" class="btn btn-primary">確認送出</button>
                        <button type="button" class="btn btn-primary">取消</button>
                    </div>
                    <div class="d-flex">
                        <button type="button" class="btn btn-primary" onclick="editmode()">編輯</button>
                    </div>
                </form>
            </div>
            <div class="col-6 d-flex flex-column justify-center align-items-center">
                <img src="{{ asset('img/qq.png') }}" alt="" class="w-75">
                <a href="{{ route('chekout') }}" style="color:red;" >
                    <h1>
                        老子強迫你在這邊結帳
                    </h1>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script>
        function editmode() {
            const nameInput = document.querySelector('input[name="name"]');
            const username = document.querySelector('.username');
            const btns = document.querySelector('.d-none.column-gap-3');
            username.classList.add('d-none');
            nameInput.classList.remove('d-none');
            btns.classList.remove('d-none');
            btns.classList.add('d-flex');
        }
    </script>

    @if ($errors->first())
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ $errors->first() }}',
            })
        </script>
    @endif
@endsection
