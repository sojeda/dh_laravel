<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actor</title>
</head>
<body>	
	<p><strong>Nombre:</strong> {{ $actor->first_name }}</p>
	<p><strong>Apellido:</strong> {{ $actor->last_name }}</p>
	<p><strong>Rating:</strong> {{ $actor->rating }}</p>
</body>
</html>