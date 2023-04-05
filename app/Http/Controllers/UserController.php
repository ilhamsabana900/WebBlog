<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class UserController extends Controller
{
    public function show(User $user)
    {
        return view ('posts',[
            'title' => 'User Post',
            'posts' => $user
        ]);
    }
}
