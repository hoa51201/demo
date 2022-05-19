<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoaiDoUong;

class LeftMenuController extends Controller
{
    protected $folder='frontend.left_menu.';
    //protected $folder='backend.do_uong.';

   public function index(){

    $loaidouongs1 = LoaiDoUong::get();
    $viewData=[
            'loaidouongs1'=>$loaidouongs1,
        ];
       return view($this->folder.'index',$viewData);
   }

}