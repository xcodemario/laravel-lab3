<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;  // ← add this

    protected $fillable = [
        'post_id',
        'commenter_name',
        'comment',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
