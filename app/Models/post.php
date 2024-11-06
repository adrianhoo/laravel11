<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
        ];
    }
    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
