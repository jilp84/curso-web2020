<?php 

	if ($_COOKIE['miGalleta']) {
		unset($_COOKIE['miGalleta']);
		setcookie('miGalleta', '', -100);
	}

	if ($_COOKIE['unyear']) {
		unset($_COOKIE['unyear']);
		setcookie('unyear', '', -100);
	}

	header('location:ver_cookies.php');

?>