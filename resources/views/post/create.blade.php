@extends('layouts.app')
@section('title', 'Create Postingan')
@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header"><h2>Create Postingan</h2></div>
				<div class="card-body">
					<form action="/post/store" method="post" autocomplete="off" enctype="multipart/form-data">
						@csrf
						
						@include('post.partials.form-control')
					</form>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
















@endsection