<!-- Christian -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Login UTPNotas</title>
</head>
  <body>
    <br>
    <!--contenedor logueo-->
    <div class="div logueo">
      <!--Formulario para logueo -> proceso_logueo.php-->
        <form action="../../llamadas/proceso_logueo.php" method="post">
          <div class="imgcontenedor">
            <a href="/utpnotas/">
              <img src="../../imagenes/logo.png" class="logo">
            </a>
          </div>
         <!--Contenedor: label user,contraseña y envio-->
         <div class="container">
            <label><b>Usuario</b></label>
            <input type="text" placeholder="Ingrese el nombre de usuario" name="usuario" required>

            <label><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña" required>                
            <button type="submit" value="Aceptar" >Login</button>
              <center>
                <a href="registrar.php">Registrarse</a>
              </center>
         </div>    
        </form>
      </div>
  </body>
</html>