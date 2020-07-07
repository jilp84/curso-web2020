<?php 

	if (isset($_COOKIE['miGalleta'])) {
		echo '<h1>' . $_COOKIE['miGalleta'] . '</h1>';
	}else{
		echo "No existe la Cookie";
	}


	if (isset($_COOKIE['unyear'])) {
		echo '<h1>' . $_COOKIE['unyear'] . '</h1>';
	}else{
		echo "No existe la Cookie";
	}

?>

<br>

<a href="index.php">Crear Cookies</a>

<br>

<a href="borra_cookies.php">Borrar Cookies</a>