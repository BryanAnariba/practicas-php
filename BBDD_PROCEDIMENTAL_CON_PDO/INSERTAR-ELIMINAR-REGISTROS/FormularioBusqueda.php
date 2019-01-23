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
        <form action="conexionconPDOBBDD.php" method="GET">
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
                    <input type="submit" class="btn btn-outline-light btn-block" value="Enviar Informacion a la BBDD">
                    
                </div>
            </div>
        </form>
        <input onclick="location.href='FormularioBorrarRegistro.php'" type="submit" class="btn btn-outline-light btn-block" value="IR A BORRAR LA INFORMACION">
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>