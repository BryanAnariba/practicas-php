<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Busqueda PHP MYSQL</title>
    <style>
        body {
            background: url(fondo.jpg) no-repeat center top;
            background-size: cover;
            font-family: sans-serif;
            height: 100vh;
        }
        #btnProcesar{
            border: none;
            outline: none;
            height: 40px;
            background: #b80f22;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }
        #btnProcesar:hover {
            cursor: pointer;
            background: #ffc107;
            color: #000;
        }
        input[type="text"]{
            border: none;
            border-bottom: 3px solid #b80f22;
            background: darkgrey;
            outline: none;
            height: 40px;
            width: 350px;
            color: #fff;
            font-size: 20px;
            border-radius:20px;
            text-align:center;
        }
    </style>
    <?php
        //si queremos que el codigo de peticion este aqui es necesario poner una funcion que se activa cuando se apreta el boton
        /*
        function procesarDatos($nombreArticulo){
            pegar codigo de procesarDatos.php
        }
        */
    ?>
</head>
<body>
    <center>
        <form action="procesarDatos.php" method="POST">
            <label><h3>Buscar Aticulo En La Base de Datos: </h3></label><input type="text" name="nombrePais" id="nombreArticulo">
            <input type="submit" value="Procesar Informacion" name="btnProcesar" id="btnProcesar">
        </form>
    </center>
</body>
</html>