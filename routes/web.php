<?php

use App\Models\Post;
use App\models\User;
use App\models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view('About',[
        "title" => "About",
        "name" => "ilhams",
        "email" => "ilhmas00@gmail.com",
        "image" => "ilham.jpeg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']); 
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', Function(){
    return view('categories',[
        'title' => 'Post categories',
        "active"=>'categories',
        'categories'=> Category::all()
    ]);
});

