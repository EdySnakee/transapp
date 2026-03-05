<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    $posts = \App\Models\Post::with(['user', 'category'])
        ->where('is_published', true)
        ->latest('published_at')
        ->get();

    return view('blog', compact('posts'));
})->name('blog');

Route::get('/blog/{post:slug}', function (\App\Models\Post $post) {
    if (!$post->is_published) {
        abort(404);
    }
    return view('posts.show', ['post' => $post]);
})->name('posts.show');

Route::get('/calendario', function () {
    return view('calendar');
})->name('calendar');

Route::get('/neidan', function () {
    return view('neidan');
})->name('neidan');
