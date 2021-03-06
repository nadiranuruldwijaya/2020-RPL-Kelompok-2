<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show',
            ]);
        //$this->middleware('DisablePreventBack');
    }

    public function index()
    {
        // $posts = Post::with('author', 'tags', 'category')->latest()->paginate('3');
        // return view ('post.index', compact('posts'));
        return view('post.index', [
            'posts' => Post::latest()->paginate(6),
            'tags'  => Tag::get(),
            'categories'  => Category::get(),

        ]);
        
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'title' => ['required', 'string', 'title', 'max:255', 'unique:posts'],
    //     ]);
    // }


    public function store(PostRequest $request)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,svg|max:10000',
            'title' => ['required', 'string', 'max:255', 'unique:posts']
            ]);

        $attr = $request->all();


        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug; 

        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store("image/posts") : null;

        
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;


        $post = auth()->user()->posts()->create($attr);
        
        $post->tags()->attach(request('tags'));
        session()->flash('success', 'The post was created');
        return redirect('/post');
    }

    public function create()
    {
        return view('post.create', [
            'post' => new Post(),
            'categories' => Category::get(),
            'tags' => Tag::get(),
            ]);
    }

    public function edit(Post $post)
    {
        // $posts = Post::find($id);
        return view('post.edit', [
            'post'       => $post,
            'categories' => Category::get(),
            'tags'       => Tag::get(),
            ]);
    }

    public function update(PostRequest $request,Post $post)    
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
            ]);


        if (request()->file('thumbnail')) {
            \Storage::delete($post->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("image/posts");
        } else{
           $thumbnail = $post->thumbnail;
        }

        // $thumbnail = request()->file('thumbnail')->store("image/posts");
       
        // $posts = Post::find($id);

        $attr = $request->all();
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;

        $post->update($attr);
        $post->update($request->all());
        return redirect('/post');
    }

    public function show(Post $post)
    {
       //  $posts = Post::with('author', 'tags', 'category')->where('category_id', $post->category_id)->latest()->limit(6)->get(); 
       //  $post = Post::find($post)->first();
       // return view('post.show',compact('post', 'posts')); 

        $posts = Post::where('category_id', $post->category_id)->latest()->limit(6)->get();
        return view('post.show', compact('post','posts'));
    } 

    public function destroy(Post $post)
    {
        //code ini blm bener
        if(auth()->user()->is($post->author) OR auth()->user()->name == 'forumsiswa123') {
        
        \Storage::delete($post->thumbnail);
        $post->tags()->detach();
        $post->delete();

        session()->flash('success', 'The Post Was Delete');
            return redirect('/post');
        //Hapus Post Berdasarkan post_id dan tag_id
        } else {  

            session()->flash('Error', 'It Wasnt your delete');
            return redirect('/post');
            
        }
    }


}
