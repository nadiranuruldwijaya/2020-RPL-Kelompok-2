@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@foreach($post as $a)
				<h4>{{ $a->slug }}</h4>
				<div class="card-tittle">
					{{ $a->title }}
				</div>
				<div class="card-body">
					{{ $a->body }}
				</div>
				<a href="/post/{{$a->id}}/edit" class="btn btn-info">Update</a>
				<a href="/post/{{$a->id}}/destroy" class="btn btn-danger">Delete</a>

			</div>
				@endforeach
		</div>
	</div>
	@stop