<?php
if ($_POST) {
    if (isset($_POST['nombre']) && isset($_POST['mail']) && isset($_POST['codigocurso']) ) {
        
        $name=$_POST['nombre'];
        $email=$_POST['mail'];
        $codcourse=$_POST['codigocurso'];

        
        $conn= new mysqli('localhost','root','','base1');
        if ($conn->connect_error) {
            echo 'Error en la conexion '. $conn->connect_error;
        }
        
        
        $sql_insert="INSERT INTO alumnos values(null,'$name','$email','$codcourse')";
        $conn->query($sql_insert);
        if($conn->error){
            echo 'Ocurrio un error ----> '.$conn->error;
        }else {
            header('Location: lista.php?succeed_message=Usuario registrado!');

        }
    }else {
        header('Location: index.php?error_message=Ingrese todos los datos!');
    }
}
?>