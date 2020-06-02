<?php 

$conexion=mysqli_connect('localhost','cegc','1234','bdtabla')

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tarea</title>
</head>
<body>
	<br>
	<table border="1">
		<tr>
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
</body>
</html>

