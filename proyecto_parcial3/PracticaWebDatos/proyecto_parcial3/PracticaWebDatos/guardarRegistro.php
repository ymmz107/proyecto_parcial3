<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $usario = $_POST["usuario"];
    $correo_electronico = $_POST["correo_electronico"];
    $contrasena = $_POST["contrasena"];
    $pais = $_POST["pais"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];

    $sql ="UPDATE crear_cuenta SET nombre='".$nombre."', usuario = '".$usuario."', correo_electronico = '".$correo_electronico."', contrasena = '".$contrasena."', pais = '".$pais."', fecha_nacimiento = '".$fecha_nacimiento."'"."WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }
    $conexion->close();

?>