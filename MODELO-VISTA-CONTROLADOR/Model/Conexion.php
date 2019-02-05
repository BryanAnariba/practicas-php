<?php
    class Conectar{
        public static function conexion(){
            try{
                $conexion = new PDO('mysql:host=localhost dbname=prueba',"root","");
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                $conexion->exec("SET CHARACTER SET UTF8");
            }catch(Exception $e){
                echo "La linea del error es: " . $e->getLine();
                echo "Tipo de Error " . $e->getMessage();
            }
            return $conexion;
        }
    }

?>