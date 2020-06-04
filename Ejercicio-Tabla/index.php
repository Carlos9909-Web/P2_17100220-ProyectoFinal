<?php 

$conexion=mysqli_connect('localhost','cegc','1234','bdtabla')

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tarea</title>
	<link rel="stylesheet" type="text/css" href="../Ejercicio-Tabla/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../Ejercicio-Tabla/css/estilos.css">

	<script src="../Ejercicio-Tabla/bootstrap/jquery-3.5.1.min.js"></script>
	<script src="/Ejercicio-Tabla/bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
	<h1 style="font-aling:center">Registro de Guitarras</h1>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover table-condensed table-bordered table-striped">
					<tr class="thead-dark">
						<td>id</td>
						<td>Tipo</td>
						<td>Marca</td>
						<td>Modelo</td>
						<td>Numero de Serie</td>
						<td>Calibre</td>
					</tr>
					<?php 
					$sql="SELECT * from registro";
					$result=mysqli_query($conexion,$sql);
					while($mostrar=mysqli_fetch_array($result)){
						?>
						<tr>
							<td> <?php echo $mostrar['id'] ?> </td>
							<td> <?php echo $mostrar['tipo'] ?> </td>
							<td> <?php echo $mostrar['marca'] ?> </td>
							<td> <?php echo $mostrar['modelo'] ?> </td>
							<td> <?php echo $mostrar['numSerie'] ?> </td>
							<td> <?php echo $mostrar['calibre'] ?> </td>
						</tr>
						<?php 
					}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>

