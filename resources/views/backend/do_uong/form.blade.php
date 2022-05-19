<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="exampleInputTenLoaiDoUong">Tên đồ uống</label>
                <input type="text" class="form-control" name="tendouong" aria-describedby="nameHelp"
                    value="{{old('tendouong',$douongs->tendouong  ??  '')}}" placeholder="Tên đồ uống">
                @if($errors->first('tendouong'))
                <small id="nameHelp" class="form-text text-danger">{{$errors->first('tendouong')}}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputLoaiDoUong">Loại đồ uống</label>
                <select name="loaidouong_id" id="" class="form-control" aria-describedby="loaidouongHelp">
                    <option value="">__Chọn loại đồ uống__</option>
                    @foreach($loaidouong as $item)
                    <option value="{{$item->id}}"
                        {{old('loaidouong_id',$douongs->loaidouong_id ?? 0) == $item->id ? "selected":""}}>
                        {{$item->tenloaidouong}}
                    </option>

                    @endforeach

                </select>
                @if($errors->first('loaidouong_id'))
                <small id=" loaidouongHelp" class="form-text text-danger">{{$errors->first('loaidouong_id')}}</small>
                @endif
            </div>




        </div>

        <div class="col-sm-8">

            <div class="form-group">
                <label for="exampleInputGia">Giá</label>
                <input type="text" class="form-control" name="gia" aria-describedby="GiaHelp"
                    value="{{old('gia',$douongs->gia  ??  0)}}" placeholder="Giá">
                @if($errors->first('gia'))
                <small id="GiaHelp" class="form-text text-danger">{{$errors->first('gia')}}</small>
                @endif
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" aria-describedby="hinhanh" id="hinhanh" name="hinhanh"
                        accept="image/*">
                    <label for="hinhanh" class="custom-file-label">Chọn ảnh từ máy của bạn</label>

                </div>
                @if(isset($douongs) && ($douongs->hinhanh))
                <img src="{{pare_url_file($douongs->hinhanh)}}" class="img-thumbnail" style="width:150px; height:150px">
                @endif
                @if($errors->first('hinhanh'))
                <small id="hinhanhHelp" class="form-text text-danger">{{$errors->first('hinhanh')}}</small>
                @endif
            </div>
            
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="exampleInputMoTa1">Mô tả</label>
                <textarea  class="form-control" rows="14" cols="10" id="mota"  name="mota" aria-describedby="MoTa1Help"
                     placeholder="Mô tả">

                     {{old('mota',$douongs->mota  ??  '')}}</textarea>


                @if($errors->first('mota'))
                <small id="MoTa1Help" class="form-text text-danger">{{$errors->first('mota')}}</small>
                @endif
            </div>
        </div>
        @if(\Request::route()->getName()=='get_backend.do_uong.create')
            <button type="submit" class="btn btn-primary mb-5">Thêm mới</button>
        @elseif (\Request::route()->getName()=='get_backend.do_uong.update')
            <button type="submit" class="btn btn-primary mb-5">Cập nhật</button>
        @else

        @endif

    </div>

</form>
