<?php

/**
* Crear una base de datos en PHPMyAdmin: Para crear una base de datos procedemos a seleccionar la pestaña "Base de datos" e ingresamos 
* como nombre "base1" y presionamos el botón crear.
* Crear una tabla llamada "alumnos" con 4 campos y la siguiente estructura:
*      codigo int auto_increment primary key
*      nombre varchar(50)
*      mail varchar(70)
*      codigocurso int
* Utilizar un formulario para añadir alumnos a la BDD. El formulario debe tener como acción "nuevo.php".
* En la página "lista.php" presentar una tabla con todos los alumnos de la BDD. Al final de cada fila añadir un campo que contenga un link
* que redirija a la página "modificar.php"
* En la página "modificar.php" presentar el formulario que permita modificar la información del alumno seleccionado.
*
*/

?>

<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>
     <h1>Estudiante</h1>

    <form action="nuevo.php" method="post">
    	
    		
        <div>
        <label><i> <b> Nombre: </i> </b></label>
        <input type="text" name="nombre" placeholder="Nombre">
        </div>
        <br>
        <div>
        <label><i> <b> Mail: </i> </b></label>
        <input type="text" name="mail" placeholder="Mail">
        </div>
        <br>
        <div>
        <label><i> <b> CodigoCurso: </i> </b></label>
        <input type="numeric" name="codigocurso" placeholder="CodCurso">
        </div>
        <br>
				<button type="submit" class="btn btn-primary"> Ingresar</button>
		   

    </form>
</body>
</html>
