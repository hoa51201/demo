@extends('layouts.app_backend')
@section('title','Danh sách loại đồ uống')
@section('content')


<div class="dataTables_wrapper dt-bootstrape bg-light">
    <div class="container">
        <h1 class="mb-5">Danh sách loại đồ uống</h1>
        @include('layouts.flash_message')

        <div class="row mb-3">

            <div class="col-sm-6 form-inline" style="text-align:left">
                <div class="dataTables_filter">

                    <input type="search" class="form-control form-control-sm" palceholder aria-label="Tìm kiếm">
                    <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Tìm kiếm</button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="dataTables_filter">
                    <a href="{{route('get_backend.loai_do_uong.create')}}" class="btn btn-xs btn-primary">Thêm mới</a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="example" class="table table-striped table-bordered bg-light" style="width:100%">
                    <thead style="text-align:center">
                        <tr>
                            <th>STT</th>
                            <th>Tên loại đồ uống</th>
                            <th>Mô tả</th>
                            <th>Slug</th>
                            <th>Chức năng</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $tt=1?>
                        @foreach($loaidouong as $item)
                        <tr>
                            <td><?php  echo $tt++ ?></td>
                            <td>{{$item->tenloaidouong}}</td>
                            <td>{{$item->mota}}</td>
                            <td>{{$item->slug}}</td>


                            <td style="text-align:center">
                                <a href=" {{route('get_backend.loai_do_uong.update',$item->id)}}"
                                    class="btn btn-xs btn-primary">Sửa</a>
                                <a href="{{route('get_backend.loai_do_uong.delete',$item->id)}}"
                                    class="btn btn-xs btn-danger">Xóa</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>



</div>


@stop
