<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar suscripcion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        body{
            background-color: white;
        }
    </style>
</head>
<body>

    <?php
      include 'conexion.php';
      $sql = "select * from usuariogp";
      $datos = $conexion->query($sql);

    ?>

    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Gametag</th>
                            <th>Correo Electronico</th>
                            <th>Contraseña</th>
                            <th>Pais</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 
                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["gametag"]; ?></td>
                            <td><?php echo $row["correo_electronico"]; ?></td>
                            <td><?php echo $row["contrasena"]; ?></td>
                            <td><?php echo $row["pais"]; ?></td>
                            <td><?php echo $row["fecha_nacimiento"]; ?></td>
                            <td>
                                <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                                <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>