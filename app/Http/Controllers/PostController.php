<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of all posts.
     */
    public function index()
    {
        // eager-load the author relationship
        $posts = Post::with('author')->latest()->get();
        return view('posts.index', compact('posts'));
    }

   
    public function show(Post $post)
    {
        // ensure author & comments are loaded
        $post->load(['author','comments']);
        return view('posts.show', compact('post'));
    }
}
