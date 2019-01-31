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
        
        setcookie("prueba","Esta es la Informacion de la Cookie",time()+40,"/RepositorioPHP/LOGIN-COOKIES/cookie2");//Crear una cookie el cual lleva como 1 parametro nombre y 3 = valor
        //PARA DAR DURACION A LA COOKIE PARA GUARDAR CONTRASEÑAS Y HABITOS DE NAVEGACION 
        //ES EL TERCER PARAMETROS DE SETCOOKIE Y DEBE SER EN SEGUNDO
        //TIME()+40: SIGNIFICA QUE DESDE LA HORA ACTUAL TENEMOS 40 SEGUNDOS ANTES DE QUE DESAPAREZCA LA COOKIE
        //EL CUARTO PARAMETRO ES PARA USAR LA COOKIE EN UN DIRECTORIO DETERMINADO 

        /*SI TU DAS CLIC A Cookies y despues das a LeerCookie.php te dira que no encuentra la cookie
        ESTO SUCEDE POR QUE EL 4 PARAMETRO HACE REFERENCIA A QUE SOLO EN ESA DIRECCION SE EJECUTE ESA COOKIE
        ES DECIR QUE AL DAR CLICK EN LeerCookie2.php SI ENCONTRARA LA COOKI, CLARO SI QUITAS ESE PARAMETRO
        ENTRARA A TODO.
        */

        //COMO ELIMINAR UNA COOKIE
        /*
            time() - 1 // esto en principio es ilogico por eso lo elimina por que no se retrocede en el tiempo
        */
         
     ?>
</body>
</html>