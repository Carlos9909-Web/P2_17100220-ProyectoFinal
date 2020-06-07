<?php
include 'conexion.php';
$Usuario = $_POST['usuario'];
$Clave = $_POST['clave'];

//conectar a la base de datos por procedimientos
$consulta = "SELECT * FROM usuarios WHERE (usuario='$Usuario' || email='$Usuario') && clave='$Clave'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);

if($filas>0){
    //Redireccionar a otra pagina
    header("location: ../html/Formulario.php");
}
else{
    echo '<script>
          alert("Error de autenticacion");
          window.history.go(-1);
          </script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);
