<?php
    include('dataBaseConection.php');
    $name = $_POST['name'];
    $description = $_POST['description'];
    $id = $_POST["id"];
    $query = "UPDATE TBL_TASK SET NAME = '$name' , DESCRIPTION = '$description' WHERE ID = $id";
    $res = mysqli_query($conexion , $query);
    if($res){
        $json = array();
        $json[] = array('message -> ' => 'Update Task Successfully!!!!');
        $string = json_encode($json);
        echo $string;
    }else{
        die('Query Failed.....');
    }
?>