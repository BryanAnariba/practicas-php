<?php

    // Esta es la clase padre o superclase en la que las demas hereden dichos campos de aqui
    /*
        esta clase puede ser abstracta por que es generica esto quiere decir que no la vamos a instanciar pero 
        alumno y maestros si se instancian por eso no son abastractas 
    */
    abstract class Persona {
        protected $nombre;
        protected $apellido;
        protected $edad;
        protected $genero;
        protected $carrera;

        public function __construct(
            $nombre,
            $apellido,
            $edad,
            $genero,
            $carrera
        ) {
            $this->nombre = $nombre;
            $this->apellido = $apellido; 
            $this->edad = $edad;
            $this->genero = $genero;
            $this->carrera = $carrera;
        }
  
        public function getNombre()
        {
                return $this->nombre;
        }

        
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getApellido()
        {
                return $this->apellido;
        }


        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        public function getEdad()
        {
                return $this->edad;
        }
 
        public function setEdad($edad)
        {
                $this->edad = $edad;

                return $this;
        }

        public function getGenero()
        {
                return $this->genero;
        }

        public function setGenero($genero)
        {
                $this->genero = $genero;

                return $this;
        }

        public function getCarrera()
        {
                return $this->carrera;
        }

        public function setCarrera($carrera)
        {
                $this->carrera = $carrera;

                return $this;
        }

        // Metodos a heredar a las demas clases 
        public function matricular () {
                echo 'Matricular Persona <br>';
        }


        // metodos abstractos debido a que no son utiles en clase persona pero en alumno y maestro si lo son y podemon redefirnirlos
        // si no se sobrescribem estos metodos en otra clase generara un error en la aplicacion 
        public abstract function aprobar ();
        public abstract function reprobar ();
    }
?>