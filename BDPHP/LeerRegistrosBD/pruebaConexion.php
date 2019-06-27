<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="tabla.css">
    <title>Importando Registros de la Base De Datos</title>
</head>
<body>
    <?php
        include("Conexion.php");

    
    /********************************PASOS PARA REALIZAR UNA CONSULTA***********************************/

    $consultaUno = "SELECT SECCIÓN , NOMBREARTÍCULO , FECHA ,PAÍSDEORIGEN , ROUND(PRECIO , 2) AS PRECIO_REDONDEADO FROM ARTíCULOS";


    $resultado = mysqli_query($conexionBaseDatos,$consultaUno);


    echo "<h2 style='text-align:center;'>Impresion de Registros en PHP con MYSQL</h2>" . "<br>";


    /*-----------------------------IMPRESION DE TODOS LOS REGISTROS EN LA BASE DE DATOS---------------------------------*/
    echo "<center>
            <table>
                <thead>
                    <tr>
                        <th>Seccion</th>
                        <th>Nombre Articulo</th>
                        <th>Fecha</th>
                        <th>Pais de Origen</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>";
    while(($filaConsulta=mysqli_fetch_array($resultado , MYSQLI_ASSOC))){
        echo    "<tr>
                    <td>" . $filaConsulta['SECCIÓN'] . "</td>
                    <td>" . $filaConsulta['NOMBREARTÍCULO'] . "</td>
                    <td>" . $filaConsulta['FECHA'] . "</td>
                    <td>" . $filaConsulta['PAÍSDEORIGEN'] . "</td>
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