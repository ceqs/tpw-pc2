<?php
	require '../controlador/conexion.php';
	$conn =conectar();
    
	$user = $_REQUEST['usuario'];
    $foto = $_FILES['foto']['name'];
	$ruta = $_FILES['foto']['tmp_name'];
	
	if(!empty($foto)) {
		$fotuser = "../imagenes/FotosUser/".$foto;
		copy($ruta, $fotuser);

		cambiarFoto($user, $fotuser,$conn);
	}
	header('Location: ../paginas/cuenta/cuenta.php');
?>