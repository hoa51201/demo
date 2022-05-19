@extends('layouts.app_backend')
@section('title','Tổng quan')
@section('content')

<div class="dataTables_wrapper dt-bootstrape bg-light">
    <div class="container">

        <div class="row mt-15" style="height: 150px">
            <div class="col-lg-3">
                <div class="bg-success"
                    style="width:30%;text-align:center;line-height:120px;display:inline-block;height:100%;color:white">
                    <i class="fas fa-cog fa-4x"></i>
                </div>
                <div style="width:70%;float:right;height:100%;background:rgb(220, 221, 221);">
                    <div style="padding: 10px">
                        <h5 class="text-uppercase">Tổng số đơn hàng</h5>
                        <p style="font-size: 30px;color: rgb(212, 5, 5);font-weight: bold">{{$totalDonhang}}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="bg-danger"
                    style="width:30%;text-align:center;line-height:120px;display:inline-block;height:100%;color:white">
                    <i class=" fas fa-users fa-4x"></i>
                </div>
                <div style="width:70%;float:right;height:100%;background:rgb(220, 221, 221);">
                    <div style="padding: 10px">
                        <h4 class="text-uppercase">Thành viên</h4>
                        <p style="font-size: 30px;color: rgb(212, 5, 5);font-weight: bold">{{$totalUser}}</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="bg-info"
                    style="width:30%;text-align:center;line-height:120px;display:inline-block;height:100%;;color:white">
                    <i class="fab fa-readme fa-4x"></i>
                </div>
                <div style="width:70%;float:right;height:100%; background:rgb(220, 221, 221);">
                    <div style="padding: 10px">
                        <h4 class="text-uppercase">Bài viết</h4>
                        <p style="font-size: 30px;color: rgb(212, 5, 5);font-weight: bold">{{$totalTintuc}}</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="bg-warning"
                    style="width:30%;text-align:center;line-height:120px;display:inline-block;height:100%;color:white">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                </div>
                <div style="width:70%;float:right;height:100%;background:rgb(220, 221, 221);">
                    <div style="padding: 10px">
                        <h4 class="text-uppercase">Doanh thu (ngày)</h4>
                        <p style="font-size: 30px;color: rgb(212, 5, 5);font-weight: bold">
                            {{number_format($arrDTNgay,0,',',',')}}</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mb-30">
            <div class="col-lg-8">
                <figure class="highcharts-figure">
                    <div id="container-figure"  data-list-day="{{$listDay}}" data-money="{{$arrDoanhthu}}"></div>
                </figure>
            </div>
            <div class="col-lg-4">
                <figure class="highcharts-figure">
                    <div id="container-figure1" data-json="{{$statusDonhang}}"></div>
                </figure>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Đơn hàng hôm nay</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Thông tin</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày tạo</th>
                                        <th>Tổng tiền</th>
                                        <th>Chức năng</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $tt=1; ?>
                                    @foreach ($Donhangnew as $item)
                                        
                                   
                                    <tr>
    
                                        <td><?php echo $tt++;?></td>
                                        <td>
                                            <ul>
                                                <li>Họ tên: {{$item->hoten}}</li>
                                                <li>Email: {{$item->email}}</li>
                                                <li>Địa chỉ: {{$item->diachi}}</li>
                                                <li>Số điện thoại: {{$item->sodienthoai}}</li>
                                            </ul>
                                            
                                           
                                        
                                        
                                        <td>
                                            <span class="{{$item->getStatus($item->trangthai)['class']}}">{{$item->getStatus($item->trangthai)['name']}} </span>
                                        </td>
                                    
                                    
                                        <td>{{date('d/m/Y',strtotime($item->ngaytao))}}</td>
                                        <td>
                                            <span class="text-danger">{{number_format($item->tongtien,0,',',',')}} đ</span>
                                        </td>
                                    
                                        <td style="text-align:center">
                                            <a href=" {{route('get_backend.don_hang.view',$item->id)}}"
                                                class="btn btn-xs btn-primary">Xem</a>
                                    
                                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{route('get_backend.don_hang.index')}}" class="btn btn-sm btn-info btn-flat pull-right">Hiển thị tất cả</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            

        </div>

    </div>
</div>

@stop