<div class="js-form-add-cthoadon">
  <h3>Thêm mới chi tiết hóa đơn nhập</h3>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputLoaiDoUong">Đồ uống</label>
                <select name="douong_id" id="" class="form-control" aria-describedby="loaidouongHelp">
                    <option value="">__Chọn đồ uống__</option>
                    @foreach($douongs as $item)
                    <option value="{{$item->id}}"
                        {{old('douong_id',$cthdns->douong_id ?? 0) == $item->id ? "selected":""}}>
                        {{$item->tendouong}}
                    </option>

                    @endforeach

                </select>
                @if($errors->first('douong_id'))
                <small id=" loaidouongHelp" class="form-text text-danger">{{$errors->first('douong_id')}}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputTenLoaiDoUong">Số lượng</label>
                <input type="text" class="form-control" name="soluong" aria-describedby="nameHelp"
                    value="{{old('soluong',$cthdns->soluong  ??  '')}}" placeholder="Số lượng">
                @if($errors->first('soluong'))
                <small id="nameHelp" class="form-text text-danger">{{$errors->first('soluong')}}</small>
                @endif
            </div>

        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputLoaiDoUong">Giá</label>
                <input type="text" class="form-control" name="gianhap" aria-describedby="nameHelp"
                    value="{{old('gianhap',$cthdns->gianhap  ??  '')}}" placeholder="Giá">
                @if($errors->first('gianhap'))
                <small id=" loaidouongHelp" class="form-text text-danger">{{$errors->first('gianhap')}}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputLoaiDoUong">Đơn vị tính</label>
                <input type="text" class="form-control" name="donvitinh" aria-describedby="nameHelp"
                    value="{{old('donvitinh',$cthdns->gia  ??  '')}}" placeholder="Giá">
                @if($errors->first('donvitinh'))
                <small id=" loaidouongHelp" class="form-text text-danger">{{$errors->first('donvitinh')}}</small>
                @endif
            </div>
           
            <div style="float:right">
                <button type="submit" class="btn btn-primary mb-5">Lưu</button>
            </div>

        {{-- @elseif (\Request::route()->getName()=='get_backend.do_uong.update')
            <button type="submit" class="btn btn-primary mb-5">Cập nhật</button> --}}
            
        </div>
    </div>
</div>
