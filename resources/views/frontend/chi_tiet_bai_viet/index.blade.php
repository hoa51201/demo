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
                    <li class="page-breadcrumb__nav active">Bài viết</li>
                    <li class="page-breadcrumb__nav active">{{$baivietchitiet->theloai}}</li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- :::::: Start Main Container Wrapper :::::: -->
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <!-- Start Leftside - Sidebar Widgets -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <!-- Start Single Sidebar Widget - Recent Post -->
                    <div class="sidebar__widget">
                        <div class="sidebar__box">
                            <h5 class="sidebar__title">Tin tức mới nhất</h5>
                        </div>
                        <ul class="sidebar__post-blog list-space--small">
                            @foreach ($tintucnews as $item)
                            <li class="d-flex align-items-center ">
                                <a class="sidebar__post-img img-responsive" href="{{route('get.chi_tiet_bai_viet',$item->slug)}}">
                                    <img src="{{pare_url_file($item->hinhanh)}}" alt="">
                                </a>
                                <div class="sidebar__post-content">
                                    <a class="link--gray" href="{{route('get.chi_tiet_bai_viet',$item->slug)}}">{{$item->tieude}}</a>
                                    <span class="d-block color-gray">{{$item->thoigiandang}}</span>
            
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>  <!-- End Single Sidebar Widget - Recent Post  -->

                    <!-- Start Single Sidebar Widget - Custom Menu -->
                    

                    <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
                    <div class="sidebar__widget">
                        <div class="sidebar__box">
                            <h5 class="sidebar__title">Tags</h5>
                        </div>
                        <ul class="sidebar__tag list-space--small">
                            @foreach ($tags_tt as $item)
                            <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">

                                {{$item->theloai}}
            
                            </a></li> 
                            @endforeach                          
                        </ul>
                    </div> <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->
                    
                </div>
            </div>  <!-- End Left Sidebar  Widgets-->

             <!-- Start Rightside - Content -->
            <div class="col-lg-9">
                <div class="blog">
                    <div class="row">
                        <!-- Start Single Blog List -->
                        <div class="col-12">
                            <div class="blog__type-single">
                                <div class="img-responsive"><img src="{{pare_url_file($baivietchitiet->hinhanh)}}" alt=""></div>
                                <div class="blog__content">
                                    <h3 class="blog__title">{{$baivietchitiet->tieude}}</h3>
                                    <div class="blog__archive m-t-20">
                                        <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> {{date('d/m/Y',strtotime($baivietchitiet->thoigiandang))}}</a>
                                        <a href="#" class="link--gray link--icon-left">{{$baivietchitiet->theloai}} </a>
                                    </div>
                                    <div class="para m-tb-20">
                                        <?php
                                $str = "{$baivietchitiet->noidung}"; //Tạo chuỗi
                               // $str = strip_tags($str); //Lược bỏ các tags HTML

                                echo $str;
                            ?>
                                    </div>
                                </div>
                               
                            </div> 
                        </div> <!-- End Single Blog List -->
                    </div>
                </div>
            </div> 
        </div>
    </div> 
    @include('frontend.chi_tiet_bai_viet.bai_viet_tuong_tu')
</div>

 @stop