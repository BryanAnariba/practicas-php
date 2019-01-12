<?php
    /*
    -funciones sirven para automatizar tareas, divide y venceras
    -En PHP hay dos tipos de funciones:::::> funciones predefinidas que vienen con el lenguaje, propias que crea uno
    -Funciones predefinidas::::::> LISTADO FUNCIONES PHP
    */ 

    //Ejemplos de funciones predefinidas:
    //convertir una cadena en minusculas:
    $palabra = "BRYAN";
    echo "<strong>Ejemplo Funciones Predefinidas</strong>" . "<br>";
    echo strtolower($palabra) . "<br><br><br>";


    echo "<strong>Ejemplo Funciones Propias con Argumento por Defecto</strong>" . "<br>";
    function frase_mayusculas($frase,$conversion=true){
        $frase = strtolower($frase);
        if($conversion==true){
            //si el parametros $conversion es verdadero retorna la primer letra mayuscula con la funcion "ucwords()"
            $respuesta = ucwords($frase);
        }else{
            //si el parametros $conversion es falso retorna la cadena completa en mayusculas con las funcion "strtoupper()"
            $respuesta = strtoupper($frase);
        }
        return $respuesta;
    }
    echo frase_mayusculas("BRYAN") . "<br>"; // funcion por defecto solo se le envia un parametro y php lo identifica como verdadero
    echo frase_mayusculas("bryan",false) . "<br><br>";


    //FUNCION PROPIA
    /*
        function nombre_funcion(){

        } 

        o

        function nombre_funcion($parametro1,......,$parametron){

        }
    */
    echo "<strong>Ejemplo Funciones Propias</strong>" . "<br>";
    function suma($numero1,$numero2){
        return $numero1 + $numero2;
    }
    function resta($numero1,$numero2){
        return $numero1 - $numero2;
    }
    $var = suma(5,15);
    $var2 = resta(10,20);
    echo "La suma de los dos parametros Enviados al servidor es: " . $var . "<br>" . " y la resta es: " . $var2 . "<br><br>";

    /*
    -Paso de Parametros: 
        POR VALOR:
            function ejemplo($parametro){
                $parametro ++;
            }

        
        POR REFERENCIA:
            function ejemplo(&$parametro){
                $parametro ++;
            }
    */


    echo "<strong>FUNCIONES POR VALOR Y POR REFERENCIA</strong>" . "<br>";
    echo "<strong>FUNCIONES POR VALOR:</strong>" . "<br>";
    function incremento($valor){
        $valor++;
        return $valor;
    }
    $numero = 9;
    echo incremento($numero) . "<br>";
    echo $numero . "<br><br>";//en este caso con funciones por valor al imprimir la variable numero no se incrementa



    echo "<strong>FUNCIONES POR REFERENCIA:</strong>" . "<br>";
    function incremento2(&$valor){
        $valor++;
        return $valor;
    }
    $numero = 9;
    echo incremento2($numero) . "<br>";
    echo $numero . "<br>";//en este caso con funciones por valor al imprimir la variable numero si se incrementa y por ende la variable numero se modifica



    echo "FUNCION DE OPERACIONES BASICAS" . "<br>";
    function operaciones_basicas($numero1 , $numero2){
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        $modulo = $numero1 % $numero2;
        return "La suma es: " . $suma ."<br>" . "La resta es: " . $resta . "<br>" . "La multiplicacion es: " . $multiplicacion . "<br>" . "La division es: " . $division . "<br" . "El modulo es: " . $modulo;
    }
    echo(operaciones_basicas(20 , 30));
    


?>