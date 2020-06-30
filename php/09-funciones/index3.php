<?php 

	function calculadora($numero1, $numero2){

		$suma = $numero1 + $numero2;
		$resta = $numero1 - $numero2;
		$multiplicar = $numero1 * $numero2;
		$dividir = $numero1 / $numero2;

		echo "Suma: $suma <br>";
		echo "resta: $resta <br>";
		echo "Multiplicar: $multiplicar <br>";
		echo "Dividir: $dividir <br>";

	}


	calculadora($_GET["n1"], $_GET["n2"]);

	//var_dump($_GET);

?>