<?php
	require '../controlador/conexion.php';
	$conn =conectar();
	
	$id= $_REQUEST['id'];
    eliminarNota($id, $conn);
	
	header('Location: ../paginas/notas/notas.php');
?>