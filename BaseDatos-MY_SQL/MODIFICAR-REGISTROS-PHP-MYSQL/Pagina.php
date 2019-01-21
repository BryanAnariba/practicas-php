<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Busqueda</title>
    <link rel="stylesheet" href="../../../POO2018/frameworks/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <style>
        body{
            background-image: url("img/fondo pantalla.jpg");
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="col-lg-6" style="margin-left:auto; margin-right:auto; margin-top:100px;">
    <form action="Procesar.php" method="GET" style="">
        <div class="card text-center" style="background-color: #FFCC00;"><!--Agrega una targeta-->
            <div class="card-body" style="color:white; font-size:18px;">
                <h4>Digite El Articulo A Buscar.</h3>
                <div class="form-group">
                    <input type="text" name="articulo" id="articulo" class="form-control form-control-lg" placeholder="Articulo A Buscar:">
                </div>
                <input type="submit" class="btn btn-outline-info btn-block " value="Consultar a la BBDD">
            </div>
        </div>
    </form>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>