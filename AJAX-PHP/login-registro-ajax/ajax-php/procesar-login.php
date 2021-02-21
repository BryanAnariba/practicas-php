<?php
    session_start();
    require('../db/connection2.php');
    if(!empty($_POST['email'] && !empty($_POST['password']))) {
        $records = $conn->prepare('SELECT CORREO , PASSWORD , ID_EMPLEADO FROM TBL_EMPLEADOS WHERE CORREO = :email');
        $records->bindParam(':email',$_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $bandera = password_verify($_POST['password'],$results['PASSWORD']);
        if($bandera == true){
            $_SESSION['user_id'] = $results['ID_EMPLEADO'];
            $string = json_encode($_SESSION['user_id']);
            echo $string;
        } else {
            $string = json_encode("error2");
            echo $string;
        }
    } 
?>