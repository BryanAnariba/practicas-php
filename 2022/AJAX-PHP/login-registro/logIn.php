<?php
    session_start();
    include('db2.php');
    $msm = '';
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conn->prepare('SELECT ID , EMAIL , USERNAME , PASSWORD FROM TBL_LOGIN WHERE EMAIL = :email');
        $records->bindParam(':email',$_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $msm = '';
        if(count($results)>0 && password_verify($_POST['password'],$results['PASSWORD'])){
            $_SESSION['user_id'] = $results['ID'];
            header('location: index.php');
        } else {
            $msm = 'Sorry Those Credentials Do Not Match';
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login</title>
</head>
<body>
    <?php require('partials/header.php');?>


    <?php
        //                  COMPROBACION DE SI SE CREO EL USUARIO NUEVO
        // password prueba todos :-> oracle
        if(!empty($msm)):
    ?>
        <p><?=$msm?></p>
    <?php
        endif;
    ?>

    <h1 class="text-white display-4 text-center">Login</h1>
    <span>OR <a href="signUp.php">Sign Up</a></span>
    <form action="logIn.php" method="POST">
        <input type="text" name="email" id="email" placeholder="Pleaso Digit Your Email">
        <input type="password" name="password" placeholder="Please Digit Your Password">
        <center><input type="submit" value="Log In"></center>
    </form>
</body>
</html>