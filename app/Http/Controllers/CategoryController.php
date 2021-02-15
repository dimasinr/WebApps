<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        return view('posts.category');
    }

    public function show(Category $category)
    {
        $posts = $category->posts()->latest()->paginate(6);
        return view('posts.index', compact('posts', 'category'));
    }
}