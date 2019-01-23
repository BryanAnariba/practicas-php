<?php
//CON PDO
    require("config.php");
    
    class ConexionBBDD {
        protected $conexiondb;
        public function ConexionBBDD(){
            try{
                $this->conexiondb  = new PDO('mysql:host=localhost; dbname=prueba','root','');
                $this->conexiondb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->conexiondb->exec("SET CHARACTER SET utf8");
                return $this->conexiondb;
            }catch(Exception $e){
                echo "La linea de error es: " . $e->getLine();
            }
        }
    }
?>