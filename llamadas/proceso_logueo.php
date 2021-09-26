<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cargando</h1>
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
            setcookie("cookie", "$usu", time() + 60 * 2, "/" ,"localhost");
            header("location:../paginas/notas/notas.php");
        }
        else{
            echo('<script>alert("Usuario o contraseña incorrecta"); window.history.back()</script>');
        }

        
    ?>
</body>
</html>