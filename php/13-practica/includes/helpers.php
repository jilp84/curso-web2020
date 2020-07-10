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

