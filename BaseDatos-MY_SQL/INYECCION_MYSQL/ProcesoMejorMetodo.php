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
    $pais = $_POST["pais"];

    //Aqui se procesa la informacion del formulario para que se inserte los campos en la BBDD Correspondiente.
    require("../funcionConexion.php");
    $conexion = mysqli_connect($Direccion_BBDD,$UsuarioBBDD,$PasswordBBDD);
    if(mysqli_connect_errno()){
        echo "No se encontro la Base de Datos....";
        exit();
    }
    mysqli_select_db($conexion,$NombreBBDD) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");

    //1 PASO PARA MEJOR METODO PARA EVITAR INYECCIONES SQL: crear la instruccion SQL con la interrogante en el criterio
    $sql = "SELECT CÓDIGOARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN = ?";
    //2 PASO PARA MEJOR METODO PARA EVITAR INYECCIONES SQL: preparar la consulta utilizando la consulta prepare()
    $resultado = mysqli_prepare($conexion,$sql);
    //3 PASO PARA MEJOR METODO PARA EVITAR INYECCIONES SQL: unir los parametros que el usuario escribio en cuadro de texto a la sentencia SQL
    $ok = mysqli_stmt_bind_param($resultado, "s",$pais); // el parametro 2 : s para string, i para entero, d para decimal
    //4 PASO PARA MEJOTR METODO PARA EVITAR INYECCIONES SQL: ejecutar la consulta 
    $ok = mysqli_stmt_execute($resultado);
    if($ok == false){
        echo "Error al ejecutar la consulta";
    }else{
    //4 PASO PARA MEJOR METODO PARA EVITAR INYECCIONES SQL: Asociar los resultados a los campos de la variables , en este caso solo se declararon 4 Variables pero pueden ser mas.
        $ok = mysqli_stmt_bind_result($resultado,$codigoArticulo,$nombreArticulo,$seccionArticulo,$paisArticulo);
    //5 PASO PARA MEJOR METODO PARA EVITAR INYECCIONES SQL: leer los valores
        echo "<h1>Articulos Encontrados </h1><br><br>";
        while(mysqli_stmt_fetch($resultado)){
            echo $codigoArticulo . " " . $seccionArticulo . " " . $paisArticulo . " " . $paisArticulo . "<br>";
        }
    }
    mysqli_stmt_close($resultado);




    // 'or '1'='1  SI TU PEGAS ESTO EN CONTRASEÑA MUESTRA TODOS LOS DATOS Y ESO ES UN ERROR MUY GRAVE QUE PUEDE SER MUY PELIGROSO YA QUE SE PUEDE ACCEDER A INFORMACION CONFIDENCIAL
?>
</body>
</html>