<?php
//CON SESIONES DEBE PONERSE ANTES DE VER CUALQUIER CONTENIDO OBVIAMENTE POR SEGURIDAD
    session_start();
    if(!isset($_SESSION["usuario"])){//si no hay algo almacenado podemos guardarlo en variable y usarlo mas adelante
        header("Location:Login.php");
    }
    $usuario = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos Usuarios....</h1>
    <?php
    echo "Hola:  " . $usuario . "<br><br>";
    ?>
    <p>Esto es Informacion Solo Para Usuarios Registrados</p>
    echo "hola mundo";
    <h2>Zona Usuarios Registrados</h2>
    <a href="usuarios_registrados2.php">Enlace a pagina Usuarios_registrados2</a>
    <br>
    <br>
    <a href="CerrarSesion.php">CERRAR SESION</a>
</body>
</html>