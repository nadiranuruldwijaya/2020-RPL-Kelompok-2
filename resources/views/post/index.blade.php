@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				@isset($category)
					<h4>Category: {{ $category->name }}</h4>
				@else
				<h4>All Content</h4>
				@endisset

				@foreach($posts as $post)
				<div class="card mb-3">
					<div class="card-header">
					{{$post->title}}
					</div>
					
					<div class="card-body">
						<div>
							{{Str::Limit($post->body,100)}}
						</div>
						<a href="/post/{{$post->slug}}">Read More</a>
						<small></small>
					</div>
					<div class="card-footer d-flex justify-content-between">
						Published on {{ $post->created_at->diffForHumans() }}
					</div>
				</div>
				@endforeach
				{{ $posts->links() }}
			</div>
			
		</div>
		
	</div>
	@stop