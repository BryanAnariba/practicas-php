<?php
    $hostBD = "localhost";
    $nombreBD = "bd_productos";
    $userBD = "root";
    $passBD = "";


    $conexionBD = mysqli_connect($hostBD,$userBD,$passBD);

    mysqli_select_db($conexionBD,$nombreBD) or die ("<h2><strong>No se Encontro la Base de Datos.....!</strong></h2>");

    if(mysqli_connect_errno()){
        echo "<center><h2><strong>Se Produjo un Error al Conectar La Base de Datos....!</strong></h2><enter>";
        exit();
    }

    mysqli_set_charset($conexionBD,"UTF8");

?>