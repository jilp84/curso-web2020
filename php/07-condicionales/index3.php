<?php 

	/*
		&&	Y
		||	O
		and Y
		or 	O
		! NOT Negacion

	*/

	$edad1 = 18;
	$edad2 = 65;

	$edad_juan_perez = 65;

	if ($edad_juan_perez >= $edad1 and $edad_juan_perez <= $edad2) {
		echo "Esta en edad laboral";
	}else{
		echo "No puede trabajar";
	}

?>