<?php
// 1 PASO: necesitamos la conexion a la base de datos.
    require("conexionBBDD.php");

    class ClassBBDD extends ConexionBBDD {//utilizamos las variables del archivo conexionBBDD.php 
        public function ClassBBDD(){
            parent::__construct();//se ejecutara el codigo que esta en conexionBBDD.php en pocas palabras conecta la base de datos
        }
        public function getProductos(){
            $resultado = $this->conexion_BBDD->query("SELECT * FROM PRODUCTOS;");
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }

    }
?>
