<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Para Subir Imagen</title>
</head>
<body>
    <center>
        <form method="POST" id="formulario" enctype="multipart/form-data">
            <h2>Subir Imagen:</h2>
            <input type="file" name="imagen" id="imagen"><br><br>
            <input type="button" value="Enviar Imagen" id="btn-enviar">
        </form>
    </center>
    <div id="respuesta">
    
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/controlador.js"></script>
</body>
</html>