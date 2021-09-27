<?php
    require '../controlador/conexion.php';
    $con =conectar();

    $usu =$_REQUEST['usuario'];
    $pas =$_REQUEST['contraseña'];
    $can = validarUsuario($usu,$pas,$con);
    if ($can >0) {
        # code...
        session_start();
        $_SESSION['usuario'] = $usu;
        //setcookie("cookie", "$usu", time() + 60 * 2, "/" ,"localhost");
        header("location:../paginas/notas/notas.php");
    }
    else{
        echo('<script>alert("Usuario o contraseña incorrecta"); window.history.back()</script>');
    }        
?>