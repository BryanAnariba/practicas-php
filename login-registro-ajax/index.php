<?php
    session_start();
    require('db/connection2.php');
    //si existe una variable de session llamada user id
    if(isset($_SESSION['user_id'])){
        $query = $conn->prepare('SELECT ID_EMPLEADO , CORREO , USUARIO FROM TBL_EMPLEADOS WHERE ID_EMPLEADO = :id');
        $query->bindParam(':id',$_SESSION['user_id']);
        $query->execute();
        $res = $query->fetch(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <?php
        require('partials/header.php');
    ?>
    <?php
        //si existe la variable de session con id de empleado que ejecute el bloque entero
        if(isset($_SESSION['user_id'])):
    ?>
        <div class="container" style="z-index:0;">
            <div class="row" style="margin-top:-150px;">
                <div class="col-md-6 my-auto">
                    <center>
                        <h2>
                           Bienvenido Al Sistema
                        </h2>
                        <h3>
                            Tus Credenciales:
                        </h3>
                        <p>
                            <b>ID Empleado </b><?=$res['ID_EMPLEADO'];?><br>
                            <b>Correo </b><?=$res['CORREO'];?><br>
                            <b>Nombre Usuario </b><?=$res['USUARIO'];?><br>
                        </p><br>
                    </center>
                </div>
                <div class="col-md-6 my-auto">
                    <center>
                        <img src="img/306232.png" class="img-fluid" alt="" width="300"><br>
                    </center>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <h2 class="text-center">Opciones a Realizar.</h2>
            <div class="row">
                
            </div>
        </div>
    <?php 
        endif; 
    ?>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>