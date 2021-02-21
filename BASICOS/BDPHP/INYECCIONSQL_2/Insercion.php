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
        (?,?,?,?,?,?)";
        $resultado = mysqli_prepare($conexionBD , $consultaInsert);
        $exito = mysqli_stmt_bind_param($resultado , "issssi" , $codigoArticulo , $seccionArticulo , $nombreArticulo , $fechaArticulo , $paisArticulo , $precioArticulo);//ojo con issssi es deacuerdo al tipo de dato
        $exito = mysqli_stmt_execute($resultado);

    }
    if($exito == false) {
        echo "<h2>Error Al Ejecutar La Consulta.......!</h2>";
    } else {

    }
    mysqli_stmt_close($resultado);

    mysqli_close($conexionBD);
    header ("Location: index.php");
    

?>
