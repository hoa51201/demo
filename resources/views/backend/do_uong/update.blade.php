@extends('layouts.app_backend')
@section('title','Cập nhật đồ uống')
@section('content')
<div class="bg-light">
    <div class="container">
        <h1 class="mb-5">Cập nhật đồ uống</h1>
        @include('layouts.flash_message')
        @include('backend.do_uong.form')
    </div>
</div>
@stop
