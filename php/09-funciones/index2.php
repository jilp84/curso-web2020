<?php 
	
	/*
	Funcion con parametros
	*/

	function tabla($numero){

		echo "<h2>Tabla de multiplicar del $numero</h2>";

		for($i=1; $i<=10; $i++){

			$resultado = $numero * $i;

			echo "$numero x $i = $resultado <br>";

			//echo $numero . ' x ' . $i . ' = ' . ($numero*$i) . '<br>';

		}

	}

	// if (isset($_GET["numero"])) {
	// 	tabla($_GET["numero"]);
	// }else{
	// 	echo "No hay un numero para multiplicar";
	// }

	for ($i=1; $i <= 10; $i++) { 
		tabla($i);
	}	

?>
