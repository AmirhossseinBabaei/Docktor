<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Socialite;

class AuthController extends Controller
{
    public function showLoginForm(): View
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $request->validated();

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'اطلاعات وارد شده صحیح نیست.');
    }

    public function googleLoginRedirect()
    {
       return Socialite::driver('github')->redirect();
    }

    public function googleLogin()
    {
        $email = Socialite::driver('github')->user()->email;

        $user = User::where('email', $email)->first();

        if (null == $user) {
            return redirect()->route('login')->with('error', 'کاربری با این اطلاعات یافت نشد.');
        }

        Auth::login($user);


        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
