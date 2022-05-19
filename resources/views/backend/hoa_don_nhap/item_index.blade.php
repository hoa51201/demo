
<div class="dataTables_wrapper dt-bootstrape js-index-cthoadon bg-light">
    <div class="container">
        <h3 class="mb-5">Danh sách chi tiết hóa đơn nhập</h3>
        @include('layouts.flash_message')
        <div class="row">
            <div class="col-sm-12">
                <table id="example" class="table table-striped table-bordered bg-light" style="width:100%">
                    <thead style="text-align:center">
                        <tr>
                            <th>STT</th>
                            <th>Tên đồ uống</th>
                            <th>Số lượng</th>
                            <th>Đơn vị tính</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                            <th>Chức năng</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $tt=1?>
                        @foreach($cthdn as $item)
                        <tr>
                            <td><?php  echo $tt++ ?></td>
                            <td>{{$item->douongs->tendouong ?? "[N/A]"}}</td>
                            <td>{{$item->soluong}}</td>
                            <td>{{$item->donvitinh}}</td>
                            <td>{{$item->gia}}</td>
                            <td>{{$item->gia * $item->soluong}}</td>
                            <td style="text-align:center">
                                <a href=" {{route('get_backend.hoa_don_nhap.update',$item->id)}}"
                                    class="btn btn-xs btn-primary">Sửa</a>
                                <a href="{{route('get_backend.hoa_don_nhap.show',$item->id)}}"
                                    class="btn btn-xs btn-danger">Xem chi tiết</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>