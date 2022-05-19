<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UserRequest;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $douongcart=\Cart::content();
        $viewData=[

            'douongcart' =>$douongcart,
            'user' =>$user,
        ];
        return view('user.Profile.profile',$viewData);
    }
    public function update(UserRequest $request,$id)
    {
        $data=$request->except('_token');
        User::find($id)->update($data);
        Session::flash('toastr',[
            'type'=>'success',
            'message'=>'Cập nhật thông tin thành công'
        ]);
        return redirect()->back();
    }
}