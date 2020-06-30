<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario PHP</title>
</head>
<body>
	
	<h1>Formulario PHP</h1>
	<hr>
	<!-- <form method="GET" action="recibir.php"> -->
	<form method="POST" action="recibir.php">
		
		<p>			
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre">
		</p>

		<p>
			<label for="apellidos">Apellidos</label>
			<input type="text" name="apellidos">
		</p>
		
		<input type="submit" value="Enviar">

	</form>

</body>
</html>