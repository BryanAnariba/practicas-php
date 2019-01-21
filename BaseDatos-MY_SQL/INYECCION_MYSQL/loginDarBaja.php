<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="ProcesoDarBaja.php" method="POST">
        <label for="user">Digite su Usuario:</label><br>
        <input type="text" placeholder="Username" name="user" id="user"><br>
        <label for="password">Digite su Contraseña: </label><br>
        <input type="password" placeholder ="Password" name="password" id="password"><br>
        <input type="submit" name="verificar" value="Verificar Informacion">
    </form>
</body>
</html>