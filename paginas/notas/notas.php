<?php		
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header("location:../login/login.php");
    }
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
            include 'cabecera.php';
        ?>
    </header>
    <section>
        <?php
            include 'listado.php';
        ?>
    </section>
    <aside>
        <?php
            include "texto.php";
        ?>
    </aside>
    
    <!-- manejar estado nuevo, editar, borrar 
    afecta al listado y texto

    Cuando es editar viajas así: http://localhost/utpnotas/paginas/notas/notas.php
    Cuando es editar viajas así: http://localhost/utpnotas/paginas/notas/notas.php?action=editar&id=1
    Cuando es editar viajas así: http://localhost/utpnotas/paginas/notas/notas.php?action=nuevo
    Cuando es editar viajas así: http://localhost/utpnotas/paginas/notas/notas.php?action=delete&id=1
-->
</body>
</html>