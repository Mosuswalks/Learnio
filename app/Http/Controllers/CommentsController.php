<?php

namespace Learnio\Http\Controllers;

use Illuminate\Http\Request;
use Learnio\Post;
use Learnio\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required|min:2']);

        $post->addComment(request('body'));

        return back();
    }
}
