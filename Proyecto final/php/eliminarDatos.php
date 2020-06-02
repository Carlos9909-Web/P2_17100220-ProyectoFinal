<?php
    include 'conexion.php';

    $id = $_POST["id"];
    $sql="DELETE from registro where id='$id'";
    echo $result= mysqli_query($conexion,$sql);
?>