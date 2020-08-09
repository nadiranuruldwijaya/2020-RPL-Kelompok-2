@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>All Content</h4>

				@foreach($posts as $post)
				<div class="card mb-3">
					<div class="card-header">
					{{$post->title}}
					</div>
					<div class="card-title">
					<a href="/post/{{$post->id}}/destroy" class="btn btn-danger">Delete</a>
					<a href="/post/{{$post->id}}/edit" class="btn btn-info">Edit</a>
					</div>
					<div class="card-body">
						<div>
							{{Str::Limit($post->body,100)}}
						</div>
						<a href="/post/{{$post->slug}}">Read More</a>
						<small></small>
					</div>
				</div>
				@endforeach
				{{$posts->links()}}
			</div>
			
		</div>
		
	</div>
	@stop