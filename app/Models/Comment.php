<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id','commenter_name','comment'];

    // Inverse: Comment belongs to one Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
