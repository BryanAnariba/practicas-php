<?php
    /*Programacion Orientada a Objetos (POO)*/
    /*
    -Trasladaro el concepto y comportamiento de los objetos de la vida real al codigo de programacion.
    -Objetivo Primordial de Reutilizar Codigo y hacer mas facil la programacion.

    Tres Pilares de POO:


        1- OBJETO:
                            COCHE
            Objeto:::::: Tiene Propiedades(atributos)
                *COLOR
                *PESO
                *ALTO
                *LARGO
            Objeto:::::: Tiene Comportamientos(que es capaz de hacer)
                *ARRANCAR
                *FRENAR
                *GIRAR
                *ACELERAR

        2- INSTANCIA:
            Ejemplar perteneciente a una clase

        3- CLASE: 
            Modelo donde se relatan las caracteristicas comunes de un grupo de objetos

                        
        Tipos de lenguajes :
            POO
            Orientados a procedimientos
    */




    /*<::::::::::::::::::::::::::::::::::::::::::::::::::POO CLASE COCHE::::::::::::::::::::::::::::::::::::::::::::::::::::::>*/ 
    class Coche{
        //Propiedades y metodos de los objetos::::::>
        //PROPIEDADES:

        /*Encapsulacion es para que no se pueda acceder desde otra clase un atributo que tu quieras que sea propio de dicha clase y 
        para ello se usa los modificadores de acceso:
            SON:

                -public: accesible a todo
                -private: accesible solo por el propio objeto
                -protected: accesible solo a clases en las cuales se apliquen herencia 
            
            
            */
        protected $ruedas;//al instanciar esto en Camion-Index.php da error por que no es posible acceder a dicha clase en este caso se debe cambiar a metodos get y set
        public $color;
        protected $motor;

        function Coche(){
            $this->ruedas = 4;
            $this->color = "Rojo";
            $this->motor = 2600;
        }
        //Metodos setter:::::>Definir y getter::::>Obtener
        function setArrancar(){

        }
        function getArrancar(){
            echo "Estoy Arrancando" ."<br>";
        }
        function setGirar(){

        }
        function getGirar(){    
            echo "Estoy Girando" . "<br>";
        }
        function setFrenar(){

        }
        function getFrenar(){
            echo "Estoy Frenando" . "<br>";
        }
        function setColor($colorCoche,$marcaCoche){
            $this->color = $colorCoche;
            echo "El color del coche " . $marcaCoche . " es: " . $this->color . "<br>";
        }

        /*FUNCION PARA OBTENER EL VALOR DE $RUEDAS CON METODOS GET Y SET*/
        
        function setRuedas($ruedas){//METODO SET PERMITE CAMBIAR EL ESTADO DE UNA PROPIEDAD
            $this->ruedas = $ruedas;
        }
        function getRuedas(){//METODO GET DEVUELVEN EL ESTADO DE UNA PROPIEDAD
            return $this->ruedas;
        }



    }

    //Instancia de la clase Coche{}
    //$audi = new Coche();//Estado Inicial al Objeto::::::>
    //$honda = new Coche();
    //$mitsubishi = new Coche();

    //Instanciar metodos:
    //$audi->getArrancar();
    //$audi->getGirar();
    //$audi->getFrenar();

    //echo "El coche tiene: " . $audi->ruedas;

    //$honda->establece_color("Rojo","Honda");
    //$audi->establece_color("Azul","Audi");
?>