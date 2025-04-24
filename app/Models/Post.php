<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id','title','content'];

    // Inverse: Post belongs to one Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // One Post has many Comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
