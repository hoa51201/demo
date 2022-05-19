@extends('user.index')
@section('sub')
@parent

@if(Request::get('name')=='get_user.don_hang.view')
     @include('user.Order.order_header')
@else
     @include('user.Order.order_header')
@endif
<div class="tab-content">
        <div class="tab-pane mt-5 mb-3 active" id="tab1">
            <div class="row">
                 @if(Request::get('name')=='get_user.don_hang.view')
                 @include('user.Order.order_view')

                 @else
                <div class="col-12">
                   <h1>Danh sách đơn hàng</h1>
                   <form class="form-inline" id="form_status" style="float:right">

                        <div class="form-group mx-sm-3 mb-2" >
                            <select name="status" class="form-controll status" >
                                <option>Trạng thái đơn hàng</option>
                                <option value="1" {{ Request::get('status') == 1 ?? "selected='selected'" }}>Đang xử lí</option>
                                <option value="2" {{ Request::get('status') == 2 ?? "selected='selected'" }}>Đang giao hàng</option>
                                <option value="3" {{ Request::get('status') == 3 ?? "selected='selected'" }}>Đã giao hàng</option>
                                <option value="-1" {{ Request::get('status') == -1 ?? "selected='selected'" }}>Đã hủy</option>
                            </select>
                        </div>

                    </form>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Thời gian tạo</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tt=1?>
                             @foreach($donhang as $item)
                            <tr>
                                <th scope="row"><?php  echo $tt++ ?></th>
                                <td>{{$item->hoten}}</td>
                                <td><span class="text-danger">{{number_format($item->tongtien,0,',',',')}} đ</span></td>
                                <td>{{date('d/m/Y',strtotime($item->ngaytao))}}</td>
                                <td>
                                    <span class="{{$item->getStatus($item->trangthai)['class']}}">{{$item->getStatus($item->trangthai)['name']}} </span>
                                </td>
                                <td>
                                    <a href="{{route('get_user.don_hang.view',$item->id)}}"
                                    class="btn btn-xs btn-success">Xem chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-center">
                        {{ $donhang->links() }}
                    </div>
                </div>
@endif

            </div>
        </div>
        <div class="tab-pane fade mt-5 mb-3" id="tab2">
            <div class="row">
                @if(Request::get('name')=='get_user.don_hang.view')
                @include('user.Order.order_view')

                @else
                <div class="col-12">
                   <h1>Đơn hàng đang xử lí</h1>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Thời gian tạo</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tt=1?>
                             @foreach($donhang_1 as $item)
                            <tr>
                                <th scope="row"><?php  echo $tt++ ?></th>
                                <td>{{$item->hoten}}</td>
                                <td><span class="text-danger">{{number_format($item->tongtien,0,',',',')}} đ</span></td>
                                <td>{{date('d/m/Y',strtotime($item->ngaytao))}}</td>
                                <td>
                                    <span class="{{$item->getStatus($item->trangthai)['class']}}">{{$item->getStatus($item->trangthai)['name']}} </span>
                                </td>
                                <td>
                                    <a href="{{route('get_user.don_hang.view',$item->id)}}"
                                    class="btn btn-xs btn-success">Xem chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-center">
                        {{ $donhang_1->links() }}
                    </div>
                </div>
                @endif

            </div>
        </div>
        <div class="tab-pane fade mt-5 mb-3" id="tab3">
        <div class="row">
            @if(Request::get('name')=='get_user.don_hang.view')
            @include('user.Order.order_view')

            @else
                <div class="col-12">
                   <h1>Đơn hàng dang giao</h1>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Thời gian tạo</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tt=1?>
                             @foreach($donhang_2 as $item)
                            <tr>
                                <th scope="row"><?php  echo $tt++ ?></th>
                                <td>{{$item->hoten}}</td>
                                <td><span class="text-danger">{{number_format($item->tongtien,0,',',',')}} đ</span></td>
                                <td>{{date('d/m/Y',strtotime($item->ngaytao))}}</td>
                                <td>
                                    <span class="{{$item->getStatus($item->trangthai)['class']}}">{{$item->getStatus($item->trangthai)['name']}} </span>
                                </td>
                                <td>
                                   <a href="{{route('get_user.don_hang.view',$item->id)}}"
                                    class="btn btn-xs btn-success">Xem chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-center">
                        {{ $donhang_2->links() }}
                    </div>
                </div>
                @endif

            </div>
        </div>

        <div class="tab-pane fade mt-5 mb-3" id="tab4">
        <div class="row">
            @if(Request::get('name')=='get_user.don_hang.view')
            @include('user.Order.order_view')

            @else
                <div class="col-12">
                   <h1>Đơn hàng đã giao</h1>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Thời gian tạo</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tt=1?>
                             @foreach($donhang_3 as $item)
                            <tr>
                                <th scope="row"><?php  echo $tt++ ?></th>
                                <td>{{$item->hoten}}</td>
                                <td><span class="text-danger">{{number_format($item->tongtien,0,',',',')}} đ</span></td>
                                <td>{{date('d/m/Y',strtotime($item->ngaytao))}}</td>
                                <td>
                                    <span class="{{$item->getStatus($item->trangthai)['class']}}">{{$item->getStatus($item->trangthai)['name']}} </span>
                                </td>
                                <td>
                                    <a href="{{route('get_user.don_hang.view',$item->id)}}"
                                    class="btn btn-xs btn-success">Xem chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-center">
                        {{ $donhang_3->links() }}
                    </div>
                </div>
                @endif

            </div>
        </div>
        <div class="tab-pane fade mt-5 mb-3" id="tab5">
            <div class="row">
                @if(Request::get('name')=='get_user.don_hang.view')
                @include('user.Order.order_view')

                @else
                <div class="col-12">
                   <h1>Đơn hàng bị hủy</h1>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Thời gian tạo</th>
                                <th scope="col">Thời gian hủy</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tt=1?>
                             @foreach($donhang_4 as $item)
                            <tr>
                                <th scope="row"><?php  echo $tt++ ?></th>
                                <td>{{$item->hoten}}</td>
                                <td><span class="text-danger">{{number_format($item->tongtien,0,',',',')}} đ</span></td>
                                <td>{{date('d/m/Y',strtotime($item->ngaytao))}}</td>
                                <td>{{date('d/m/Y',strtotime($item->updated_at))}}</td>
                                <td>
                                    <span class="{{$item->getStatus($item->trangthai)['class']}}">{{$item->getStatus($item->trangthai)['name']}} </span>
                                </td>
                                <td>
                                    <a href="{{route('get_user.don_hang.view',$item->id)}}"
                                    class="btn btn-xs btn-success">Xem chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="d-flex justify-content-center">
                        {{ $donhang_4->links() }}
                    </div>
                </div>
                @endif

            </div>
        </div>
</div>









@stop
