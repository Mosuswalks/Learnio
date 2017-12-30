<?php

namespace Learnio\Http\Controllers;

use Learnio\Category;


class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {    
        $postsForCategory = \Learnio\Post::where('categories_id','=',$category->id)->latest()->get();

        //dd($postsForCategory);

        //$users = \Learnio\User::where('id','=' ,$postsForCategory->user_id)->get();

        return view('categories.show', compact('category','postsForCategory'));
    }

    
}
