<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testeando La Conexion</title>
</head>
<body>
    <?php
        include("Conexion.php");

    
    
    
    
    
    
    /********************************PASOS PARA REALIZAR UNA CONSULTA***********************************/

    //ASIENDO CONSULTA
    $consultaUno = "SELECT * FROM TBL_DATOSUSUARIO";


    //EJECUTAR LA CONSULTA MYSQLI_QUERY(CONEXION,CONSULTA);
    $resultado = mysqli_query($conexionBaseDatos,$consultaUno);


    //PARA IR VIENDO LINEA A LINEA LO QUE HAY EN LA VARIABLE $resultado Y LO ALMACENA EN UN ARRAY
    /*$filaConsulta = mysqli_fetch_row($resultado);*/

    echo "<h2>Impresion de Registros en PHP con MYSQL</h2>" . "<br>";
    
    
    /*                              IMPRESION DE UN SOLO REGISTRO
    echo    $filaConsulta[0] . " " . 
            $filaConsulta[1] . " " . 
            $filaConsulta[2] . " " . 
            $filaConsulta[3] . " " . 
            $filaConsulta[4];
    */


    /*-----------------------------IMPRESION DE TODOS LOS REGISTROS EN LA BASE DE DATOS---------------------------------*/
    while(($filaConsulta=mysqli_fetch_row($resultado))==true){
        echo    $filaConsulta[0] . " " . 
                $filaConsulta[1] . " " . 
                $filaConsulta[2] . " " . 
                $filaConsulta[3] . " " . 
                $filaConsulta[4] . "<br>";
    }

    //CERRAR CONEXION PARA OPTIMIZAR RECURSOS
    mysqli_close($conexionBaseDatos);
    ?>
    
</body>
</html>