<?php

namespace Learnio\Http\Controllers;

use Learnio\Category;
use Learnio\Post;


class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {    
        $postsForCategory = Post::where('categories_id','=',$category->id)->get();
        return view('categories.show', compact('category','postsForCategory'));
    }

    
}
