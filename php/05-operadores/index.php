<?php 

	//Operadores Aritméticos
	$numero1 = 55;
	$numero2 = 33;

	echo "Suma: " . ($numero1 + $numero2) . "<br>";
	echo "Resta: " . ($numero1 - $numero2) . "<br>";
	echo "Multiplicar: " . ($numero1 * $numero2) . "<br>";
	echo "Dividir: " . ($numero1 / $numero2) . "<br>";
	echo "Modulo: " . ($numero1 % $numero2) . "<br>";

	//Operadores de incremento y decremento

	$year = 2020;

	//$year = $year + 1;
	//$year++;
	$year--;
	echo "$year <br>";


	//Operadores de Asignacion
	$edad = 55;
	echo "$edad <br>";

	//$year = $year + 5;
	echo ($edad+=5) . "<br>";

	echo $edad;
?>