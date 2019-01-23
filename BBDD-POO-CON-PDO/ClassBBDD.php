<?php
// 1 PASO: necesitamos la conexion a la base de datos.
    require("conexionBBDD.php");

    class ClassBBDD extends ConexionBBDD {//utilizamos las variables del archivo conexionBBDD.php 
        public function ClassBBDD(){
            parent::__construct();//se ejecutara el codigo que esta en conexionBBDD.php en pocas palabras conecta la base de datos
        }
        public function getProductos($dato){
            $sql = "SELECT * FROM PRODUCTOS WHERE SECCIÓN = 'CERAMICA'";
            $sentencia = $this->conexiondb->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();//CIERRA PARA 
            return $resultado;//RETORNA CONSULTA
            $this->conexiondb = null;//CERRAR CONEXION
        }

    }
?>
