<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required' , 'min:3', 'max:255'],
            'author_id' => ['required', 'exists:users,id'],
            'body' => ['required', 'min:20'],
        ]);


        \App\Models\Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'is_published' => true,
            'author_id' => $request->author_id,
        ]);

        ray('na creatie model');

        return redirect('/posts');
    }
}
