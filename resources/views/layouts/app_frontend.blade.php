
<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from htmldemo.hasthemes.com/gsore-preview/gsore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 13:57:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
   <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{URL::asset('/')}}assets/img/favicon.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/main.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Main Style CSS File -->
     {{-- <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/main.css"> --}}
 <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/Admin.css">
     <style>
         .user:hover{
            background: #89c74a;


         }
         .status:hover{
             color:#89c74a;

         }

         .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
             color: #fff;
             background-color: #89c74a;;
        }


        .autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; }
        .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
        .autocomplete-selected { background: #F0F0F0; }
        /*.autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }*/
        .autocomplete-group { padding: 2px 5px; }
        .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
    </style>
</head>

<body>

    <!-- ::::::  Start Header Section  ::::::  -->
    <header>
        <!--  Start Large Header Section   -->
        <div class="header d-none d-lg-block">
            <!-- Start Header Top area -->
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__top-content d-flex justify-content-between align-items-center">
                                <div class="header__top-content--left">
                                    <span>Giao hàng miễn phí: Tận dụng thời gian của chúng tôi để tiết kiệm sự kiện</span>
                                </div>
                                <ul class="header__top-content--right user-set-role d-flex">
                                    <li class="user-currency pos-relative">
                                        <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-expanded="false">Chọn ngôn ngữ<i class="fal fa-chevron-down"></i></a>
                                        <ul class="expand-dropdown-menu dropdown-menu" >
                                            <li><a href="#"><img src="{{URL::asset('/')}}assets/img/icon/flag/icon_usa.png" alt="">Tiếng anh</a></li>
                                            <li><a href="#"><img src="{{URL::asset('/')}}assets/img/icon/flag/icon_france.png" alt="">Việt Nam</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Start Header Top area -->

            <!-- Start Header Center area -->
            <div class="header__center sticky-header p-tb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <!-- Start Logo -->
                            <div class="header__logo">
                                <a href="index.html" class="header__logo-link img-responsive">
                                    <img class="header__logo-img img-fluid" src="{{URL::asset('/')}}assets/img/logo/logo.png" alt="">
                                </a>
                            </div> <!-- End Logo -->
                             <!-- Start Header Menu -->
                             <div class="header-menu">
                                <nav>
                                    <ul class="header__nav">
                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="{{route('get.home')}}" class="header__nav-link">Trang chủ</a>
                                        </li> <!-- End Single Nav link-->

                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                            <a href="#" class="header__nav-link">Sản phẩm <i class="fal fa-chevron-down"></i></a>
                                            <!-- Megamenu Menu-->
                                            <ul class="mega-menu pos-absolute">
                                                <li class="mega-menu__box">
                                                    <!--Single Megamenu Item Menu-->
                                                    <div class="mega-menu__item-box">
                                                        <span class="mega-menu__title">Sinh tố và nước trái cây</span>
                                                        <ul class="mega-menu__item">
                                                            @foreach($loaisanphamGlobal as $item1)
                                                            <li class="mega-menu__list"><a href="{{route('get.san_pham_theo_loai',$item1->slug)}}" class="mega-menu__link">{{$item1->tenloaidouong}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>


                                                </li>

                                            </ul>
                                            <!-- Megamenu Menu-->
                                        </li> <!-- Start Single Nav link-->
                                        @foreach(config('nav.home.top') as $item)

                                        <!--Start Single Nav link-->
                                        <li class="header__nav-item pos-relative">
                                                <a href="{{route($item['route'])}}" class="header__nav-link {{ \Request::route()->getName() == $item['route'] ? 'active' : '' }}">{{$item['name']}}</a>
                                        </li> <!-- End Single Nav link-->
                                        @endforeach
                                    </ul>
                                </nav>
                            </div> <!-- End Header Menu -->
                            <!-- Start Wishlist-AddCart -->
                            <ul class="header__user-action-icon">


                                <!-- Start Header Wishlist Box -->

                                <li>
                                    <a href="wishlist.html">
                                        <i class="icon-heart"></i>
                                        <span class="item-count pos-absolute">3</span>
                                    </a>
                                </li>
                                <!-- Start Header Add Cart Box -->
                                <li>
                                    <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="wishlist-item-count pos-absolute">{{\Cart::count()}}</span>
                                    </a>
                                </li> <!-- End Header Add Cart Box -->

                                @if(get_data_user('web'))
                                <!-- Start Header Wishlist Box -->
                                <li class="dropdown">
                                    <a class="dropdown-toogle" data-toggle="dropdown" href="my-account.html">
                                        <i class="icon-users"></i>
                                        {{get_data_user('web','name')}}
                                    </a>
                                    <div class="dropdown-menu" style="background: #89c74a;">
                                        <a href="{{route('get_user.home')}}" class="dropdown-item text-white user">Thông tin cá nhân</a>
                                        <a href="#" class="dropdown-item text-white user">Đơn hàng</a>
                                        <a href="{{route('get.logout')}}" class="dropdown-item text-white user">Đăng xuất</a>

                                    </div>
                                </li> <!-- End Header Wishlist Box -->
                                @else
                                <!-- Start Header Wishlist Box -->
                                <li>
                                    <a href="{{route('get.login')}}">
                                        <i class="icon-users"></i>
                                        Đăng Nhập
Đ
                                    </a>
                                </li> <!-- End Header Wishlist Box -->
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Center area -->

             <!-- Start Header bottom area -->
             <div class="header__bottom p-tb-30">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="header-menu-vertical pos-relative">
                                <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>SẢN PHẨM</h4>
                                <ul class="menu-content pos-absolute">
                                    @foreach($loaisanphamGlobal as $item1)
                                    <li class="menu-item"><a href="{{route('get.san_pham_theo_loai',$item1->slug)}}" class="mega-menu__link">{{$item1->tenloaidouong}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <form action="">

                                <div class="header-search__content pos-relative" id="the-basics">
                                    <input type="text"  class="typeahead" style="width:100%" id="tukhoas" name="tim_kiem" value="{{\Request::get('tim_kiem')}}"  placeholder="Tìm kiếm trong cửa hàng của chúng tôi" required>
                                    <button class="pos-absolute" type="submit" ><i class="icon-search"></i></button>

                                </div>
                            </form>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="header-phone text-right"><span>LIÊN HỆ:  0362 189 562</span></div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header bottom area -->

        </div> <!--  End Large Header Section  -->

        <!--  Start Mobile Header Section   -->
        <div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <ul class="header__mobile--leftside d-flex align-items-center justify-content-start">
                            <li>
                                <div class="header__mobile-logo">
                                    <a href="index.html" class="header__mobile-logo-link">
                                        <img src="{{URL::asset('/')}}assets/img/logo/logo.png" alt="" class="header__mobile-logo-img">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- Start User Action -->
                        <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end">
                            <!-- Start Header Add Cart Box -->
                            <li>
                                <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="wishlist-item-count pos-absolute">3</span>
                                </a>
                            </li> <!-- End Header Add Cart Box -->
                            <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a></li>

                        </ul>   <!-- End User Action -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="header-menu-vertical pos-relative m-t-30">
                            <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>CATEGORIES</h4>
                            <ul class="menu-content pos-absolute">
                                <li class="menu-item"><a href="#">Search Terms</a></li>
                                <li class="menu-item"><a href="#">Advanced Search</a></li>
                                <li class="menu-item"><a href="#">Helps & Faqs</a></li>
                                <li class="menu-item"><a href="#">Store Location</a></li>
                                <li class="menu-item"><a href="#"> Orders & Returns</a></li>
                                <li class="menu-item"><a href="#"> Deliveries</a></li>
                                <li class="menu-item"><a href="#"> Refund & Returns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text"></span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>

            <div class="offcanvas-inner">
                <ul class="user-set-role d-flex justify-content-between m-tb-15">
                    <li class="user-currency pos-relative">
                        <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-expanded="false">Select Language<i class="fal fa-chevron-down"></i></a>
                        <ul class="expand-dropdown-menu dropdown-menu" >
                            <li><a href="#"><img src="assets/img/icon/flag/icon_usa.png" alt="">English</a></li>
                            <li><a href="#"><img src="assets/img/icon/flag/icon_france.png" alt="">French</a></li>
                        </ul>
                    </li>
                    <li class="user-info pos-relative">
                        <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-expanded="false" >Select Currency <i class="fal fa-chevron-down"></i></a>
                        <ul class="expand-dropdown-menu dropdown-menu" >
                            <li><a href="#">USD</a></li>
                            <li><a href="#">POUND</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="header-search m-tb-15" action="#" method="post">
                    <div class="header-search__content pos-relative">
                        <input type="search" name="header-search" placeholder="Search our store" required>
                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
                 <!-- Start Mobile User Action -->
                <ul class="header__user-action-icon m-tb-15 text-center">
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="my-account.html">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Wishlist Box -->
                    <li>
                        <a href="wishlist.html">
                            <i class="icon-heart"></i>
                            <span class="item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Wishlist Box -->
                    <!-- Start Header Add Cart Box -->
                    <li>
                        <a href="cart.html">
                            <i class="icon-shopping-cart"></i>
                            <span class="wishlist-item-count pos-absolute">3</span>
                        </a>
                    </li> <!-- End Header Add Cart Box -->
                </ul>  <!-- End Mobile User Action -->
                <div class="offcanvas-menu">
                    <ul>
                        <li><a href="index.html"><span>Home</span></a></li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Layout</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-sidebar-grid-left.html">Grid Left Sidebar</a></li>
                                        <li><a href="shop-sidebar-grid-right.html">Grid Right Sidebar</a></li>
                                        <li><a href="shop-sidebar-full-width.html">Full Width</a></li>
                                        <li><a href="shop-sidebar-left-list-view.html">List Left Sidebar</a></li>
                                        <li><a href="shop-sidebar-right-list-view.html">List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="empty-cart.html">Empty Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-single-default.html">Simple</a></li>
                                        <li><a href="product-single-affiliate.html">Affiliate</a></li>
                                        <li><a href="product-single-group.html">Grouped</a></li>
                                        <li><a href="product-single-variable.html">Variable</a></li>
                                        <li><a href="product-single-tab-left.html">Left Tab</a></li>
                                        <li><a href="product-single-tab-right.html">Right Tab</a></li>
                                        <li><a href="product-single-slider.html">Single Slider</a></li>
                                        <li><a href="product-single-gallery-left.html">Gallery Left</a></li>
                                        <li><a href="product-single-gallery-right.html">Gallery Right</a></li>
                                        <li><a href="product-single-sticky-left.html">Sticky Left</a></li>
                                        <li><a href="product-single-sticky-right.html">Sticky Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-sidebar-left.html"> Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-sidebar-right.html"> Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-list-sidebar-left.html"> Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-sidebar-right.html"> Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-single-sidebar-left.html"> Blog Single Left Sidebar</a></li>
                                        <li><a href="blog-single-sidebar-right.html"> Blog Single Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="frequently-questions.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <ul class="offcanvas__social-nav m-t-50">
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-facebook-f"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-twitter"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-youtube"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                <li class="offcanvas__social-list"><a href="#" class="offcanvas__social-link"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div> <!--  End Mobile-offcanvas Menu Section   -->

 <!--  Start Popup Add Cart  -->
 <div  id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart">
    <div class="offcanvas__top">
        <span class="offcanvas__top-text"><i class="icon-shopping-cart"></i>Giỏ hàng </span>
        <button class="offcanvas-close"><i class="fal fa-times"></i></button>
    </div>
    <!-- Start Add Cart Item Box-->
    <ul class="offcanvas-add-cart__menu">

        @foreach ($douongcart as $item)
        <!-- Start Single Add Cart Item-->
        <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
            <div class="offcanvas-add-cart__content d-flex align-items-start m-r-10">
                <div class="offcanvas-add-cart__img-box pos-relative" style="width:50%;height:80px">
                    <a href="" class="offcanvas-add-cart__img-link img-responsive"><img src="{{pare_url_file($item->options->image)}}" alt=""  class="add-cart__img"></a>
                    <span class="offcanvas-add-cart__item-count pos-absolute">{{$item->qty}}</span>
                </div>
                <div class="offcanvas-add-cart__detail">
                    <a href="product-single-default.html" class="offcanvas-add-cart__link">{{$item->name}}</a>
                    <span class="offcanvas-add-cart__price">{{number_format($item->price)}}</span>

                </div>
            </div>
            <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
        </li> <!-- Start Single Add Cart Item-->
        @endforeach
    </ul> <!-- Start Add Cart Item Box-->
    <!-- Start Add Cart Checkout Box-->
    <div class="offcanvas-add-cart__checkout-box-bottom">
        <!-- Start offcanvas Add Cart Checkout Info-->
        <div class="offcanvas-add-cart__btn-checkout">
            <a href="{{route('get.gio_hang')}}" class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Xem giỏ hàng</a>
        </div>

        <div class="offcanvas-add-cart__btn-checkout">
            <a href="{{route('get.gio_hang.thanh_toan')}}" class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Đặt hàng</a>
        </div>
    </div> <!-- End Add Cart Checkout Box-->
</div> <!-- End Popup Add Cart -->

        <div class="offcanvas-overlay"></div>
    </header>  <!-- :::::: End Header Section ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        @if(\Request::route()->getName()=='get.home' && !\Request::get('tim_kiem') )
        <!-- ::::::  Start Hero Section  ::::::  -->
        <div class="hero slider-dot-fix slider-dot slider-dot-fix slider-dot--center slider-dot-size--medium slider-dot-circle  slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10">
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="{{URL::asset('/')}}assets/img/hero/hero-home-1-img-1.jpg"  alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% Lành mạnh và giá cả phải chăng</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Sinh tố <br>  trái cây</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Thay đổi nhỏ sự khác biệt lớn</h4>
                                    <a href="product-single-default.html" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Mua sắm ngay bây giờ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
            <!-- Start Single Hero Slide -->
            <div class="hero-slider" >
                <img src="{{URL::asset('/')}}assets/img/hero/hero-home-1-img-2.jpg"  alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% Lành mạnh và giá cả phải chăng</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Nước ép <br>trái cây</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Thay đổi nhỏ sự khác biệt lớn</h4>
                                    <a href="product-single-default.html" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Mua sắm ngay bây giờ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
        </div> <!-- ::::::  End Hero Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner m-t-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12" style="height: 600px">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="product-single-default.html" class="banner__link">
                                    <img src="{{URL::asset('/')}}assets/img/banner/size-wide/banner-home-1-img-1-wide.jpg" style="height: 600px" alt="" class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title  font--regular letter-spacing--4  text-center m-b-10 text-white">Sinh tố trái cây</h6>
                                    <h2 class="banner__title banner__title--large font--medium letter-spacing--4  text-uppercase text-success">100% Từ thiên nhiên</h2>
                                    <h6 class="banner__title font--regular letter-spacing--4  text-center m-b-20 text-white">Đồ uống lành mạnh</h6>
                                    <div class="text-center">
                                        <a href="product-single-default.html" class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Mua ngay</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                    <div class="col-md-6 col-12" style="height: 600px">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="product-single-default.html" class="banner__link">
                                    <img src="assets/img/banner/size-wide/banner-home-1-img-2-wide.jpg" style="height: 600px" alt="" class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-10 text-white">Nước ép trái cây</h6>
                                    <h2 class="banner__title banner__title--large letter-spacing--4 font--medium text-uppercase text-success">100% Trái cây tươi ngon</h2>
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-20 text-white">Đồ uống có lợi sức khỏe</h6>
                                    <div class="text-center">
                                        <a href="product-single-default.html" class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Mua ngay</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->
        @endif

        @include('layouts.flash_message')
        @yield('content')

    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->

    <!-- ::::::  Start  Footer ::::::  -->
    <footer class="footer m-t-100">
        <div class="container">
            <!-- Start Footer Top Section -->
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="index.html" class="footer__logo-link">
                                    <img src="{{URL::asset('/')}}assets/img/logo/logo.png" alt="" class="footer__logo-img">
                                </a>
                            </div>
                            <ul class="footer__address">
                                <li class="footer__address-item"><i class="fa fa-home"></i>Địa chỉ: Xã Thiện Phiến - Huyện Tiên Lữ - Tỉnh Hưng Yên</li>
                                <li class="footer__address-item"><i class="fa fa-phone-alt"></i>+89 362189562</li>
                                <li class="footer__address-item"><i class="fa fa-envelope"></i>duongthuyngo2k@gmail.com</li>
                            </ul>
                            <ul class="footer__social-nav">
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-twitter"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-youtube"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <!-- Start Footer Nav -->
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">THÔNG TIN</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="#" class="footer__link">Thông tin giao hàng</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Tìm kiếm nâng cao</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Trợ giúp & Câu hỏi thường gặp</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Vị trí cửa hàng</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Đơn hàng & Trả hàng</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Giao hàng</a></li>
                                <li class="footer__list"><a href="#" class="footer__link"> Hoàn lại tiền & trả hàng</a></li>
                            </ul>
                        </div> <!-- End Footer Nav -->
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">CÔNG TY CHÚNG TÔI</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="#" class="footer__link">Chuyển</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Thông báo pháp lý</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Sơ đồ trang web</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Thanh toán an toàn</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Blog</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Về chúng tôi</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Nghề nghiệp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">TÀI KHOẢN CỦA TÔI</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="#" class="footer__link">Cụm từ tìm kiếm</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Tìm kiếm nâng cao</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Trợ giúp & Câu hỏi thường gặp</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Vị trí cửa hàng</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Đơn hàng & Trả hàng</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Giao hàng</a></li>
                                <li class="footer__list"><a href="#" class="footer__link">Hoàn lại tiền & trả hàng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title footer__nav-title--dash footer__nav-title--dash-red">THỜI GIAN MỞ CỬA</h4>
                            <ul class="footer__nav">
                                <li class="footer__list">Thứ hai - Thứ sáu: 7h - 23h</li>
                                <li class="footer__list">Thứ bảy: 8h-22h</li>
                                <li class="footer__list">Chiều chủ nhật: 14h-18h</li>
                                <li class="footer__list">Thứ hai -Thứ sáu: 7h - 23h</li>
                                <li class="footer__list">Chúng tôi làm việc tất cả các ngày lễ</li>
                                <li class="footer__list"><a href="#" class="footer__link font--bold">Tải xuống ứng dụng của chúng tôi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- End Footer Top Section -->
            <!-- Start Footer Bottom Section -->
            <div class="footer__bottom">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                        <!-- Start Footer Copyright Text -->
                        <div class="footer__copyright-text">
                            <p>Copyright &copy; <a href="https://hasthemes.com/">HasThemes</a>. Đã đăng ký Bản quyền</p>
                        </div> <!-- End Footer Copyright Text -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <!-- Start Footer Payment Logo -->
                        <div class="footer__payment">
                            <a href="#" class="footer__payment-link">
                                <img src="{{URL::asset('/')}}assets/img/company-logo/payment.png" alt="" class="footer__payment-img">
                            </a>
                        </div>  <!-- End Footer Payment Logo -->
                    </div>
                </div>
            </div> <!-- End Footer Bottom Section -->
        </div>
    </footer> <!-- ::::::  End  Footer ::::::  -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal__product-img">
                                        <img class="img-fluid" src="{{URL::asset('/')}}assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Đã thêm vào giỏ hàng thành công!</div>
                                    <div class="modal__product-cart-buttons m-tb-15">
                                        <a href="cart.html" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">Xem giỏ hàng</a>
                                        <a href="checkout.html" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 modal__border">
                            <ul class="modal__product-shipping-info">
                                <li class="link--icon-left"><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</li>
                                <li>TOTAL PRICE: <span>$187.00</span></li>
                                <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">CONTINUE SHOPPING</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery-box m-b-60">
                                    <div class="modal-product-image--large">
                                        <img class="img-fluid" src="{{URL::asset('/')}}assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-box">
                                    <h5 class="title title--normal m-b-20">Aliquam lobortis</h5>
                                    <div class="product__price">
                                        <span class="product__price-del">$35.90</span>
                                        <span class="product__price-reg">$31.69</span>
                                    </div>
                                    <ul class="product__review m-t-15">
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                    </ul>
                                    <div class="product__desc m-t-25 m-b-30">
                                        <p>Mặt khác, chúng ta tố cáo với sự phẫn nộ chính đáng và chán ghét những người đàn ông bị mê hoặc và mất tinh thần bởi những thú vui nhất thời, mù quáng bởi dục vọng, đến nỗi họ không thể lường trước được những đau đớn và rắc rối sắp xảy ra; và trách nhiệm công bằng thuộc về những người thất bại trong nhiệm vụ của họ do yếu kém ý chí</p>
                                    </div>

                                    <div class="product-var p-t-30">
                                        <div class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                            <span class="product-var__text">Số lượng: </span>
                                            <form class="modal-quantity-scale m-l-20">
                                                <div class="value-button" id="modal-decrease" onclick="decreaseValueModal()">-</div>
                                                <input type="number" id="modal-number" value="1" />
                                                <div class="value-button" id="modal-increase" onclick="increaseValueModal()">+</div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="product-links">
                                        <div class="product-social m-tb-30">
                                            <span>CHIA SẺ SẢN PHẨM NÀY</span>
                                            <ul class="product-social-link">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="{{URL::asset('/')}}assets/js/vendor/vendor.min.js"></script>
    <script src="{{URL::asset('/')}}assets/js/plugin/plugins.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" ></script>
    <script src="{{URL::asset('/')}}assets/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
    <script>
           var path="{{route('get.autocomplete')}}";
            $('input.typeahead').typeahead({
                source: function(tim_kiem,process){
                    return $.get(path,{tim_kiem:tim_kiem},function(data){
                        return process(data);
                    console.log(data)
                    });
                }
            });
    var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
    var matches, substringRegex;
    // an array that will be populated with substring matches
    matches = [];
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });
    cb(matches);
  };
};
            var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];
$('#the-basics .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});
        // $("#tukhoas").autocomplete({
        //     serviceUrl:'/tim_kiem',
        //     paramName: "tukhoas",
        //     onSelect: function(suggestion) {
        //         $("#tukhoas").val(suggestion.value);
        //     },
        //     transformResult: function(response) {
        //         return {
        //             suggestions: $.map($.parseJSON(response), function(item) {
        //                 return {
        //                     value: item.tendouong,
        //                 };
        //             })
        //         };
        //     },
        // });

           $(document).ready(function() {
                $('#example').DataTable({
                    language: {
                        "sProcessing": "Đang xử lý...",
                        "sLengthMenu": "Hiển thị _MENU_ mục",
                        "sZeroRecords": "Không tìm thấy dòng nào phù hợp",
                        "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                        "sInfoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
                        "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                        "sSearch": "Tìm kiếm:",
                        "oPaginate": {
                            "sFirst": "Đầu",
                            "sPrevious": "Trước",
                            "sNext": "Tiếp",
                            "sLast": "Cuối"
                        }
                    }
                });
            });
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });

     $("body").on('click','.js-add-cart',function(event){
         event.preventDefault()//k reload trang
         let $this=$(this)
         let URL=$this.attr('href')
         let qty=1
         let $elementQty=$this.parents('.box-qty').find(".val-qty")
         if($elementQty.length){
             qty=$elementQty.val()
         }
         console.log(qty)
         $.ajax({
             url: URL,
             data:{
                 qty:qty
             },
         }).done(function(results){
            window.location.reload();
         });
     });


     $("body").on('click','.js-delete-cart',function(event){
         event.preventDefault()
         let $this=$(this)
         let URL=$this.attr('href')
         $.ajax({
             url: URL,
         }).done(function(results){
            console.log(results);
            if(results.status === 200) {
                    $this.parents('tr').remove();
                    window.location.reload();
                }
         });
     });


     $("body").on('click','.js-update-cart',function(event){
         event.preventDefault()
         let $this=$(this)
         let URL=$this.attr('href')
         let qty=1
         let $elementQty=$this.parents('tr').find(".val-qty")
         if($elementQty.length){
             qty=$elementQty.val()
         }
         $.ajax({
             url: URL,
             data:{
                 qty:qty
             },
         }).done(function(results){
            console.log(results);
            window.location.reload();
         });
     });

     $(function () {
        $('.select-sort').change(function () {
           $('#form_loc').submit();
        });
        $('.status').change(function () {
           $('#form_status').submit();
        });

     });


    </script>
</body>
<!-- Mirrored from htmldemo.hasthemes.com/gsore-preview/gsore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 13:58:31 GMT -->
</html>
