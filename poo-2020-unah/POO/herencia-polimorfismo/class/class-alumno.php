<?php
    include_once('class-persona.php');
    class Alumno extends Persona {
        // Atributos y set y get propios de la clase alumno mas los que hereda de la clase persona
        private $cuenta;
        private $promedio;

        public function __construct($nombre,$apellido,$edad,$genero,$carrera,$cuenta,$promedio) {
            parent::__construct($nombre,$apellido,$edad,$genero,$carrera); // Constructor clase pare no se llama con super es con parent
            $this->cuenta = $cuenta;
            $this->promedio = $promedio;
        }

        public function getCuenta()
        {
                return $this->cuenta;
        }

        public function setCuenta($cuenta)
        {
                $this->cuenta = $cuenta;

                return $this;
        }

        public function getPromedio()
        {
                return $this->promedio;
        }

        public function setPromedio($promedio)
        {
                $this->promedio = $promedio;

                return $this;
        }

        // Metodos propios del alumno
        public function matricular () {// metodo igual a la de persona 
                parent::matricular();
                echo 'Matricular Alumno ====> ' . $this->nombre . ' ' . $this->apellido;

        }
        public function cancelarClase () {
                echo 'Clase cancelada con exito -> ' . $this->nombre . ' ' . $this->apellido;
        }

        // Sobreescribiendo clases abstractas por que si no cae el sistema , DEBE SOBREESCRIBIRSE POR FUERZA
        public function aprobar () {
                echo 'Sobre escribiendo metodos si no lo haces el programa va a caer fijo...';
                echo 'Alumno aprobado';
                echo '<br>';
        }
        public function reprobar () {
                echo 'Sobre escribiendo metodos si no lo haces el programa va a caer fijo...';
                echo 'Alumno reprobado';
                echo '<br>';
        }

    }
?>