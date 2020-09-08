@extends('layouts.app')
@section('title', $post->title)
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          @if($post->thumbnail)
          @auth
          <img style="height: 800px; object-fit: cover; object-position: center;" class="card-img" src="{{ URL::to('')}}{{ $post->takeImage }}">
            @endauth
          @endif
          <h1>{{ $post->title }}</h1>
          <div class="text-secondary">
            <a class="text-dark" href="/categories/{{ $post->category->slug }}">{{$post->category->name }}</a>
            &middot; {{ $post->created_at->format("d F, Y") }}
            &middot;
            @foreach ($post->tags as $tag)
                <a class="text-dark" href="/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
            @endforeach

            <div class="media my-3">
              <div class="media-body">
                <div>
                {{ $post->author->name }}
              </div>
                {{'@'. $post->author->username}}
              </div>
            </div>
          </div>
          <hr>
          <p>{!! nl2br($post->body) !!}</p>
          <div>
            <div class="flex mt-3">
            <!-- Button trigger modal -->
            @if(auth()->user()->is($post->author))
                <a href="{{ route('post.edit', $post->slug) }}" class="btn btn-sm btn-success">Edit</a>
                @endif
            @can('delete', $post)
                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                Delete
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-2">
                        <div>{{ $post->title }}</div>
                          <div class="text-secondary">
                              <small> Published : {{ $post->created_at->format("d F, Y") }}</small></div>
                          </div>
                            <form action="{{ route('post.delete',$post->slug) }}" method="post">
                                @csrf
                                @method("delete")
                                <div class="d flex">
                                <button class="btn btn-danger mr-2" type="submit">Ya</button>
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                                </div>
                          </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div>
           @endcan
          </div>
        </div>
      </div>
    </div>
@endsection