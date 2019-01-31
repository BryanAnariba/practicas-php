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
        if(!$_COOKIE["idioma_seleccionado"]){//SI NO SE A CREADO LA COOKIE
            header("Location: pag.php");//Dirige al usuario a la pagina de seleccion de idioma
        }else{
            if($_COOKIE["idioma_seleccionado"]=="es"){//Si el usuario selecciono la bandera español
                header("Location: spanish.php");
            }else{
                if($_COOKIE["idioma_seleccionado"]=="en"){//Si el usuario selecciono la bandera ingles
                    header("Location: english.php");
                }
            }
        }

    ?>
</body>
</html>