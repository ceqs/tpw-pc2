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
    <title>Document</title>
</head>
<body class="fondonotas">
    <header>
        <?php
            include '../notas/cabecera.php';            
        ?>
    </header>
    <br><br><br><br>
    <?php
        foreach (mostrarFoto($_SESSION['usuario'],$conn) as $key => $value) {
    ?>
    <div class="login-body">
        <form class='login-form' enctype="multipart/form-data" action="../../llamadas/proceso_cambiarfoto.php" method="post">
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
            <div class="flex-row">
                <label for="foto"><b>Cambiar foto: &nbsp;&nbsp;&nbsp;</b></label>
                <input id="foto" class="lf--input" type="file" name="foto">
                <input type="hidden" name="usuario" value="<?=$_SESSION['usuario']?>">
            </div>
            <input class="lf--submit" type="submit" value="Actualizar Foto">
        </form>
        <a class='lf--forgot' href="../../llamadas/proceso_eliminaruser.php?usuario=<?=$_SESSION['usuario']?>">Desactivar Cuenta</a>
    </div>
    <?php
        }
    ?>   
</body>
</html>