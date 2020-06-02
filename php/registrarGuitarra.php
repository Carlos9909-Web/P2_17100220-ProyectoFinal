<?php
include 'conexion.php';

$tipo= $_POST["tipo"];
$marca= $_POST["marca"];
$modelo= $_POST["modelo"];
$num_serie= $_POST["numserie"];
$calibre= $_POST["calibre"];
//consulta para insertar
$consulta = "INSERT INTO registro(tipo, marca, modelo, numSerie, calibre) VALUES ('$tipo', '$marca', '$modelo', '$num_serie','$calibre')";

//Verificar numeros de series repetidos
$verificar= mysqli_query($conexion, "SELECT * FROM registro WHERE numSerie='$num_serie'");

if(mysqli_num_rows($verificar)>0){
    echo '<script>
          alert("El numero de serie ya existe");
          window.history.go(-1);
          </script>';
    //Para que salga del php
    exit;
}

//Ejecutar consulta
echo $resultado = mysqli_query($conexion, $consulta);

//cerrar conexion
mysqli_close($conexion);