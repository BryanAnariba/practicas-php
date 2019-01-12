<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
        }
        table{
            background-color:rgb(0,36,132);
            padding:5px;
            border: black 5px solid;
        }
        .validado{
            font-size:18px;
            color:#F00;
            font-weight:bold;
        }
        .no_validado{
            font-size:18px;
            color:blue;
            font-weight:bold;
        }
    </style>
</head>
<body>
<h1>Formulario para practicas</h1>
<form action="" method="POST" name="datos_usuario" id="datos_usuario">
    <table width="15%" align="center">
    <tr>
        <td>Nombre:</td>
        <td><label for="nombre_usuario"></label>
        <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
        <td>Edad:</td>
        <td><label for="edad_usuario"></label>
        <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>    
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
    </table>

<form>
</body>
</html>