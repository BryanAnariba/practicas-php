<?php
    header('Access-Control-Allow-Origin: *');
    include_once('../models/conexion.php');

    $getGeneros = "SELECT * FROM TBL_GENEROS";
    $res = mysqli_query($conexion , $getGeneros);

    $listaGeneros = array();

    while(($row = mysqli_fetch_array($res , MYSQLI_ASSOC))) { 
        $listaGeneros[] = array(
            'id' => $row['ID_GENERO'] ,
            'genero' => $row['GENERO'] ,
            'abreviatura' => $row['ABREV']
        );
    }

    $listaGenerosToString = json_encode($listaGeneros);
    echo $listaGenerosToString;
    mysqli_close($conexion);
?>