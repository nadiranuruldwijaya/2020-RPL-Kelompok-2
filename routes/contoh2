@extends('layouts.app')
@section('title', 'Edit Postingan')
@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header"><h2>Edit Postingan</h2></div>
				<div class="card-body">
					<form action="/post/{{ $post->id }}/update" method="post" autocomplete="off" enctype="multipart/form-data">
						@csrf
			<div class="form-grup">
				<input type="file" name="thumbnail" id="thumbnail">
				@error('thumbnail')
						<div class="text-danger mt-2">
						{{ $message }}
					</div>
				@enderror
			</div>

			<div class="form-grup">
			<label for="title">Title</label>
				<input type="text" value="{{old('title') ?? $post->title }}" name="title" id='title' class="form-control">
					@error('title')
						<div class="text-danger mt-2">
						{{ $message }}
					</div>
				@enderror
			</div>
				<div class="form-grup">
					<label for="category">Category</label>
					<select  name="category" id="category" class="form-control" >
						<option disabled selected> Chose One!</option>
						@foreach ($categories as $category)
							<option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}"> {{ $category->name}} </option>
						@endforeach
					</select>
					@error('category')
						<div class="text-danger mt-2">
							{{ $message }}
						</div>
						@enderror
						</div>
				</div>

			<div class="form-grup">
					<label for="tags">Tag</label>
					<select name="tags[]" class="form-control select2" id="tags" multiple>
						@foreach ($post->tags as $tag)
							<option selected value="{{ $tag->id }}"> {{ $tag->name}} </option>
						@endforeach

						@foreach ($post->tags as $tag)
							<option selected value="{{ $tag->id }}"> {{ $tag->name}} </option>
						@endforeach
						@foreach ($tags as $tag)
							<option value="{{ $tag->id }}"> {{ $tag->name}} </option>
						@endforeach
					</select>
					@error('tags')
						<div class="text-danger mt-2">
							{{ $message }}
						</div>
						@enderror
				</div>

			<div class="form-grup">
					<label for="Category">Body</label>
						<textarea type="text" value="" name="body" id='body' class="form-control">
							{{old('body') ?? $post->body }}</textarea>
						@error('body')
						<div class="text-danger mt-2">
							{{ $message }}
						</div>
						@enderror
				</div>

			<br><button class="btn btn-primary" type="submit">Update</button>
									
							</form>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
















@endsection