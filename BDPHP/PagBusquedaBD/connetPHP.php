<?php
    $hostBaseDatos = "localhost";
    $nombreBaseDatos = "bd_productos";
    $userBaseDatos = "root";
    $claveBaseDatos = "";

    $conexionBaseDatos = mysqli_connect($hostBaseDatos,$userBaseDatos,$claveBaseDatos);

    mysqli_select_db($conexionBaseDatos,$nombreBaseDatos) or die ("<h2><strong>No se Encuentra la Base de Datos</strong><h2>");

    if(mysqli_connect_errno()){//si llega a ejecutar la funcion la cual indica que hay una error la funcion
        echo "<h1><center>Fallo Al Conectar Con la Base de Datos Verifique Su Codigo</center></h1>";
        exit();
    }

    mysqli_set_charset($conexionBaseDatos , "UTF8");
?>