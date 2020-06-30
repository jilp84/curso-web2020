<?php
	
	/*
		Operadores de Comparación
		==	Igual
		===	Identico
		!= 	Diferente
		<>	Diferente
		!== No identico
		<	Menor que
		>	Mayor que
		<= 	Menor o igual que
		>= 	Mayor o igual que

	*/

		$color = 'verde';

		if ($color == 'rojo') {
			echo "El color es rojo";
		}else{
			echo "El color no es rojo";
		}

		echo "<br>";

		$x = 2;
		$y = "2";

		if ($x === $y) {
			echo "Son indenticos";
		}else{
			echo "No son indenticos";
		}


?>