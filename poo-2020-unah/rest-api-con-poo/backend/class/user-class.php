<?php
    class Usuario {
        private $completeName;
        private $email;
        private $password;
        private $role;

        // Constructor con parametros iniciales en PHP, en java el contructor debe ser igual al nombre de la clase PHP no
        public function __construct($completeName,$email,$password,$role)
        {   
            $this->completeName = $completeName;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }

        // USO SETTER -> para establecer valores una propiedad del objeto usuario
        public function setcompleteName($completeName) {
            $this->completeName = $completeName;
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
        public function getcompleteName() {
            return $this->completeName;
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

        // C
        public function saveUser() { // C
            // Extraemos la data completa o informacion de la tabla en caso de ser BD
            $contenidoArchivo = file_get_contents('../data/usuarios.json');

            // convertimos a array asociativo del tipo ["clave" => "valor"];
            $usuarios = json_decode($contenidoArchivo, true);

            // Guardamos el elemento al arreglo con un indice 3 debido a que hay 3 resgistros se cuenta desde 0
            $usuarios[] = array(
                "completeName" => $this->completeName ,
                "email" => $this->email ,
                "password" => $this->password ,
                "role" => $this->role
            );
            $archivo = fopen("../data/usuarios.json" , "w");
            fwrite($archivo , json_encode($usuarios));
            fclose($archivo);
        }

        // R
        public static function viewUsers() { // R
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            echo $contenidoArchivo;
        }
        public static function viewUser($identificador) { // R
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            $usuarios = json_decode($contenidoArchivo , true);
            $usuarioEncontrado = $usuarios[$identificador];
            echo json_encode($usuarioEncontrado);
        }

        // U
        public function updateUser($identificador) { // U
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            $usuarios = json_decode($contenidoArchivo , true);
            
            // nuevo arreglo para actualizar y meter al arreglo de todo
            $usuario = array(
                "completeName" => $this->completeName,
                "email" => $this->email,
                "password" => $this->password,
                "role" => $this->role
            );

            // Guardamos con esto
            $usuarios[$identificador] = $usuario;
            $archivo = fopen("../data/usuarios.json" , "w");
            fwrite($archivo , json_encode($usuarios));
            fclose($archivo);
            
        }

        // D
        public function deleteUser($identificador) { // D
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            $usuarios = json_decode($contenidoArchivo , true);
        }
    }
?>