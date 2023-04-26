<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about',[
            "title" => "About",
            "name" => "ilhams",
            "email" => "ilhmas00@gmail.com",
            "image" => "ilham.jpeg"
        ]);
    }
}
