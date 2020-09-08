<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

class TagController extends Controller
{
    public function show(Tag $tags)
    {
    	$posts = $tags->posts()->latest()->paginate(6);
    	return view('post.tags-show', compact('posts', 'tags'));
    }
}
