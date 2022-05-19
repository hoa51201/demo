<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\DonHang;
use App\Models\User;
use App\Models\TinTuc;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\HelpersClass\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BackendHomeController extends Controller
{
    protected $folder = 'backend.home.';
    public function index(){
        $admin= Admin::find(get_data_user('admins'));
        //Tổng đon hàng
        $totalDonhang = DonHang::count();
       // dd($totalDonhang);
       //Tổng thành viên đăng kí
        $totalUser = User::count();
        //Tổng bài viết
        $totalTintuc = TinTuc::count();
        $datenow  = date('Y-m-d',strtotime(Carbon::now()));

       // dd($datenow);


        //Đơn hàng mới trong ngày
        $Donhangnew=DonHang::where('ngaytao', 'like', '%' . $datenow . '%')->orderByDesc('id')->limit(10)->get();
        //dd($Donhangnew);


        //Thống kê trạng thái đơn hàng
        //Đang xử lí
        $trangthai_1=DonHang::where('trangthai',1)->select('id')->count();
        //Đang giao hàng
        $trangthai_2=DonHang::where('trangthai',2)->select('id')->count();
        //Đã giao hàng
        $trangthai_3=DonHang::where('trangthai',3)->select('id')->count();
        //Hủy bỏ
        $trangthai_4=DonHang::where('trangthai',-1)->select('id')->count();

        $statusDonhang=[
            [
                'Đang xử lí',$trangthai_1,false
            ],
            [
                'Đang giao hàng',$trangthai_2,false
            ],
            [
                'Đã giao hàng',$trangthai_3,false
            ],
            [
                'Hủy bỏ',$trangthai_4,false
            ],
        ];


        //Lấy tất cả các ngày
         $listDay=Date::getListDayInMonth();
        //dd($listDay);
        //Thống kê doanh thu theo tháng
        //đơn hàng có cột ngày tạo đơn hàng-sẽ lấy 13-10-2021 ->13
        $doanhthuByMonth= DonHang::where('trangthai',3)->whereMonth('ngaytao',date('m'))
        ->select(DB::raw('SUM(tongtien) as TongTien'), DB::raw('DATE(ngaytao) as ngay'))
        ->groupBy('ngay')->get()->toArray();
      //  dd($doanhthuByMonth);
        $arrDoanhthu=[];

        foreach($listDay as $day){
            $total=0;
            $totall=0;
            foreach($doanhthuByMonth as $key => $item){
                if($item['ngay']==$day){
                    $total=$item['TongTien'];
                    break;
                }
                if($item['ngay'] == $datenow ){
                    $totall = $item['TongTien'];

                    break;
                }
            }
            $arrDoanhthu[] = (int)$total;
            $arrDTNgay =(int)$totall;
        }


        $viewData = [
            'totalDonhang'  => $totalDonhang,
            'totalUser'     => $totalUser,
            'totalTintuc'   => $totalTintuc,
            'arrDTNgay'         => $arrDTNgay,
            'Donhangnew'    => $Donhangnew,
            'statusDonhang' => json_encode($statusDonhang),
            'listDay'       => json_encode($listDay),
            'arrDoanhthu'   => json_encode($arrDoanhthu),
            'admin'     => $admin,
        ];
        return view($this->folder . 'index', $viewData);
    }
}
