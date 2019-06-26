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

    $consultaUno = "SELECT * FROM ARTíCULOS";


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
    while(($filaConsulta=mysqli_fetch_row($resultado))==true){
        echo    "<tr>
                    <td>" . $filaConsulta[0] . "</td>
                    <td>" . $filaConsulta[1] . "</td>
                    <td>" . $filaConsulta[2] . "</td>
                    <td>" . $filaConsulta[3] . "</td>
                    <td>" . $filaConsulta[4] . "</td>
                </tr>
                </center>";
    }

    echo "</tbody></table>";
    
    //CERRAR CONEXION PARA OPTIMIZAR RECURSOS
    mysqli_close($conexionBaseDatos);
    ?>
    
</body>
</html>