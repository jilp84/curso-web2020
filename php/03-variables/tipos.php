<?php 

	/*=============================================
	=            TIPOS DE VARIABES                =
	=============================================*/
	/*
		Entero (int / integer) = 99
		Flotantes / decimales (float / double) = 3.2
		Cadenas de texto = "Hola soy un texto"
		Boolean (bool) = true / false
		null
		Array	
		Objetos									
	/*==============  End  ======================*/
	
	$numero = 100;
	$decimal = 3.2;
	$texto = "Hola soy un texto";
	$logico = true;
	$nulo = null;


	echo gettype($numero);
	echo "<br>";
	echo gettype($decimal);
	echo "<br>";
	echo gettype($texto);
	echo "<br>";
	echo gettype($logico);
	echo "<br>";
	echo gettype($nulo);

	// $mi_nombre = "Jose Palencia";
	// var_dump($mi_nombre);

	$mi_nombre[] = "Jose Palencia";
	$mi_nombre[] = "Juan Perez";

	var_dump($mi_nombre);

?>