<div class="col-lg-3">
    <div class="sidebar">
        <!-- Start Single Sidebar Widget - Custom Menu -->
        {{-- <div class="sidebar__widget">
            <div class="sidebar__box">
                <h5 class="sidebar__title">CUSTOM MENU</h5>
            </div>
            <ul class="sidebar__menu">
                <li><a href="#">Search Terms</a></li>
                <li><a href="#">Advanced Search</a></li>
                <li><a href="#">Helps & Faqs</a></li>
                <li><a href="#">Store Location</a></li>
                <li><a href="#">Orders & Returns</a></li>
                <li><a href="#">Deliveries</a></li>
                <li><a href="#">Refund & Returns</a></li>
            </ul>
        </div>  <!-- End Single Sidebar Widget - Custom Menu --> --}}

        <!-- Start Single Sidebar Widget - Recent Post -->
        <div class="sidebar__widget">
            <div class="sidebar__box">
                <h5 class="sidebar__title">Tin tức mới nhất</h5>
            </div>
            <ul class="sidebar__post-blog list-space--small">
                @foreach ($tintucnews as $item)
                <li class="d-flex align-items-center ">
                    <a class="sidebar__post-img img-responsive" href="#">
                        <img src="{{pare_url_file($item->hinhanh)}}" alt="">
                    </a>
                    <div class="sidebar__post-content">
                        <a class="link--gray" href="#">{{$item->tieude}}</a>
                        <span class="d-block color-gray">{{$item->thoigiandang}}</span>

                    </div>
                </li>
                @endforeach


            </ul>
        </div>  <!-- End Single Sidebar Widget - Recent Post  -->

        <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
        <div class="sidebar__widget">
            <div class="sidebar__box">
                <h5 class="sidebar__title">Từ khóa</h5>
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
