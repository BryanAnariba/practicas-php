<?php
    require('../db/connection.php');
    $idArticulo = '';
    $nombreArticulo = '';
    $seccionArticulo = '';
    $paisArticulo = '';
    $precioArticulo = '';
    $cantidadArticulo = '';
    if(!empty($_POST['idArticulo']) && !empty($_POST['nombreArticulo']) && !empty($_POST['seccionArticulo']) && !empty($_POST['paisArticulo']) && !empty($_POST['precioArticulo']) && !empty($_POST['cantidadArticulo'])) {
        $idArticulo = $_POST['idArticulo'];
        $nombreArticulo = $_POST['nombreArticulo'];
        $seccionArticulo = $_POST['seccionArticulo'];
        $paisArticulo = $_POST['paisArticulo'];
        $precioArticulo = $_POST['precioArticulo'];
        $cantidadArticulo = $_POST['cantidadArticulo'];

        $Actualizacion = "UPDATE TBL_ARTICULOS SET NOMBRE_ARTICULO = '$nombreArticulo' , SECCION_ARTICULO = '$seccionArticulo' , PAIS_ORIGEN = '$paisArticulo' , PRECIO = '$precioArticulo' , CANTIDAD = '$cantidadArticulo' WHERE ID_ARTICULO = $idArticulo"; 
        $resultados = mysqli_query($connection , $Actualizacion);

        if($resultados) {
            $json = array();
            $json[] = array('message' => 'Article Update Successfully !');
            $string = json_encode($json);
            echo $string;
        } else {
            die('Query Failed.....');
        }
    } else {
        $json = array();
        $json[] = array('message' => 'error !');
        $string = json_encode($json);
        echo $string;
    }   
?>