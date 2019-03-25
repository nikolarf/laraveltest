@extends('layouts.app')

@section('content')
<div class="container">
	
	<div class="container">
		<h2>Add New Book</h2>
    <div class="row">
		<form action="{{ url('book') }}" role="form" class="col-md-9 go-right" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<input id="name" name="name" type="text" class="form-control" placeholder="Please Enter The Book Name Here">
			</div>
			<div class="form-group">
				<textarea id="message" name="description" class="form-control" placeholder="Please Enter The Book Description Here"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Add">
			</div>
		</form>
	</div>
</div>
</div>
	
@endsection