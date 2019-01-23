<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insersion de registros</title>
    <link rel="stylesheet" href="../../ELIMINANDO-REGISTROS-PHP-MYSQL/css/bootstrap.min.css">
</head>
<body style="background-color:rgba(36,36,36,0.8)">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#" style="color:white;">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#" style="color:white;">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color:white;">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link" style="color:white;" href="#">Disabled</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container" >
        <div class="row">
            <form action="ProcesarInsercion.php" method="POST" style="background-color:rgba(0,204,205); margin-left:auto; margin-right:auto; padding:20px; color:white; font-weight:700;">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="codigoArticulo">Codigo Articulo:</label>
                <input type="text" class="form-control" id="codigoArticulo" name="codigoArticulo" placeholder="Codigo">
                </div>
                <div class="form-group col-md-6">
                <label for="nombreArticulo">Nombre Articulo:</label>
                <input type="text" class="form-control" id="nombreArticulo" name="nombreArticulo" placeholder="Nombre Articulo">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="seccionArticulo">Seccion Del Articulo:</label>
                    <input type="text" class="form-control" name="seccionArticulo" id="seccionArticulo" placeholder="Seccion del Articulo">
                </div>
                <div class="form-group col-md-6">
                    <label for="precioArticulo">Precio Articulo:</label>
                    <input type="text" class="form-control" id="precioArticulo" name="precioArticulo" placeholder="Precio del Articulo">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fechaArticulo">Fecha Del Articulo:</label>
                    <input type="text" class="form-control" name="fechaArticulo" id="fechaArticulo" placeholder="Fecha del Articulo">
                </div>
                <div class="form-group col-md-6">
                    <label for="importadoArticulo">Importado Articulo:</label>
                    <input type="text" class="form-control" id="importadoArticulo" name="importadoArticulo" placeholder="El Importado del Articulo">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="origenArticulo">Origen Del Articulo:</label>
                    <input type="text" class="form-control" name="origenArticulo" id="origenArticulo" placeholder="Origen del Articulo">
                </div>
                <div class="form-group col-md-6">
                    <label for="fotoArticulo">Foto Articulo:</label>
                    <input type="text" class="form-control" id="fotoArticulo" name="fotoArticulo" placeholder="El Foto del Articulo">
                </div>
            </div>
            <button type="submit" name="registrar" class="btn btn-danger btn-lg btn-block">Registrar Persona</button>
            </form>
        </div>
    </div>
    

    <script src="../../ELIMINANDO-REGISTROS-PHP-MYSQL/js/jquery.min.js"></script>
    <script src="../../ELIMINANDO-REGISTROS-PHP-MYSQL/js/bootstrap.min.js"></script>
</body>
</html>