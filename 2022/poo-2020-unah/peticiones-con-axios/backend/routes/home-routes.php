<?php
    session_start();
    header("Content-Type: application/json");
    include_once('../models/conexion.php');
    if (isset($_SESSION['USER_ID'])) {
        $identificador = $_SESSION['USER_ID'];
        $datosUsuario = "SELECT B.ID_USUARIO , A.NOMBRE , A.APELLIDO , B.CORREO FROM TBL_PERSONAS A LEFT JOIN TBL_USUARIOS B ON (A.ID_PERSONA = B.ID_USUARIO) WHERE ID_PERSONA = $identificador;";
        $res = mysqli_query($conexion , $datosUsuario);
        while($row = mysqli_fetch_array($res , MYSQLI_ASSOC)) {
            $informacion = array(
                'codigo' => 1 ,
                'id' => $row['ID_USUARIO'] ,
                'nombre' => $row['NOMBRE'] ,
                'apellido' => $row['APELLIDO'] ,
                'correo' => $row['CORREO']
            );
            $informacionToString = json_encode($informacion);
            echo $informacionToString; 
        }
    } else {
        $mensaje = array(
            'codigo' => 0 ,
            'mensaje' => 'no hay sesion activa'
        );
        $mensajeToString = json_encode($mensaje);
        echo $mensajeToString;
    }
?>