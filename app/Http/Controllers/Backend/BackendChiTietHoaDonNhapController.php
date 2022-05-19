<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ChiTietHoaDonNhap;
use App\Models\DoUong;
use Illuminate\Http\Request;
use App\Models\HoaDonNhap;


class BackendChiTietHoaDonNhapController extends Controller
{
    protected $folder = 'backend.hoa_don_nhap.';
    public function store_item(Request $request,$id)
    {
        
            $hdn = HoaDonNhap::find($id);
            dd($hdn);
            $data = $request->except('_token');
            $data['hoadonnhap_id'] = $hdn->id;
             ChiTietHoaDonNhap::create($data);
            //     if($cthdn){
            //         $data1 = $request->except('_token');
            //         $dataDoUong = DoUong::find($cthdn->douong_id);
            //         // dd($dataDoUong);
            //         $dataDoUong['soluongconlai'] = $dataDoUong['soluongconlai'] + $item->soluong;
            //         $data1['soluongconlai'] = $dataDoUong['soluongconlai'];
            //         $dataDoUong->update($data1);
            //       //  dd($dataDoUong['soluongconlai']);
            // }

        return redirect()->back()->with('success', 'Thêm thành công!');
    }

    public function edit($id)
    {

    }

    public function update($id)
    {
        return view($this->folder . 'update');

    }
    public function delete($id)
    {
        return view($this->folder . 'delete');
    }
}