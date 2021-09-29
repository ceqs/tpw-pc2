<?php
	require '../controlador/conexion.php';
	$conn =conectar();

	$foto = $_REQUEST['usuario'];
    $pass = $_REQUEST['contraseña'];
	$fullname = $_REQUEST['nomC'];
	$email = $_REQUEST['correo'];
    $foto = $_FILES['foto']['name'];
	$ruta = $_FILES['foto']['tmp_name'];
	$fotuser = "../imagenes/FotosUser/".$foto;
	copy($ruta, $fotuser);	
	header('Location: ../paginas/login/login.php');


?>