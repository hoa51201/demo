
<div marginheight="0" marginwidth="0" style="background:#f0f0f0">
    <div id="wrapper" style="background-color:#f0f0f0">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="800" style="margin:0 auto;width:600px!important;min-width:600px!important" class="container">
            <tbody>
               
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="left" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:24px;color:#ff3333;text-transform:uppercase;font-weight:bold;padding:25px 10px 15px 10px">
                                        Thông báo đặt hàng thành công
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;padding:0 10px 20px 10px;line-height:17px">
                                        Chào Dương,
                                        <br> Cám ơn bạn đã mua sắm tại Smoothie & Fruit Shop
                                        <br>
                                        <br> Đơn hàng của bạn đang
                                        <b>chờ shop</b>
                                        <b>xác nhận</b> (trong vòng 10p)
                                        <br> Chúng tôi sẽ thông tin <b>trạng thái đơn hàng</b> trong email tiếp theo.
                                        <br> Bạn vui lòng kiểm tra email thường xuyên nhé.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff">
                        <table style="width:580px;border:1px solid #ff3333;border-top:3px solid #ff3333" cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <th>STT</th>
                              
                                <th>Tên sản phẩm</th>
                                <th>
                                    Số lượng
                                </th>
                                <th>Thành tiền</th>
                            </thead>
                            <tbody>
                                

                                
                                <?php $tt=1?>
                                @foreach($donhang as $item)
                                    <tr style="text-align:center">
                                        <td><?php  echo $tt++ ?></td>
                                      
                                        <td>{{$item->name ?? "[N/A]"}}</td>

                                         <td>
                                           <span class="text-danger">{{number_format($item->price,0,',',',')}} đ</span>
                                         </td>
                                         <td >
                                            {{$item->qty}}
                                        </td>

                                        <td class="text-danger">{{number_format($item->qty*$item->price,0,',',',') }} đ</td>
                                    </tr>
                                @endforeach
                               <tr align="right">Tổng tiền: {{\Cart::subtotal(0)}} đ </tr>
                                <tr>
                                    <td colspan="2" align="center" valign="top" style="padding-top:20px;padding-bottom:20px;border-bottom:1px solid #ebebeb">
                                        <a href="#" style="border:0px" target="_blank">
                                            <img src="https://i.imgur.com/f92hL68.jpg" height="29" width="191" alt="Chi tiết đơn hàng" style="border:0px">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" style="background:#ffffff;padding-top:20px">
                        <table style="width:500px" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr>
                                    <td align="center" valign="middle" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#666666;line-height:20px;padding-bottom:5px">
                                        Đây là thư tự động từ hệ thống. Vui lòng không trả lời email này.
                                        <br> Nếu có bất kỳ thắc mắc hay cần giúp đỡ, Bạn vui lòng ghé thăm
                                        <b style="font-family:Arial,Helvetica,sans-serif;font-size:13px;text-decoration:none;font-weight:bold">Trung tâm trợ giúp</b> của chúng tôi tại địa chỉ:
                                        <a href="#" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#0066cc;text-decoration:none;font-weight:bold" target="_blank">
                                            help.smoothie.vn
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
