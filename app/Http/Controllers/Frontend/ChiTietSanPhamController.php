<?php

namespace App\Http\Controllers\Frontend;

use App\Models\DoUong;
use App\Models\GiaBan;
use App\Models\LoaiDoUong;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Http\Controllers\Controller;
class ChiTietSanPhamController extends Controller
{
    protected $folder='frontend.chi_tiet_san_pham.';
     public function index($slug){
    	$douongchitiet = DoUong::where('slug',$slug)->first();
        $douongtuongtu=DoUong::where('loaidouong_id',$douongchitiet->loaidouong_id)->limit(10)->get();
        $douongnews = DoUong::orderByDesc('id')->limit(10)->get();
        $douongcart=\Cart::content();
        $datenow = Carbon::now();

        $giabans = GiaBan::where('ngayhieuluc', '<=', $datenow)
        ->where('ngayhethieuluc', '>=', $datenow)
        ->with('douong')
        ->get();
     //   dd($giabans);


        $douongct=$giabans->where('douong_id',$douongchitiet->id)->first();
        
        foreach($douongtuongtu as $item){
            $douongtt_giaban= $giabans->where('douong_id',$item->id);

        }
        foreach($douongtuongtu as $item){
            $douongtt_new= $douongnews->where('douong_id',$item->id);
            foreach($douongtt_new as $value){
                $douongtt_new_giaban= $giabans->where('douong_id',$value->id);
                
                    $viewData=[
                        'douongct'=>$douongct,
                        'douongchitiet'=>$douongchitiet,
                       // 'douongtt_new_giaban'=>$douongtt_new_giaban,
                        'douongtt_giaban'=>$douongtt_giaban,
                        'douongtuongtu'=>$douongtuongtu,
                        'douongtt_new'=>$douongtt_new,
                        'douongcart'=>$douongcart,
                        
                    ];
                   return view($this->folder.'index',$viewData);
                
            }
            
        }
       
       
       
        $viewData=[
            'douongct'=>$douongct,
            'douongchitiet'=>$douongchitiet,
            //'douongtt_new_giaban'=>$douongtt_new_giaban,
            'douongtt_giaban'=>$douongtt_giaban,
            'douongtuongtu'=>$douongtuongtu,
            'douongtt_new'=>$douongtt_new,
            'douongcart'=>$douongcart,
            
        ];
       return view($this->folder.'index',$viewData);

    }
}