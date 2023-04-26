<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories',[
        'title' => 'Post categories',
        "active"=>'categories',
        'categories'=> Category::all()
        ]);
    }
}
