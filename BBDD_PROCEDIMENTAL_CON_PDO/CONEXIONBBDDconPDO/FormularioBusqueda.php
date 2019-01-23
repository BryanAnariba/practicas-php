<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="conexionconPDOBBDD.php" method="GET">
        <label for="seccion">Digite la seccion Del Articulo:</label>
        <input type="text" id="seccion" name="seccion" placeholder="Digite la secciond el articulo"><br>
        <label for="paisOrigen">Digite el pais de Origen:</label>
        <input type="text" id="paiseOrigen" name="paisOrigen" placeholder="Pais de Origen"><br>
        <input type="submit" value="Procesar Informacion" name="procesarInformacion">
    </form>
</body>
</html>