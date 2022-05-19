<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $table='chitietdonhang';
    
    public function douong(){
        return $this->belongsTo(DoUong::class,'douong_id');
    }

    public function donhang(){
        return $this->belongsTo(DonHang::class,'donhang_id');
    }
}