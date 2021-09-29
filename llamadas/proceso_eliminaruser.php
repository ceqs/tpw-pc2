<?php
	require '../controlador/conexion.php';
	$conn =conectar();
	
	$user= $_REQUEST['usuario'];
    desactivarUsuario($user, $conn);
	
	session_start();
	session_destroy();
	
	header('Location: ../paginas/login/login.php');
?>