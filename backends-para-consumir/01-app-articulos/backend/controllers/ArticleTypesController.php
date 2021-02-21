<?php
    require_once('../models/Type.php');
    class ArticleTypesController {
        private $typesModel;
        private $data;

        public function __construct() {
            $this->typesModel = new Type();
        }

        public function getTypes() {
            $this->data = $this->typesModel->find();

            echo json_encode($this->data);
        }

        public function getType ($articleTypeId) {
            $this->typesModel->setArticleTypeId($articleTypeId);
            $this->data = $this->typesModel->findById();

            echo json_encode($this->data);
        }

        public function saveType ($articleType) {
            $this->typesModel->setArticleType($articleType);
            $this->data = $this->typesModel->save();

            echo json_encode($this->data);
        }

        public function editType ($articleTypeId, $articleType) {
            $this->typesModel->setArticleTypeId($articleTypeId);
            $this->typesModel->setArticleType($articleType);

            $this->data = $this->typesModel->updateOne();
            echo json_encode($this->data);
        }

        public function notValidRequest () {
            http_response_code(400);
            echo json_encode(
                array(
                    'status' => 400,
                    'data' => 'Peticion No valida'
                )
            );
        }
    }
