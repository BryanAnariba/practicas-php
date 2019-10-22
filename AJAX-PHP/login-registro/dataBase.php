<?php
    /*
        REQUISITOS PARA LA CONEXION CON LA BASE DE DAOS
                - DIRECCION DE LA BASE DE DATOS
                - NOMBRE DE LA BASE DE DATOS
                - USUARIO DE LA BASE DE DATOS
                - CONTRASEÑA DE LA BASE DE DATOS
    */

    //1 PASO DATOS

    $hostBaseDatos = "localhost";
    $nombreBaseDatos = "dbloginexample";
    $userBaseDatos = "root";
    $claveBaseDatos = "";

    //2 PASO CONEXION CON LOS DATOS DE ARRIBA
    $conexion = mysqli_connect($hostBaseDatos,$userBaseDatos,$claveBaseDatos);

    //En caso que no encuentre la base de datos envia el mensaje
    mysqli_select_db($conexion , $nombreBaseDatos) or die ("<h2><strong>No se Encuentra la Base de Datos</strong><h2>");

    /******************************** CODIGO QUE VERIFICA ERRORES EN LA BD ************************************/


    
    if(mysqli_connect_errno()){//si llega a ejecutar la funcion la cual indica que hay una error la funcion
        echo "<h1><center>Fallo Al Conectar Con la Base de Datos Verifique Su Codigo</center></h1>";
        exit();
    }
    
    //PARA QUE DETECTE ACENTOS TILDES O CARACTERES LATINOS ALA HORA DE IMPRIMIR INFORMACION
    mysqli_set_charset($conexion , "UTF8");

?>