<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Registro UNAH-VENTAS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    //ALMACENAMOS LOS DATOS QUE PROVIENEN DE LOS CUADROS DE TEXTO DEL FORMULARIO
    $codigoArticulo = $_GET["codigoArticulo"];
    $nombreArticulo = $_GET["nombreArticulo"];
    $seccionArticulo = $_GET["seccionArticulo"];
    $precioArticulo = $_GET["precioArticulo"];
    $fechaArticulo = $_GET["fechaArticulo"];
    $importadoArticulo = $_GET["importadoArticulo"];
    $origenArticulo = $_GET["origenArticulo"];
    $fotoArticulo = $_GET["fotoArticulo"];
    //Aqui se procesa la informacion del formulario para que se inserte los campos en la BBDD Correspondiente.
    require("../funcionConexion.php");
    $conexion = mysqli_connect($Direccion_BBDD,$UsuarioBBDD,$PasswordBBDD);
    if(mysqli_connect_errno()){
        echo "No se encontro la Base de Datos....";
        exit();
    }
    mysqli_select_db($conexion,$NombreBBDD) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");

    //CONSULTA CON CAMPOS DE VARIABLES OJO EN EL MISMO ORDEN QUE ESTAN EN LA TABLA QUE DECLARAS
    $consulta = "INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO,NOMBREARTÍCULO,SECCIÓN,PRECIO,IMPORTADO,PAÍSDEORIGEN,FECHA,FOTO) VALUES ('$codigoArticulo','$nombreArticulo','$seccionArticulo',$precioArticulo,'$importadoArticulo','$origenArticulo','$fechaArticulo','$fotoArticulo');";
    $resultado = mysqli_query($conexion,$consulta);

    if($resultado == false){
        echo "ERROR AL INSERTAR EL REGISTRO :(";
    }else{
        echo "SE INSERTO EL REGISTRO CORRECTAMENTE :)" . "<br><br>";
        echo "<b><h2>Datos Almacenados: </h2></b>";
        echo "<table><tr><td style='text-align:center;'>$codigoArticulo</td></tr>";
        echo "<tr><td style='text-align:center'>$nombreArticulo</td></tr>";
        echo "<tr><td style='text-align:center'>$seccionArticulo</td></tr>";
        echo "<tr><td style='text-align:center'>$precioArticulo</td></tr>";
        echo "<tr><td style='text-align:center'>$fechaArticulo</td></tr>";
        echo "<tr><td style='text-align:center'>$importadoArticulo</td></tr>";
        echo "<tr><td style='text-align:center'>$origenArticulo</td></tr>";
        echo "<tr><td style='text-align:center'>$fotoArticulo</td></tr></table>";
    }
    mysqli_close($conexion);
?>
    <button onclick="location.href='FormularioRegistroArticulos.php'">Regresar</button>
</body>
</html>