<?php
    header("Content-Type: application/json");
    include_once('../class/user-class.php');
    // aqui van las rutas y posiblemente los controles de como gestionar dichas rutas

    // Para ver el metodo de envio
    //echo "Metodo HTTP: ".$_SERVER['REQUEST_METHOD'];
    switch ($_SERVER['REQUEST_METHOD']) {
        // Crear
        case 'POST':    
            $_POST = json_decode(file_get_contents('php://input') , true);

            // Creamos una instancia del tipo usuario y mandamos los campos y procesarlos desde la clase
            $usuario = new Usuario($_POST['completeName'],$_POST['email'],$_POST['password'],$_POST['role']);
            $usuario->saveUser();

            $res["mensaje"] = "Guardar Usuario, informacion -> " . json_encode($_POST);
            echo json_encode($res);
        break;

        // Obtener un usuario
        case 'GET':
            if (isset($_GET['id'])) {
                Usuario::viewUser($_GET['id']);
            } else {
                Usuario::viewUsers();
            }
            
        break;  

        // Actualizar un usuario
        case 'PUT':
            $_PUT = json_decode(file_get_contents('php://input') , true);

            // Creamos instancia de tipo usuario para poder mandar los nuevos valores
            $usuario = new Usuario($_PUT['completeName'],$_PUT['email'],$_PUT['password'],$_PUT['role']);
            $usuario->updateUser($_GET['id']);

            // Con esto mandamos mensaje de exito de actualizacion
            $res["mensaje"] =   "Se actualizara el usuarios con el identificador -> " 
                                . $_GET['id'] . "Informacion a actualizar -> " 
                                . json_encode($_PUT);
            echo json_encode($res);
        break;

        // Eliminar un usuario
        case 'DELETE':
            $res['mensaje'] = "Eliminar el usuarios con el identificador -> " . $_GET['id'];
            echo json_encode($res);
        break;

        // Opcion no valida
        default:
            echo 'No valido';   
        break;
    }     
?>  