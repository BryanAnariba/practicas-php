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
    $user = $_POST["user"];
    $password = $_POST["password"];

    //Aqui se procesa la informacion del formulario para que se inserte los campos en la BBDD Correspondiente.
    require("../funcionConexion.php");
    $conexion = mysqli_connect($Direccion_BBDD,$UsuarioBBDD,$PasswordBBDD);
    if(mysqli_connect_errno()){
        echo "No se encontro la Base de Datos....";
        exit();
    }
    mysqli_select_db($conexion,$NombreBBDD) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");

    //CONSULTA CON CAMPOS DE VARIABLES OJO EN EL MISMO ORDEN QUE ESTAN EN LA TABLA QUE DECLARAS AQUI SE MODIFICA CON LA CONSULTA
    $consulta = "SELECT * FROM DATOSPERSONALES WHERE NOMBRE='$user' AND NIF='$password'";

    $resultado = mysqli_query($conexion,$consulta);

    while($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
        echo "Bienvenido Estos son tus datos QUE ENVIA EL SERVIDOR......." . "<br><br>";
        echo "<b><h2>Datos Almacenados: </h2></b>";
        echo "<tr><td style='text-align:center;'>'" . $fila['NIF']. "'</td></tr>";
        echo "<tr><td style='text-align:center;'>'" . $fila['NOMBRE']. "'</td></tr>";
        echo "<tr><td style='text-align:center'>'" . $fila['APELLIDO']. "'</td></tr>";
        echo "<tr><td style='text-align:center'>'" . $fila['EDAD']. "'</td></tr>";
        
    }
    echo "<br><br>";
    echo "<b> Esta es la Consulta: <b>" . $consulta . "<br><br>";
    mysqli_close($conexion);
    // 'or '1'='1  SI TU PEGAS ESTO EN CONTRASEÑA MUESTRA TODOS LOS DATOS Y ESO ES UN ERROR MUY GRAVE QUE PUEDE SER MUY PELIGROSO YA QUE SE PUEDE ACCEDER A INFORMACION CONFIDENCIAL
?>
</body>
</html>