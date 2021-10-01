<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <script src="../../js/script.js"></script>
    <title>RegistrarUsuario</title>
</head>
  <body class="login-body">
      <form class='login-form' enctype="multipart/form-data" action="../../llamadas/proceso_registrouser.php" method="post">
      <div class="imgcontenedor">
        <a href="../../">
          <img src="../../imagenes/logo.png" class="logo">
        </a>
      </div>
      <br><br>
      <div class="flex-row">
        <label for="username"><b>Usuario: &nbsp;&nbsp;&nbsp;</b></label>
        <input id="username" class="lf--input" type="text" placeholder="Ingrese el nombre de usuario" name="usuario" required>
      </div>
      <div class="flex-row">
        <label for="password"><b>Password: &nbsp;&nbsp;&nbsp;</b></label>
        <input id="password" class="lf--input" type="password" placeholder="Ingrese su contraseña" name="contraseña" required>
      </div>
      <div class="flex-row">
        <label for="nombres"><b>Nombre completo: &nbsp;&nbsp;&nbsp;</b></label>
        <input id="nombres" class="lf--input" type="text" placeholder="Ingrese su nombre completo" name="nomC" required>
      </div>
      <div class="flex-row">
        <label for="username"><b>Correo: &nbsp;&nbsp;&nbsp;</b></label>
        <input id="username" class="lf--input" type="email" placeholder="Ingrese su correo" name="correo" required>
      </div>
      <div class="flex-row">
        <label for="foto"><b>Foto: &nbsp;&nbsp;&nbsp;</b></label>
        <input id="foto" class="lf--input" type="file" name="foto">
      </div>
      <input class="lf--submit" type="submit" value="Registrarse">
    </form>
    <a class='lf--forgot' href="login.php">Volver a login</a>
  </body>
</html>