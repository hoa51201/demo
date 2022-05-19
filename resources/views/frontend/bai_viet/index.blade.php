@extends('layouts.app_frontend')
@section('title','Smootthie & Fruit Shop')
@section('content')


<!-- :::::: Start Main Container Wrapper :::::: -->
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <!-- Start Leftside - Sidebar Widgets -->
            @include('frontend.bai_viet.tag_header')

            @include('frontend.bai_viet.left_menu')
             <!-- Start Rightside - Content -->
             <div class="col-lg-9">
                <div class="blog">
                    <div class="row">
                        @foreach ($tintucs as $item )
                         <!-- Start Single Blog List -->
                         <div class="col-12">
                            <div class="blog__type-list">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="blog__img"><a href="{{route('get.chi_tiet_bai_viet',$item->slug)}}"><img src="{{pare_url_file($item->hinhanh)}}" alt=""></a></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="blog__content">
                                            <a class="link--gray" href="{{route('get.chi_tiet_bai_viet',$item->slug)}}"><h3 class="blog__title">{{$item->tieude}}</h3></a>
                                            <div class="blog__archive m-t-20">
                                                <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> {{date('d/m/Y',strtotime($item->thoigiandang))}}</a>
                                            </div>
                                            <div class="para m-tb-20">
                                                <p class="para__text">
                                                    <?php
                                                    $str = "{$item->noidung}"; //Tạo chuỗi
                                                    $str = strip_tags($str); //Lược bỏ các tags HTML
                                                    if(strlen($str)>100) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                                        $strCut = substr($str, 0, 200); //Cắt 100 kí tự đầu
                                                        $str = substr($strCut, 0, strrpos($strCut, ' ')).'...'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                                                    }
                                                    echo '<td >'.$str.'</td>';

                                                ?>
                                                </p>
                                            </div>
                                            <a class="btn btn--radius btn--small btn--black btn--black-hover-green" href="blog-single-sidebar-left.html">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Single Blog List -->

                        @endforeach



                    </div>
                </div>

                <hr>
                <div class="d-flex justify-content-center">
                    {{ $tintucs->links() }}
                </div>
            </div>  <!-- Start Rightside - Content -->

        </div>
    </div>
</main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@stop
