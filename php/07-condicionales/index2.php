<?php 

	/*IF ANIDADOS*/
	$dia = 5;

	if ($dia == 1) {
		echo "Es Lunes";
	}else{
		if ($dia == 2) {
			echo "Es Martes";
		}else{
			if ($dia == 3) {
				echo "Es Miercoles";
			}else{
				if ($dia == 4) {
					echo "Es Jueves";
				}else{
					if ($dia == 5) {
						echo "Es Viernes";
					}else{
						echo "Es fin de semana";
					}
				}
			}
		}
	}


	echo "<br>";

	/*ELSEIF*/
	$dia = 2;
	
	if ($dia == 1) {
		echo "LUNES";
	}elseif ($dia == 2) {
		echo "MARTES";
	}elseif ($dia == 3) {
		echo "MIERCOLES";
	}elseif ($dia == 4) {
		echo "JUEVES";
	}elseif ($dia == 5) {
		echo "VIERNES";
	}else{
		echo "ES FIN DE SEMANA";
	}

?>