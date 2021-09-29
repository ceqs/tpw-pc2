<?php
	require '../controlador/conexion.php';
	$conn =conectar();
	
	$user= $_REQUEST['usuario'];
    activarUsuario($user, $conn);
	
	header('Location: ../paginas/login/login.php');
?>