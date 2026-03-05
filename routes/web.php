<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/calendario', function () {
    return view('calendar');
})->name('calendar');

Route::get('/neidan', function () {
    return view('neidan');
})->name('neidan');
