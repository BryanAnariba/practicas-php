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
        if(isset($_COOKIE["idioma_seleccionado"])){//si la cookie fue creada
            if($_COOKIE["idioma_seleccionado"]=="es"){//Si el usuario selecciono la bandera español
                header("Location: spanish.php");//diriga a la pagina
            }else{
                if($_COOKIE["idioma_seleccionado"]=="en"){//Si el usuario selecciono la bandera ingles
                    header("Location: english.php");//diriga a la pagina en ingles
                }
            }
        }
    ?>
    <table width="25%" border="0" align="center">
        <tr>
            <td colspan="2" align="center"><h1>Elige Tu Idioma</h1></td>
        </tr>
        <tr>
        <!--Mandamos un parametro en este caso es y en despues de ?=-->
            <td align="center"><a href="creaCookie.php?idioma=es"><img src="img/español.png" widht="90" height="60" alt="Español"></a></td>
            <td align="center"><a href="creaCookie.php?idioma=en"><img src="img/ingles.jpg" widht="90" height="60" alt="Español"></td>
        </tr>
    </table>
    
</body>
</html>