@extends('layouts.default')

@section('content')
	@isset($movie)
		Pelicula: {{ $movie->title }}

		@isset($actors)
		<ul>
			@foreach($actors as $actor)
				<li>{{ $actor->getNombreCompleto() }}</li>
			@endforeach
		</ul>
		@endisset	

	@endisset
@endsection