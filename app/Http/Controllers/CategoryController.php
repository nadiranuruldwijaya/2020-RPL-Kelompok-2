<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $categories)
    {
    	$posts = $categories->posts()->latest()->paginate(6);
    	return view('post.categories-show', compact('posts', 'categories'));
    }
}
