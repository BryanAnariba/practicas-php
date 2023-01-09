<?php
    require('../db/connection.php');
    $idArticulo = '';
    if(isset($_POST['idArticulo'])) {
        $idArticulo = $_POST['idArticulo'];
    }
    $mostrarDatos = "SELECT * FROM TBL_ARTICULOS WHERE ID_ARTICULO = $idArticulo";
    $resultados = mysqli_query($connection , $mostrarDatos);

    if ($resultados == false) { //en caso de que $exito no guarde nada
        die('' . mysqli_error());
    } else {
        $json = array();
        while(($row = mysqli_fetch_array($resultados , MYSQLI_ASSOC))){ 
            $json[] =   array(
                                'idArticulo'  => $row["ID_ARTICULO"] ,
                                'idEmpleado'  => $row["ID_EMPLEADO"] , 
                                'nombreArticulo'  => $row["NOMBRE_ARTICULO"] , 
                                'seccionArticulo'  => $row["SECCION_ARTICULO"] , 
                                'paisOrigen'  => $row["PAIS_ORIGEN"] , 
                                'precio'  => $row["PRECIO"] , 
                                'cantidad'  => $row["CANTIDAD"] 
                        );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>