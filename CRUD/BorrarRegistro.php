<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Registro</title>
</head>
<body>
    <?php
        include("Conexion.php");
        $id = $_GET["ID"];
        $BasedeDatos->query("DELETE FROM DATOS_USUARIOS WHERE ID='$id'");//Eliminamos el registro que tenga como parametro el mismo id
        header("Location:index.php");
    ?>
</body>
</html>