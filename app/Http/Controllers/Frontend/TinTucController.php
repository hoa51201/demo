<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DoUong;
use App\Models\LoaiDoUong;
use App\Models\TinTuc;
use App\Models\Admin;

use Illuminate\Http\Request;

class TinTucController extends Controller
{
    protected $folder = 'frontend.bai_viet.';
    //protected $folder='backend.do_uong.';

    public function index(Request $request)
    {
        

        $tintucs = TinTuc::orderByDesc('id')->paginate(6);
        $tintucnews = TinTuc::orderByDesc('id')->limit(3)->get();
        $tukhoa = $request->tim_kiem;
        $douongcart = \Cart::content();
        $tags = LoaiDoUong::all();
        $tags_tt = TinTuc::select('theloai')->distinct()->get();

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
        $viewData = [
            'tintucs' => $tintucs,
            'tintucnews' => $tintucnews,
            'douongcart' => $douongcart,
            'tags_tt' => $tags_tt,
        ];
        return view($this->folder . 'index', $viewData);
    }

}