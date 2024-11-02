<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about', [
        "name" => "Adrian Howandy",
        "img" => "adrian.jpg",
        "email" => "andrianhowandi@gmail.com",
    ]);
});

route::get('/home', function () {
    return view("home");
});
route::get('/posts', function () {
    return view("posts");
});
