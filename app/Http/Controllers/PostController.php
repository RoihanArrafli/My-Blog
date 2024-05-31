<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show() 
    {
        return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
    }
}
