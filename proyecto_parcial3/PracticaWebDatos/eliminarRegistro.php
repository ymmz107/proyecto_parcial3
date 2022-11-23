<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta eliminada</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php include 'menu.php'; ?>
    
</body>
</html>


<?php

    include 'conexion.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM usuariogp WHERE id=" . $id;

    if($conexion->query($sql) === TRUE){
        echo "Se eliminó el registro con ID " .$id. "";
        echo "<a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Ocurrió un error: " . $conexion->error ."<br>";
        echo "<a href='consultarDatos.php'>Regresar</a>";
    }

?>