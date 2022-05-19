@extends('layouts.app_frontend')
@section('title','Smootthie & Fruit Shop')
@section('content')
 <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="#">Trang chủ</a></li>
                    <li class="page-breadcrumb__nav active">Tài khoản của bạn</li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- :::::::::: Start My Account Section :::::::::: -->
                <div class="my-account-area">
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <div class="my-account-menu">
                                <ul class="nav account-menu-list flex-column nav-pills">
                                    @foreach (config('nav.users.top') as $item)
                                    <li>
                                        <a class="{{$item['class']}} link--icon-left"  href="{{route($item['route'],isset($item['param']) ? get_data_user('web') : '')}}"><i
                                                class="fas fa-tachometer-alt"></i>{{$item['name']}} </a>
                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-md-8">
                            @yield('sub')
                        </div>


                    </div>
                </div><!-- :::::::::: End My Account Section :::::::::: -->
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->
@stop
