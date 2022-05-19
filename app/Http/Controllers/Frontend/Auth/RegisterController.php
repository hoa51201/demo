<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('frontend.auth.register');
    }

    public function postRegister(Request $request)
    {
        $data=$request->except('_token');
        $data['password']=Hash::make($request->password);
        $user=User::create($data);
        if(Auth::loginUsingId($user->id)){
            return redirect()->route('get.home');

        }
        return redirect()->back();
        //return view('frontend.auth.email_verify');
    }
}