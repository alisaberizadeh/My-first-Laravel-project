<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GithubAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }


    public function callback()
    {
        try {

            $user_information = Socialite::driver('github')->user();
            $user = User::where('email', $user_information->email)->first();
            if ($user) {
                auth()->loginUsingId($user->id);
            } else {
                $newUser = User::create([
                    'name' => $user_information->name,
                    'email' => $user_information->email,
                    'password' => bcrypt(\Str::random(16)),
                ]);
                auth()->loginUsingId($newUser->id);
            }
            return redirect('/');
        } catch (\Exception $e) {
            alert()->error('Login with Github Account was not successful', 'Error');
            return redirect('/login');        }
    }
}
