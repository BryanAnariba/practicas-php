<?php

        /************************************************Clase Coche*************************************************************/
        //Declarar una clase 
        class Coche{
            //Propiedades O Atributos con su modificadores de acceso
            protected $ruedas;
            var $color;
            protected $motor;
            var $marcaCoche;

            //METODO CONSTRUCTOR: ES PARA INICIALIZAR LAS PROPIEDADES , DEBE TENER EL MISMO NOMBRE DE LA CLASE
            function Coche(){
                $this->ruedas = 4;//hace referencia al atributo de la clase el this
                $this->color = "Rojo";
                $this->motor = 1600;
                $this->marcaCoche = "Generico";
            }
            
            //metodos funciones o comportamientos
            function arrancar(){
                echo "Estoy en modo Arranque" . "<br>";
            }
            function girar(){
                echo "Estoy en Modo de Giro" . "<br>";
            }
            function frenar(){
                echo "Estoy En Modo De Freno" . "<br>";
            }

            


            //PARA ACCEDER A ATRIBUTOS ENCAPSULADOS SE USA SETTERS=>MODIFICA LA PROPIEDAD Y GETTERS=>VER LA PROPIEDADES DEL OBJETO
            function getRuedas(){
                return $this->ruedas;
            }
            
            function setColor($colorCoche,$marcaCoche){
                $this->color = $colorCoche;
                $this->marcaCoche = $marcaCoche;
                echo "El color del Coche " . $this->marcaCoche . " Es: " . $this->color . "<br>";
            }
            
            function getMotor(){
                return $this->motor;
            }
            
            

        }
        //instanciar una clase o ejemplarizar
       /* $coche_1 = new Coche();
        $coche_2 = new Coche();
        $coche_1->arrancar();//LLAMAR A UN METODO EN PHP NO ES CON PUNTO SI NO CON ->*/
        /*echo "Tiene: " . $coche_1->ruedas . " Ruedas<br>";*/          //esto no debe hacerse y para ello esta la encapsulacion
        /*$coche_1->estableceColor("Azul","Honda Civic");*/


        /*******************************************************Clase Camion*************************************************************/
        //APLICANDO HERENCIA A UNA CLASE
        class Camion extends Coche{
            function Camion(){
                $this->color = "Blanco";
                $this->marca = "Toyota";
                $this->motor = 2600;
                $this->ruedas = 8;
            }


            //SOBREESCRITURA DE METODOS EN CASO DE QUE NO QUERAMOS QUE SE COMPORTE COMO EN LA CLASE QUE HEREDA SI NO COMO LA PROPIA CLASE
            function estableceColor($colorCamion,$marcaCamion){//machaca al metodo anterior y lo cambia
                $this->color = $colorCamion;
                $this->marca = $marcaCamion;
                echo "El color del Camion " . $this->marca . " Es: " . $this->color . "<br>";

            }

            //OTRA FORMA DE SOBREESCRIBIR CON "parent"
            function arrancar(){
                parent::arrancar();//con esta linea ejecuta todo lo de la clase padre 
                echo "Camion arrancado........!";//esto mas se ejecuta y asi se sobreescribe mas facil
            }
        }
    ?>