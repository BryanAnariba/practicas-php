<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Registro UNAH-VENTAS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    //ALMACENAMOS LOS DATOS QUE PROVIENEN DE LOS CUADROS DE TEXTO DEL FORMULARIO
    //$user = $_POST["user"];
    //$password = $_POST["password"];

    //Aqui se procesa la informacion del formulario para que se inserte los campos en la BBDD Correspondiente.
    require("../funcionConexion.php");
    $conexion = mysqli_connect($Direccion_BBDD,$UsuarioBBDD,$PasswordBBDD);

    /*PARA DAR USO A LAS INYECCIONES LAS VARIABLE GLOBALES DE $user Y $password DEBEN DE ESTAR ABAJO DE LA $conexion */
    //-------------------------------PRIMER FORMA DE ELIMINAR LA INYECCION SQL----------------------------------------
    $user = mysqli_real_escape_string($conexion,$_POST["user"]);
    $password = mysqli_real_escape_string($conexion,$_POST["password"]); 

    if(mysqli_connect_errno()){
        echo "No se encontro la Base de Datos....";
        exit();
    }
    mysqli_select_db($conexion,$NombreBBDD) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");

    //CONSULTA CON CAMPOS DE VARIABLES OJO EN EL MISMO ORDEN QUE ESTAN EN LA TABLA QUE DECLARAS AQUI SE MODIFICA CON LA CONSULTA

    $consulta = "DELETE FROM DATOSPERSONALES WHERE NOMBRE='$user' AND NIF='$password'";

    $resultado = mysqli_query($conexion,$consulta);
    if($resultado == false){
        echo "ERROR AL INSERTAR EL REGISTRO :(";
    }else{
        if(mysqli_affected_rows($conexion)==0){//con esta instruccion se verifica si tal linea existe y retorna el numero de filas
            echo "No hay Registros Creados con Dicho Codigo del Articulo";
        }else{
            echo "<b>Se Han Eliminado<b> " . mysqli_affected_rows($conexion) . " <b>Filas o Registros.<b>";
        }
    }
    mysqli_close($conexion);
?>
</body>
</html>