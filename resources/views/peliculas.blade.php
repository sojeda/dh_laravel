<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peliculas</title>
</head>
<body>
	<ul>
	<?php foreach ($movies as $pelicula) {
		echo "<li>" . $pelicula . "</li>";
	} ?>
	</ul>
</body>
</html>