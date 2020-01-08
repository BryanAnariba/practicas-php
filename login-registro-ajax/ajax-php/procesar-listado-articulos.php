<?php
    require('../db/connection.php');
    $sql = "SELECT * FROM TBL_ARTICULOS";
    $resultado = mysqli_query($connection , $sql);

    $json = array();
    while(($row = mysqli_fetch_array($resultado , MYSQLI_ASSOC))){
        $json[] = array(
            'idArticulo' => $row["ID_ARTICULO"] ,
            'idEmpleado' => $row["ID_EMPLEADO"],
            'nombreArticulo' => $row['NOMBRE_ARTICULO'] ,
            'seccionArticulo' => $row['SECCION_ARTICULO'] ,
            'paisOrigen' => $row['PAIS_ORIGEN'] ,
            'precioArticulo' => $row['PRECIO'] ,
            'cantidadArticulo' => $row['CANTIDAD']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;

?>
