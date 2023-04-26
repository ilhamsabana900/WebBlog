<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title'=> 'register'
        ]);
    }

    public function store(request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users',
            'email'=> 'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255'
        ]);
        $validatedData['password']= bcrypt($validatedData['password']);

        user::create($validatedData);

        return redirect('/login')->with('success','registration successfull!! please login');
    } 
}
