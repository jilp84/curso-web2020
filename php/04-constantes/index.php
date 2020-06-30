<?php 

	//Constante
	//Es un contenedor de informción que no puede variar.

	define('nombre', 'Juan Perez');
	define('TamanioLetra', 14);

	echo TamanioLetra;
	echo "<br><br>";
	//Constantes Predefinidas
	echo PHP_VERSION;
	echo "<br>";
	echo PHP_OS;
	echo "<br>";
	echo PHP_EXTENSION_DIR;
	echo "<br>";
	echo __LINE__;
	echo "<br>";
	echo __FILE__;
	echo "<br>";

	function FunctionName()
	{
		echo __FUNCTION__;
	}

	



?>