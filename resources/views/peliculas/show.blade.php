<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $movie->title }}</title>
</head>
<body>
	Pelicula: {{ $movie->title }}

	<a href="{{ route('peliculas.eliminar', $movie->id) }}">Eliminar</a>
</body>
</html>