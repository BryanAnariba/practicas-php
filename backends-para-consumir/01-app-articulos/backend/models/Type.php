<?php
    require_once('../database/Connection.php');
    class Type {
        private $articleTypeId;
        private $articleType;

        private $connection;
        private $query;

        

        public function getArticleTypeId() {
            return $this->articleTypeId;
        }

        public function setArticleTypeId($articleTypeId) {
            $this->articleTypeId = $articleTypeId;
            return $this;
        }

        public function getArticleType() {
            return $this->articleType;
        }

        public function setArticleType($articleType) {
            $this->articleType = $articleType;
            return $this;
        }

        public function __construct() {
            $this->connection = new Connection();
            $this->query = $this->connection->connect();
        }

        public function find () {
            try {
                $stmt = $this->query->prepare('SELECT * FROM TYPES');
                if ($stmt->execute()) {
                    return  array(
                        "status" => http_response_code(200),
                        "data" => $stmt->fetchAll(PDO::FETCH_OBJ)
                    );
                    
                } else {
                    return 
                    array(
                        "status" => http_response_code(400),
                        "data" => "Ha ocurrido un error al listar los tipos de articulos"  
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
                $stmt = $this->query->prepare('SELECT * FROM TYPES WHERE articleTypeId = :types');
                $stmt->bindValue(':types', $this->articleTypeId);
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

        public function save () {
            try {
                $stmt = $this->query->prepare('INSERT INTO TYPES (articleType) VALUES (:articleType)');
                $stmt->bindValue(':articleType', $this->articleType);
                if ($stmt->execute()) {
                    http_response_code(200);
                    return  array(
                        "status" => 200,
                        "data" => 'El articulo ' . $this->articleType . ' fue registrado con exito'
                    );
                    
                } else {
                    http_response_code(400);
                    return 
                    array(
                        "status" => 400,
                        "data" => "Ha ocurrido un error al registrar el articulo"  
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

        public function updateOne () {
            try {
                $stmt = $this->query->prepare('UPDATE TYPES SET articleType = :articleType WHERE articleTypeId = :types');
                $stmt->bindValue(':articleType', $this->articleType);
                $stmt->bindValue(':types', $this->articleTypeId);
                if ($stmt->execute()) {
                    http_response_code(200);
                    return  array(
                        "status" => 200,
                        "data" => 'El articulo ' . $this->articleType . ' fue actualizado con exito'
                    );
                } else {
                    http_response_code(400);
                    return 
                    array(
                        "status" => 400,
                        "data" => "Ha ocurrido un error al actualizar el articulo"  
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
    }