@extends('layouts.app')
@section('content')
<main class="main pt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-9">
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
            <div class="d-flex justify-content-between align-items-center mt-2">
              
          </article><!-- /.card -->
          @endforeach
        </div>
        <div class="col-md-3 ml-auto">

          <aside class="sidebar sidebar-sticky">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Tags</h4>
                @foreach ($tags as $tag)
                <a class="btn btn-light btn-sm mb-1" href="{{ route('tags.show', $tag->slug) }}">{{ $tag->name }}</a>
                @endforeach
                <p>|</p>
                <h4 class="card-title">Categories</h4>
                @foreach ($categories as $category)
                <a class="btn btn-light btn-sm mb-1" href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
                @endforeach
              </div>
            </div><!-- /.card -->
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">Popular stories</h4>
                @foreach ($posts as $post)
              <img class="card-img" src="{{ URL::to('')}}{{ $post->takeImage  }}" alt="" />
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

  <footer class="site-footer bg-darkest">
    <div class="container">

      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="#">Smk Mahaputra</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Forum Siswa SMKS MAHAPUTRA CERDAS UTAMA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tim 2 XII RPL 2</a>
        </li>
      </ul>
      <div class="copy">
        &copy; MCU | XII RPL 2 | Forum Siswa SMKS MAHAPUTRA CERDAS UTAMA<br />
        Published on : {{ $post->created_at ->diffForHumans()}}<br />
        Version : 1.0.5 | Beta
      </div>
    </div>
  </footer>
@stop