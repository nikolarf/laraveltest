@extends('layouts.app')

@section('content')
	<h3 class="text-center">Contact Us Here</h3>
	<ul>
		@foreach($data as $key)
			<li>{{ $key }}</li>
		@endforeach
	</ul>
@endsection