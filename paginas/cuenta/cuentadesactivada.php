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
        <?php
        session_start();
            require('../../controlador/conexion.php');
            $conn=conectar();
            
    
            
        ?>
        <div class="wrapper">
	
        <div class="titu"><img src="../../imagenes/logo.png" class="logo">  </div>
            <nav>
                <h3>Bienvenido: <?=$_SESSION['usuario']?> </h3>
                <a href="../../llamadas/proceso_cerrar.php">Cerrar Sesión</a>
            </nav>

    </div>
</header>


 <div class="div logueo">     
          <div class="imgcontenedor">
              <br><br><br><br>
            <h1>Tu cuenta esta desactivada</h1>
              <!--PHP-->
            <?php
                foreach (mostrarFoto($_SESSION['usuario'],$conn) as $key => $value) {
                    ?>
                    <img src="../<?=$value[6]?>"  class="logo"><br>
                    <table class="centrado">   
                        <tr>
                            <td><label><b>Usuario: </b></label></td>
                            <td><?=$value[0]?></td>
                        </tr>
                        <tr>
                            <td><label><b>Nombre Completo: </b></label></td>
                            <td> <?=$value[2]?></td>
                        </tr>
                        <tr>
                            <td><label><b>Correo: </b></label></td>
                            <td><?=$value[3]?></td>
                </tr>
                </table>
                    <br><br><br>
                    <a href="../../llamadas/proceso_activaruser.php?usuario=<?=$_SESSION['usuario']?>">Activar Cuenta</a>
<?php                }
     ?>       
          </div>
        </form>
      </div>
</body>
</html>