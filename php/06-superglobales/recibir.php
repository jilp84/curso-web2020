<?php 
	
	// $nombres =  $_GET['nombre'];
	// $apellidos = $_GET['apellidos'];

$nombres =  $_POST['nombre'];
	$apellidos = $_POST['apellidos'];

	var_dump($_POST);

	echo "<h1>" . $nombres . "</h1>";
	echo "<h1>" . $apellidos . "</h1>";
?>