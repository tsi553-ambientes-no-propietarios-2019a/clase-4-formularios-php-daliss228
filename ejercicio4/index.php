
<!DOCTYPE html>
<html>
	<head>
		<tittle>Ejercicio 4</tittle>
	</head>
<body>

<form method="post">

	<div>
		<label>Ingrese el nombre</label><br>
		<input type="text" name="user" required="requiered">
	</div>

	<div>
		<label>Ingrese la contraseña</label><br>
		<input type="password" name="pass" value="" required="required">
	</div>

	<div>
		<label>Confirme la contraseña</label><br>
		<input type="password" name="passconf" value="" required="required">
	</div>

	<br><button name="btnguardar">Registrarse</button>

</form>

<?php

include('paginas/validarRegistro.php');

if(!empty($user)&&!empty($pass)&&!empty($passconf)){
	if(validar($pass, $passconf)){
		header("Location: paginas/registroCorrecto.php");
	}else{
		echo 'Las contraseñas no coinciden!';
	}
}

?>

</body>
</html>
