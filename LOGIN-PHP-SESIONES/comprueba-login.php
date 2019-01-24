<?php
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
        header("Location:usuarios_registrados.php");
    }else{
        //en caso de que el usuario no exista redirigir a la misma pagina para que no pase mas aya del login
        header("Location:Login.php");
    }
}catch(Exception $e){
    die("ERROR EN : " . $e->GetMessage());
}

?>