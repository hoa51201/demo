<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                    @if(Request::get('tim_kiem'))
                    <li class="page-breadcrumb__nav active" >{{$loaidouongs->tenloaidouong}}</li>
                    <li class="page-breadcrumb__nav active" >Kết quả tìm kiếm</li>
                    @else

                    <li class="page-breadcrumb__nav active" >{{$loaidouongs->tenloaidouong}}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End Breadcrumb Section  ::::::  -->


