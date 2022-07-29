<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('credential.login.index', [
            'title' => 'ProGu Login',
        ]);
    }

    public function indexRegister()
    {
        return view('credential.register.index', [
            'title' => 'ProGu Register',
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success', 'Login Success');
        }

        return \redirect()->back()->withErrors(['error' => 'Invalid email or password.']);
    }

    public function register(Request $request)
    {
        $credentials = $request->validate(
            [
                'username' => ['required', 'unique:users,username'],
                'phone' => ['required', 'unique:users,phone'],
                'email' => ['required', 'unique:users,email', 'email'],
                'password' => ['required', 'min:8'],
            ]
        );

        $credentials['password'] = Hash::make($credentials['password']);

        User::create($credentials);

        return redirect('/login')->with('success', 'Register success');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout success');
    }
}
