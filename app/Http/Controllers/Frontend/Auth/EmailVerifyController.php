<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerifyController extends Controller
{
    public function getEmailVerify(){
        return view('frontend.auth.email_verify');

    }

    // public function postRegister(Request $request){
    //     $account = $request->_token;
    //     if($account){
    //         //gửi email
    //         $link = route('get.login',[
    //             '_token' => Hash::make($account->email.$account->id),
    //             'time'   => Carbon::now() 
    //         ]);
    //         Mail::to($account->email)->send(new ResetPassword($link));
    //         return redirect()->back()->with('success','Link lấy lại mật khẩu đã được gửi về email của bạn. Vui lòng kiểm tra email!');
    //     }
    //     else{
    //         return redirect()->back()->with('error','Tài khoản không tồn tại');
    //     }
    //     return redirect()->back();
    // }
}