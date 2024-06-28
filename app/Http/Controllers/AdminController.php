<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view("Admin/login");
    }

    public function authenticate(Request $request)
    {
       $credentials =  $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required'
        ]);


        if (Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();
            return redirect()->intended('siswa');
        }
        return back()->withErrors('Login gagal, Periksa Inputan Anda!');
        
    }

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect("/");
}



}
