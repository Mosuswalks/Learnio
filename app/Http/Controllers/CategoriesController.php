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
        return view('categories.show', compact('category'));
    }
}
