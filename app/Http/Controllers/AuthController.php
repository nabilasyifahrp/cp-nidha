<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){
        return view('admin.auth.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->route('admin.panel');
        }

        return back()->withErrors([
            'email' => 'Login gagal. Email atau password salah.',
        ])->onlyInput('email');  
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
