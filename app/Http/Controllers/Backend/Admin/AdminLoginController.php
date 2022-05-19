<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function getLoginAdmin(){
        return view('backend.admin.login');
    }

    public function postLoginAdmin(Request $request){
        $credentials=$request->only('email','password');
        // $result=admins::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        //dd($credentialss);
        if(Auth::guard('admins')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('get_backend.home');
        }
        // return redirect()->route('get_backend.home');
        return redirect()->back();
    }
    public function getLogout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('get_backend.login');
    }
}
