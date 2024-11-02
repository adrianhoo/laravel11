<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about', [
        "name" => "Adrian",
        "img" => "adrian.jpg",
        "email" => "andrianhowandi@gmail.com",
    ]);
});

route::get('/home', function () {
    return view("home");
});
