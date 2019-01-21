<?php
    $articuloaBuscar = $_GET["articulo"];
    require("../funcionConexion.php");

    $conexion = mysqli_connect($Direccion_BBDD,$UsuarioBBDD,$PasswordBBDD);
    
    if(mysqli_connect_errno()){
        echo "No Se Encuentra la Base de Datos.....";
        exit();
    }
    mysqli_select_db($conexion,$NombreBBDD) or die ("No se encuentra la BBDD");//ESTE CAMPO ES SUPER IMPORTANTE TU LO SABES YOU KNOW MAN 
    mysqli_set_charset($conexion,"utf8");

    //$consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$articuloaBuscar%';";
    $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO = '$articuloaBuscar';";
    echo "<br><br> $consulta <br><br>";
    
    $resultado = mysqli_query($conexion,$consulta);
    echo "<h1 style='text-align:center;'>Resultados De La Busqueda.<h1>";

    while($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
        echo "<table class='table' style='text-align:center; background:gray; margin-left:auto; margin-right:auto;'><tr scope='row'><td>";
            //ESTO NO SE REQUIERE PARA MODIFICAR ARCHIVOS ...... LO DE ABAJO SI
            /*echo $fila['CÓDIGOARTÍCULO'] . "</td><td>";
            echo $fila['NOMBREARTÍCULO'] . "</td><td>";
            echo $fila['SECCIÓN'] . "</td><td>";
            echo $fila['IMPORTADO'] . "</td><td>";
            echo $fila['PRECIO'] . "</td><td>";
            echo $fila['FECHA'] . "</td><td>";
            /*echo $Fila[2] . "</td><td>";
            echo $Fila[3] . "</td><td>";
            echo $Fila[4] . "</td><td>";
            echo $Fila[5] . "</td><td>";
            echo $Fila[6] . "</td><td>";*/
            /*echo $fila['PAÍSDEORIGEN'] . "</td><td></tr></table>";
            echo "<br>";
            echo "<br>";*/

            //Creando el formulario con los datos ya ingresados para solo elegir el campo a modificar.
            echo "<form action='Modificando.php' method='GET'>";
                echo "<input type='text' name='codigoArticulo' value='" . $fila['CÓDIGOARTÍCULO'] . "'>" . "<br>";
                echo "<input type='text' name='nombreArticulo' value='" . $fila['NOMBREARTÍCULO'] . "'>" . "<br>";
                echo "<input type='text' name='seccionArticulo' value='" . $fila['SECCIÓN'] . "'>" . "<br>";
                echo "<input type='text' name='importadoArticulo' value='" . $fila['IMPORTADO'] . "'>" . "<br>";
                echo "<input type='text' name='precioArticulo' value='" . $fila['PRECIO'] . "'>" . "<br>";
                echo "<input type='text' name='fechaArticulo' value='" . $fila['FECHA'] . "'>" . "<br>";
                echo "<input type='text' name='origenArticulo' value='" . $fila['PAÍSDEORIGEN'] . "'>" . "<br>";
                echo "<input type='text' name='fotoArticulo' value='" . $fila['FOTO'] . "'>" . "<br>";
                echo "<input type='submit' value='Modificar Informacion' name='modificar'>";
            echo "</form>";

        }
    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../POO2018/frameworks/bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>
<body>
<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>