<?php
	require '../controlador/conexion.php';
	$conn =conectar();

	$user = $_REQUEST['usuario'];
    $pass = $_REQUEST['contraseña'];
	$fullname = $_REQUEST['nomC'];
	$email = $_REQUEST['correo'];
    $foto = $_FILES['foto']['name'];
	$ruta = $_FILES['foto']['tmp_name'];
	$fotuser = "";

	if(!empty($foto)) {
		$fotuser = "../imagenes/FotosUser/".$foto;
		copy($ruta, $fotuser);
	}

    agregarUser($user, $pass, $fullname, $email, $fotuser,$conn);
	header('Location: ../paginas/login/login.php');
?>