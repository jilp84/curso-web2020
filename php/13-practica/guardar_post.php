<?php

if (isset($_POST)) {
	
	require_once 'includes/conexion.php';

	$titulo = isset($_POST['titulo']) ? mysqli_escape_string($db, $_POST['titulo'])  : false;
	$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria']  : false;
	$conteniddo = isset($_POST['contenido']) ? mysqli_escape_string($db, $_POST['contenido'])  : false;
	$imagen = isset($_POST['imagen']) ? mysqli_escape_string($db, $_POST['imagen'])  : false;

	$sql = "INSERT INTO posts (Id, Titulo, Fecha, UrlImagen, Contenido, CategoriaId) VALUES (NULL, '$titulo', CURDATE(), '$imagen', '$conteniddo', $categoria)";

	$guardar = mysqli_query($db, $sql);


	header('location: index.php');

}