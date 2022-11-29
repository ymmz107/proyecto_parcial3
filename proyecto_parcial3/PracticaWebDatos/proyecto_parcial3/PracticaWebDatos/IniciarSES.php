
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $correo_electronico = $_POST["correo_electronico"];
    $contrasena = $_POST["contrasena"];
    

    $sql = "INSERT INTO crear_cuenta (nombre, usuario, correo_electronico, contrasena)". 
    "VALUES ('".$nombre."', '".$usuario."', '".$correo_electronico."', '".$contrasena."')";

    if($conexion->query($sql) === TRUE){
        echo "Inicio de sesion con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>
</body>
</html>