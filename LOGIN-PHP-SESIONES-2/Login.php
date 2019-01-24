<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!--2 PASO : INCLUIR LA CONEXION-->
    <?php
    if(isset($_POST["entrar"])){//si se pulso el boton
        try {
            $base = new PDO("mysql:host = localhost; dbname=prueba","root","");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS = :login AND PASSWORD = :password;";
            $resultado = $base->prepare($sql);
            $login = htmlentities(addslashes($_POST["login"]));//para caracteres extraños para evitar la inyeccion sql
            $password = htmlentities(addslashes($_POST["password"]));//para caracteres extraños para evitar la inyeccion sql
            $resultado->bindValue(":login",$login);
            $resultado->bindValue(":password",$password);
            $resultado->execute();

            //rowCount(); numero de registros que devuelve una columna por si existe usuario retorna cuantos usuarios con dichos parametros exiten

            $numeroRegistro = $resultado->rowCount();

            if($numeroRegistro != 0){
                //USO DE SESIONES

                session_start();
                $_SESSION["usuario"] = $_POST["login"];//PARA RESTRINGIR El 0ENTRAR CON LA URL
                //header("Location:usuarios_registrados.php");
            }else{
                //en caso de que el usuario no exista redirigir a la misma pagina para que no pase mas aya del login
                //header("Location:Login.php");
                echo "<h2 style='color:red; font-size:40px; font-weight:700;'>CREDENCIALES INVALIDAS</h2>";
            }
        }catch(Exception $e){
            die("ERROR EN : " . $e->GetMessage());
        }
    }
    ?>
    <?php
        if(!isset($_SESSION["usuario"])){// si no se a iniciado sesion incluye el formulario
            include("Formulario.php");
            
        }else{//en caso de que ya se haya logeado que el formulario desaparezca y que desaparezca el formulario
            echo "Usuario: " . $_SESSION["usuario"];
            echo "<a href='CerrarSesion.php'>CERRAR SESION</a>";
        }
    ?>
    <h2>CONTENIDO DE LA WEB</h2>
        <table width="800" border="0">
        <tr>
            <td><img src="img1.png" width="300" height="166" alt=""></td>
            <td><img src="img2.jpg" width="300" height="166" alt=""></td>
        </tr>
        <tr>
            <td><img src="img1.png" width="300" height="166" alt=""></td>
            <td><img src="img2.jpg" width="300" height="166" alt=""></td>
        </tr>
    </table>
</body>
</html>