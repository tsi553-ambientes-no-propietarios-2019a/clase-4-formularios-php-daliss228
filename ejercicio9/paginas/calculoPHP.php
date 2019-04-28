<?php
		//valores del dia de hoy 
		$dia = date('j');
		$mes = date('n');
		$anio = date('Y');
		echo "<h2>Calendario</br></h2> <h3>Mes: $mes</br> Año: $anio</h3>";

		//dia del primer dia del mes -mktime devuelve el numero de segundos entre 01/01/1970 a la fecha presente el parametro w devuelve el numero que representa al dia que empezo el mes d devuelve el ultimo dia del mes

		$primerDiaMes=date("w",mktime(0,0,0,$mes,1,$anio));
		if($primerDiaMes==0){
			$primerDiaMes = 7;

		}
		//echo $primerDiaMes.'<br>';
		$ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));
		//echo $ultimoDiaMes;
		//lastcel variable pintar de blanco las celdas que no estan en la fecha
		$lastcel = $primerDiaMes + $ultimoDiaMes;

		echo '<tr>';
		//42 porque los calendarios son de tamanio 6*7
		for($i=1; $i<=42; $i++){
			if($i==$primerDiaMes){
				//empezar a contar desde el dia 1
				$day=1;
			}
			if($i<$primerDiaMes || $i>=$lastcel){
				echo "<td>&nbsp;</td>";
			}else{
				if($day==$dia){
					echo "<td class='negrilla'>$day</td>";
				}else{
					echo "<td>$day</td>";
				}
				$day++;
			}
			if($i%7==0){
				echo "</tr><tr>\n";
			}
		}
		?>