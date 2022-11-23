<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cuenta</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        .form{
            background-color: #fff;
            margin: auto;
            width: 90%;
            max-width: 700px;
            padding: 4.5em 3em;
            border-radius: 10px;
            box-shadow: 0 5px 10px -5px rgb(0 0 0 / 30%)
        }

        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include 'conexion.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM usuariogp WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarRegistro.php" class="form">

                <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre"]; ?>" type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>

                <div class="form-group">
                    <label for="">Gametag:</label>
                    <input value="<?php echo $registro["gametag"]; ?>" type="text" class="form-control" name="gametag">
                </div>

                <div class="form-group">
                    <label for="">Correo Electronico:</label>
                    <input value="<?php echo $registro["correo_electronico"]; ?>" type="text" class="form-control" name="correo_electronico">
                </div>

                <div class="form-group">
                    <label for="">Contraseña:</label>
                    <input value="<?php echo $registro["contrasena"]; ?>" type="password" class="form-control" name="contrasena">
                </div>

                <div class="form-group">
                    <label for="">Pais:</label>
                    <input value="<?php echo $registro["pais"]; ?>" type="text" class="form-control" name="pais">
                </div>

                <div class="form-group">
                    <label for="">Fecha de nacimiento:</label>
                    <input value="<?php echo $registro["fecha_nacimiento"]; ?>" type="date" class="form-control" name="fecha_nacimiento">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary" value="Registrar">
                    <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                </div>

                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>
