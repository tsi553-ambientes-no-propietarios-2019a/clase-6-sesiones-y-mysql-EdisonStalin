<?php
/*
Reescribir el ejemplo anterior configurando el archivo .htaccess (revisar archivo php.ini) para que permita la inclusión automática de scripts y tener una mejor organización de archivos y mayor reutilización de código.
*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio2</title>
	<h1> <center>FACEBOOK</center>  </h1>

</head>
<body>

	<form method="POST" action="htaccess/inicio.php">
		<center>

			<div>
				<label><i> <b> Usuario: </i> </b></label>
				<input type="text" name="usuario" required="required" placeholder="Ingrese Usuario">
			</div>
			 <br> 
			<div>
				
				<label> <i> <b> Contraseña: </i> </b></label> 
				<input type="password" name="Contraseña" required="required" placeholder="Ingrese Contraseña">
			</div>

				<br>
				<button type="submit" class="btn btn-primary"> Ingresar Sesión</button>

		</center>
	</form>



</body>
</html>