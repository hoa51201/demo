@extends('layouts.app_frontend')
@section('title','Smootthie & Fruit Shop')
@section('content')



@include('frontend.gio_hang.tag_header')

 <!-- ::::::  Start  Main Container Section  ::::::  -->
 <main id="main-container" class="main-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="section-content">
                    <h5 class="section-content__title">Các mặt hàng trong giỏ hàng của bạn</h5>
                </div>
                <!-- Start Cart Table -->
                <div style="white-space:none" class="table-content table-responsive cart-table-content m-t-20">
                    <table>
                        <thead class="gray-bg" >
                            <tr>
                                <th style="width:5%">STT</th>
                                <th>Hình ảnh</th>
                                <th>Tên đồ uống</th>
                                <th>Giá (VNĐ)</th>
                                <th>Số lượng</th>
                                <th>Thành tiền (VNĐ)</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tt=1;  ?>
                            @foreach ($douongcart as $row => $item)
                            <tr>
                                <td><?php echo $tt++ ?> </td>
                                <td class="product-thumbnail">
                                    <a href=""><img class="img-fluid" style="width:100px;height:100px" src="{{pare_url_file($item->options->image)}}" alt=""></a>
                                </td>
                                <td class="product-name" style="text-align:left"><a href="">{{$item->name}}</a></td>
                                <td class="product-price-cart" style="text-align:left"><span class="amount">{{number_format($item->price)}} </span></td>
                                <td class="product-quantities">
                                    <div class="quantity d-inline-block">
                                        <input type="number" class="val-qty" min="1" step="1" value="{{$item->qty}}">
                                    </div>
                                </td>
                                <td class="product-subtotal" style="text-align:left">{{number_format($item->price * $item->qty)}}</td>
                                <td class="product-remove">
                                    <a class="js-update-cart" href="{{route('get_ajax.shopping.update',$row)}}"><i class="fa fa-pencil-alt"></i></a>
                                    <a class="js-delete-cart" href="{{route('get_ajax.shopping.delete',$row)}}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>  <!-- End Cart Table -->
                 <!-- Start Cart Table Button -->
                <div class="cart-table-button m-t-10">
                    <div class="cart-table-button--left">
                        <a href="{{route('get.home')}}" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20">TIẾP TỤC MUA HÀNG</a>
                    </div>

                </div>  <!-- End Cart Table Button -->
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="sidebar__widget m-t-40">
                    <div class="sidebar__box">
                        <h5 class="sidebar__title">Tổng giỏ hàng</h5>
                    </div>
                    <h6 class="total-cost">Tổng tiền sản phẩm<span>{{\Cart::subtotal(0)}} đ</span></h6>
                    {{-- <div class="total-shipping">
                        <span>Tiền vận chuyển</span>
                        <ul class="shipping-cost m-t-10">
                            <li>
                                <label for="ship-standard">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Standard" id="ship-standard" checked><span>Tiêu chuẩn</span>
                                </label>
                                <span class="ship-price">20.000 đ</span>
                            </li>
                            <li>
                                <label for="ship-express">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Express" id="ship-express"><span>Giao hàng nhanh</span>
                                </label>
                                <span class="ship-price">30.000 đ</span>
                            </li>
                        </ul>
                    </div> --}}
                    <h4 class="grand-total m-tb-25">Tổng cộng
                         {{-- @if(empty()) --}}
                         <span>{{\Cart::subtotal(0)}} đ</span>

                         {{-- @endisset) --}}


                    </h4>
                    @if(get_data_user('web'))
                    <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold"  type="submit"><a href="{{route('get.gio_hang.thanh_toan')}}">THANH TOÁN</a> </button>
                    @else
                    <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold"  type="submit"><a href="{{route('get.login')}}">THANH TOÁN</a> </button>
                    @endif 
                </div>
            </div>

        </div>






    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->
@stop
