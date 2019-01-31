<?php
    try{
        /*ESTA MISMA VARIABLE SE USA EN LAS DEMAS PHP */$BasedeDatos = new PDO('mysql:host=localhost; dbname=prueba',"root","");//CREAMOS LA CONEXION
        $BasedeDatos->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//PARA LOCALIZAR ERROR
        $BasedeDatos->exec("SET CHARACTER SET UTF8");//PARA QUE NO HAYA PROBLEMA CON Ñ Y ACENTOS
    }catch(Exception $e){
        echo "Error en ...." . $e->getMessage(); 
        echo "Linea del Error" . $e->getLine();
    }
?>