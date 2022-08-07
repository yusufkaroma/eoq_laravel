<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {   
        $request->validate([
            'username'=>'required',
            'password'=>'required|string'
        ]);
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with([
            'loginError' => 'email atau Password salah',
        ]);
    }
}
