<?php
include('../common/utils.php');
$user = $_POST["usuario"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Incio</title>
</head>
<body>
    <h1>Inicio</h1>
    <div>
    <?php echo 'Bienvenido: ' .strtoupper($_POST["usuario"]);?>
    </div>
    <label> <b>Usuario: </b><?php echo $user; ?></label>
    <div>
    
    </div>
    <div>
    <a href="../index.php">Cerrar seciónn</a>
    </div>
</body>
</html>