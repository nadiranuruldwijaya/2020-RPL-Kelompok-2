@extends('layouts.app')
@section('content')
<main class="main pt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-10">

				@isset($category)
					<h4>Category: {{ $category->name }}</h4>
		
				@endisset

				@isset($tag)
					<h4>Tag: {{ $tag->name }}</h4>
			
				@endisset

				@if(!isset($tag) && !isset($category))
						<h4>All Post</h4>
				@endif

				<div class="row">
					<div class="col-md-9">
						@foreach($posts as $post)
						<div class="card mb-4">

							@if($post->thumbnail)
							<a href="{{ route('post.show', $post->slug) }}"> 
								<img style="height:420px; object-fit: cover; object-position: center;"
									class="card-image-top" src="{{ URL::to('')}}{{ $post->takeImage  }}">
							</a>
							@endif

							<div class="card-body">
							<div>
								<a href="{{ route('categories.show', $post->category->slug) }}" class="text-secondary">
									<small>{{$post->category->name}} -</small></a> 

								@foreach($post->tags as $tag)
									<a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
										<small>{{$tag->name}}</small></a> 
								@endforeach

							</div>
						<h5>
								<a href="{{ route('post.show', $post->slug) }}" class="card-title">
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

								 	<div class="text-secondary">
										<small>
											Published on {{ $post->created_at->diffForHumans() }}
										</small>
									</div>
								 </div>
							

						</div>
							<div class="card-footer d-flex justify-content-between">
						</div>
						</div>
						@endforeach
							</div>
<div class="col-md-3 ml-auto">

          <aside class="sidebar sidebar-sticky">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Tags</h4>
                @foreach($post->tags as $tag)
          	<a class="btn btn-light btn-sm mb-1" href="{{ route('tags.show', $tag->slug) }}">{{ $tag->name }}</a>
          	@endforeach
              </div>
            </div><!-- /.card -->
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Popular stories</h4>
                @foreach ($posts as $post)
                <a class="btn btn-light btn-sm mb-1" href="{{ route('post.show', $post->slug) }}" class="d-inline-block">
                  <h4 class="h6">{{ $post->title }}</h4>
                </a>
                <div>
                    <small>
                        Published on : {{ $post->created_at ->diffForHumans()}}
                    </small>
                </div>
                @endforeach
              </div>
            </div><!-- /.card -->
          </aside>
						
				</div>

				{{ $posts->links() }}
			</div>
			 </main>
			
		</div>
		
	</div>
	@stop