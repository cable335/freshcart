@extends('layout.template')
@section('main')
<div class="container">
    <p>
        歡迎{{ Auth::user()->name }}
    </p>
</div>
@endsection
