<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ChiTietDonHang;
use Illuminate\Http\Request;
use App\Models\DonHang;
use App\Models\DoUong;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

    protected $folder = 'user.Order.';

    public function index(Request $request)
    {
        $douongcart = \Cart::content();
        $donhang    = DonHang::where('user_id',get_data_user('web'))->orderByDesc('id');
        $donhang_1  = DonHang::where('user_id',get_data_user('web'))->orderByDesc('id')->where('trangthai','=',1)->paginate(10);
        $donhang_2  = DonHang::where('user_id',get_data_user('web'))->orderByDesc('id')->where('trangthai','=',2)->paginate(10);
        $donhang_3  = DonHang::where('user_id',get_data_user('web'))->orderByDesc('id')->where('trangthai','=',3)->paginate(10);
        $donhang_4  = DonHang::where('user_id',get_data_user('web'))->orderByDesc('id')->where('trangthai','=',-1)->paginate(10);

        if($trangthai = $request->status){
            $donhang->where('trangthai','=',$trangthai);
        }
        $donhang = $donhang->paginate(10);

        $viewData = [
            'donhang'    => $donhang,
            'donhang_1'  => $donhang_1,
            'donhang_2'  => $donhang_2,
            'donhang_3'  => $donhang_3,
            'donhang_4'  => $donhang_4,
            'douongcart' => $douongcart,
        ];
        return view($this->folder . 'order', $viewData);
    }

    public function view($id)
    {
        $douongcart = \Cart::content();
        $donhang   = DonHang::find($id);
        $ctdonhang = ChiTietDonHang::with('douong')->where('donhang_id', $id)->get();
       // $lichsu = DonHang::
        $viewData  = [
            'donhang'   => $donhang,
            'ctdonhang' => $ctdonhang,
            'douongcart' => $douongcart,
        ];
        return view($this->folder . 'order_view', $viewData);
    }

    public function success1($id)
    {
        $donhang = DonHang::find($id);
        $donhang->trangthai = DonHang::STATUS_SUCCESS1;
        $donhang->save();
        return redirect()->back();
    }

    public function success2($id)
    {
        $donhang = DonHang::find($id);
        $donhang->trangthai = DonHang::STATUS_SUCCESS2;
        $donhang->save();
        return redirect()->back();
    }

    public function cancel($id)
    {
        $donhang = DonHang::find($id);
        $donhang->trangthai = DonHang::STATUS_CANCEL;
        $donhang->save();
        return redirect()->back();
    }

}