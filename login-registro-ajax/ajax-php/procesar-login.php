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
            $json[] = array("mensaje" => true);
            $string = json_encode($json);
            echo $string;
        } else {
            $json[] = array("mensaje" => false);
            $string = json_encode($json);
            echo $string;
        }
    } 
?>