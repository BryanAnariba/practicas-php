<?php
    require('../db/connection.php');
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $estado_civil = $_POST['estadoCivil'];
    $residencia = $_POST['residencia'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $newPassword = password_hash($password,PASSWORD_DEFAULT);
    if(!empty($nombres) && !empty($apellidos) && !empty($edad) && !empty($genero) && !empty($estado_civil) && !empty($residencia) && !empty($usuario) && !empty($password) && !empty($email) && !empty($cargo)) {
        $sqlInsertarPersona = 'INSERT INTO TBL_PERSONAS (NOMBRES_PERSONA,APELLIDOS_PERSONA,EDAD_PERSONA,ID_GENERO,ID_ESTADO_CIVIL,LUGAR_RESIDENCIA) VALUES (?,?,?,?,?,?)';
        $resultados = mysqli_prepare($connection , $sqlInsertarPersona);
        
        //mandando los valores preparados para evitar inyeccion sql
        $res = mysqli_stmt_bind_param($resultados , "ssiiis" , $nombres , $apellidos , $edad , $genero , $estado_civil , $residencia);
        $res = mysqli_stmt_execute($resultados);

        $sqlInsertarEmpleado = "INSERT INTO `tbl_empleados`(`ID_EMPLEADO`, `USUARIO`, `PASSWORD`, `CORREO`, `CARGO`) VALUES ((SELECT (`AUTO_INCREMENT` - 1)  AS VALOR_ACTUAL FROM  INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA = 'DB_INVENTARY_XAMPP' AND   TABLE_NAME   = 'TBL_PERSONAS'),'$usuario','$newPassword','$email','$cargo')";
        $res2 = mysqli_query($connection , $sqlInsertarEmpleado);
        if($res==true && $res2==true){
            $json[] = array("mensaje" => "Empleado Insertado Con Exito.");
            $string = json_encode($json);
            echo $string;
        }else{
            $json[] = array("mensaje" => "Empleado No Insertado Con Exito");
            $string = json_encode($json);
            echo $string;
        }
        mysqli_close($connection);
    } 

?>