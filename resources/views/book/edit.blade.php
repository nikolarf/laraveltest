@extends('layouts.app')

@section('content')
<div class="container">
	
	<div class="container">
		<h2>Update Book Info</h2>
    <div class="row">
		<form action="{{route('book.update', $book->id)}}" role="form" class="col-md-9 go-right" method="POST">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group">
				<input id="name" name="name" type="text" class="form-control" value="{{$book->name}}">
			</div>
			<div class="form-group">
				<textarea id="message" name="description" class="form-control" value="">{{$book->description}}</textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Update">
			</div>
		</form>
	</div>
</div>
</div>
	
@endsection