<?php

$user = '';
$pass = '';
$passconf = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = trim($_POST['user']);
	$pass = $_POST['pass'];
	$passconf = $_POST['passconf'];
}

function validar($pass, $passconf){
	$bool=false;

	if($pass==$passconf){
		$bool=true;
	}else{
		$bool=false;
	}
	return $bool;

}

?>