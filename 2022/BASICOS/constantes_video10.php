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
        //declaracion de una constane, por convenio mayuscula ni llevan el $
        //define("NOMBRE_CONSTANTE",Valor);

        define("AUTOR","Bryan");
        echo "El autor es: " . AUTOR . "<br>";
        echo "Linea: " . __LINE__;
        echo "<br>";
        echo "Trabajamos con el fichero: " . __FILE__;
    ?>
</body>
</html>