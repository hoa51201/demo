<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoUong extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $table='douong';
    public function loaidouong(){
        return $this->belongsTo(LoaiDoUong::class,'loaidouong_id');
    }

    public function ctdonhang(){
        return $this->hasMany(ChiTietDonHang::class,'douong_id');
    }
}