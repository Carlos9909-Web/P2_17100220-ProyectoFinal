<?php
include '../php/conexion.php';
$sql="SELECT id, tipo, marca, modelo, numSerie, calibre from registro";
$result=mysqli_query($conexion,$sql);
?>

<div class="row">
    <div class="col-sm-12"></div>
    <div class="col-sm-12">
        <label>Buscador</label>
        <select id="buscadorvivo" class="form-control input-sm">
            <option value="0">Selecciona uno</option>
            <?php
            while($ver=mysqli_fetch_row($result)):
            ?>
            <option value="<?php echo $ver[0] ?>">
                <?php echo $ver[2]." ".$ver[4] ?>
            </option>

            <?php endwhile; ?>
        </select>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#buscadorvivo').select2();

        $('#buscadorvivo').change(function(){
            $.ajax({
                type:"POST",
                data: 'valor='+$('#buscadorvivo').val(),
                url:'../php/crearsession.php',
                success:function(r){
                    $('#tabla').load('../componentes/tabla.php');
                }
            });
        });
    });
</script>