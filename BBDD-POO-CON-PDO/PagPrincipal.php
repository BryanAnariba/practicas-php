<?php
    require("ClassBBDD.php");
    $pais = $_GET["seccion"];
    //UNA VEZ LLAMADO EL ARCHIVO CLASS
    //SE INSTANCIA LA CLASE
    $productos = new ClassBBDD();
    $array_productos = $productos->getProductos($pais);//SE ALMACENA AQUI EL RETURN QUE MANDA LA CLASE BBDD
    //EJECUTAR ESTA INSTANCIA AHORA
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
    <?php
        foreach($array_productos as $elemento){
            echo "<table><tr><td>";
            echo $elemento['CÓDIGOARTÍCULO'] . "</td><td>";
            echo $elemento['NOMBREARTÍCULO'] . "</td><td>";
            echo $elemento['SECCIÓN'] . "</td><td>";
            echo $elemento['PRECIO'] . "</td><td>";
            echo $elemento['FECHA'] . "</td><td>";
            echo $elemento['IMPORTADO'] . "</td><td>";
            echo $elemento['PAÍSDEORIGEN'] . "</td><td>";
            echo $elemento['FOTO'] . "</td></tr></table>";
            echo "<br>";
            echo "<br>";
        }
    ?>
    
</body>
</html>