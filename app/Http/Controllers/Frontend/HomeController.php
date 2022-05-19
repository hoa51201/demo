<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DoUong;
use App\Models\GiaBan;
use App\Models\LoaiDoUong;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\DonHang;
use App\Http\Controllers\Frontend\AjaxShoppingCartController;

class HomeController extends Controller
{
    protected $folder = 'frontend.home.';
    protected $folder_search = 'frontend.san_pham_theo_loai.';
    //protected $folder='backend.do_uong.';

    public function index(Request $request)
    {

        $loaidouong = LoaiDoUong::get();
        $douongnews = DoUong::orderByDesc('id')->limit(10)->get();
        $tags = LoaiDoUong::get();

        $douongcart = \Cart::content();


         //Khuyến mại
         $datenow = Carbon::now();
         $giabans = GiaBan::where('ngayhieuluc', '<=', $datenow)
             ->where('ngayhethieuluc', '>=', $datenow)
             ->with('douong')
             ->get();
         //Đồ uống bán chạy
        //lấy về đơn hàng đã giao

         $douong_banchay = Douong::orderByDesc('slban')->limit(5)->get();
         foreach($douong_banchay as $item){
            $giabans_douong_banchay = GiaBan::where('ngayhieuluc', '<=', $datenow)
            ->where('ngayhethieuluc', '>=', $datenow)
            ->where('douong_id',$item->id)
            ->with('douong')
            ->get();
         }
       // dd($giabans_douong_banchay);
        //Tìm kiếm
        $tukhoa = $request->tim_kiem;
        if ($request->tim_kiem) {
            $search_douong = DoUong::where('tendouong', 'like', '%' . $tukhoa . '%')->paginate(9);
            $viewData = [
                'search_douong' => $search_douong,
                'tags' => $tags,
                'douongcart' => $douongcart,
                'query' => $request->query(),
            ];
            return view($this->folder . 'search', $viewData);
        }




        $viewData = [
            'giabans'                 => $giabans,
            'loaidouong'              => $loaidouong,
            'douongcart'              => $douongcart,
            'douongnews'              => $douongnews,
            'douong_banchay'          => $douong_banchay,
            'giabans_douong_banchay' => $giabans_douong_banchay,
        ];
        return view($this->folder . 'index', $viewData);
    }

    public function autocomplete(Request $request)
    {
        $t = $request->tim_kiem;
        $douong_auto = DoUong::select('tendouong')->where('tendouong', 'like', '%' . $t . '%')->get();
        return response()->json($douong_auto);
    }
}