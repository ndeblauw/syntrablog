<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $all_published_posts = Post::where('is_published', true)->latest()->paginate(10);

        return view('posts.index', ['posts' => $all_published_posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
