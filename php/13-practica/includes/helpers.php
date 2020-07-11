<?php

//Funcion para obtener los post
function ObtenerPosts($conexion){

	$sql = "SELECT * FROM posts";

	$posts = mysqli_query($conexion, $sql);

	$resultado = array();
	if ($posts && mysqli_num_rows($posts) >= 1) {
		$resultado = $posts;
	}

	return $resultado;

}

function ObtenerCategorias($conexion){

	$sql = "SELECT * FROM categoria";

	$categorias = mysqli_query($conexion, $sql);

	$resultado = array();
	if ($categorias && mysqli_num_rows($categorias) >= 1) {
		$resultado = $categorias;
	}

	return $resultado;

}