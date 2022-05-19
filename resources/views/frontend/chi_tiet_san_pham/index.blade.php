@extends('layouts.app_frontend')
@section('title','Smootthie & Fruit Shop')
@section('content')


 <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
 <div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                    @if($douongct!=null)
                    <li class="page-breadcrumb__nav active">{{$douongct->douong->tendouong}}</li>
                    @else
                    <li class="page-breadcrumb__nav active">{{$douongchitiet->tendouong}}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- :::::: Start Main Container Wrapper :::::: -->
<main id="main-container" class="main-container">

    <!-- Start Product Details Gallery -->
    <div class="product-details">
        <div class="container">
            @if($douongct!=null)
            <div class="row">
                <div class="col-md-5">
                    <div class="product-gallery-box product-gallery-box--default m-b-60">
                        <div class="product-image--large product-image--large-horizontal">
                            <img class="img-fluid" id="img-zoom" src="{{pare_url_file($douongct->douong->hinhanh)}}" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                            {{-- <img class="product__img img-fluid" id="img-zoom" src="/uploads/2022/05/{{$douongct->hinhanh}}" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt=""> --}}
                        </div>

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-details-box m-b-60">
                        <label for=""> Tên đồ uống: <span class="font--regular m-b-20 text-uppercase"><h4>{{$douongct->douong->tendouong}}</h4></span></label>




                        <div class="product__price m-t-5">
                            <label for="">Giá:
                                <span class="product__price product__price--large">{{number_format($douongct->gia ?? 0,0,',',',')}} đ <del>{{number_format($douongct->douong->gia ?? 0,0,',',',')}} đ</del></span>
                            </label>

                           <span class="product__tag m-l-15 btn--tiny btn--green">-{{floor(100-((($douongct->gia)/($douongct->douong->gia))*100))}} %</span>
                        </div>


                        <div class="box-qty product-var p-tb-30 ">
                            <div class="product__stock m-b-20">
                                <span class="product__stock--in"><i class="fas fa-check-circle"></i> 199 CÓ HÀNG</span>
                            </div>
                            <div class="product-quantity product-var__item">
                                <ul class="product-modal-group">
                                    <li><a href="#modalSizeGuide" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-money-check-edit"></i>Kích thước</a></li>
                                    <li><a href="#modalShippinginfo" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-truck-container"></i>Giao hàng</a></li>
                                    <li><a href="#modalProductAsk" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-envelope"></i>Câu hỏi về sản phẩm này</a></li>
                                </ul>
                            </div>
                            <div class=" product-quantity product-var__item d-flex align-items-center">
                                <span class="product-var__text">Số lượng: </span>

                                    <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                    <input type="number" class="val-qty" id="number" value="1" />
                                    <div class="value-button" id="increase" onclick="increaseValue()">+</div>

                            </div>
                            <div class="product-var__item">
                                <a href="{{route('get_ajax.shopping.add',$douongct->douong->id)}}" class="btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20 js-add-cart">Thêm vào giỏ hàng</a>
                                <a href="wishlist.html" class="btn btn--round btn--round-size-small btn--green btn--green-hover-black"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="product-var__item">
                                <div class="dynmiac_checkout--button">
                                    <input type="checkbox" id="buy-now-check" value="1" class="p-r-30">
                                    <label for="buy-now-check" class="m-b-20">Tôi đồng ý với các điều khoản và điều kiện</label>
                                    <a href="cart.html" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Mua hàng ngay</a>
                                </div>
                            </div>
                            <div class="product-var__item">
                                {{-- <span class="product-var__text">Guaranteed safe checkout </span> --}}
                                <ul class="payment-icon m-t-5">
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/paypal.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/amex.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/ipay.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/visa.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/shoify.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/mastercard.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/gpay.svg" alt=""></li>
                                </ul>
                            </div>
                            <div class="product-var__item d-flex align-items-center">
                                <span class="product-var__text">Chia sẻ: </span>
                                <ul class="product-social m-l-20">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else

            <div class="row">
                <div class="col-md-5">
                    <div class="product-gallery-box product-gallery-box--default m-b-60">
                        <div class="product-image--large product-image--large-horizontal">
                            <img class="img-fluid" id="img-zoom" src="{{pare_url_file($douongchitiet->hinhanh)}}" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-details-box m-b-60">
                        <label for=""> Tên đồ uống: <span class="font--regular m-b-20 text-uppercase"><h4>{{$douongchitiet->tendouong}}</h4></span></label>




                        <div class="product__price m-t-5">
                            <label for="">Giá:
                                <span class="product__price product__price--large">{{number_format($douongchitiet->gia ?? 0,0,',',',')}} đ{{-- <del>$29.00</del>--}}</span>
                            </label>

                            {{--<span class="product__tag m-l-15 btn--tiny btn--green">-34%</span>  --}}
                        </div>


                        <div class="box-qty product-var p-tb-30 ">
                            <div class="product__stock m-b-20">
                                <span class="product__stock--in"><i class="fas fa-check-circle"></i> 199 CÓ HÀNG</span>
                            </div>
                            <div class="product-quantity product-var__item">
                                <ul class="product-modal-group">
                                    <li><a href="#modalSizeGuide" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-money-check-edit"></i>Kích thước</a></li>
                                    <li><a href="#modalShippinginfo" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-truck-container"></i>Giao hàng</a></li>
                                    <li><a href="#modalProductAsk" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-envelope"></i>Câu hỏi về sản phẩm này</a></li>
                                </ul>
                            </div>
                            <div class=" product-quantity product-var__item d-flex align-items-center">
                                <span class="product-var__text">Số lượng: </span>

                                    <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                    <input type="number" class="val-qty" id="number" value="1" />
                                    <div class="value-button" id="increase" onclick="increaseValue()">+</div>

                            </div>
                            <div class="product-var__item">
                                <a href="{{route('get_ajax.shopping.add',$douongchitiet->id)}}" data-toggle="modal" data-dismiss="modal" class="btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20 js-add-cart">Thêm vào giỏ hàng</a>
                                <a href="wishlist.html" class="btn btn--round btn--round-size-small btn--green btn--green-hover-black"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="product-var__item">
                                <div class="dynmiac_checkout--button">
                                    <input type="checkbox" id="buy-now-check" value="1" class="p-r-30">
                                    <label for="buy-now-check" class="m-b-20">Tôi đồng ý với các điều khoản và điều kiện</label>
                                    <a href="cart.html" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Mua hàng ngay</a>
                                </div>
                            </div>
                            <div class="product-var__item">
                                {{-- <span class="product-var__text">Guaranteed safe checkout </span> --}}
                                <ul class="payment-icon m-t-5">
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/paypal.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/amex.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/ipay.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/visa.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/shoify.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/mastercard.svg" alt=""></li>
                                    <li><img src="{{URL::asset('/')}}assets/img/icon/payment/gpay.svg" alt=""></li>
                                </ul>
                            </div>
                            <div class="product-var__item d-flex align-items-center">
                                <span class="product-var__text">Chia sẻ: </span>
                                <ul class="product-social m-l-20">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
        </div>
    </div><!-- End Product Details Gallery -->

    <!-- Start Product Details Tab -->
    <div class="product-details-tab-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content">
                        <ul class="tablist tablist--style-black tablist--style-title tablist--style-gap-30 nav">
                            <li><a class="nav-link active" data-toggle="tab" href="#product-desc">Mô tả</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#product-review">Đánh giá</a></li>
                        </ul>
                        <div class="product-details-tab-box">
                            <div class="tab-content">
                                <!-- Start Tab - Product Description -->
                                <div class="tab-pane show active" id="product-desc">
                                    @if($douongct!=null)
                                    <?php
                                    $str = "{$douongct->douong->mota}"; //Tạo chuỗi
                                   // $str = strip_tags($str); //Lược bỏ các tags HTML

                                    echo $str;
                                ?>
                                    @else
                                    <?php
                                $str = "{$douongchitiet->mota}"; //Tạo chuỗi
                               // $str = strip_tags($str); //Lược bỏ các tags HTML

                                echo $str;
                            ?>
                            @endif
                                </div>  <!-- End Tab - Product Description -->

                                <!-- Start Tab - Product Details -->

                                <!-- Start Tab - Product Review -->
                                <div class="tab-pane " id="product-review">
                                    <!-- Start - Review Comment -->
                                    <ul class="comment">
                                        <!-- Start - Review Comment list-->
                                        <li class="comment__list">
                                            <div class="comment__wrapper">
                                                <div class="comment__img">
                                                    <img src="{{URL::asset('/')}}assets/img/user/image-1.png" alt="">
                                                </div>
                                                <div class="comment__content">
                                                    <div class="comment__content-top">
                                                        <div class="comment__content-left">
                                                            <h6 class="comment__name">Kaedyn Fraser</h6>
                                                            <ul class="product__review">
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                                        </ul>
                                                        </div>
                                                        <div class="comment__content-right">
                                                            <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>

                                                    <div class="para__content">
                                                        <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start - Review Comment Reply-->
                                            <ul class="comment__reply">
                                                <li class="comment__reply-list">
                                                    <div class="comment__wrapper">
                                                        <div class="comment__img">
                                                            <img src="assets/img/user/image-2.png" alt="">
                                                        </div>
                                                        <div class="comment__content">
                                                            <div class="comment__content-top">
                                                                <div class="comment__content-left">
                                                                    <h6 class="comment__name">Oaklee Odom</h6>
                                                                </div>
                                                                <div class="comment__content-right">
                                                                    <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>

                                                            <div class="para__content">
                                                                <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> <!-- End - Review Comment Reply-->
                                        </li> <!-- End - Review Comment list-->
                                        <!-- Start - Review Comment list-->
                                        <li class="comment__list">
                                            <div class="comment__wrapper">
                                                <div class="comment__img">
                                                    <img src="{{URL::asset('/')}}assets/img/user/image-3.png" alt="">
                                                </div>
                                                <div class="comment__content">
                                                    <div class="comment__content-top">
                                                        <div class="comment__content-left">
                                                            <h6 class="comment__name">Jaydin Jones</h6>
                                                            <ul class="product__review">
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                                        </ul>
                                                        </div>
                                                        <div class="comment__content-right">
                                                            <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>

                                                    <div class="para__content">
                                                        <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> <!-- End - Review Comment list-->
                                    </ul>  <!-- End - Review Comment -->

                                    <!-- Start Add Review Form-->
                                    <div class="review-form m-t-40">
                                        <div class="section-content">
                                            <h6 class="font--bold text-uppercase">ADD A REVIEW</h6>
                                            <p class="section-content__desc">Your email address will not be published. Required fields are marked *</p>
                                        </div>
                                        <form class="form-box" action="#" method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-box__single-group">
                                                        <label for="form-name">Your Rating*</label>
                                                        <ul class="product__review">
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <label for="form-name">Your Name*</label>
                                                        <input type="text" id="form-name" placeholder="Enter your name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <label for="form-email">Your Email*</label>
                                                        <input type="email" id="form-email" placeholder="Enter your email" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-box__single-group">
                                                        <label for="form-review">Your review*</label>
                                                        <textarea id="form-review" rows="8" placeholder="Write a review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- End Add Review Form- -->
                                </div>  <!-- Start Tab - Product Review -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  <!-- End Product Details Tab -->

    @include('frontend.chi_tiet_san_pham.san_pham_tuong_tu')

    <!-- ::::::  Start  Company Logo Section  ::::::  -->
    <div class="company-logo m-t-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="company-logo__area default-slider">
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="{{URL::asset('/')}}assets/img/company-logo/company-logo-1.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="{{URL::asset('/')}}assets/img/company-logo/company-logo-2.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="{{URL::asset('/')}}assets/img/company-logo/company-logo-3.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="{{URL::asset('/')}}assets/img/company-logo/company-logo-4.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="{{URL::asset('/')}}assets/img/company-logo/company-logo-5.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="{{URL::asset('/')}}assets/img/company-logo/company-logo-6.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                        <!-- Start Single Company Logo Item -->
                        <div class="company-logo__item">
                            <a href="#" class="company-logo__link">
                                <img src="{{URL::asset('/')}}assets/img/company-logo/company-logo-7.png" alt="" class="company-logo__img">
                            </a>
                        </div> <!-- End Single Company Logo Item -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Company Logo Section  ::::::  -->

</main>  <!-- :::::: End MainContainer Wrapper :::::: -->

@stop
