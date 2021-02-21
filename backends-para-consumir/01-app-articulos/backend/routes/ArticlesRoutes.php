<?php
    require_once('./request-headers.php');
    require_once('../controllers/ArticlesController.php');
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET': 
            if (isset($_GET['articleId']) && !empty($_GET['articleId'])) {
                $article = new ArticlesController();
                $article->getArticle($_GET['articleId']);
            } else {
                $article = new ArticlesController();
                $article->getArticles();
            }
        break;
        case 'POST': 
            $_POST = json_decode(file_get_contents('php://input'), true);
            if (
                    isset($_POST['articleTypeId']) && 
                    !empty($_POST['articleTypeId']) && 
                    isset($_POST['article']) && 
                    !empty($_POST['article']) &&
                    isset($_POST['price']) && 
                    !empty($_POST['price']) &&
                    isset($_POST['stock']) && 
                    !empty($_POST['stock'])
            ) {
                $article = new ArticlesController();
                $article->saveArticle($_POST['articleTypeId'], $_POST['article'], $_POST['price'], $_POST['stock']);
            } else {
                $article = new ArticlesController();
                $article->notValidRequest();
            }
        break; 
        case 'PUT':
            $_PUT = json_decode(file_get_contents('php://input'), true);
            if (
                isset($_PUT['articleId']) && 
                !empty($_PUT['articleId']) &&
                isset($_PUT['articleTypeId']) && 
                !empty($_PUT['articleTypeId']) && 
                isset($_PUT['article']) && 
                !empty($_PUT['article']) &&
                isset($_PUT['price']) && 
                !empty($_PUT['price']) &&
                isset($_PUT['stock']) && 
                !empty($_PUT['stock'])
        ) {
            $article = new ArticlesController();
            $article->editArticle($_PUT['articleId'], $_PUT['articleTypeId'], $_PUT['article'], $_PUT['price'], $_PUT['stock']);
        } else {
            $article = new ArticlesController();
            $article->notValidRequest();
        }
        break;
        case 'DELETE': 
            if (isset($_GET['articleId']) && !empty($_GET['articleId'])) {
                $article = new ArticlesController();
                $article->deleteArticle($_GET['articleId']);
            } else {
                $article = new ArticlesController();
                $article->notValidRequest();
            }
        break; 
        default: 
            $article = new ArticlesController();
            $article->notValidRequest();
        break;
    }