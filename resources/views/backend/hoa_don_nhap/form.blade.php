<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputTenLoaiDoUong">Nhân viên nhập</label>
                <input type="text" class="form-control" name="nhanvien" aria-describedby="nameHelp"
                    value="{{old('nhanvien',$hdns->nhanvien  ??  '')}}" placeholder="Tên đồ uống">
                @if($errors->first('nhanvien'))
                <small id="nameHelp" class="form-text text-danger">{{$errors->first('nhanvien')}}</small>
                @endif
            </div>

        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputLoaiDoUong">Nhà cung cấp</label>
                <select name="nhacungcap_id" id="" class="form-control" aria-describedby="loaidouongHelp">
                    <option value="">__Chọn nhà cung cấp__</option>
                    @foreach($nhacungcap as $item)
                    <option value="{{$item->id}}"
                        {{old('nhacungcap_id',$hdns->nhacungcap_id ?? 0) == $item->id ? "selected":""}}>
                        {{$item->tennhacungcap}}
                    </option>

                    @endforeach

                </select>
                @if($errors->first('nhacungcap_id'))
                <small id=" loaidouongHelp" class="form-text text-danger">{{$errors->first('nhacungcap')}}</small>
                @endif
            </div>
        </div>


        @if(\Request::route()->getName()=='get_backend.hoa_don_nhap.create')
            <div>
                <button type="submit" class="btn btn-primary mb-5">Lưu</button>
            </div>
            <div style="margin-left: 10px">
                <button type="submit" class="btn btn-xs js-add-cthoadon btn-success mb-5">Thêm mới chi tiết</button>
            </div>

        {{-- @elseif (\Request::route()->getName()=='get_backend.do_uong.update')
            <button type="submit" class="btn btn-primary mb-5">Cập nhật</button> --}}
        @else
        <div style="margin-left: 10px">
            <button type="submit" class="btn btn-xs js-add-cthoadon btn-success mb-5">Thêm mới chi tiết</button>
        </div>

        @endif



    </div>

    @include('backend.hoa_don_nhap.item_form')
    @include('backend.hoa_don_nhap.item_index')

</form>
