<div class="product m-t-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                 <!-- Start Section Title -->
                <div class="section-content section-content--border m-b-35">
                    <h5 class="section-content__title text-success">Sản phẩm tương tự
                    </h5>
                    <a href="shop-sidebar-grid-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Xem thêm<i class="fal fa-angle-right"></i></a>
                </div>  <!-- End Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                    <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">
              
                   
             
              @foreach ($douongtuongtu as $item)
              <!-- Start Single Default Product -->
              <div class="product__box product__default--single text-center">
                <!-- Start Product Image -->
                <div class="product__img-box  pos-relative">
                    <a href="{{route('get.chi_tiet_san_pham',$item->slug)}}" class="product__img--link">
                        <img class="product__img img-fluid" style="height:300px" src="{{pare_url_file($item->hinhanh)}}" alt="">
                    </a>
                    <!-- Start Procuct Label -->
                   
                    <!-- End Procuct Label -->
                    <!-- Start Product Action Link-->
                    <ul class="product__action--link pos-absolute">
                        <li><a href="{{route('get_ajax.shopping.add',$item->id)}}" class="js-add-cart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                        <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                        <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                        <li><a href="{{route('get.chi_tiet_san_pham',$item->slug)}}" ><i class="icon-eye"></i></a></li>
                    </ul> <!-- End Product Action Link -->
                </div> <!-- End Product Image -->
                <!-- Start Product Content -->
                <div class="product__content m-t-20">

                    <a href="{{route('get.chi_tiet_san_pham',$item->slug)}}" class="product__link">{{$item->tendouong}}</a>
                    <div class="product__price m-t-5">
                         <span class="product__price">{{number_format($item->gia,0,',',',')}} đ
                          
                      </span>
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



