<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index_login()
    {
        return view('credential.login.index', [
            'title' => 'ProGu Login',
        ]);
    }

    public function index_register()
    {
        return view('credential.register.index', [
            'title' => 'ProGu Register',
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'unique:User,email', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return dd('Login Success');
        }

        return dd('Login Failed');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'unique:User,email', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        User::create($credentials);

        return dd('User Registered');
    }
}
