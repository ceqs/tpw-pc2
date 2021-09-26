<!-- CQ 
Listar notas
-->
<?php
    require('../../controlador/conexion.php');
    $conn = conectar();
?>

<div class = "list-group">
<?php
    foreach (listarNotas($conn) as $key => $value) {
?>
    <!-- <a href = "#" class = "list-group-item active"> -->
   <a href = "#" class = "list-group-item">
      <h4 class = "list-group-item-heading"><?=$value[2]?></h4>
      <p class = "list-group-item-text"><?=$value[3]?></p>
   </a>
<?php
}
?>
</div>