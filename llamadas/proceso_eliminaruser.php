<?php
	require '../controlador/conexion.php';
	$conn =conectar();
	
	$user= $_REQUEST['usuario'];
    eliminarUsuario($user, $conn);
	
	header('Location: ../paginas/login/login.php');


?>