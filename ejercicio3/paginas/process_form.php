<?php
$user = '';
$pass = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = trim($_POST['user']);
	$pass = $_POST['pass'];
}

?>