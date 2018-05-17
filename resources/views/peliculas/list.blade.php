<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peliculas</title>
</head>
<body>
	@isset($message);
		{{ $message }}
	@endisset
	<ul>
	@foreach($movies as $pelicula)
	<li>
		<a href="{{ route('peliculas.mostrar', $pelicula->id) }}">{{ $pelicula->title }}</a>
	</li>
	@endforeach
	</ul>
</body>
</html>