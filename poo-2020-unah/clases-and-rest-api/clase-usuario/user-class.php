<?php
    class User {
        private $username;
        private $email;
        private $password;
        private $role;

        // Constructor con parametros iniciales en PHP, en java el contructor debe ser igual al nombre de la clase PHP no
        public function __construct($username,$email,$password,$role)
        {   
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }

        // USO SETTER -> para establecer valores una propiedad del objeto usuario
        public function setUsername($username) {
            $this->username = $username;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function setPassword($password) {
            $this->password = $password;
        }
        public function setRole($role) {
            $this->role = $role;
        } 

        // USO GETTER -> para hacer el retorno del valor de una propiedad  del objeto usuario
        public function getUsername() {
            return $this->username;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getPassword() {
            return $this->password;
        }
        public function getRole() {
            return $this->role;
        }

        // Retorna toda la cadena el objeto entero algo asi como un json
        public function __toString()
        {
            return $this->username . ' ' . $this->email . ' ' . $this->password . ' ' . $this->role; 
        }

        // AQUI VAN FUNCIONES CRUD 
        public function saveUser() { // C

        }
        public function viewUser() { // R

        }
        public function updateUser() { // U

        }
        public function deleteUser() { // D

        }
    }
?>