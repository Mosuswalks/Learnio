<?php

namespace Learnio\Http\Controllers;

use Learnio\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $posts)
    {   
        return view('posts.show', compact('posts'));
    }
}
