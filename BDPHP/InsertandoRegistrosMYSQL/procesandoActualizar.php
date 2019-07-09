<?php
    require("php/conexion.php");

    $codigoArticulo = $_POST["codigoArticulo"];
    $seccionArticulo = $_POST["Seccion"];
    $nombreArticulo = $_POST["NombreArticulo"];
    $fechaArticulo = $_POST["FechaArticulo"];
    $paisArticulo = $_POST["PaisOrigen"];
    $precioArticulo = $_POST["Precio"];

    $consultaUpdate = "UPDATE ARTíCULOS SET
                    SECCION = '$seccionArticulo', 
                    NOMBRE_ARTICULO = '$nombreArticulo',
                    FECHA = '$fechaArticulo', 
                    PAIS_DE_ORIGEN = '$paisArticulo',
                    PRECIO = '$precioArticulo' WHERE COD_ART = $codigoArticulo";

    $resultado = mysqli_query($conexionBD , $consultaUpdate);
    mysqli_close($conexionBD);
    header ("Location: busquedaActualizar.php");


?>