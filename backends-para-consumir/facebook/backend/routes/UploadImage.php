<?php
    require_once('./request-headers.php');
    require_once('../helpers/Image.php');
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
                if (isset($_FILES) && !empty($_FILES)) {
                    $imagen = new Imagen('../uploads');
                    $imagen->setImagen($_FILES);
                    $statusSubida = $imagen->subirImagen();
                    if ($statusSubida == false) {
                        echo json_encode(
                            array('status' => http_response_code(400), 'data' => 
                            array('message' => 'Ha ocurrido un error, la imagen no se subio, por problemas de pesoen MB o tipo de archivo')));
                    } else {
                        http_response_code(200);
                        echo json_encode(array(
                            'status' => 200,
                            'data' => 'Foto subida'
                        ));
                    }
                } else {
                    http_response_code(400);
                    echo json_encode(array(
                        'status' => 400,
                        'data' => 'Peticion no valida'
                    ));
                }
        break;
        default:
            http_response_code(400);
            echo json_encode(array(
                'status' => 400,
                'data' => 'Peticion no valida'
            ));
        break;
    }