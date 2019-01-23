<?php
    //--------------------------------PASOS PARA UNA CONEXION CON POO------------
    //1 : crear una conexion.
    //  $nombre_conexion = new mysqli("servidor",usuario","password","nombreBBDD")
    $conexion = new mysqli("localhost","root","","prueba");
    //  si la conexion no tiene exito
    
    if($conexion->connect_errno){

        echo "FALLO LA CONEXION CON LA BASE DE DATOS" . $conexion->connect_errno;

    }
    //mysqli_set_charset($conexion,"utf8);
    //para codificacion de caracteres utf-8

    $conexion->set_charset("utf8");

    $instruccion_sql = "SELECT * FROM PRODUCTOS;";

    //FORMA PROCEDIMENTAL
    //$resultado = mysqli_query($conexion,$instruccion_sql);
    
    //FORMA DE OBTENER LA CONSULTA CON POO
    $resultados = $conexion->query($instruccion_sql);
    
    //SI LA CONSULTA TIRA ERROR FALLA O ESTA MAL ESCRITA.
    if($conexion->errno){//en caso de que falle
        die($conexion->errno);
    }

    //CONSTRUIR EL WHILE PARA RECORRER LOS RESULTADOS OBTENIDOS
    /*while($linea = mysqli_fetch_array($resultados,MYSQLI_ASSOC)){

    }*/

    //CONSTRUIR EL WHILE PARA RECORRER LOS RESULTADOS OBTENIDOS CON POO
    while($linea = $resultados->fetch_array()){
        echo "<table class='table' style='text-align:center; background:gray; margin-left:auto; margin-right:auto;'><tr scope='row'><td>";
            echo $linea[0] . "</td><td>";
            echo $linea[1] . "</td><td>";
            echo $linea[2] . "</td><td>";
            echo $linea[3] . "</td><td>";
            echo $linea[4] . "</td><td>";
            echo $linea[5] . "</td><td>";
            echo $linea[6] . "</td><td>";
            echo $linea[7] . "</td><td></tr></table>";
            echo "<br>";
            echo "<br>";
    }

    //CERRAR CONEXION
    //mysqli_close($conexion);

    //CERRAR CON POO
    $conexion->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>