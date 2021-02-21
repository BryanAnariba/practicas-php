<?php
    require('../models/Article.php');
    class ArticlesController {
        private $data;
        private $articleModel;
        public function __construct() {
            $this->articleModel = new Article();
        }

        public function getArticles () {
            $this->data = $this->articleModel->find();
            echo json_encode($this->data);
        }

        public function getArticle ($articleId) {
            $this->articleModel->setArticleId($articleId);
            $this->data = $this->articleModel->findById();

            echo json_encode($this->data);
        }

        public function saveArticle ($articleTypeId, $article, $price, $stock) {
            $this->articleModel->setArticle($article);
            $this->articleModel->setArticleTypeId($articleTypeId);
            $this->articleModel->setPrice($price);
            $this->articleModel->setStock($stock);
            $this->data = $this->articleModel->save();

            echo json_encode($this->data);
        }

        public function editArticle ($articleId, $articleTypeId, $article, $price, $stock) {
            $this->articleModel->setArticleId($articleId);
            $this->articleModel->setArticle($article);
            $this->articleModel->setArticleTypeId($articleTypeId);
            $this->articleModel->setPrice($price);
            $this->articleModel->setStock($stock);
            $this->data = $this->articleModel->updateOne();

            echo json_encode($this->data);
        }

        public function deleteArticle ($articleId) {
            $this->articleModel->setArticleId($articleId);
            $this->data = $this->articleModel->deleteOne();

            echo json_encode($this->data);
        }

        public function notValidRequest () {
            echo json_encode(
                array(
                    'status' => http_response_code(400),
                    'data' => 'Peticion No valida'
                )
            );
        }
    }