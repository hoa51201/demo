<?php

namespace App\Http\Controllers\Frontend\Ajax;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoUong;
use Illuminate\Support\Carbon;
use App\Models\GiaBan;
use Illuminate\Support\Facades\Session;

class AjaxShoppingCartController extends Controller
{
    public function add(Request $request,$id){
        if($request->ajax()){
            $qty = $request->qty;
           // dd($qty);
            //1.Kiểm tra sản phẩm có tồn tại k
            $douong = DoUong::find($id);
            if(!$douong){
                return response()->json([
                    'status' => 404
                ]);
            }
            //2.Kiểm tra số lượng sản phẩm
            if($douong->soluongconlai < 1){

                return response()->json([
                    'status'  => 404,
                    'message' => 'Số lượng không đủ'
                ]);
            }
            $cart = \Cart::content();
            //3.Kiểm tra trong giỏ hàng đã có sản phẩm đó chưa
            $idCartDoUong = $cart->search(function($cartItem) use ($douong){
                if($cartItem->id == $douong->id)
                {
                    return $cartItem->id;
                }
            });
            //3.1.Nếu đã có sản phẩm thì cộng thêm số lượng và kiểm tra tiếp số lượng còn không
            if($idCartDoUong){
                $douongByCart = \Cart::get($idCartDoUong);
                if($douong->soluongconlai < ($douongByCart->qty + $qty)){
                    return response()->json([
                        'status'  => 200,
                        'message' => 'Số lượng không đủ'
                    ]);
                }
            }
            //3.2.Nếu chưa có thì thêm sản phẩm vào giỏ hàng
            //3.2.1.Nếu sp đó đang có giá khuyến mại thì sẽ lấy theo giá khuyến mại
            $a=Carbon::now();
            $giabans = GiaBan::where('douong_id',$id)->where('ngayhieuluc', '<=', $a)
            ->where('ngayhethieuluc', '>=', $a)->first();
            if($giabans){
                \Cart::add([
                    'id'       => $douong->id,
                    'name'     => $douong->tendouong,
                    'qty'      => $qty,
                    'price'    => $giabans->gia,
                    'weight'   => '1',
                    'options'  => [
                       'image' => $douong->hinhanh,
                       'slugg' => $douong->slug,
                    ]
                ]);
            }
              //3.2.2.Nếu sp đó k có giá khuyến mại thì lấy giá bán của sp
            else{
                \Cart::add([
                    'id'       => $douong->id,
                    'name'     => $douong->tendouong,
                    'qty'      => $qty,
                    'price'    => $douong->gia,
                    'weight'   => '1',
                    'options'  => [
                       'image' => $douong->hinhanh,
                       'slugg' => $douong->slug,
                    ]
                ]);
            }
            Session::flash('toastr',[
                'type'=>'success',
                'message'=>'Thêm vào giỏ hàng thành công'
            ]);
            return redirect()->back();
       }
    }

    public function delete(Request $request,$id){
        if($request->ajax()){
            \Cart::remove($id);
            return response()->json([
                'status'  => 200,
                'message' => 'Xóa thành công'
            ]);
        }
    }

    public function update(Request $request,$id){
        if($request->ajax()){
            \Cart::update($id,$request->qty);
            return response()->json([
                'status'  => 200,
                'message' => 'Sửa thành công'
            ]);
        }
    }
}