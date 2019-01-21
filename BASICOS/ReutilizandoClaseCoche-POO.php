<?php


    //HERENCIA:REUTILIZACION DE CODIGO
    


    class Camion extends Coche{
        //Clase camion
        //Propiedades y metodos de los objetos::::::>
        //PROPIEDADES:

        function Camion(){
            $this->ruedas = 8;
            $this->color = "Blanco";
            $this->motor = 2600;
        }

        //sobreescritura de metodos

        /*establece color*/

        function setColor($colorCamion,$nombreCamion){
            $this->color = $colorCamion;
            echo "El color de " . $nombreCamion . " Es " . $this->color . "<br>";
        }

        /*Instrucion para ejecutar todo el metodo de la clase padre que es coche en clase camion
        y agregar algo mas con la funcion propia de la clase camion*/

        function getArrancar(){
            parent::getArrancar();
            echo "Camion arrancado" . "<br>";
        }
    }
?>