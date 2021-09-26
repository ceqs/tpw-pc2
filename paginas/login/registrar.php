<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>RegistrarUsuario</title>
</head>
<body>

    <!--contenedor logueo-registro -->
    <div class="div logueo">
      <!--Formulario para registro -> proceso_registrouser.php-->
        <form enctype="multipart/form-data" action="../../llamadas/proceso_registrouser.php" method="post">
          <div class="imgcontenedor">
            <img src="../../imagenes/logo.png"  class="logo">
          </div>
         <!--Contenedor: label user,contraseña,nombreC,correo y envio-->
         <div class="container">
            <h1>Registro</h1>
            <label><b>Usuario</b></label>
            <input type="text" placeholder="Ingrese el nombre de usuario" name="usuario" required>

            <label><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña" required>                
            
            <label><b>Nombre Completo</b></label>
            <input type="text" placeholder="Ingrese su nombre completo" name="nomC" required>                

            <label><b>Correo</b></label>
            <input type="email" placeholder="Ingrese su correo" name="correo" required>      
            
            <label><b>Foto</b></label>
		    <input type="file" name="foto"><br>
            <button type="submit">Registro</button>
              <center>
                <a href="login.php">Volver a logueo</a>
              </center>
         </div>    
        </form>
      </div>
</body>
</html>