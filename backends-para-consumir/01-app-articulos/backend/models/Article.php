<?php
    require_once('../database/Connection.php');
    class Article {
        private $articleId;
        private $article;
        private $articleTypeId;
        private $price;
        private $stock;

        private $connection;
        private $query;

        public function getArticleId() {
            return $this->articleId;
        }

        public function setArticleId($articleId) {
            $this->articleId = $articleId;
            return $this;
        }

        public function getArticle() {
            return $this->article;
        }

        public function setArticle($article) {
            $this->article = $article;
            return $this;
        }

        public function getArticleTypeId() {
            return $this->articleTypeId;
        }

        public function setArticleTypeId($articleTypeId) {
            $this->articleTypeId = $articleTypeId;
            return $this;
        }

        public function getPrice() {
            return $this->price;
        }

        public function setPrice($price) {
            $this->price = $price;
            return $this;
        }

        public function getStock() {
            return $this->stock;
        }

        public function setStock($stock) {
            $this->stock = $stock;
            return $this;
        }

        public function __construct() {
            $this->connection = new Connection();
            $this->query = $this->connection->connect();
        }

        public function save () {
            try {
                $stmt = $this->query->prepare('INSERT INTO ARTICLES (articleTypeId, article, stock, price) VALUES (:articleTypeId, :article, :stock, :price)');
                $stmt->bindValue(':articleTypeId', $this->articleTypeId);
                $stmt->bindValue(':article', $this->article);
                $stmt->bindValue(':stock', $this->stock);
                $stmt->bindValue(':price', $this->price);
                if ($stmt->execute()) {
                    return  array(
                        "status" => http_response_code(200),
                        "data" => 'Articulo ' . $this->article . ' registrado exitosamente'
                    );
                } else {
                    return 
                    array(
                        "status" => http_response_code(400),
                        "data" => "Ha ocurrido un error al registrar el articulo"  
                    );
                }

            } catch (PDOException $ex) {
                return 
                    array(
                        "status" => http_response_code(400),
                        "data" => $ex  
                    );
                
            } finally {
                $this->connection = null;
            }
        }

        public function findById () {
            try {
                $stmt = $this->query->prepare('SELECT Articles.articleId, Articles.articleTypeId, Types.articleType, Articles.article, Articles.price, Articles.stock FROM Articles INNER JOIN Types ON (Articles.articleTypeId = Types.articleTypeId) WHERE Articles.articleId = :articleId');
                $stmt->bindValue(':articleId', $this->articleId);
                if ($stmt->execute()) {
                    http_response_code(200);
                    return  array(
                        "status" => 200,
                        "data" => $stmt->fetchObject()
                    );
                    
                } else {
                    http_response_code(400);
                    return 
                    array(
                        "status" => 400,
                        "data" => "Ha ocurrido un error al listar los articulos"  
                    );
                }

            } catch (PDOException $ex) {
                http_response_code(400);
                return 
                    array(
                        "status" => 400,
                        "data" => $ex  
                    );
                
            } finally {
                $this->connection = null;
            }
        }

        public function find () {
            try {
                $stmt = $this->query->prepare('SELECT Articles.articleId, Articles.articleTypeId, Types.articleType, Articles.article, Articles.price, Articles.stock FROM Articles INNER JOIN Types ON (Articles.articleTypeId = Types.articleTypeId)');
                if ($stmt->execute()) {
                    http_response_code(200);
                    return  array(
                        "status" => 200,
                        "data" => $stmt->fetchAll(PDO::FETCH_OBJ)
                    );
                    
                } else {
                    http_response_code(400);
                    return 
                    array(
                        "status" => 400,
                        "data" => "Ha ocurrido un error al listar los articulos"  
                    );
                }

            } catch (PDOException $ex) {
                return 
                    array(
                        "status" => http_response_code(400),
                        "data" => $ex  
                    );
                
            } finally {
                $this->connection = null;
            }
        }

        public function updateOne () {
            try {
                $stmt = $this->query->prepare('UPDATE ARTICLES SET articleTypeId = :articleTypeId, article = :article, stock = :stock, price = :price WHERE articleId = :articleId');
                $stmt->bindValue(':articleTypeId', $this->articleTypeId);
                $stmt->bindValue(':article', $this->article);
                $stmt->bindValue(':stock', $this->stock);
                $stmt->bindValue(':price', $this->price);
                $stmt->bindValue(':articleId', $this->articleId);
                if ($stmt->execute()) {
                    return  array(
                        "status" => http_response_code(200),
                        "data" => 'Articulo ' . $this->article . ' actualizado exitosamente'
                    );
                } else {
                    return 
                    array(
                        "status" => http_response_code(400),
                        "data" => "Ha ocurrido un error al actualizar el articulo"  
                    );
                }

            } catch (PDOException $ex) {
                return 
                    array(
                        "status" => http_response_code(400),
                        "data" => $ex  
                    );
                
            } finally {
                $this->connection = null;
            }
        }

        public function deleteOne () {
            try {
                $stmt = $this->query->prepare('DELETE FROM ARTICLES WHERE articleId = :articleId');
                $stmt->bindValue(':articleId', $this->articleId);
                if ($stmt->execute()) {
                    return  array(
                        "status" => http_response_code(200),
                        "data" => 'Articulo eliminado exitosamente'
                    );
                } else {
                    return 
                    array(
                        "status" => http_response_code(400),
                        "data" => "Ha ocurrido un error al actualizar el articulo"  
                    );
                }

            } catch (PDOException $ex) {
                return 
                    array(
                        "status" => http_response_code(400),
                        "data" => $ex  
                    );
                
            } finally {
                $this->connection = null;
            }
        }
    }