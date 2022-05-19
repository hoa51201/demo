<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaBan extends Model
{
    use HasFactory;
    protected $guarded=[''];
    protected $table='giaban';
    public function douong(){
        return $this->belongsTo(DoUong::class,'douong_id');
    }
}