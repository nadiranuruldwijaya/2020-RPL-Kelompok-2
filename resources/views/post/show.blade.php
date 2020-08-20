@extends('layouts.app')
@section('title', $post->title)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">				
				<div class="card-tittle">
					<h1>{{ $post->title }}</h1>
          <div class="text-secondary">
            <a href="/categories/{{ $post->category->slug }}"> {{$post->category->name }}</a>
            &middot; {{ $post->created_at->format("d F, Y") }}
            &middot;
          	@foreach($post->tags as $tag)
          	<a href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
          	@endforeach
				</div>
				<div class="card-body">
					{{ $post->body }}
				</div>
				<a href="/post/{{$post->id}}/edit" class="btn btn-info">Update</a>
				<a href="/post/{{$post->id}}/destroy" class="btn btn-danger">Delete</a>

			</div>
			
		</div>
	</div>
	@stop