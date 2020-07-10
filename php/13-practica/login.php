<?php

//Iniciar la sesion y la conexion a la base de datos.

require_once 'includes/conexion.php';

//Recoger datos del formulario
if (isset($_POST)) {
	
	$email = trim($_POST['email']);
	$password = $_POST['password'];

	$sql = "SELECT * FROM usuarios WHERE Email = '$email'";

	$login = mysqli_query($db, $sql);

	if ($login && mysqli_num_rows($login) == 1) {
		
		$usuario = mysqli_fetch_assoc($login);


		$verificar = false;



		if ($usuario['Password'] == $password) {

			$verificar = true;

			$_SESSION['usuario'] = $usuario;
			
		}

	}

}

header('location: index.php');