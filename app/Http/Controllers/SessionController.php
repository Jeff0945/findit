<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function attemptLogin(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages(['email' => 'Incorrect email or password.']);
        }

        request()->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function attemptRegister(RegisterRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        $user = User::create($credentials);

        Auth::login($user);

        return redirect()->route('admin.dashboard');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
