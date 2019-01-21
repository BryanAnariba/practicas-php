<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminacion Registro Articulos UNAH</title>
    <link rel="icon" type="image/png" href="imagen.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body style="background-image: url(wallpaper.jpg); ">
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
    <h1 style="text-align:center; color:white;">Formulario De Eliminacion De Articulos.</h1>
    <div class="col-lg-6" style="margin-left:auto; margin-right:auto;">
        <form action="EliminarRegistros.php" method="GET">
            <div class="card text-center" style="background-color:#282828; opacity:0.9;">
                <div class="card-body" style="color:white; font-size:15px;">
                    <h4>Datos del Articulo.</h4>
                    <p>Descripcion del Articulo.</p>
                    <div class="form-group">
                        <label for="codigoArticulo" style="font-size:18px; font-weight:700;">Digite el Codigo del Articulo:</label><br>
                        <input type="text" class="form-control" placeholder="Codigo Articulo" name="codigoArticulo" id="codigoArticulo">
                    </div>
                    <div class="form-group">
                        <label for="nombreArticulo" style="font-size:18px; font-weight:700;">Digite el Nombre del Articulo:</label><br>
                        <input type="text" class="form-control" placeholder="Nombre Articulo" name="nombreArticulo" id="nombreArticulo">
                    </div>
                    <div class="form-group">
                        <label for="seccionArticulo" style="font-size:18px; font-weight:700;">Digite la Seccion del Articulo:</label><br>
                        <input type="text" class="form-control" placeholder="Seccion Articulo" name="seccionArticulo" id="seccionArticulo">
                    </div>
                    <div class="form-group">
                        <label for="precioArticulo" style="font-size:18px; font-weight:700;">Digite el Precio del Articulo:</label><br>
                        <input type="text" class="form-control" placeholder="Precio Articulo" name="precioArticulo" id="precioArticulo">
                    </div>
                    <div class="form-group">
                        <label for="fechaArticulo" style="font-size:18px; font-weight:700;">Digite la Fecha del Articulo:</label><br>
                        <input type="text" class="form-control" placeholder="Fecha del Articulo" name="fechaArticulo" id="fechaArticulo">
                    </div>
                    <div class="form-group">
                        <label for="importadoArticulo" style="font-size:18px; font-weight:700;">Digite si su Articulo es Importado:</label><br>
                        <input type="text" class="form-control" placeholder="Verdadero o Falso" name="importadoArticulo" id="importadoArticulo">
                    </div>
                    <div class="form-group">
                        <label for="origenArticulo" style="font-size:18px; font-weight:700;">Digite Pais de Origen del Articulo:</label><br>
                        <input type="text" class="form-control" placeholder="Pais Origen Articulo" name="origenArticulo" id="origenArticulo">
                    </div>
                    <div class="form-group">
                        <label for="fotoArticulo" style="font-size:18px; font-weight:700;">Digite la Foto Del Articulo:</label><br>
                        <input type="text" class="form-control" placeholder="Foto Articulo" name="fotoArticulo" id="fotoArticulo">
                    </div>
                    <input type="submit" class="btn btn-outline-light btn-block" value="Eliminar Informacion a la BBDD">
                </div>
            </div>
        </form>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>