@extends('user.index')
@section('sub')

<div class="col-12">
        <h1 class="mb-5">Chi tiết đơn hàng #{{$donhang->id}}</h1>
        @include('layouts.flash_message')
        <div class="row">
            <div class="col-sm-12 center">
                <h3 class="mt-15 text-muted">Thông tin khách hàng nhận hàng</h3>
                <table class="table">



                    <tbody>
                        <tr>
                            <th>Họ tên</th>
                            <td style="float:left">{{$donhang->hoten}}</td>


                          </tr>

                      <tr>
                        <th>Địa chỉ</th>
                        <td style="float:left">{{$donhang->diachi}}</td>
                      </tr>

                      <tr>
                        <th>Số điện thoại</th>
                        <td style="float:left">{{$donhang->sodienthoai}}</td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td style="float:left">{{$donhang->email}}</td>
                      </tr>

                    </tbody>
                  </table>
            </div>

            <div class="col-sm-12 ">
                <h3 class="mt-10 text-muted">Trạng thái đơn hàng: <span class="{{$donhang->getStatus($donhang->trangthai)['class']}}">{{$donhang->getStatus($donhang->trangthai)['name']}} </span></h3>

                @if($donhang->getStatus($donhang->trangthai)['name']==="Đang xử lí")
                <a href="{{route('get_backend.don_hang.cancel',$donhang->id)}}" class="btn btn-sm btn-danger">Hủy bỏ</a>
                @else
                @endif
            </div>

            <div class="col-sm-12 ">
                <h3 class="mt-10 text-muted">Lịch sử đơn hàng: </h3>

                
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12">
                <h3>Danh sách chi tiết đơn hàng</h3>
                <table  class="table table-striped table-bordered bg-light" style="width:100%">
                    <thead style="text-align:center">
                        <tr>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th>Tên đồ uống</th>
                            <th>Giá bán</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>

                        </tr>
                    </thead>
                    <tbody style="text-align:center">
                        <?php $i=1;?>
                        @foreach($ctdonhang as $item)

                        <tr>
                            <th><?php echo $i++?></th>
                            <td>
                                <img class="img-thumbnail"
                                style="width:60px;height:60px"
                                 src="{{pare_url_file($item->douong->hinhanh)}}"  alt="">
                            </td>
                            <td>{{$item->douong->tendouong ?? "[N/A]"}}</td>

                            <td>
                                <span class="text-danger">{{number_format($item->gia,0,',',',')}} đ</span>
                            </td>
                            <td >
                                {{$item->soluong}}
                            </td>

                            <td class="text-danger">{{number_format($item->thanhtien,0,',',',') }} đ</td>



                        </tr>
                        @endforeach

                    </tbody>
                </table>

                <h3 align="right">Tổng tiền: <b class="text-danger">{{number_format($donhang->tongtien,0,'.','.')}} đ</b></h3>
            </div>


        </div>

    </div>

@stop
