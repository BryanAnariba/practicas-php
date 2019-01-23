<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /*MEJOR METODO PARA EVITAR INYECCIONES SQL*/
        $codigoArticulo = $_POST["codigoArticulo"];
        $nombreArticulo = $_POST["nombreArticulo"];
        $seccionArticulo = $_POST["seccionArticulo"];
        $precioArticulo = $_POST["precioArticulo"];
        $fechaArticulo = $_POST["fechaArticulo"];
        $origenArticulo = $_POST["origenArticulo"];
        $importadoArticulo = $_POST["importadoArticulo"];
        $fotoArticulo = $_POST["fotoArticulo"];

        require("../../funcionConexion.php");
        $conexion = mysqli_connect($Direccion_BBDD,$UsuarioBBDD,$PasswordBBDD);
        if(mysqli_connect_errno()){
            echo "No se encontro la Base de Datos....";
            exit();
        }
        mysqli_select_db($conexion,$NombreBBDD) or die ("No se encuentra la BBDD");
        mysqli_set_charset($conexion,"utf8");

        $consulta = "INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO,NOMBREARTÍCULO,SECCIÓN,PRECIO,IMPORTADO,PAÍSDEORIGEN,FECHA,FOTO) VALUES (?,?,?,?,?,?,?,?);";

        $resultado = mysqli_prepare($conexion,$consulta);

        //segundo parametros s es de String d DECIMAL i Integer
        $ok = mysqli_stmt_bind_param($resultado,"ssssssss",$codigoArticulo,$nombreArticulo,$seccionArticulo,$precioArticulo,$importadoArticulo,$origenArticulo,$fechaArticulo,$fotoArticulo);

        $ok = mysqli_stmt_execute($resultado);
        if($ok == false){
            echo "ERROR AL EJECUTAR LA CONSULTA........";
        }else{
            echo "REGISTRO INSERTADO EXITOSAMENTE....";
        }


        mysqli_stmt_close($resultado);
    ?>
</body>
</html>