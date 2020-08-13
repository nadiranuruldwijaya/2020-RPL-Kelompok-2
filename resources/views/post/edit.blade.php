@extends('layouts.app')
@section('title', 'Edit Postingan')
@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header"><h2>Edit Postingan</h2></div>
				<div class="card-body">
					<form action="/post/{{ $posts->id }}/update" method="post">
						@csrf
						<div class="form-grup">
							<label for="title">Title</label>
							<input type="text" value="{{ $posts->title }}" name="title" id='title' class="form-control">
							@error('title')
							<div class="text-danger mt-2">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="form-grup">
							<label for="body">Body</label>
							<textarea type="text" value="" name="body" id='body' class="form-control">{{ $posts->body }}</textarea>
							@error('body')
							<div class="text-danger mt-2">
								{{ $message }}
							</div>
							@enderror
						</div>

						<br><button class="btn btn-primary" type="submit">Posting</button>
					</form>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
















@endsection