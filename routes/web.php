<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    function () {
        return view("home", [
            "nama" => "Adrian Howandy"
        ]);
    }
);
Route::get(
    '/about',
    function () {
        return view("about", [
            "nama" => "Adrian Howandy"
        ]);
    }
);
Route::get(
    '/blog',
    function () {
        return view("blog", [
            "nama" => "Adrian Howandy"
        ]);
    }
);
Route::get(
    '/contact',
    function () {
        return view("contact", [
            "nama" => "Adrian Howandy"
        ]);
    }
);
