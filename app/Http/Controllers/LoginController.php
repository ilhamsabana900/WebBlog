<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    Public function index()
    {
        return view('login.index',[
            'title'=>'login'
        ]);
    } 
    public function authenticate(request $request)
    { 
        $credentials=$request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        return back()->with('loginError', 'login failed!!');

    } 
    public function logout(request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }
}
