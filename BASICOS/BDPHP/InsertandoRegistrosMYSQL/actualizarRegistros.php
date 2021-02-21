<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizando Registro PHP-MYSQL</title>
    <link rel="stylesheet" href="css/estilos3.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>Actualizacion De Registros<br> En PHP-MYSQL</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> saariel115@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +504 902-8665</p>
            </section>
        </section>

        </form>
            <?php
                require("php/conexion.php");

                $codigoArticulo = $_POST["codigoArticulo"];

                $consultaBusqueda = "SELECT COD_ART , SECCION , NOMBRE_ARTICULO , FECHA , PAIS_DE_ORIGEN , PRECIO  FROM ARTíCULOS WHERE COD_ART = $codigoArticulo";


                $resultado = mysqli_query($conexionBD,$consultaBusqueda);
                while(($filaConsulta=mysqli_fetch_array($resultado , MYSQLI_ASSOC))){

                    echo "<form action='procesandoActualizar.php' method='POST' class='form_contact'>";
                    echo "<center><h4 style='text-align:center;'>Impresion de Registros en PHP con MYSQL</h4></center>";
                    echo "<div class='user_info'>";

                        echo "<label for='codigoArticulo'>Codigo del Articulo: </label>";
                        echo "<input type='text' id='codigoArticulo' name='codigoArticulo' placeholder = 'Digite el codigo Articulo del Articulos' value = '" . $filaConsulta['COD_ART'] . "'>";

                        echo "<label for='Seccion'>Seccion del Articulo: </label>";
                        echo "<input type='text' id='Seccion' name='Seccion' placeholder = 'Digite la Seccion del Articulos' value = '" . $filaConsulta['SECCION'] . "'>";

                        echo "<label for='NombreArticulo'>Nombre del Articulo: </label>";
                        echo "<input type='text' id='NombreArticulo'name ='NombreArticulo' placeholder = 'Digite el Nombre 
                        del Articulo' value = '" . $filaConsulta['NOMBRE_ARTICULO'] . "'>";

                        echo "<label for='FechaArticulo'>Fecha de Importacion del Articulo: </label>";
                        echo "<input type='text' id='FechaArticulo' name='FechaArticulo' placeholder='Digite la Fecha del Articulo' value = '" . $filaConsulta['FECHA'] . "'>";

                        echo "<label for='PaisOrigen'>Pais de Origen del Articulo: </label>";
                        echo "<input type='text' id='PaisOrigen' name='PaisOrigen' placeholder='Digite el Origen del Articulo' value = '" . $filaConsulta['PAIS_DE_ORIGEN'] . "'>";

                        echo "<label for='Precio'>Precio del Articulo: </label>";
                        echo "<input type='text' id='Precio' name='Precio' placeholder='Digite el Precio del Articulo' value = '" . $filaConsulta['PRECIO'] . "'>";
                        
                        echo "<input type='submit' value='Actualizar Datos' id='btnSend'>";
                        echo "<input type='button' value='Volver Al Menu' id='btnVolver' onclick=' location.href='menuOpcions.php''>";
                    echo "</div>";
                }
            ?>
        
    </section>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script3.js"></script>
</body>
</html>