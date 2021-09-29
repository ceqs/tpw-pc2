<?php
	require '../controlador/conexion.php';
	$conn =conectar();
	
	$id= $_REQUEST['id'];
	$title= $_REQUEST['title'];
	$text= $_REQUEST['text'];
    actualizarNota($id, $title, $text, $conn);
	
	header('Location: ../paginas/notas/notas.php');
?>