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
    <?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $gametag = $_POST["gametag"];
    $correo_electronico = $_POST["correo_electronico"];
    $contrasena = $_POST["contrasena"];
    $pais = $_POST["pais"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    $sql = "INSERT INTO usuariogp (nombre, gametag, correo_electronico, contrasena, pais, fecha_nacimiento)". 
    "VALUES ('".$nombre."', '".$gametag."', '".$correo_electronico."', '".$contrasena."', '".$pais."', '".$fecha_nacimiento."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>
</body>
</html>
