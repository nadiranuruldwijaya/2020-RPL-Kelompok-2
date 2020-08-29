 @extends('layouts.app')
@section('title', $post->title)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">				
				<div class="card-tittle">
				@if($post->thumbnail)
					<img style="height:400px; object-fit: cover; object-position: top;"
						class="rounded w-100" src="{{ $post->takeImage }}">
				@endif

					<h1>{{ $post->title }}</h1>
          <div class="text-secondary">
            <a href="/categories/{{ $post->category->slug }}"> {{$post->category->name }}</a>
            &middot; {{ $post->created_at->format("d F, Y") }}
            &middot;
          	@foreach($post->tags as $tag)
          	<a href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
          	@endforeach
				
             <div class="media my-3">
              <img width="60" class="rounded-circle mr-3" src="{{ $post->author->gravatar() }}">
              <div class="media-body">
                <div>
                {{ $post->author->name }}
                </div>
            </div>
          </div>
                  
				<div class="card-body">
					<p> {!! nl2br($post->body) !!} </p>

				</div>

			<div>
			  <div>
			  		@auth	
			  		@if(auth()->user()->is($post->author)) 
                  <form action="{{ route('post.delete',$post->slug) }}" method="post">
                     @csrf
                   @method("delete")
                  <button class="btn btn-danger mr-2" type="submit">Delete</button>
                  <a href="/post/{{$post->id}}/edit" class="btn btn-info" type="submit">Update</a>
			  		
			  		@endif
			  	@endauth				
				<!--<a href="/post/{{$post->id}}/destroy" class="btn btn-danger">Delete</a> -->
			</div>
				
			
			</div>
			
		</div>
		<div class="col-md-6">
			@foreach($posts as $post)
			<div class="card mb-4">

							

							<div class="card-body">
							<div>
								<a href="{{ route('post.show', $post->slug) }}" class="text-secondary">
									<small>{{$post->category->name}} -</small></a> 

								@foreach($post->tags as $tag)
									<a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
										<small>{{$tag->name}}</small></a> 
								@endforeach

							</div>
						<h5>
								<a class="text-dark" href="{{ route('categories.show', $post->category->slug) }}" class="card-title">
									{{$post->title}}
							</a>

						</h5>

								<div class="text-secondary my-3">
									{{Str::Limit($post->body,130)}}
								</div>
								 <!--<a href="/post/{{$post->slug}}">Read More</a> -->
 
								 <div class="d-flex justify-content-between align-items-center mt-2">
								 	 <div class="media align-items-center">
							              <img width="40" class="rounded-circle mr-3" src="{{ $post->author->gravatar() }}">
							              <div class="media-body">
							                <div>
							                {{ $post->author->name }}
							              </div>
							           </div>
								 </div>


								 </div>
							

						</div>
							<div class="card-footer d-flex justify-content-between">
						</div>
						</div>
			 @endforeach
		</div>
	</div>
	@stop

	<!-- {{!! nl2br($post->body) !!}} -->