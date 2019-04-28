<?php 
$arraydias = array();
for ($i=1; $i<=365; $i++) { 
	$arraydias[$i-1]=$i;
}
//print_r($arraydias);

function meses($dia){
	if($dia<=365&&$dia>=1){
		if($dia>=1&&$dia<=31){
			echo 'Pertenece a Enero'.'<br>';
		}
		if($dia>=32&&$dia<=59){
			echo 'Pertenece a Febrero'.'<br>';
		}

		if($dia>=60&&$dia<=90){
			echo 'Pertenece a Marzo'.'<br>';
		}

		if($dia>=91&&$dia<=120){
			echo 'Pertenece a Abril'.'<br>';
		}

		if($dia>=121&&$dia<=151){
			echo 'Pertenece a Mayo'.'<br>';
		}

		if($dia>=152&&$dia<=181){
			echo 'Pertenece a Junio'.'<br>';
		}

		if($dia>=182&&$dia<=212){
			echo 'Pertenece a Julio'.'<br>';
		}

		if($dia>=213&&$dia<=243){
			echo 'Pertenece a Agosto'.'<br>';
		}

		if($dia>=244&&$dia<=273){
			echo 'Pertenece a Septiempre'.'<br>';
		}

		if($dia>=274&&$dia<=304){
			echo 'Pertenece a Octubre'.'<br>';
		}

		if($dia>=305&&$dia<=335){
			echo 'Pertenece a Noviembre'.'<br>';
		}

		if($dia>=335&&$dia<=365){
			echo 'Pertenece a Diciembre'.'<br>';
		}
		if($dia>4){
			echo 'Faltan '. (365-$dia).' dias para que se acabe el año';	
		}else{
			echo 'Falta poco para el año nuevo';	
		}
	}else{
		echo 'Día no válido';
	}
}

