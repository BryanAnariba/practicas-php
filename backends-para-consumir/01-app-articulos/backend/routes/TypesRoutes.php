<?php
    require_once('./request-headers.php');
    require_once('../controllers/ArticleTypesController.php');

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET': 
            if (isset($_GET['articleTypeId']) && !empty($_GET['articleTypeId'])) {
                $type = new ArticleTypesController();
                $type->getType($_GET['articleTypeId']);
            }  else {
                $type = new ArticleTypesController();
                $type->getTypes();
            }
        break;
        case 'POST': 
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (isset($_POST['articleType']) && !empty($_POST['articleType'])) {
                $type = new ArticleTypesController();
                $type->saveType($_POST['articleType']);
            }  else {
                $type = new ArticleTypesController();
                $type->notValidRequest();
            }
        break;
        case 'PUT': 
            $_PUT = json_decode(file_get_contents('php://input'), true);
            if (isset($_PUT['articleType']) && !empty($_PUT['articleType']) && isset($_GET['articleTypeId']) && !empty($_GET['articleTypeId'])) {
                $type = new ArticleTypesController();
                $type->editType($_GET['articleTypeId'], $_PUT['articleType']);
            }  else {
                $type = new ArticleTypesController();
                $type->notValidRequest();
            }
        break;
        case 'DELETE': 
        break;
        default: 
            $type = new ArticleTypesController();
            $type->notValidRequest();
        break;
    }
