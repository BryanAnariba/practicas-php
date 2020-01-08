<?php
    require('../db/connection.php');

    //CAMPOS NORMALES
    $idUsuario = $_POST['idUsuario'];
    $nombreArticulo = $_POST['nombreArticulo'];
    $seccionArticulo = $_POST['seccionArticulo'];
    $paisArticulo = $_POST['paisArticulo'];
    $precioArticulo = $_POST['precioArticulo'];
    $cantidadArticulo = $_POST['cantidadArticulo'];
    if(!empty($idUsuario) && !empty($nombreArticulo) && !empty($seccionArticulo) && !empty($paisArticulo) && !empty($precioArticulo) && !empty($cantidadArticulo)) {
        $sqlInsertarArticulo = 'INSERT INTO TBL_ARTICULOS (ID_EMPLEADO,NOMBRE_ARTICULO,SECCION_ARTICULO,PAIS_ORIGEN,PRECIO,CANTIDAD) VALUES (?,?,?,?,?,?)';
        $resultados = mysqli_prepare($connection , $sqlInsertarArticulo);

        $res = mysqli_stmt_bind_param($resultados , "isssii" , $idUsuario , $nombreArticulo , $seccionArticulo , $paisArticulo , $precioArticulo , $cantidadArticulo);
        $res = mysqli_stmt_execute($resultados);

        if($res==true){
            echo "Articulo Insertado Con Exito.";
        }else{
            echo "Articulo No Insertado";
        }
        mysqli_close($connection);
    }
?>