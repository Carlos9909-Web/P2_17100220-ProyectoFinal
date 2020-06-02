<?php
include 'conexion.php';

$id = $_POST["id"];
$tipo= $_POST["tipo"];
$marca= $_POST["marca"];
$modelo= $_POST["modelo"];
$num_serie= $_POST["numserie"];
$calibre= $_POST["calibre"];

$sql= "UPDATE registro set tipo='$tipo', marca='$marca', modelo='$modelo', numSerie='$num_serie', calibre='$calibre' WHERE id='$id'";
echo $result=mysqli_query($conexion,$sql);
?>