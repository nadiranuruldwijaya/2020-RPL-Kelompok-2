<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

class TagController extends Controller
{
    public function show(Tag $tag)
    {
    	$posts = $tag->posts()->latest()->paginate(6);
    	return view('post.index', compact('posts', 'tag'));
    }
}
