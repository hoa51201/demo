<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TinTuc;
use App\Models\LoaiDoUong;
use App\Models\DoUong;
class ChiTietTinTucController extends Controller
{
    protected $folder='frontend.chi_tiet_bai_viet.';
    public function index(Request $request,$slug){
    	$baivietchitiet = TinTuc::where('slug',$slug)->first();
        $baiviettt=tinTuc::where('theloai',$baivietchitiet->theloai)->limit(5)->get();
        $douongcart=\Cart::content();
        $tintucnews = TinTuc::orderByDesc('id')->limit(3)->get();
        $tukhoa = $request->tim_kiem;
        $tags_tt = TinTuc::select('theloai')->distinct()->get();
        $tags = LoaiDoUong::all();
        if ($tukhoa) {
            $search_douong = DoUong::where('tendouong', 'like', '%' . $tukhoa . '%')->get();
            $viewData = [
                'search_douong' => $search_douong,
                'tags' => $tags,
                'douongcart' => $douongcart,
                'query' => $request->query(),
            ];
            return view($this->folder . 'search', $viewData);
        }
        $viewData=[
            'baivietchitiet'=>$baivietchitiet,
            'baiviettt'=>$baiviettt,
            'douongcart'=>$douongcart,
            'tintucnews' => $tintucnews,
            'tags_tt' => $tags_tt,
            
        ];
       return view($this->folder.'index',$viewData);

    }
}