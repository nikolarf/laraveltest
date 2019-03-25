@extends('layouts.app')

@section('content')
	
	<div class="container">
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
							<a href="#">Edit/</a>
							<a href="#">Delete/</a>
							<a href="{{route('book.show', $book->id)}}">View</a>
						</td>
					</tr>
				@endforeach
			</tbody>	
		</table>	
	</div>

@endsection