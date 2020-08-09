@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-AU-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<center>
		<h1>Edit Postingan</h1>
		<form action="/post/{{$posts->id}}/update" method="post">
		@csrf
		<table>
				<tr>
					<td>
						<label for="title">Title</label>
					</td>
					<td>
						<div>
							<input type="text" value="{{ $posts->title }}" name="title" id="title" required="">
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<label for="slug">Slug</label>
					</td>
					<td>
						<div>
							<input type="text" value="{{ $posts->slug }}" name="slug" id="slug" required="">
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<label for="body">Body</label>
					</td>
					<td>
						<div>
							<textarea name="body" id="body" cols="50" rows="5">{{ $posts->body }}
							</textarea>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<button type="submit">SIMPAN</button>
					</td>
				</tr>
		</table>
			
		</form>
	</center>
</body>
</html>




@stop