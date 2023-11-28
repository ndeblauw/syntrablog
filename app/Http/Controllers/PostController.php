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

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        ray('start van store method');

        $request->validate([
            'title' => ['required' , 'min:3', 'max:255'],
            'author_id' => ['required', 'exists:users,id']
        ]);

        ray('voorbij de validatie');


        \App\Models\Post::create([
            'title' => $request->title,
            'is_published' => true,
            'author_id' => $request->author_id,
        ]);

        ray('na creatie model');

        return redirect('/posts');
    }
}
