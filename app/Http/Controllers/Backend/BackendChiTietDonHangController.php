<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ChiTietDonHang;
use App\Models\DonHang;

class BackendChiTietDonHangController extends Controller
{
    public function delete($id)
    {
        $ctdonhang = ChiTietDonHang::find($id);
        if ($ctdonhang) {
            $donhang = DonHang::find($ctdonhang->donhang_id);
            $donhang->tongtien -= $ctdonhang->thanhtien;
            $donhang->save();
            $ctdonhang->delete();
        }
        return redirect()->back();
    }
}