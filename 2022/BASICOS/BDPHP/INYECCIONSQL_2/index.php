<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertando Registro PHP-MYSQL</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>Insercion De Registros<br> En PHP-MYSQL</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> saariel115@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +504 902-8665</p>
            </section>
        </section>
        <form action="Insercion.php" method="POST" class="form_contact">
            <center><h4>Introduce Datos A Guardar En La Base de Datos</h4></center>
            <div class="user_info">
                <label for="codigoArticulo">Codigo del Articulo: </label>
                <input type="text" id="codigoArticulo" name="codigoArticulo" placeholder = "Digite el codigo Articulo del Articulos">
                
                <label for="Seccion">Seccion del Articulo: </label>
                <input type="text" id="Seccion" name="Seccion" placeholder = "Digite la Seccion del Articulos">

                <label for="NombreArticulo">Nombre del Articulo: </label>
                <input type="text" id="NombreArticulo"name ="NombreArticulo" placeholder = "Digite el Nombre del Articulo">

                <label for="FechaArticulo">Fecha de Importacion del Articulo: </label>
                <input type="text" id="FechaArticulo" name="FechaArticulo" placeholder="Digite la Fecha del Articulo">

                <label for="PaisOrigen">Pais de Origen del Articulo: </label>
                <input type="text" id="PaisOrigen" name="PaisOrigen" placeholder="Digite el Origen del Articulo">

                <label for="Precio">Precio del Articulo: </label>
                <input type="text" id="Precio" name="Precio" placeholder="Digite el Precio del Articulo">

                <input type="submit" value="Enviar Datos" id="btnSend">
                <input type="button" value="Volver Al Menu" id="btnVolver" onclick=" location.href='menuOpcions.php'">                
            </div>
        </form>
    </section>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>