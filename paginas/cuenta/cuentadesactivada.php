<?php
    session_start();
    require('../../controlador/conexion.php');
    $conn=conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilo.css">
    <title>Desactivado</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="titu">
                <a href="../../">
                    <img src="../../imagenes/logo.png" class="logo">
                </a>
            </div>
            <nav>
                <a href='../cuenta/cuenta.php'><?=$_SESSION['usuario']?></a>
                <a href="../../llamadas/proceso_cerrar.php">Cerrar sesión</a>
            </nav>
        </div>
    </header>
    <br><br><br><br>
    <?php
        foreach (mostrarFoto($_SESSION['usuario'],$conn) as $key => $value) {
    ?>
    <div class="login-body">
        <form class='login-form'>
            <h2>Tu cuenta esta desactivada</h2>
            <br>
            <div class="imgcontenedor">
                <img src="../<?=$value[6]?>"  class="logo">
            </div>
            <br><br>
            <div class="flex-row">
                <label for="username"><b>Usuario: &nbsp;&nbsp;&nbsp;</b></label>
                <label for="username"><b><?=$value[0]?></b></label>
            </div>
            <div class="flex-row">
                <label for="password"><b>Nombre completo: &nbsp;&nbsp;&nbsp;</b></label>
                <label for="username"><b><?=$value[2]?></b></label>
            </div>
            <div class="flex-row">
                <label for="nombres"><b>Correo: &nbsp;&nbsp;&nbsp;</b></label>
                <label for="username"><b><?=$value[3]?></b></label>
            </div>
        </form>
        <a class='lf--forgot' href="../../llamadas/proceso_activaruser.php?usuario=<?=$_SESSION['usuario']?>">Activar Cuenta</a>
    </div>
    <?php
        }
    ?>   
</body>
</html>