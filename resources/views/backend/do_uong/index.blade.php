@extends('layouts.app_backend')
@section('title','Danh sách đồ uống')
@section('content')


<div class="dataTables_wrapper dt-bootstrape bg-light">
    <div class="container">
        <h1 class="mb-5">Danh sách đồ uống</h1>
        @include('layouts.flash_message')

        <div class="row mb-3">


            <div class="col-sm-12">
                <div class="dataTables_filter">
                    <a href="{{route('get_backend.do_uong.create')}}" class="btn btn-xs btn-primary">Thêm mới</a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="example" class="table table-striped table-bordered bg-light" style="width:100%">
                    <thead style="text-align:center">
                        <tr>
                            <th>STT</th>
                            <th>Tên đồ uống</th>
                            <th>Giá</th>
                            <th>Loại đồ uống</th>
                            <th>Hình ảnh</th>

                            <th>Chức năng</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $tt=1?>
                        @foreach($douongs as $item)

                        <tr>
                            <th><?php  echo $tt++ ?></th>
                            <td>{{$item->tendouong}}</td>
                            <td>
                                <span class="text-danger">{{number_format($item->gia,0,',',',')}} đ</span>
                            </td>
                            <td>
                                {{$item->loaidouong->tenloaidouong ?? "[N/A]"}}
                            </td>
                            <td>
                                <a href="">
                                    <img src="{{pare_url_file($item->hinhanh)}}" class="img-thumbnail"
                                        style="width:60px;height:60px" alt="">
                                </a>
                            </td>

                                {{-- //$str = "{$item->mota}"; //Tạo chuỗi
                                //$str = strip_tags($str); //Lược bỏ các tags HTML
                                //if(strlen($str)>100) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                   // $strCut = substr($str, 0, 200); //Cắt 100 kí tự đầu
                                   // $str = substr($strCut, 0, strrpos($strCut, ' ')).'...'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                             //   } --}}
                              {{-- //  echo '<td >'.$str.'</td>'; --}}

                            <td style="text-align:center">
                                <a href="{{route('get_backend.do_uong.view',$item->id)}}"
                                    class="btn btn-xs btn-danger">Xem</a>
                                <a href=" {{route('get_backend.do_uong.update',$item->id)}}"
                                    class="btn btn-xs btn-primary">Sửa</a>
                                <a href="{{route('get_backend.do_uong.delete',$item->id)}}"
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
