<?php
    session_start();
    header("Content-Type: application/json");
    include_once('../models/conexion.php');
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input') , true);
            if (!empty($_POST['pass']) && !empty($_POST['email'])) {
                $clave = $_POST['pass'];
                $email = $_POST['email'];
                $login = "SELECT ID_USUARIO , CORREO , PASSWORD FROM TBL_USUARIOS WHERE CORREO = '$email'";
                $resultados = mysqli_query($conexion , $login);
                if($resultados) {
                    while ($row = mysqli_fetch_array($resultados , MYSQLI_ASSOC)) {
                        if ($email == $row['CORREO']) {
                            if (password_verify($clave,$row['PASSWORD'])) {
                                $_SESSION['USER_ID'] = $row['ID_USUARIO'];
                                $mensaje = array(
                                    'code' => 1 ,
                                    'id' => $_SESSION['USER_ID'] ,
                                    'email' => $row['CORREO']
                                );
                                $mensajeToString = json_encode($mensaje);
                                echo $mensajeToString;
                            } else {
                                $mensaje = array(
                                    'mensaje' => 'Clave No Valida'
                                );
                                $mensajeToString = json_encode($mensaje);
                                echo $mensajeToString;
                                break;
                            }
                        } else {
                            $mensaje = array(
                                'mensaje' => 'Correo No Encontrado'
                            );
                            $mensajeToString = json_encode($mensaje);
                            echo $mensajeToString;  
                        }
                    }
                } 
            } else {
                $mensaje = array(
                    'mensaje' => 'Los campos estan vacios'
                );
                $mensajeToString = json_encode($mensaje);
                echo $mensajeToString;
            }
        break;
        default:
            $mensaje = array(
                'mensaje' => 'Opcion no valida'
            );
            $mensajeToString = json_encode($mensaje);
            echo $mensajeToString;
        break;
    }
    mysqli_close($conexion);
?>