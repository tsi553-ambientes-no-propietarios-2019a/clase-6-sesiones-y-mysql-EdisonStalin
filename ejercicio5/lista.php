<?php 

	$conexion=mysqli_connect('localhost','root','','base1');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
	<h1> <center>Lista de Alumnos</center></h1>
</head>
<body>

	<table>
		<tr>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Mail</td>
			<td>Codigo_Curso</td>
		</tr>

		<?php
		$sql = "SELECT * FROM alumnos";
		$result=mysqli_query($conexion,$sql);
		while($mostrar= mysqli_fetch_array($result)){
			?>
		

		<tr>
			<td><?php echo $mostrar['Codigo']?></td>
			<td><?php echo $mostrar['Nombre']?></td>
			<td><?php echo $mostrar['Mail']?></td>
			<td><?php echo $mostrar['CodigoCurso']?></td>
			
		</tr>
		<?php
		}
		?>
		
	</table>

</body>
</html>