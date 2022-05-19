<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;
use Carbon\Carbon;
use App\Http\Requests\NewPasswordRequest;

class ResetPasswordController extends Controller
{
    public function getEmailReset(){
        return view('frontend.auth.email');
    }

   

    public function checkEmailResetPassword(Request $request){
        $account = User::where('email',$request->email_reset)->first();
        if($account){
            //gửi email
            $link = route('get.new_password',[
                'email'  => $account->email,
                '_token' => Hash::make($account->email.$account->id),
                'time'   => Carbon::now() 
            ]);
            Mail::to($account->email)->send(new ResetPassword($link));
            return redirect()->back()->with('success','Link lấy lại mật khẩu đã được gửi về email của bạn. Vui lòng kiểm tra email!');
        }
        else{
            return redirect()->back()->with('error','Tài khoản không tồn tại');
        }
        return redirect()->back();
    }

    public function newPassword(Request $request){
        if(!$request->_token)
        {
            return redirect()->to('/'); 
        }
       //Thời gian tồn tại k qúa 3p
       $now = Carbon::now();
       if($now->diffInMinutes($request->time) > 3){
           $request->delete();
       }
        return view('frontend.auth.new_password');
    }

    public function savePassword(NewPasswordRequest $request){
        $password = $request->password_new;
       
        $data['password'] = Hash::make($password);
        $email = $request->email;
        //dd($email);
        if(!$email) return redirect()->to('/');
        User::where('email',$email)->update($data);
        return redirect()->route('get.login');
    }
}