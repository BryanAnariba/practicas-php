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
    $nombreArt = $_POST["nombreArticulo"];



    $consultaUno = "SELECT COD_ART , SECCION , NOMBRE_ARTICULO , FECHA , PAIS_DE_ORIGEN , ROUND(PRECIO , 2) AS PRECIO_REDONDEADO FROM ARTíCULOS WHERE NOMBRE_ARTICULO LIKE '%$nombreArt%'";

    $resultado = mysqli_query($conexionBaseDatos,$consultaUno);


    echo "<h2 style='text-align:center;'>Impresion de Registros en PHP con MYSQL</h2>" . "<br>";


    /*-----------------------------IMPRESION DE TODOS LOS REGISTROS EN LA BASE DE DATOS---------------------------------*/
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
    while(($filaConsulta=mysqli_fetch_array($resultado , MYSQLI_ASSOC))){
        echo    "<tr style='color:black; font-weight:bold;'>
                    <td>" . $filaConsulta['COD_ART'] . "</td>
                    <td>" . $filaConsulta['SECCION'] . "</td>
                    <td>" . $filaConsulta['NOMBRE_ARTICULO'] . "</td>
                    <td>" . $filaConsulta['FECHA'] . "</td>
                    <td>" . $filaConsulta['PAIS_DE_ORIGEN'] . "</td>
                    <td>" . $filaConsulta['PRECIO_REDONDEADO'] . "</td>
                </tr>
                </center>";
    }

    echo "</tbody></table>";
    
    //CERRAR CONEXION PARA OPTIMIZAR RECURSOS
    mysqli_close($conexionBaseDatos);
    ?>
    
</body>
</html>