<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Roihan Arrafli', 'title' => 'About Page']);
});

Route::get('/posts', [PostController::class, 'show']);

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->post) . ' Article By ' . $user->name, 'posts' => $user->post]);
});

Route::get('/categories/{categori:slug}', function (Category $categori) {
    // return dd($categori);
    return view('posts', [
        'title' => 'Articles in: ' . $categori->name_categori,
        'posts' => $categori->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
