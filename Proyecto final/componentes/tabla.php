<?php
    session_start();
    include '../php/conexion.php';
?>

<div class="row">
    <div class="col-sm-12">
        <h2 style="background: rgb(48, 8, 8); color:white; padding:10px;">Tabla del Registro</h2>
        <table class="table table-hover table-condensed table-bordered table-sm table-dark table-responsive col-sm-12">
            <tr>
                <td>Tipo</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Numero de Serie</td>
                <td>Calibre</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
                if(isset($_SESSION['consulta'])){
                    if($_SESSION['consulta']>0){
                        $id=$_SESSION['consulta'];
                        $sql="SELECT id, tipo, marca, modelo, numSerie, calibre from registro where id='$id'";
                    }else{
                        $sql="SELECT id, tipo, marca, modelo, numSerie, calibre from registro";
                    }
                }else{
                    $sql="SELECT id, tipo, marca, modelo, numSerie, calibre from registro";
                }

                $result=mysqli_query($conexion,$sql);
                while($ver=mysqli_fetch_row($result)){

                $datos= $ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5];
            ?>

            <tr>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
                <td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>
                 <!-- Boton editar -->
                <td>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>');">
                        <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                        </svg>
                    </button>
                </td>
                 <!-- Boton Eliminar -->
                <td>
                <button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $ver[0] ?>');">
                <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"  xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>
                </button>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>

</div>

