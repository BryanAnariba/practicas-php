<?php
    session_start();
    header("Content-Type: application/json");
    include_once('../models/conexion.php');

    switch ($_SERVER['REQUEST_METHOD']) {
        // Obtener un usuario o usuarios
        case 'GET':
            if (isset($_GET['id'])) {
                // Realizarlo con sesiones y con un panel de administracion de usuarios
            } else {
                $usuarios = "SELECT A.ID_PERSONA , A.NOMBRE , A.APELLIDO , C.GENERO , B.CORREO , A.TELEFONO FROM TBL_PERSONAS A LEFT JOIN TBL_USUARIOS B ON (A.ID_PERSONA = B.ID_USUARIO) LEFT JOIN TBL_GENEROS C ON (A.ID_GENERO = C.ID_GENERO);";
                $resultados = mysqli_query($conexion , $usuarios);
                $Infousuarios = array();
                while(($row = mysqli_fetch_array($resultados , MYSQLI_ASSOC))) { 
                    $Infousuarios[] = array(
                        'id' => $row['ID_PERSONA'] ,
                        'nombre' => $row['NOMBRE'] ,
                        'apellido' => $row['APELLIDO'] ,
                        'genero' => $row['GENERO'] ,
                        'correo' => $row['CORREO'] ,
                        'telefono' => $row['TELEFONO']
                    );
                    $InfousuariosToString = json_encode($Infousuarios);
                    echo $InfousuariosToString;
                }
            }
        break;

        // Insertar un usuario
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input') , true);
            $nombreCompleto = $_POST['nombreCompleto'];
            $apellidoCompleto = $_POST['apellidoCompleto'];
            $telefonoUsuario = $_POST['telefonoUsuario'];
            $generoUsuario = $_POST['generoUsuario'];
            $emailUsuario = $_POST['emailUsuario'];
            $claveUsuario = $_POST['claveUsuario'];
            $newPassword = password_hash($claveUsuario,PASSWORD_DEFAULT);

            // Consulta para insertar una persona
            $insertaPersona = "INSERT INTO tbl_personas (ID_GENERO,NOMBRE,APELLIDO,TELEFONO) VALUES ($generoUsuario,'$nombreCompleto','$apellidoCompleto','$telefonoUsuario');";
            $ejecutaConsulta = mysqli_query($conexion , $insertaPersona);
            if ($ejecutaConsulta) {
                // Si tiene exito la primer consulta que ejecute esta que lleva cierta cosita
                $insertaUsuario = "INSERT INTO tbl_usuarios VALUES ( (SELECT (AUTO_INCREMENT-1) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'login-registro-axios' AND TABLE_NAME = 'tbl_personas') , '$emailUsuario' , '$newPassword');";
                $ejecutaConsultaUsuario = mysqli_query($conexion , $insertaUsuario);
                if ($ejecutaConsultaUsuario) {
                    // Si tiene exito que la segunda que muestre mensaje y lo imprima formato json al cliente
                    $mensaje = array();
                    $mensaje[] = array(
                        'mensaje' => 'Usuario ' . $emailUsuario . ' Insertado con exito'
                    );
                    $mensajeToString = json_encode($mensaje);
                    echo $mensajeToString;
                }
            }
        break;
        case 'PUT':
            // Realizarlo con sesiones y con un panel de administracion de usuarios
        break;
        case 'DELETE':
            // Realizarlo con sesiones y con un panel de administracion de usuarios
        break;
        default:
            echo 'Opcion no valida';
        break;
    }

    // No olvidar siemre cerrar conexion
    mysqli_close($conexion);
?>