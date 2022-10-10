<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // kenapa harus di regenerate dlu karena biar safety dari teknik hacking yg namanya session fixation
            $request->session()->regenerate();
            // intended adalah sebuah method dari laravel yg fungsinya buat redirect sebelum masuk ke auth middleware 
            return redirect()->intended('/dashboard');
        }

        // buat ngatasin kalo loginnya gagal atau error
        return back()->with('gagal', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
