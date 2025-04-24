<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name','email'];

    // One Author has many Posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

