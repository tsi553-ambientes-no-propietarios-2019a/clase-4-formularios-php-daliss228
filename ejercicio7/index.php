<?php
include('paginas/calculoPHP.php');
include('paginas/process_form.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio7</title>
</head>
<body>
	<form method="POST">
		<div>
			<label>Ingrese el día del año</label>
			<input type="" name="numDia" required="required">
		</div>
		<button name="btndia">Ok</button>

	</form>
<?php 
if(!empty($numDia)){
	meses($numDia); 
}

?>
</body>
</html>
