<!-- Christian 
usuario, y cerrar session.
-->
<?php
        session_start();
    ?>
<div class="wrapper">
	
<div class="titu"> <a href="../notas/notas.php">UTP_Notas</a></div>
        
        <nav>
            <h3>Bienvenido: <?=$_SESSION['usuario']?> </h3>
            <a href="../../llamadas/proceso_cerrar.php">Cerrar Sesión</a>
            <a href='../cuenta/cuenta.php'>Mi Cuenta</a>
        </nav>
    
</div>

