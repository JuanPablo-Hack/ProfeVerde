<?php 
	$conexion=mysqli_connect('localhost','root','','sensores')

?>

<!DOCTYPE html>
<html>
<head>
	<title>Prueba de datos</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta http-equiv="Refresh" content="5;url=prueba.php">
</head>
<body>
	<div id="main-container">
		<table>
		<tr>
			<td>Id</td>
			<td>Volataje</td>
			<td>Corriente</td>
			<td>Fecha</td>
		</tr>
		<?php 
			$sql="SELECT * FROM valores";
			$resultado=mysqli_query($conexion,$sql);
			while ($mostar=mysqli_fetch_array($resultado)) {
				
			
		?>
		<tr>
			<td><?php echo $mostar['id']; ?></td>
			<td><?php echo $mostar['voltaje']; ?></td>
			<td><?php echo $mostar['corriente']; ?></td>
			<td><?php echo $mostar['fecha']; ?></td>
		</tr>
		<?php 
			}
		 ?>
	</table>
	<br><br>
	<a href="index.html" id="Botton">Graficas</a>
</div>
</body>
</html>