<?php
    require('../db/connection.php');
    $idArticulo = "";
    if(isset($_POST['idArticulo']) && !empty($_POST['idArticulo'])) {
        $idArticulo = $_POST['idArticulo'];
        $enviarParamtros = "SELECT * FROM TBL_ARTICULOS WHERE ID_ARTICULO = $idArticulo";
        $resultado = mysqli_query($connection , $enviarParamtros);

        if($resultado) {
            $json = array();
            while($row = mysqli_fetch_array($resultado)) {
                $json[] = array(
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
        } else {    
            $mensaje = "Error En la Busqueda Introduzca Correctamente el ID";
            $json[] = array('mensaje' => $mensaje);
        }
    }

?>