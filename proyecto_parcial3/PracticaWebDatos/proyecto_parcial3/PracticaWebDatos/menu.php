<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  a{
    color: white; 
  }

  a:hover{
    color: white;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg" style='background-color: black;'>
        <a class="navbar-brand" href="index.php">Lamborghini</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto a empresa </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Concecionarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Comunidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarDatos.php">Registarte</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Opciones
              </a>
              <div class="dropdown-menu">

                <a class="dropdown-item" href="registrarDatos.php">Registrar</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="consultarDatos.php">Consultar</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="GET" action="resultadoBusqueda.php">
            <input name="termino" class="form-control mr-sm-2" type="search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
    </nav>  
</body>
</html>
