<!-- CQ 
Listar notas
-->
<?php
    require('../../controlador/conexion.php');
    $conn = conectar();
  //  $id = $_REQUEST['id'];
?>
<div class="notas-button-new-container">
    <button class="notas-button-new" type="button" onclick="window.location.href='notas.php?action=nuevo'">
        Nuevo
    </button>
</div>
<div class = "list-group">
<?php
    $usr = $_SESSION['usuario'];
    foreach (listarNotas($usr, $conn) as $key => $value) {
?>
    <!-- <a href = "#" class = "list-group-item active"> -->
<?php
    
    if( isset($_REQUEST['id']) && $_REQUEST['id']== $value[0]) {
?>
   <a href = "notas.php?action=editar&id=<?=$value[0]?>" class = "list-group-item active">
<?php
    }
    else {
?>
    <a href = "notas.php?action=editar&id=<?=$value[0]?>" class = "list-group-item">
<?php
    }
?>
      <h4 class = "list-group-item-heading"><?=$value[2]?></h4>
      <p class = "list-group-item-text"><?=$value[3]?></p>
   </a>
<?php
}
?>
</div>