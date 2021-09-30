<!-- Cesar 
el estado indica la accion
Grabar y actualizar
-->
<div class="notas">
    <div class="text-header-buttons">
        <?php
        if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'editar') {
        ?>
        <button class="notas-button-delete" type="button" onclick="window.location.href='../../llamadas/proceso_eliminarnota.php?id=<?=$_REQUEST['id']?>'">
            Eliminar
        </button>
        <button class="notas-button-save" type="button" onclick="document.getElementById('form-id').submit();">
        <?php
        }
        else {
        ?>
        <button class="notas-button-save" type="button" onclick="document.getElementById('form-id').submit();">
        <?php
        }
        ?>
            Guardar
        </button>
    </div>
    <?php
        if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'editar') {
            foreach (buscarNota($_REQUEST['id'], $conn) as $key => $value) {
    ?>
    <form id="form-id" method="POST" action="../../llamadas/proceso_actualizarnota.php">
        <input type="text" name="title" id="title" value="<?=$value[2]?>">
        <hr>
        <textarea name="text" id="text" cols="100" rows="10"><?=$value[3]?></textarea>
    <?php
            }
        }
        else {
    ?>
    <form id="form-id" method="POST" action="../../llamadas/proceso_agregarnota.php">
        <input type="text" name="title" id="title">
        <hr>
        <textarea name="text" id="text" cols="100" rows="10"></textarea>
    <?php
        }
    ?>
        <input type="hidden" name="id" value="<?=$_REQUEST['id']?>">
    </form>
</div>