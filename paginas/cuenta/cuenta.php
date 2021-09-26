<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilo.css">
    <title>Document</title>
</head>
<body>
<header>
        <?php
        
            require('../../controlador/conexion.php');
            $conn=conectar();
            
        
            include '../notas/cabecera.php';
            
        ?>
</header>

 
 <div class="div logueo">     
          <div class="imgcontenedor">
              <br><br><br><br>
            <!--PHP-->
            <?php
                foreach (mostrarFoto($_SESSION['usuario'],$conn) as $key => $value) {
                    ?>
                    <img src="../<?=$value[4]?>"  class="logo"><br>
                    <table class="centrado">
                        <tr>
                            <td><b>Cambiar imagen: </b>  </td>
                            <td>
                            <form enctype="multipart/form-data" action="../../llamadas/proceso_cambiarfoto.php" method="post">
                                <input type="file" name="foto">
                                <input type="hidden" name="usuario" value="<?=$_SESSION['usuario']?>">
                                <button type="submit">Actualizar Foto</button>
                            </form>
                            </td>
                            
                        </tr>
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
                    <a href="../../llamadas/proceso_eliminaruser.php?usuario=<?=$_SESSION['usuario']?>">Borrar Cuenta</a>
<?php                }
     ?>       
          </div>
        </form>
      </div>
</body>
</html>