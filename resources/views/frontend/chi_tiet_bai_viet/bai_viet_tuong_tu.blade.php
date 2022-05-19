<div class="product m-t-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                 <!-- Start Section Title -->
                <div class="section-content section-content--border m-b-35">
                    <h5 class="section-content__title text-success">Bài viết tương tự
                    </h5>
                    <a href="shop-sidebar-grid-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Xem thêm<i class="fal fa-angle-right"></i></a>
                </div>  <!-- End Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                    <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">
                    @foreach ($baiviettt as $item)
                      <!-- Start Single Default Product -->
                      <div class="product__box product__default--single text-center">
                        <!-- Start Product Image -->
                        <div class="product__img-box  pos-relative">
                            <a href="{{route('get.chi_tiet_bai_viet',$item->slug)}}" class="product__img--link">
                                <img class="product__img img-fluid" style="height:300px" src="{{pare_url_file($item->hinhanh)}}" alt="">
                            </a>
                            <!-- Start Procuct Label -->
                            {{-- <span class="product__label product__label--sale-dis">-34%</span> --}}
                            <!-- End Procuct Label -->
                            <!-- Start Product Action Link-->
                            
                        </div> <!-- End Product Image -->
                        <!-- Start Product Content -->
                        <div class="product__content m-t-20">

                            <a href="{{route('get.chi_tiet_bai_viet',$item->slug)}}" class="product__link">{{$item->tieude}}</a>
                            <div class="product__price m-t-5">
                                 <span class="product__price"><?php
                                    $str = "{$item->noidung}"; //Tạo chuỗi
                                    $str = strip_tags($str); //Lược bỏ các tags HTML
                                    if(strlen($str)>100) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                        $strCut = substr($str, 0, 200); //Cắt 100 kí tự đầu
                                        $str = substr($strCut, 0, strrpos($strCut, ' ')).'...'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                                    }
                                    echo '<td >'.$str.'</td>';

                                ?></span>
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



