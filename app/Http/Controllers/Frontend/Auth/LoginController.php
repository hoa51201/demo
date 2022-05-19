<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('frontend.auth.login');
    }

    public function postLoginUser(Request $request)
    {

       
       $credentials = $request->only('email','password');
      
        if(Auth::attempt($credentials)){

            $request->session()->regenerate();
            
            return redirect()->route('get.home');
        }

        return back()->withErrors([
            'email' => 'Email hoặc password sai',
        ]);


    }

    public function getLogout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('get.home');
    }
}