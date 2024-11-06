<?php

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
            "posts" => [
                [
                    'id' => 1,
                    'slug' => 'judul-artikel-1',
                    'title' => 'judul artikel 1',
                    'author' => 'Adrian Howandy',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptates mollitia inventore deleniti id laborum, sunt molestiae eveniet vitae, error rem quis harum similique provident minus nisi rerum. Aspernatur, doloremque.
                    '
                ],
                [
                    'id' => 2,
                    'slug' => 'judul-artikel-2',
                    'title' => 'judul artikel 2',
                    'author' => 'Adrian Howandy',
                    'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim inventore facere odit omnis sint perferendis autem beatae fuga. Veritatis inventore deserunt, maxime odio eum mollitia consequuntur voluptate nam repellat placeat.
                    '
                ]
            ]
        ]);
    }
);
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul artikel 1',
            'author' => 'Adrian Howandy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptates mollitia inventore deleniti id laborum, sunt molestiae eveniet vitae, error rem quis harum similique provident minus nisi rerum. Aspernatur, doloremque.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul artikel 2',
            'author' => 'Adrian Howandy',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim inventore facere odit omnis sint perferendis autem beatae fuga. Veritatis inventore deserunt, maxime odio eum mollitia consequuntur voluptate nam repellat placeat.'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
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
