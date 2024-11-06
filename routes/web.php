<?php

use App\Models\post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Normalizer\SlugNormalizer;

Route::get(
    '/',
    function () {
        return view("home", [
            "title" => "Home Page"
        ]);
    }
);
Route::get(
    '/about',
    function () {
        return view("about", [
            "name" => "Adrian Howandy",
            "title" => "About Page"
        ]);
    }
);
Route::get(
    '/posts',
    function () {
        return view("posts", [
            "title" => "Blog Page",
            "posts" => post::all()
        ]);
    }
);
Route::get('/posts/{slug}', function ($slug) {


    $post = Post::find($slug);


    return view(
        'post',
        [
            'title' => 'single post',
            'post' => $post
        ]
    );
});


Route::get(
    '/contact',
    function () {
        return view("contact", [
            "title" => "Contact Page"
        ]);
    }
);
