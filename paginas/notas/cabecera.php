<!-- Christian 
usuario, y cerrar session.
-->

<div class="wrapper">
	
<div class="titu"> <a href="../notas/notas.php"><img src="../../imagenes/logo.png" class="logo"></a></div>
        
        <nav>
            <h3>Bienvenido: <?=$_SESSION['usuario']?> </h3>
            <a href="../../llamadas/proceso_cerrar.php">Cerrar Sesión</a>
            <a href='../cuenta/cuenta.php'>Mi Cuenta</a>
        </nav>
    
</div>

