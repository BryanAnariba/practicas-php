<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/png" href="imagen.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body style="background-image: url(wallpaper.jpg); ">
<h1 style="text-align:center; color:white;">Formulario De Ingreso Articulos.</h1>
    <div class="col-lg-6" style="margin-left:auto; margin-right:auto;">
        <form action="PrcesoEliminarRegistro.php" method="GET">
            <div class="card text-center" style="background-color:#282828; opacity:0.9;">
                <div class="card-body" style="color:white; font-size:15px;">
                    <h4>Datos del Articulo.</h4>
                    <p>Descripcion del Articulo.</p>
                    <div class="form-group">
                        <label for="codigoArticulo" style="font-size:18px; font-weight:700;">Digite el Codigo del Articulo:</label><br>
                        <input type="text" class="form-control" placeholder="Codigo Articulo" name="codigoArticulo" id="codigoArticulo">
                    </div>
                    <input type="submit" class="btn btn-outline-light btn-block" value="Eliminar Informacion a la BBDD">
                </div>
            </div>
        </form>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>