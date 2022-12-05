<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamborghini Urus</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    
    <style>
        
        body{
            background-image: url("img/lambofond1.jpg");
            background-repeat: no-repeat;
        }
       
        h1{
            padding-top: 0.5em;
            text-align: center;
        }
        

        .contenedor {
            display: flex;
        }
        .card {
  ...
  margin: 0 auto;
}
.contenedor {
  ...
  display: flex;
  justify-content: center;
}

    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

    <h1 class="text" >Lamborghini Urus</h1>
        
    
    <div class="contenedor">

    <div class="card"  style="width: 18rem;">
        <img src="img/urusdisp.jpg" class="urus"  alt="Lambo">
    <div class="card-body">
        <h5 class="card-title">Lamorghini Urus</h5>
        <p class="card-text">Combustible	Gasolina
Cilindrada:	3996 cc
Potencia:	650/6000 hp/rpm
Torque:	627/2250-4500 lb·pie/rpm
Cilindros:	8 en V
Válvulas:	32
Alimentación:	inyección directa turbo intercooler
Sistema start / stop:	no</p>
             <form action="https://configurator.lamborghini.com/configurator/presets/MBV-24703-2023?lang=spa&country=mx">
        <input type="submit" value="Ir a configurador" />
        <a href="compraRealizada.php"><button type="button" class="btn btn-success">Comprar ya</button></a>
</form>   
 </div>
 



    <script src="js/bootstrap.js"></script>
</body>
</html>