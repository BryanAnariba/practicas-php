<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminado Registros PHP-MYSQL</title>
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>Eliminacion De Registros<br> En PHP-MYSQL</h2>

            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> saariel115@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +504 902-8665</p>
            </section>
        </section>
        <form action="Eliminacion.php" method="POST" class="form_contact">
            <center><h4>Introduce Datos A Eliminar En La Base de Datos</h4></center><br><br><br><br><br><br><br>
            <div class="user_info">
            <?php
                require("php/conexion.php");
                if(isset($_POST["codigoArticulo"])){
                    $codigoArticulo = $_POST["codigoArticulo"];
                
                    if($codigoArticulo == null){
                        echo "";
                    }else{
                        $consultaEliminacion = "DELETE FROM ARTíCULOS WHERE COD_ART = $codigoArticulo";
                        $respuesta = mysqli_query($conexionBD , $consultaEliminacion);
                        if(mysqli_affected_rows($conexionBD)==0){//si la cantidad de registros eliminados es quenotifique un error
                            echo "<h2>No Hay Registros Que Coincidan Con el Criterio del Codigo Del Articulo";
                        }else {
                            echo "<h2>Registro Eliminado.</h2>";
                        }
                    }
                }
 
                mysqli_close($conexionBD);
                ?>
                <label for="codigoArticulo">Codigo del Articulo: </label>
                <input type="text" id="codigoArticulo" name="codigoArticulo" placeholder = "Digite el codigo Articulo del Articulo">


                <input type="submit" value="Eliminar Datos" id="btnSend">
                <input type="button" value="Volver Al Menu" id="btnVolver" onclick=" location.href='menuOpcions.php'">                

            </div>
        </form>
    </section>

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script2.js"></script>
</body>
</html>