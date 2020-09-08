@extends('layouts.app', ['title'=> 'Update Post'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Post : {{ $post->title }}</div>
                <div class="card-body">
                    <form action="{{ route('post.edit', $post->slug) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <input type="file" name="thumbnail" id="thumbnail">
                            @error('thumbnail')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{old('title') ?? $post->title }}">
                            @method('patch')
                            @error('title')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option disabled selected>Choose One!</option>
                                    @foreach ($categories as $category)
                                    <option {{ $category->id == $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tags">Tag</label>
                                <select name="tags[]" id="tags" class="form-control select2" multiple="">
                                    @foreach ($post->tags as $tag)
                                    <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach

                                    @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                                @error('tags')
                                    <div class="text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" class="form-control">{{old('body') ?? $post->body }}</textarea>
                            @error('body')
                            <div class="text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop