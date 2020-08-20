<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->paginate('3');
    	return view ('post.index', compact('posts'));
        
    }

    public function store()
    {
    	$attr = request()->validate([
            'title' => 'required',
            'body'  => 'required',
            ]);

        $attr['slug'] = \Str::slug(request('title'));
        Post::create($attr);
        session()->flash('success', 'The post was created');
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
        $posts = Post::find($id);
        $posts->update($request->all());
        return redirect('/post');
    }

    public function show(Post $post)
    {
        $post = Post::find($post)->first();
       return view('post.show',compact('post')); 
    }

    public function destroy($id)
    {
        $post = Post::find($id);
    	$post->delete($id);
    	return redirect('/post');
    }


}
