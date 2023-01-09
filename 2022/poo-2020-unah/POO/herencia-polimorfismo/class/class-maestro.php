<?php
    // EN ESTA CLASE Y SU INSTANCIA SE APLICARA POLIMORFISMO
    include_once('class/class-persona.php');
    class Maestro extends Persona {
        protected $numeroEmpleado;
        protected $sueldo;
        protected $horario;

        public function __construct($nombre,$apellido,$edad,$genero,$carrera,$numeroEmpleado,$sueldo,$horario) {
            parent::__construct($nombre,$apellido,$edad,$genero,$carrera);
            $this->numeroEmpleado = $numeroEmpleado;
            $this->sueldo = $sueldo;
            $this->horario = $horario;
        }

        public function getNumeroEmpleado()
        {
                return $this->numeroEmpleado;
        }

        public function setNumeroEmpleado($numeroEmpleado)
        {
                $this->numeroEmpleado = $numeroEmpleado;

                return $this;
        }

        public function getSueldo()
        {
                return $this->sueldo;
        }

        public function setSueldo($sueldo)
        {
                $this->sueldo = $sueldo;

                return $this;
        }

        public function getHorario()
        {
                return $this->horario;
        }

        public function setHorario($horario)
        {
                $this->horario = $horario;

                return $this;
        }

        public function aprobar () {
            echo 'Cerdo te Reprobe <br>';
        }
        public function reprobar () {
            echo 'Cerdo te Aprobe <br>';
        }
    }
?>