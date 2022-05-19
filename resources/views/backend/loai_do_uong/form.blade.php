<form action="" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputTenLoaiDoUong">Tên loại đồ uống</label>
                <input type="text" class="form-control" name="tenloaidouong" aria-describedby="nameHelp"
                    value="{{old('tenloaidouong',$loaidouongs->tenloaidouong  ??  '')}}" placeholder="Tên loại đồ uống">
                @if($errors->first('tenloaidouong'))
                <small id="nameHelp" class="form-text text-danger">{{$errors->first('tenloaidouong')}}</small>
                @endif
            </div>


        </div>
        <div class="col-sm-6">

            <div class="form-group">
                <label for="exampleInputMoTa">Mô tả</label>
                <input type="text" class="form-control" id="mota1" name="mota" aria-describedby="MoTaHelp"
                    value="{{old('mota',$loaidouongs->mota  ??  '')}}" placeholder="Mô tả">
                @if($errors->first('mota'))
                <small id="MoTaHelp" class="form-text text-danger">{{$errors->first('mota')}}</small>
                @endif
            </div>



        </div>

    </div>
    @if(\Request::route()->getName()=='get_backend.loai_do_uong.create')
        <button type="submit" class="btn btn-primary mb-5">Thêm mới</button>
    @elseif (\Request::route()->getName()=='get_backend.loai_do_uong.update')
        <button type="submit" class="btn btn-primary mb-5">Cập nhật</button>
    @else

    @endif

</form>
