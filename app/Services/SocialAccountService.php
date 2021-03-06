<?php

namespace App\Services;

use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public static function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $account = SocialAccount::whereProvider($social)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        }else{
        $email = $providerUser->getEmail() ?? $providerUser->getNickname();
        $account = new SocialAccount([
            'provider_user_id' => $providerUser->getId(),
            'provider' => $social,
        ]);
        $user = User::whereEmail($email)->first();

        if (!$user) {

            $user = User::create([
                'name' => $providerUser->getName(),
                'email' => $email,
                'password' => Hash::make($providerUser->getName()),
                'address' => $providerUser->getName(),
                'phone' => $providerUser->getId(),
                'avatar' => $providerUser->getAvatar(),
            ]);
        }

        $account->user()->associate($user);
        $account->save();

        return $user;
    }
    }
}
