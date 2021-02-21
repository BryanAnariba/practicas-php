<?php
    require('../db/connection.php');
    $idArticulo = '';
    if(isset($_POST['idArticulo']) && !empty($_POST['idArticulo'])) {
        $idArticulo = $_POST['idArticulo'];
    }

    $eliminarArticulo = "DELETE FROM TBL_ARTICULOS WHERE ID_ARTICULO = $idArticulo";
    $resultados = mysqli_query($connection , $eliminarArticulo);

    if($resultados) {
        $json = array();
        $mensaje = "Articulo Eliminado Con Exito";
        $json[] =  array("Mensaje"=>$mensaje);
        $jsonstring = json_encode($json);
        echo $jsonstring;
    } else {
        $json = array();
        $mensaje = "El Articulo No Fue Eliminado Con Exito";
        $json[] =  array("Mensaje"=>$mensaje);
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>