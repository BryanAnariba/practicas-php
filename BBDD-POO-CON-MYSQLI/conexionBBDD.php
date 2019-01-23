<?php
    require("config.php");

    class ConexionBBDD {
        protected $conexion_BBDD;
        
        public function ConexionBBDD(){
            $this->conexion_BBDD = new mysqli(DB_HOST,DB_USUARIO,DB_PASSWORD,DB_NOMBRE);//Instanciamos variables del config.php
            if($this->conexion_BBDD->connect_errno){//si falla la conexion
                echo "Fallo al Conectar la BBDD : " . $this->conexion_BBDD->connect_error;
                return;
            }
            $this->conexion_BBDD->set_charset(DB_CHARSET);//Admitimos los caracteres UTF8 PARA TODO TIPO DE INFORMACION CON TILDES ñ ETC
        }
    }
?>