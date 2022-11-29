<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamborghini Mexico</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        body{
            background-image: url("img/lambofond1.jpg");
            background-repeat: no-repeat;
        }

        .eslogan, .descripcion{
            color: gold;
        }

        .container{
           margin: 0px;
           padding-top: 250px;
        }

        .eslogan{
            font-size: 60px;
            margin-left: 210px;  /* 38px recto*/
        }

        .descripcion{
            font-size: 20px;
            padding-left: 40px; 
        }

        button{
            margin-left: 400px;

        }
        button{
            margin-left: 158px;

        }
        
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="container_title">
        <h1 class="eslogan">
            Lamborghini
        </h1>
        </div>
        <div class="w-33">
  <button>  
    <a href="autosDisp.php"><button type="button" class="btn btn-success">Ver autos disponibles</button></a>
  </button>
</div>
        <p class="descripcion">
         <br><br>
          <br> 
        </p>
        <a href="registrarDatos.php"><button type="button" class="btn btn-success">Registrarse</button></a>
         <a href="iniciarSesion.php"><button type="button" class="btn btn-success">Iniciar Sesion</button></a>
         
        </div>


    <script src="js/bootstrap.js"></script>
</body>
</html>