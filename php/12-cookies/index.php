<?php 

	/*
		Cookie: es un archivo que se almacena en la computadora del usuario
		que visita la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web.

	*/

	//Cookie basica
	setcookie('miGalleta', 'Esta es una Cookie de practica.');

	//Cookie con expiración
	setcookie('unyear', "esta cookie expira en un año.", time()+(60*60*24*365));

	header('location:ver_cookies.php');

?>

<a href="ver_cookies.php">Ver Cookies</a>