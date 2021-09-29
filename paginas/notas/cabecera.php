<!-- Christian 
usuario, y cerrar session.
-->

<div class="wrapper">
    <div class="titu">
        <a href="../../">
            <img src="../../imagenes/logo.png" class="logo">
        </a>
    </div>
    <nav>
        <a href='../notas/notas.php'>Mis notas</a>
        <a href='../cuenta/cuenta.php'><?=$_SESSION['usuario']?></a>
        <a href="../../llamadas/proceso_cerrar.php">Cerrar Sesión</a>
    </nav>
</div>

