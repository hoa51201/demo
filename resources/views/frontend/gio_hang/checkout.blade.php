@extends('layouts.app_frontend')
@section('title','Smootthie & Fruit Shop')
@section('content')
<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                    <li class="page-breadcrumb__nav active">Đặt hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <!-- Start Client Shipping Address -->
            <div class="col-lg-7">
                <div class="section-content">
                    <h5 class="section-content__title">Thông tin giao hàng</h5>
                </div>
                <form action="" method="post" class="form-box">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-first-name">Họ tên</label>
                                <input type="text" name="hoten" value="{{$user->name ?? ''}}" id="form-first-name">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-box__single-group">
                                <label for="form-address-1">Địa chỉ</label>
                                <input type="text" value="{{$user->address ?? ''}}" name="diachi" id="form-address-1" placeholder="Địa chỉ">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-phone">Số điện thoại</label>
                                <input type="text" value="{{$user->phone ?? ''}}" name="sodienthoai" id="form-phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-email">Email</label>
                                <input type="email"  value="{{$user->email ?? ''}}" name="email" id="form-email">
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="m-tb-20">
                                <label for="check-account">
                                    <input type="checkbox" name="check-account" class="creat-account"  id="check-account">
                                    <span>Create an account?</span>
                                </label>
                                <div class="toogle-form open-create-account">
                                    <div class="form-box__single-group">
                                        <label for="form-email-new-account">Email Address</label>
                                        <input type="email" id="form-email-new-account">
                                    </div>
                                    <div class="form-box__single-group">
                                        <label for="form-password-new-account">Password</label>
                                        <input type="password" id="form-password-new-account">
                                    </div>
                                    <div class="from-box__buttons m-t-25">
                                        <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase btn--weight" type="submit">REGISTER</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="form-box__single-group">
                                <h6>Thông tin thêm</h6>
                                <label for="form-additional-info">Ghi chú</label>
                                <textarea  id="form-additional-info"  name="ghichu" rows="5" placeholder="Ghi chú về đơn hàng của bạn, ví dụ: ghi chú khi giao hàng"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--bold" type="submit">ĐẶT HÀNG</button>
                        </div>

                    </div>
                </form>
            </div> <!-- End Client Shipping Address -->

            <!-- Start Order Wrapper -->
            <div class="col-lg-5">
                <div class="your-order-section">
                    <div class="section-content">
                        <h5 class="section-content__title">Thông tin đơn hàng </h5>
                    </div>
                    <div class="your-order-box gray-bg m-t-40 m-b-30">
                        <div class="your-order-product-info">
                            <div class="your-order-top d-flex justify-content-between">
                                <h6 class="your-order-top-left font--bold">Đồ uống</h6>
                                <h6 class="your-order-top-right font--bold">Thành tiền</h6>
                            </div>
                            <ul class="your-order-middle">
                                @foreach ($douongcart as $row => $item)
                                <li class="d-flex justify-content-between">
                                    <span class="your-order-middle-left font--semi-bold">{{$item->name}} X {{$item->qty}}</span>
                                    <span class="your-order-middle-right font--semi-bold">{{number_format($item->price * $item->qty )}} đ</span>
                                </li>
                                @endforeach

                            </ul>
                            <div class="your-order-bottom d-flex justify-content-between">
                                <h6 class="your-order-bottom-left font--bold">Giao hàng</h6>
                                <span class="your-order-bottom-right font--semi-bold">Free ship</span>
                            </div>
                            <div class="your-order-total d-flex justify-content-between">
                                <h5 class="your-order-total-left font--bold">Tổng tiền</h5>
                                <h5 class="your-order-total-right font--bold">{{\Cart::subtotal(0)}} đ</h5>
                            </div>


                        </div>
                    </div>
                    
                </div>
            </div> <!-- End Order Wrapper -->
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@stop
