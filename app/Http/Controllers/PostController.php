<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->paginate('4');
    	return view ('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
    	post::create($request->all());

   		return redirect('/post');
    }

    public function create()
    {
    	return view('post.create');
    }

    public function edit($id)
    {
        $posts = Post::find($id);
        return view('post.edit',compact('posts'));
    }

    public function update(Request $request,Post $post, $id)    
    {
        $posts = Post::find($post);
        $posts->update($request->all());
        return redirect('/post');
    }

    public function show(Post $post)
    {
        $post = Post::find($post);
        return view('post.show',compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
    	$post->delete($id);
    	return redirect('/post');
    }


}
