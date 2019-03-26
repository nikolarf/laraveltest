@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h3>List All Books Here</h3>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Date</th>
					<th>Modify</th>
				</tr>
			</thead>
			<tbody>
				@foreach($books as $book)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $book->name }}</td>
						<td>{{ $book->description }}</td>
						<td>{{ $book->created_at }}</td>
						<td>
							
							<!--form method="GET" action="book/{{$book->id}}/edit"-->
							<form method="GET" action="{{ route('book.edit', $book->id) }}">
								{{csrf_field()}}
								<input type="submit" value="Edit">
							</form>

							<form action="{{route('book.destroy', $book->id)}}" class="form-link"method="post">
								{{csrf_field()}}
								{{method_field('delete')}}
								<input type="submit" value="Delete">
							</form>

							<a href="{{route('book.show', $book->id)}}">View</a>
						</td>
					</tr>
				@endforeach
			</tbody>	
		</table>	
	</div>

@endsection