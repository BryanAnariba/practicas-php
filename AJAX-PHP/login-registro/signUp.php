<?php
    require('dataBase.php');
    $message = '';
    /*
        procedure

        CREATE PROCEDURE `SP_INSERT_USERS`(P1 VARCHAR(150), P2 VARCHAR(150) , P3 VARCHAR(200))
	    INSERT INTO TBL_LOGIN (EMAIL , USERNAME , PASSWORD) VALUES (P1,P2,P3);
    
    */
    //si no estan vacios los campos del formulario
    if(!empty($_POST["email"]) && !empty($_POST["username"]) && !empty($_POST["pass"])){
        //INSERCION USANDO CONSULTAS PREPARADAS
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = password_hash($_POST["pass"],PASSWORD_BCRYPT);
        $query = "CALL SP_INSERT_USERS('$email','$username','$password')";
        $res = mysqli_query($conexion , $query);
        if($res){
            $message = "Successfully , Create A new User";
        }else{
            $message = "Sorry there must have been an issue create your user";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/logIn.css">    
    <title>Sign Up</title>
</head>
<body>
    <?php require('partials/header.php');?>

    <?php
        //                  COMPROBACION DE SI SE CREO EL USUARIO NUEVO
        // password prueba todos :-> oracle
        if(!empty($message)):
    ?>
        <p><?=$message?></p>
    <?php
        endif;
    ?>
    <h1>Sign Up</h1>
    <span>OR <a href="logIn.php">Log In</a></span>
    <form action="signUp.php" method="POST">
        <input type="email" name="email" id="email" placeholder="Pleaso Digit Your Email">
        <input type="text" name="username" id="email" placeholder="Pleaso Digit Your Username">
        <input type="password" name="pass" placeholder="Please Digit Your Password">
        <input type="password" name="comfirPassword" placeholder="Please Comfirm Your Password">
        <center><input type="submit" value="Sign Up"></center>
    </form>
</body>
</html>