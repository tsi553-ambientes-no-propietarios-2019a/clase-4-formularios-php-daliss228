<?php include('paginas/process_form.php');?>

<!DOCTYPE html>
<html>
	<head>
		<tittle>Ejercicio 3</tittle>
	</head>
<body>

<?php

	include('paginas/content.php');

$usuarios = array(	'juan' => '12345',
					'daliss' => '9964x',
					'pancho' => '98765',
					'maria' => 'maria123',
					'pedro' => 'pepe555');

if(!empty($user)&&!empty($pass)){
	if(array_key_exists($user, $usuarios)){
		if($usuarios[$user]==$pass){
			header("Location: paginas/bienvenido.php?nom=$user");
		} else {
			echo 'Contraseña incorrecta!';
		}	
	} else {
		echo 'El usuario no existe!';
	}
	
}

?>

</body>
</html>
