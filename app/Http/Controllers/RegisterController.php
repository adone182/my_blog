<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:25'
        ]);

        // enscript pwd
        $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        //flash message when succes before redirect
        // $request->session()->flash->with('success', 'Registration Successfully! Please login');

        return redirect('/login')->with('success', 'Registration Successfully! Please login');
    }
}
