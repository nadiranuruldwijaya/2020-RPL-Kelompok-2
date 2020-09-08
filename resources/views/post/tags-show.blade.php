@extends('layouts.app')
@section('content')
<main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">
            @foreach ($posts as $post)
          <article class="card mb-4">
            <header class="card-header">
            <h2>#{{ $tags->name }}</h2><br>
              <div class="card-meta">
                Published on : {{ $post->created_at ->diffForHumans()}}
              </div>
              <a href="{{ route('post.show', $post->slug) }}">
                <h4 class="card-title">{{ $post->title }}</h4>
              </a>
            </header>
            <a href="{{ route('post.show', $post->slug) }}">
              <img class="card-img" src="{{ URL::to('')}}{{ $post->takeImage  }}" alt="" />
            </a>
            <div class="card-body">
              <p class="card-text">{{ Str::limit($post->body, 140) }}</p>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <div class="media align-items-center">
                  <img width="60" class="rounded-circle mr-3" src="{{ $post->author->gravatar() }}">
                  <div class="media-body">
                  <div>
                  {{ $post->author->name }}
                  </div>
                  </div>
          </div>
          </article><!-- /.card -->
          @endforeach
        </div>
        <div class="col-md-3 ml-auto">

          <aside class="sidebar sidebar-sticky">
            <div class="card mb-4">
              </div>
            </div><!-- /.card -->
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Popular stories</h4>
                @foreach ($posts as $post)
                <a href="{{ route('post.show', $post->slug) }}" class="d-inline-block">
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
      </div>
      {{ $posts->links() }}
    </div>

  </main>
@stop