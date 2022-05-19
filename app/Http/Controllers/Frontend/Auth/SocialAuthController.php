<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function redirect($social){
        return Socialite::driver($social)->redirect();
    }

    public function callback($social){
        $user = SocialAccountService::createOrGetUser(Socialite::driver($social)->user(),$social);
        Auth::attempt([
            'email'    => $user->email,
            'password' => $user->name,
        ]);
        Auth::login($user);
        return redirect()->to('/');
    }
}