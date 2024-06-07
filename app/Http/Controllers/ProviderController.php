<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect() {
        return Socialite::driver('github')->redirect();
    }
    
    public function callback() {
        $githubUser = Socialite::driver('github')->user();
        
        $user = User::updateOrCreate([
            'email' => $githubUser->email,
            'user_image' => $githubUser->avatar
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => Hash::make($githubUser->token),
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
            'user_image' => $githubUser->avatar
        ]);
        
        Auth::login($user);
        
        return redirect('/dashboard');
    }
}
