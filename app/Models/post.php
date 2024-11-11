<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
// he next time Git touches it
// error: open("Lorem ipsum dolor sit amet consectetur adipisicing elit. Est at enim sunt ex reiciendis alias omnis accusa
// ntium illum doloribus nesciunt."): No such file or directory
// error: unable to index file 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est at enim sunt ex reiciendis al
// ias omnis accusantium illum doloribus nesciunt.'
// fatal: adding files failed