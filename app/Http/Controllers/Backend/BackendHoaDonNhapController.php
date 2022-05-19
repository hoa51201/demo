<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendHoaDonNhapRequest;
use App\Models\ChiTietHoaDonNhap;
use App\Models\DoUong;
use App\Models\HoaDonNhap;
use App\Models\NhaCungCap;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BackendHoaDonNhapController extends Controller
{
    protected $folder = 'backend.hoa_don_nhap.';
    public function index()
    {
        $hoadonnhap = HoaDonNhap::with(
            'nhacungcap:id,tennhacungcap')
            ->orderByDesc('id')->paginate(70);
        $viewData = [
            'hoadonnhap' => $hoadonnhap,
        ];
        return view($this->folder . 'index', $viewData);
    }

    public function create()
    {
        $cthdn = ChiTietHoaDonNhap::with('douong:id,tendouong')
            ->orderByDesc('id')->paginate(70);
        $douongs = DoUong::all();
        $nhacungcap = NhaCungCap::all();

        $viewData = [
            'nhacungcap' => $nhacungcap,
            'douongs' => $douongs,
            'cthdn' => $cthdn,
        ];

        return view($this->folder . 'create', $viewData);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['ngaynhap'] = Carbon::now();
        $data['tongtien'] = 0;
        $a=HoaDonNhap::create($data);
        
        return redirect()->back()->with('success', 'Thêm thành công!');
    }

    public function edit($id)
    {

        $nhacungcap = NhaCungCap::all();
        $hdns = HoaDonNhap::find($id); 
        $viewData = [
            'nhacungcap' => $nhacungcap,

            'hdns' => $hdns,
        ];
        return view($this->folder . 'update', $viewData);
    }

    public function update(BackendHoaDonNhapRequest $request, $id)
    {
        $data = $request->except('_token');
        DoUong::find($id)->update($data);

        return redirect()->back()->with('success', 'Sửa thành công!');

    }
    public function show(Request $request,$id)
    {
        $hdns = HoaDonNhap::find($id);
       
        $nhacungcap = NhaCungCap::find($hdns->nhacungcap_id);
        $douongs = DoUong::all();
        $cthdn = ChiTietHoaDonNhap::with('douong:id,tendouong')
        ->orderByDesc('id')->paginate(70);
       
        $viewData = [
            'hdns' => $hdns, 
            'nhacungcap' => $nhacungcap,
            'douongs' => $douongs,
            'cthdn' => $cthdn,
        ];
       
        return view($this->folder . 'view', $viewData);
    }
}