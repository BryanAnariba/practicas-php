<?php
    include('dataBaseConection.php');
    if(isset($_POST['name'])){
        $name = $_POST["name"];
        $description = $_POST["description"];
    }
    $query = "INSERT INTO TBL_TASK (NAME , DESCRIPTION) VALUES ('$name' , '$description')";
    $res = mysqli_query($conexion , $query);
    if($res) { 
        $jsonString = array();
        $jsonString[] = array('res'=>['Task Add Successfully']);
        $string = json_encode($jsonString);
        echo $string;
    } else {
        die('The Insert is Failed');
    }
    
?>
    