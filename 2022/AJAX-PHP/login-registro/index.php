<?php
    session_start();
    require('db2.php');
    if(isset($_SESSION['user_id'])){
        $query = $conn->prepare('SELECT ID , EMAIL , PASSWORD , USERNAME FROM TBL_LOGIN WHERE ID = :id');
        $query->bindParam(':id',$_SESSION['user_id']);
        $query->execute();
        $res = $query->fetch(PDO::FETCH_ASSOC);
        $user = null;
        if(count($res) > 0){
            $user = $res;
        }
    }
    
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Example With PHP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
    <body style="   
                    background: url(assets/img/posicionamiento.jpg);    
                    min-height:100vh;
                    background-size: cover;
                    background-attachment: fixed;
                ">

    <?php require('partials/header.php');?>
    <?php
        //                  COMPROBACION DE SI SE CREO EL USUARIO NUEVO
        // password prueba todos :-> oracle
        if(!empty($user)):
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <h2>
                        Welcome to your Profile
                    </h2>
                    <h3>
                        Your Credentials :
                    </h3>
                    <p>
                        <img src="assets/img/manager-312603_960_720.png" class="img-fluid" alt="" width="300"><br>
                        <b>ID OF DATA BASE -> </b><?=$user['ID'];?><br>
                        <b>Email -></b><?=$user['EMAIL'];?><br>
                        <b>Name Of User -></b><?=$user['USERNAME'];?><br>
                    </p><br>
                </div>
                <div class="col-md-6 my-auto">
                    <h3>You Are Successfully Logged!!!!</h3>
                    <a href="logOut.php" class="btn btn-block btn-danger text-white text-center">LogOut</a>
                </div>
            </div>
        </div>
        
        
    <?php else: ?>
        <h1>Please Login Or Sign Up</h1>
        <div class="col-md-12 my-auto">
        <img src="assets/img/desarrollo-web.png" class="img-fluid" alt="">
        </div><br>
        <a href="logIn.php" class="btn btn-outline-danger text-white text-center" style="width:320px;">
            Log In
        </a> 
            Or 
        <a href="signUp.php" class="btn btn-outline-danger text-white text-center" style="width:320px;">
            Sign Up
        </a>
        <br>
        <hr>
    <?php endif; ?>



</body>
</html>