<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse | Lamborghini</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        body{
            background-image: url("img/Lambofond1.jpg");
            background-repeat: no-repeat;
        }

        h1{
            text-align: center;
        }

        .title{
            text-align: center;
            color: white;
        }

        .form{
            background-color: "img/Lambofond1.jpg";
            margin: auto;
            width: 90%;
            max-width: 700px;
            padding: 4.5em 3em;
            border-radius: 10px;
            box-shadow: 0 5px 10px -5px rgb(0 0 0 / 30%)
        }

        label{
            font-size: 20px;
        }

    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">Iniciar sesion</h1><hr>
                <form method="post" action="guardarDatos.php" class="form">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">
                    </div>

                    <div class="form-group">
                        <label for="">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                    </div>

                    <div class="form-group">
                        <label for="">Correo Electronico:</label>
                        <input type="email" class="form-control" name="correo_electronico" placeholder="Correo Electronico">
                    </div>

                    <div class="form-group">
                        <label for="">Contraseña:</label>
                        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
                    </div>

                    <div class="form-group">
                        <label for="">Pais:</label>
                        <input type="text" class="form-control" name="pais" placeholder="Pais">
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>
                    
                    <div>
                        <input type="submit" class="btn btn-primary enviar" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
