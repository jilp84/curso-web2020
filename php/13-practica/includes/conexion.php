<?php

//Conexion a MySql

$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog';
$puerto = '3308';


$db = mysqli_connect($servidor, $usuario, $password, $basededatos, $puerto);

mysqli_query($db, "SET NAMES 'utf8'");

if (!$db) {
	echo "Error: " . mysqli_connect_error();
}

if(!isset($_SESSION)){
	session_start();
}