@extends('layouts.app_backend')
@section('title','Thông tin hóa đơn nhập')
@section('content')

<div class="bg-light">
    <div class="container">
        <h1 class="mb-5">Chi tiết hóa đơn nhập #{{$hdns->id}} - Tổng tiền <b class="text-muted">{{number_format($hdns->tongtien,0,'.','.')}} đ</b></h1>
        @include('layouts.flash_message')
        <div class="container-fluid mb-20">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="mt-15">Thông tin hóa đơn nhập</h3>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nhân viên</th>
                        <td>{{$hdns->nhanvien}}</td>


                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th>Nhà cung cấp</th>
                        <td>
                            {{$nhacungcap->tennhacungcap}}
                        </td>
                      </tr>

                      <tr>
                        <th>Ngày nhập</th>
                        <td>{{date('d/m/Y',strtotime($hdns->ngaynhap))}}</td>
                      </tr>

                      
                    </tbody>
                  </table>
            </div>
          </div>          
        </div>
        <div style="margin-left: 10px">
          <a class="btn btn-xs js-add-cthoadon btn-success mb-5">Xem chi tiết</a>
      </div>
      @include('backend.hoa_don_nhap.item_form')
        @include('backend.hoa_don_nhap.item_index')
      
    </div>
</div>
@stop