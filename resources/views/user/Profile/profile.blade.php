@extends('user.index')
@section('sub')
@parent


            <h2 class="account-title">Thông tin</h2>
            <div class="account-details" >
                <div class="row" style="text-align:center">
                    <form action="" method="POST">
                        @csrf
                        <div class="col-md-6 left">
                            <div class="form-box__single-group">
                                <label for="">Họ tên</label>
                                <input type="text" placeholder="Họ tên" name="name"  value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-md-6 left">
                            <div class="form-box__single-group">
                                <label for="">Email</label>
                                <input type="email" placeholder="Email" name="email"  value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" placeholder="Địa chỉ" name="address" value="{{$user->address}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" placeholder="Số điện thoại" name="phone" value="{{$user->phone}}">
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="form-box__single-group">
                                <h5 class="title">Password change</h5>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box__single-group">
                                <input type="password" placeholder="Current Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <input type="password" placeholder="New Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <input type="password" placeholder="Confirm Password">
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <button class="btn btn--box btn--radius btn--small btn--black btn--black-hover-green btn--uppercase font--bold">Lưu </button>
                            </div>
                        </div>

                    </form>
         </div>
    </div>

@stop
