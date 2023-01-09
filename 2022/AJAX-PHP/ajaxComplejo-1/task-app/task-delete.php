<?php
    include('dataBaseConection.php');
    if(isset($_POST["id"])){
        $id = $_POST["id"];
        $query = "DELETE FROM TBL_TASK WHERE ID = $id";
        $res = mysqli_query($conexion , $query);
        if($res){
            $json = array();
            $json[] = array(
                'Message' => 'Query Execute Successfully'
            );
            $message = json_encode($json);
            echo $message;
        }else{
            die('Query Failed -> ' . mysqli_error());
        }
    }

?>