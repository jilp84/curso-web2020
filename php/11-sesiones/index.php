<?php 

	/*
	Sesión: un funcionalidad que nos permite almacernar y persistir datos del usuario que navega en el sitio, hasta que cierra la sesión o cierra el navegador.
	*/

	//Iniciar la sesion
	session_start();

	//Variable local
	$variable_local = "Soy una variable local";

	//Variable de Sesión
	$_SESSION['variable_persistente'] = "Hola soy una sesión activa del 03-07-2020" ;
	$_SESSION['nick_usuario'] = "jperez" ;

	echo $variable_local . "<br>";

	echo $_SESSION['variable_persistente'] . '<br>';
?>