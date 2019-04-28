<?php

$arraydias = array();
for ($i=1; $i<=365; $i++) { 
	$arraydias[$i-1]=$i;
}

for ($j=0; $j < 365 ; $j++) { 
	echo '<ul class="enero">';
	if($arraydias[$j]>=1&&$arraydias[$j]<=31){
		if ($arraydias[$j]==1) {
			echo '<p class="enero">ENERO</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';
	
	echo '<ul class="febrero">';
	if($arraydias[$j]>=32&&$arraydias[$j]<=59){
		if ($arraydias[$j]==32) {
			echo '<p class="febrero">FEBRERO</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="marzo">';
	if($arraydias[$j]>=60&&$arraydias[$j]<=90){
		if ($arraydias[$j]==60) {
			echo '<p class="marzo">MARZO</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';	
	}
	echo '</ul>';

	echo '<ul class="abril">';
	if($arraydias[$j]>=91&&$arraydias[$j]<=120){
		if ($arraydias[$j]==91) {
			echo '<p class="abril">ABRIL</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="mayo">';
	if($arraydias[$j]>=121&&$arraydias[$j]<=151){
		if ($arraydias[$j]==121) {
			echo '<p class="mayo">MAYO</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="junio">';
	if($arraydias[$j]>=152&&$arraydias[$j]<=181){
		if ($arraydias[$j]==152) {
			echo '<p class="junio">JUNIO</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="julio">';
	if($arraydias[$j]>=182&&$arraydias[$j]<=212){
		if ($arraydias[$j]==182) {
			echo '<p class="julio">JULIO</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="agosto">';
	if($arraydias[$j]>=213&&$arraydias[$j]<=243){
		if ($arraydias[$j]==213) {
			echo '<p class="agosto">AGOSTO</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="septiembre">';
	if($arraydias[$j]>=244&&$arraydias[$j]<=273){
		if ($arraydias[$j]==244) {
			echo '<p class="septiembre">SEPTIEMBRE</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="octubre">';
	if($arraydias[$j]>=274&&$arraydias[$j]<=304){
		if ($arraydias[$j]==274) {
			echo '<p class="octubre">OCTUBRE</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="noviembre">';
	if($arraydias[$j]>=305&&$arraydias[$j]<=334){
		if ($arraydias[$j]==305) {
			echo '<p class="noviembre">NOVIEMBRE</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';

	echo '<ul class="diciembre">';
	if($arraydias[$j]>=335&&$arraydias[$j]<=365){
		if ($arraydias[$j]==335) {
			echo '<p class="diciembre">DICIEMRBE</p>';
		}
		echo '<li>'.$arraydias[$j].'</li>';
	}
	echo '</ul>';


}



?>