<?php
include 'conexion.php';
$nombre= $_POST["nombre"];
$email= $_POST["email"];
$usuario= $_POST["usuario"];
$clave= $_POST["clave"];
//consulta para insertar
$consulta = "INSERT INTO usuarios(nombre, usuario, email, clave) VALUES ('$nombre', '$usuario', '$email', '$clave')";

//Verificar usuarios repetidos
$verificar= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'||email='$email'");

if(mysqli_num_rows($verificar)>0){
    echo '<script>
          alert("El usuario/correo ya han sido registrados");
          window.history.go(-1);
          </script>';
    //Para que salga del php
    exit;
}

//Ejecutar consulta
$resultado = mysqli_query($conexion, $consulta);
if($resultado==false){
    echo '<script>
          alert("Error al registrarse");
          window.history.go(-1);
          </script>';
} else{
    //Redireccionar a otra pagina
    echo '<script>
          alert("Ingrese con su nueva cuenta para acceder al registro");
          window.history.go(-1);
          </script>';
    header("location: ../html/Login.html");
}
//cerrar conexion
mysqli_close($conexion);