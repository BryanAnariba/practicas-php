<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .resaltar{
            color:red;
            font-weight: 700;
        }
    </style>
</head>
<body>
<?php
    /*Video 7........variables estaticas: en caso que necesitemos que la variable se incremente :D 
    function incrementaVariable(){
        static $contador = 0;
        $contador ++ ;
        echo "UNAH-REU-" . $contador . "<br>";
    }
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();*/

    
    /*String PHP VIDEO 8*/
    echo "<p class='resaltar'>Este es un parrafo</p>";
    /*otra forma de poder hacer escape de caracteres*/
    echo "<p class=\"resaltar\">Este es un parrafo</p>";
    /*Funciones para comparar string*/
    $variable1="CASAs";
    $variable2="CASA";
    $var3 = strcasecmp($variable1,$variable2);
    if($var3){
        echo "Las variables no coinciden <br>";
    }else{
        echo "Las variables coinciden: <br>";
    }
    //strcasecmp();
    //strcmp(); // ambas devuelven un true o false


    /*VIDEO 9 OPERADORES DE COMPARACION:::::::::::>*/
    /*== igual
    === igual con mismo tipo variable
    > mayor que
    < menor que
    != o <> diferente
    */
    echo "<br>";
    $variable1 = 8;
    $variable2 = "8";
    $variable3 = "Bryan";
    if($variable1 === $variable2){
        echo "Las variables son igualess";
    }else{
        echo "Las variables no son igualess";
    }




?>
    
</body>
</html>