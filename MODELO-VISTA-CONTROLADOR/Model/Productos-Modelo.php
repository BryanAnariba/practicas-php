<?php
    class Productos_model{
        private $db;
        private $productos;
        public function __construct(){//CONECTA LA BD
            require_once("Conexion.php");
            $this->db= Conectar::conexion();//LLAMA AL METODO CONEXION POR MEDIO DE LA CLASE Conectar
            $this->productos=array();
        }
        public function getProductos(){//DEVUELVE ARTICULOS
            $consulta = $this->db->query("SELECT * FROM PRODUCTOS");
            while($filas=$consulta->fetch(PDO_ASSOC)){
                $this->productos[] = $filas;
            }
            return $this->productos;//DEVUELVE EL ARRAY CON TODOS LOS PRODUCTOS EN SU INTERIOR
        }
    }
?>