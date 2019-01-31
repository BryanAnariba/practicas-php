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
    //PARA CERRAR LA SESION : INCLUIMOS ESTO EN TODAS LAS PAGINAS A LAS QUE TIENEN ACCESO EL USUARIO DESPUES DE HACER SESION
    session_start();//INICIAMOS LA SESSION POR OBLIGACION LE TENEMOS QUE INDICAR QUE SESION ESTA ABIERTA. SI NO EL NAVEGADOR NO SABE QUE ES LA SESION ACTIVA 
    session_destroy();
    header("Location: Login.php");//YA CON ESTO SI UN USUARIO DIFERENTE ENTRA AL NAVEGADOR E INTRODUCE LA URL LO MANDA AL LOGIN (y)

    /*---------------------------------------OJO SE INCLUYE EN TODAS LAS PAGINAS ASI COMO DICE ARRIBa---------------------------*/
    ?>
</body>
</html>