<?php
    require("php/conexion.php");
    $codigoArticulo = $_POST["codigoArticulo"];
    $seccionArticulo = $_POST["Seccion"];
    $nombreArticulo = $_POST["NombreArticulo"];
    $fechaArticulo = $_POST["FechaArticulo"];
    $paisArticulo = $_POST["PaisOrigen"];
    $precioArticulo = $_POST["Precio"];

    if($codigoArticulo == null && $seccionArticulo == null && $nombreArticulo == null && $fechaArticulo == null && $paisArticulo == null && $precioArticulo == null){
        echo "Error en la insersion";
    }else{
        $consultaInsert = "INSERT INTO ARTíCULOS (COD_ART , SECCION, NOMBRE_ARTICULO , FECHA ,PAIS_DE_ORIGEN ,PRECIO) VALUES 
        ($codigoArticulo,'$seccionArticulo','$nombreArticulo','$fechaArticulo','$paisArticulo','$precioArticulo')";
    }


    $respuestaConsulta = mysqli_query($conexionBD , $consultaInsert);


    /*if($respuestaConsulta == false){
        echo "Error en la insersion";
    }*/
    mysqli_close($conexionBD);
    header ("Location: index.php");
    

?>
