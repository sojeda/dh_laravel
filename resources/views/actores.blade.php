<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actores</title>
</head>
<body>
	<form method="GET" action="{{ route('actor.buscar')}}">
	    {{ csrf_field() }}

		<input type="text" name="actores" />
		<input type="submit" name="Buscar">
	</form>

	<ul>
	@isset($actores)
		@foreach($actores as $actor)
			<li>{{ $actor->getNombreCompleto() }}</li>
		@endforeach
	@endisset
	</ul>
</body>
</html>