<?php
    include('dataBaseConection.php');
    $query = "SELECT ID , NAME , DESCRIPTION FROM TBL_TASK";
    $results = mysqli_query($conexion , $query);
    if($results){
        $json = array();
        while($row = mysqli_fetch_array($results)){
            $json[] = array(
                'id' => $row['ID'],
                'name' => $row['NAME'],
                'description' => $row['DESCRIPTION']
            );
        }
        $jsonString = json_encode($json);
        echo $jsonString;
    }else{
        die('The Query is Failed' . mysqli_error($conexion));
    }
?>