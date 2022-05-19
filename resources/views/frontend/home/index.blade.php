@extends('layouts.app_frontend')
@section('title','Smootthie & Fruit Shop')
@section('content')
        <!-- ::::::  Start  Product Style - Catagory Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title text-success">Khuyến mại</h5>

                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content tab-animate-zoom">


                            <!-- Start Single Tab Item -->
                            <div class="tab-pane show active" id="fruits">
                                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                    <div class="product-default-slider-4grid-2rows gap__col--30 gap__row--40">
                                        @foreach($giabans as $item)
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{route('get.chi_tiet_san_pham',$item->douong->slug)}}" class="product__img--link">
                                                    {{-- <img class="product__img img-fluid" src="{{pare_url_file($item->douong->hinhanh)}}" style="height: 100%;width:100%" alt=""> --}}
                                                    {{-- <img class="product__img img-fluid" src="" style="height: 100%;width:100%" alt=""> --}}
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-{{floor(100-((($item->gia)/($item->douong->gia))*100))}} %</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="{{route('get_ajax.shopping.add',$item->douong->id)}}" class="js-add-cart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="{{route('get.chi_tiet_san_pham',$item->douong->slug)}}" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">

                                                <a href="{{route('get.chi_tiet_san_pham',$item->douong->slug)}}" class="product__link">{{$item->douong->tendouong}}</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">{{number_format($item->gia ?? 0,0,',',',')}} đ <del>{{number_format($item->douong->gia ?? 0,0,',',',')}} đ</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->

                                        @endforeach




                                    </div>
                                </div>
                            </div>  <!-- End Single Tab Item -->



                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->



         <!-- ::::::  Start banner Section  ::::::  -->
         <div class="banner m-t-100 pos-relative">
            <div class="banner__bg">
                <img src="assets/img/banner/size-extra-large-wide/banner-home-1-img-1-extra-large-wide.jpg" alt="">
            </div>
            <div class="banner__box banner__box--single-text-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content--center pos-absolute">
                                <h6 class="banner__title  font--medium m-b-10">GIẢM GIÁ ĐẶC BIỆT</h6>
                                <h1 class="banner__title banner__title--large font--regular text-capitalize">Đối với tất cả đồ uống <br>
                                    products</h1>
                                <h6 class="banner__title font--medium m-b-40">Giảm ngay 20% cho tất cả đồ uống.</h6>
                                <a href="product-single-default.html" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title text-success">Đồ uống mới</h5>
                            <a href="shop-sidebar-grid-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Xem thêm<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">
                            @foreach ($douongnews as $item1)
      <!-- Start Single Default Product -->
      <div class="product__box product__default--single text-center">
        <!-- Start Product Image -->
        <div class="product__img-box  pos-relative" style="height: 250px;width:100%">
            <a href="{{route('get.chi_tiet_san_pham',$item1->slug)}}" class="product__img--link">
                <img class="product__img img-fluid" style="height: 100%;width:100%" src="{{pare_url_file($item1->hinhanh)}}" alt="">
                {{-- <img class="product__img img-fluid" style="height: 100%;width:100%" src="/uploads/2022/05/{{$item1->hinhanh}}" alt=""> --}}
            </a>
            <!-- Start Procuct Label -->
            <span class="product__label product__label--sale-out">New</span>
            <!-- End Procuct Label -->
            <!-- Start Product Action Link-->
            <ul class="product__action--link pos-absolute">
                <li><a href="{{route('get_ajax.shopping.add',$item1->id)}}" class="js-add-cart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                <li><a href="{{route('get.chi_tiet_san_pham',$item1->slug)}}" data-toggle="modal"><i class="icon-eye"></i></a></li>
            </ul> <!-- End Product Action Link -->
        </div> <!-- End Product Image -->
        <!-- Start Product Content -->
        <div class="product__content m-t-20">

            <a href="{{route('get.chi_tiet_san_pham',$item1->slug)}}" class="product__link">{{$item1->tendouong}}</a>
            <div class="product__price m-t-5">
                <span class="product__price">{{number_format($item1->gia ?? 0,0,',',',')}} đ </span>
            </div>
        </div> <!-- End Product Content -->
    </div> <!-- End Single Default Product -->
                            @endforeach







                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title text-success">Đồ uống bán chạy</h5>
                            <a href="shop-sidebar-grid-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Xem thêm<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                            @foreach ($douong_banchay as $item1)
      <!-- Start Single Default Product -->
      <div class="product__box product__default--single text-center">
        <!-- Start Product Image -->
        <div class="product__img-box  pos-relative" style="height: 250px;width:100%">
            <a href="{{route('get.chi_tiet_san_pham',$item1->slug)}}" class="product__img--link">
                {{-- <img class="product__img img-fluid" style="height: 100%;width:100%" src="~{{pare_url_file($item1->hinhanh)}}" alt=""> --}}
                <img class="product__img img-fluid" style="height: 100%;width:100%" src="/uploads/2022/05/{{$item1->hinhanh}}" alt="">
            </a>
            <!-- Start Procuct Label -->

            <!-- End Procuct Label -->
            <!-- Start Product Action Link-->
            <ul class="product__action--link pos-absolute">
                <li><a href="{{route('get_ajax.shopping.add',$item1->id)}}" class="js-add-cart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                <li><a href="{{route('get.chi_tiet_san_pham',$item1->slug)}}" data-toggle="modal"><i class="icon-eye"></i></a></li>
            </ul> <!-- End Product Action Link -->
        </div> <!-- End Product Image -->
        <!-- Start Product Content -->
        <div class="product__content m-t-20">

            <a href="{{route('get.chi_tiet_san_pham',$item1->slug)}}" class="product__link">{{$item1->tendouong}}</a>

            @foreach ($giabans_douong_banchay as $value)
                @if($value->douong_id === $item1->id)

                <div class="product__price m-t-5">
                   <span class="product__price">{{number_format($value->gia ?? 0,0,',',',')}} đ <del>{{number_format($value->douong->gia ?? 0,0,',',',')}} đ</del> </span>
                </div>
                @else
                <div class="product__price m-t-5">
                    <span class="product__price">{{number_format($item1->gia ?? 0,0,',',',')}} đ  </span>
                </div>
                @endif
            @endforeach



        </div> <!-- End Product Content -->
    </div> <!-- End Single Default Product -->
                            @endforeach







                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->
        <!-- ::::::  Start Testimonial Section  ::::::  -->
        {{-- <div class="testimonial m-t-100 pos-relative">
            <div class="testimonial__bg">
                <img src="assets/img/testimonial/testimonials-bg.jpg" alt="">
            </div>
            <div class="testimonial__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Our Client Say!</h2>
                            </div>
                            <div class="testimonial__slider default-slider">
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user" src="assets/img/testimonial/testimonial-home-1-img-1.png" alt="">
                                            <h5 class="testimonial__info--desig m-t-20">Nirob Khan / <span>CEO</span> </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user" src="assets/img/testimonial/testimonial-home-1-img-2.png" alt="">
                                            <h5 class="testimonial__info--desig m-t-20">Torvi / <span>C0O</span> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End Testimonial Section  ::::::  --> --}}

        <!-- ::::::  Start  Blog News  ::::::  -->
        {{-- <div class="blog m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Our Latest News</h5>
                            <a href="blog-list-sidebar-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More blogs <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red">
                            <div class="blog-feed-slider-3grid default-slider gap__col--30 ">
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-1.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>

                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>

                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-2.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>

                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>

                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-3.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>

                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>

                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-4.jpg" alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="blog-single-sidebar-left.html" class="blog-feed__link">Consectetur adipisicing</a>

                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link" href="blog-grid-sidebar-left.html"><span class="blog-feed__post-meta--date">July 23, 2020</span></a>

                                        </div>
                                        <p class="blog-feed__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>
                                        <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Blog News   ::::::  --> --}}

         <!-- ::::::  Start Newsletter Section  ::::::  -->
         {{-- <div class="newsletter m-t-100 pos-relative">
            <div class="newsletter__bg">
                <img src="assets/img/newsletter/newsletter-bg.jpg" alt="">
            </div>
            <div class="newsletter__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Subscribe To Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <form class="newsletter__form" action="#" method="post">
                                <div class="newsletter__form-content pos-relative">
                                    <label class="pos-absolute" for="newsletter-mail"><i class="icon-mail"></i></label>
                                    <input type="email" name="newsletter-mail" id="newsletter-mail" placeholder="Your mail address">
                                    <button class="text-uppercase pos-absolute" type="submit" >Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End newsletter Section  ::::::  --> --}}

        <!-- ::::::  Start  Company Logo Section  ::::::  -->
        <div class="company-logo m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo__area default-slider">
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-1.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-2.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-3.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-4.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-5.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-6.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-7.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Company Logo Section  ::::::  -->
@stop
