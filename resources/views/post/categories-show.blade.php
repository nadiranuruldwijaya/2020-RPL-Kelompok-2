@extends('layouts.app')
@section('content')
<main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">
          <h2>#{{ $categories->name }}</h2><br>
            @foreach ($posts as $post)
          <article class="card mb-4">
            <header class="card-header">
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
          </article><!-- /.card -->
          @endforeach
        </div>

        </div>
      </div>
      {{ $posts->links() }}
    </div>

  </main>
@stop