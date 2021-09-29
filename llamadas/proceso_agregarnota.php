<?php
	require '../controlador/conexion.php';
	$conn =conectar();

	session_start();
    $user = $_SESSION['usuario'];
	
	$title= $_REQUEST['title'];
	$text= $_REQUEST['text'];
    agregarNota($user, $title, $text, $conn);
	
	header('Location: ../paginas/notas/notas.php');
?>