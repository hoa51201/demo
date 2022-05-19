<div class="col-lg-3">
    <div class="sidebar">
        <!-- Start Single Sidebar Widget - Filter [Catagory] -->
        <div class="sidebar__widget ">
            <div class="sidebar__box">
                <h5 class="sidebar__title text-success">ĐỒ UỐNG THEO LOẠI</h5>
            </div>
            <ul class="sidebar__menu">
                @foreach($loaisanphamGlobal as $item1)
               <li ><a href="{{route('get.san_pham_theo_loai',$item1->slug)}}">{{$item1->tenloaidouong}}</a></li>
               @endforeach
            </ul>
        </div>  <!-- End SSingle Sidebar Widget - Filter [Catagory] -->


        <!-- Start Single Sidebar Widget - Filter [Price] -->
        <!-- Start Single Sidebar Widget - Filter [Price] -->



        <!-- ::::::  Start Sidebar Widget - Top Product   ::::::  -->
        <div class="sidebar__widget">
            <div class="sidebar__box">
                <h5 class="sidebar__title text-success">ĐỒ UỐNG BÁN CHẠY</h5>
            </div>
            {{-- <ul class="sidebar__post-product list-space--medium ">
                <li  class="d-flex align-items-center">
                    <a href="product-single-default.html" class="sidebar__product-img img-responsive">
                        <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="">
                    </a>
                    <div class="product__content">
                        <a href="product-single-default.html" class="product__link">Fresh Eggs</a>
                        <ul class="product__review">
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--blank"><i class="icon-star"></i></li>
                        </ul>
                        <div class="product__price">
                            <span class="product__price">$10.00</span>
                        </div>
                    </div>
                </li>
                <li  class="d-flex align-items-center">
                    <a href="product-single-default.html" class="sidebar__product-img img-responsive">
                        <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-2.jpg" alt="">
                    </a>
                <!-- Start Product Content -->
                <div class="product__content">
                    <a href="product-single-default.html" class="product__link">Fresh Fruits</a>
                    <ul class="product__review">
                        <li class="product__review--fill"><i class="icon-star"></i></li>
                        <li class="product__review--fill"><i class="icon-star"></i></li>
                        <li class="product__review--fill"><i class="icon-star"></i></li>
                        <li class="product__review--fill"><i class="icon-star"></i></li>
                        <li class="product__review--blank"><i class="icon-star"></i></li>
                    </ul>
                    <div class="product__price">
                        <span class="product__price">$17.00</span>
                    </div>
                </div> <!-- End Product Content -->
                </li>
                <li  class="d-flex align-items-center">
                        <a href="product-single-default.html" class="sidebar__product-img img-responsive">
                            <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-3.jpg" alt="">
                        </a>
                    <!-- Start Product Content -->
                    <div class="product__content">
                        <a href="product-single-default.html" class="product__link">Natural Juice</a>
                        <ul class="product__review">
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--fill"><i class="icon-star"></i></li>
                            <li class="product__review--blank"><i class="icon-star"></i></li>
                        </ul>
                        <div class="product__price">
                            <span class="product__price">$25.00</span>
                        </div>
                    </div> <!-- End Product Content -->
                </li>
            </ul> --}}
        </div> <!-- ::::::  End Sidebar Widget - Top Product  ::::::  -->

        <!-- ::::::  Start Sidebar Widget - Tag  ::::::  -->
        <div class="sidebar__widget">
            <div class="sidebar__box">
                <h5 class="sidebar__title text-success">Từ khóa</h5>
            </div>
            <ul class="sidebar__tag list-space--small">

                @foreach ($tags as $item)
                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">{{$item->tenloaidouong}}</a></li>


                @endforeach

            </ul>
        </div> <!-- ::::::  Start Sidebar Widget - Tag  ::::::  -->
    </div>
</div> <!-- End Left Sidebar Widget -->
