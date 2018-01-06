<?php

namespace Learnio\Http\Controllers;

use Learnio\Category;
use Learnio\Post;
use Learnio\Vote;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {   
        $postsForCategory = Post::where('categories_id','=',$category->id)->latest()->get();

        return view('categories.show', compact('category','postsForCategory'));
    }

    public function icon()
    {
        $icons = [
            
            'Software' => 'fas fa-code fa fa-10x',
            'Photography' => 'fas fa-camera-retro fa-10x',

            ];
    }

    
}
