<?php
    //session_start();
    //if(isset($_SESSION["user_id"])){
        //echo $_SESSION["user_id"];
    //}
    if(isset($_FILES["imagen"])) {
            //Propiedades de la imagen
            $nombre_imagen = $_FILES['imagen']['name'];
            $tipo_imagen = $_FILES['imagen']['type'];
            $tamanio = $_FILES['imagen']['size'];

            //si el tamaño de la imagen es mayor a 3 MB
            if($tamanio <= 3000000) {
                //si los archivos no concuerdan con este formato que envie un mensaje
                if ($tipo_imagen != 'image/jpg' && $tipo_imagen != 'image/jpeg' && $tipo_imagen != 'image/png' && $tipo_imagen != 'image/gif') {

                    echo "Error, El Archivo No Es Una Imagen"; 

                } else { //caso contrario que procese la imagen

                    //ruta destino imagen DOCUMENT_ROOT->HTDOCS
                    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/intranet/uploads/login-registro-ajax/';

                    //primer parametro la ruta temporal donde se almacena y segundo la carpeta de destino
                    //la movemos del directorio temporal al escogido
                    move_uploaded_file($_FILES['imagen']['tmp_name'] , $carpeta_destino.$nombre_imagen);
                    echo "  <center>
                                <h2 style='color:green;'>Imagen Almacenada Exitosamente 
                                </h2>
                            <center>
                        ";
                }

            } else {
                echo "El Tamaño Del Archivo Es Demasiado Grande";
            }
        } else {//caso contrario
            echo "No hay archivos";
        }
?>