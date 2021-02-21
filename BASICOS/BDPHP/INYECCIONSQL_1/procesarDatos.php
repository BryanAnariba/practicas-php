<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Procesando Datos</title>
    <style>
        body {
            background: url(fondo.jpg) no-repeat center top;
            background-size: cover;
            font-family: sans-serif;
            height: 100vh;
        }
    </style>
</head>
<body>
<?php
    include("connetPHP.php");

    
    /********************************PASOS PARA REALIZAR UNA CONSULTA***********************************/

    //Almacenando el nombre del articulo que viene desde el index en una variable superglobal
    $nombrePais = $_POST["nombrePais"];



    $consultaUno = "SELECT COD_ART , SECCION , NOMBRE_ARTICULO , FECHA , PAIS_DE_ORIGEN , ROUND(PRECIO , 2) AS PRECIO_REDONDEADO FROM ARTíCULOS WHERE PAIS_DE_ORIGEN = ?";


    //APLICANDO PROTECCION DE INYECCION SQL
    $resultado = mysqli_prepare($conexionBaseDatos , $consultaUno);

    $exito = mysqli_stmt_bind_param($resultado , "s" , $nombrePais);//parametro a filtrar $nombrePais 

    /*
        "s" parametro a filtrar s de string
        i parametro a filtrar i de numero
    */

    $exito = mysqli_stmt_execute($resultado);

    if ($exito == false) { //en caso de que $exito no guarde nada
        echo "<h2>Error Al Ejecutar La Consulta.....!</h2>";
    } else {//caso contrario almacenar las variables deacuerdo a la cantidad de valores
        $exito = mysqli_stmt_bind_result($resultado , $codigoArticulo , $seccion , $nombreArticulo , $fecha , $paisOrigen , $precio);

        /*$resultado = mysqli_query($conexionBaseDatos,$consultaUno);*/
        echo "<h2 style='text-align:center;'>Impresion de Registros en PHP con MYSQL</h2>" . "<br>";


        /*-----------------------------IMPRESION DE TODOS LOS REGISTROS EN LA BASE DATOS------------------------------*/
        echo "<center>
            <table>
                <thead>
                    <tr>
                        <th>Codigo Articulo</th>
                        <th>Seccion</th>
                        <th>Nombre Articulo</th>
                        <th>Fecha</th>
                        <th>Pais de Origen</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>";
        while(mysqli_stmt_fetch($resultado)){
            echo    "<tr style='color:black; font-weight:bold;'>
                    <td>" . $codigoArticulo . "</td>
                    <td>" . $seccion . "</td>
                    <td>" . $nombreArticulo . "</td>
                    <td>" . $fecha . "</td>
                    <td>" . $paisOrigen . "</td>
                    <td>" . $precio . "</td>
                </tr>
                </center>";
        }
        echo "</tbody></table>";
        mysqli_stmt_close($resultado);
    }

    




    
    //CERRAR CONEXION PARA OPTIMIZAR RECURSOS
    mysqli_close($conexionBaseDatos);
    ?>
    
</body>
</html>