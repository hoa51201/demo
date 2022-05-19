<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\DoUong;
use App\Models\GiaBan;
use App\Models\LoaiDoUong;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SanPhamTheoLoaiController extends Controller
{
    protected $folder = 'frontend.san_pham_theo_loai.';
    public function index(Request $request, $slug)
    {
        $tags = LoaiDoUong::all();
        $loaidouongs = LoaiDoUong::where('slug', $slug)->first();
        if (!$loaidouongs) {
            abort(404);
        }

        $douongbyloai = DoUong::where('loaidouong_id', $loaidouongs->id);
        $tukhoa = $request->tim_kiem;
        $douongcart = \Cart::content();
        if ($tukhoa) {
            $douongbyloai->where('tendouong', 'like', '%' . $tukhoa . '%');
        }
    //     $douongnews = DoUong::orderByDesc('id')->limit(10)->get();
    //     $datenow = Carbon::now();
    //     $giabans = GiaBan::where('ngayhieuluc', '<=', $datenow)
    //         ->where('ngayhethieuluc', '>=', $datenow)->get();
    //         foreach($douongbyloai as $item){
    //             $douongbl_gia= $giabans->where('douong_id','=',$item->id);
    //         }
    //         dd($douongbl_gia);
    //  //   dd($item);
        if($request->select){
            $select=$request->select;
            switch($select){
                case '2':
                    $douongbyloai->orderBy('tendouong','ASC');
                    break;
                case '3':
                    $douongbyloai->orderByDesc('tendouong');
                    break;
                case '4':
                    $douongbyloai->orderBy('gia','ASC');
                    break;
                case '5':
                    $douongbyloai->orderByDesc('gia');
                    break;
                case '6':
                    $douongbyloai->orderByDesc('id');
                    break;
            }
        }
        $count=$douongbyloai->count();
        $douongbyloai = $douongbyloai->paginate(9);
        $count_page= $douongbyloai->count();
        $viewData = [
            'loaidouongs' => $loaidouongs,
            'douongbyloai' => $douongbyloai,
            'tags' => $tags,
            'count' => $count,
            'count' => $count,
            'count_page' => $count_page,
            'query' => $request->query(),
            'douongcart' => $douongcart,
        ];
        return view($this->folder . 'index', $viewData);
    }
    public function GetData(Request $request)
    {
        $tags = LoaiDoUong::all();
        $loaidouongs = LoaiDoUong::first();
        if (!$loaidouongs) {
            abort(404);
        }

        $douongByFirstId = DoUong::where('loaidouong_id', $loaidouongs->id);
        $tukhoa = $request->tim_kiem;
        $douongcart = \Cart::content();
        if ($tukhoa) {
            $douongByFirstId->where('tendouong', 'like', '%' . $tukhoa . '%');
        }
        if($request->select){
            $select=$request->select;
            switch($select){
                case '2':
                    $douongByFirstId->orderBy('tendouong','ASC');
                    break;
                case '3':
                    $douongByFirstId->orderByDesc('tendouong');
                    break;
                case '4':
                    $douongByFirstId->orderBy('gia','ASC');
                    break;
                case '5':
                    $douongByFirstId->orderByDesc('gia');
                    break;
                case '6':
                    $douongByFirstId->orderByDesc('id');
                    break;
            }
        }
        $count=$douongByFirstId->count();
        $douongByFirstId = $douongByFirstId->paginate(9);
        $count_page= $douongByFirstId->count();
        $viewData = [
            'loaidouongs' => $loaidouongs,
            'douongbyloai' => $douongByFirstId,
            'tags' => $tags,
            'count' => $count,
            'count' => $count,
            'count_page' => $count_page,
            'query' => $request->query(),
            'douongcart' => $douongcart,
        ];
        // return view($this->folder . 'index', $viewData);
        \dd($tags);
    }
}
