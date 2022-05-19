<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    protected $folder='frontend.bai_viet.';
    public function index(){
       return view($this->folder.'index');
   }
}