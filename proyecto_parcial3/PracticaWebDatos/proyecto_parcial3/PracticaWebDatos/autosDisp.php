<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos Disponibles</title>
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
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

    <h1 class="text" >Autos Disponibles</h1>
        
    
    <div class="contenedor">

    <div class="card"  style="width: 18rem;">
        <img src="img/svja.jpg" class="card-img-top" alt="Lambo">
    <div class="card-body">
        <h5 class="card-title">Lamorghini Aventador SVJ</h5>
        <p class="card-text">El indomable motor de 12 cilindros del Aventador SVJ se distingue por la excelencia de su diseño y por la avanzada tecnología de los materiales. Con sus 770 CV de potencia a 8500 rpm
             y una aceleración de 0 a 100 km/h en 2,8 segundos, el Aventador SVJ regala emociones de conducción únicas y nunca antes experimentadas.</p>
             <form action="https://configurator.lamborghini.com/configurator/presets/MBV-22073-2023?lang=spa&country=mx">
        <input type="submit" value="Ir a configurador" />
</form>    
    </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="img/urusdisp.jpg" class="card-img-top" alt="Lambo">
    <div class="card-body">
        <h5 class="card-title">Lamorghini Urus</h5>
        <p class="card-text">El nuevo Urus mide 5,122 mm de largo, 2,016 mm de ancho y 1,638 mm de alto. Eso es más largo, ancho y bajo que el Mercedes GLE coupé. Su distancia entre ejes
             también es mayor a la de sus rivales con 3,003 mm, permitiéndole tener un excelente espacio en el interior.</p>
             <form action="https://configurator.lamborghini.com/configurator/presets/MBV-24703-2023?lang=spa&country=mx">
        <input type="submit" value="Ir a configurador" />
</form>    </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="img/stodisp.jpg" class="card-img-top" alt="Lambo">
    <div class="card-body">
        <h5 class="card-title">Lamborghini Huracán STO</h5>
        <p class="card-text">El Lamborghini Huracán STO cuenta con 640 caballos de potencia y 43 kilos 
            menos que el Huracán Performante. Concebido como un coche de circuito apto para la carretera abierta,
             en el Huracán más radical de la gama destacan su potente sonido y unos tactos muy directos.​</p>
             <form action="https://configurator.lamborghini.com/configurator/presets/MBV-22363-2023?lang=spa&country=mx">
        <input type="submit" value="Ir a configurador" />
</form>
    </div>
    </div>

    
    </div>  
    

    <script src="js/bootstrap.js"></script>
</body>
</html>