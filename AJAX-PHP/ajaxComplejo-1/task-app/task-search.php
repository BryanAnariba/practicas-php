<?php
    include("dataBaseConection.php");
    $taskName = $_POST['search'];
    if(!empty($taskName)){//si la variable $taskName no esta vacia
        $query = "SELECT * FROM TBL_TASK WHERE NAME LIKE '$taskName%'";
        $result = mysqli_query($conexion , $query);
        if(!$result){//si no se ejecuta la consulta
            die('Query Error ' . mysqli_error($conexion));//muera la conexion con el error mostrado
        }
        $json =  array();
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'Name'=> $row['NAME'],
                'Desc'=> $row['DESCRIPTION'],
                'IDTask'=> $row['ID']
            );
        }
        $string = json_encode($json);
        echo $string;
    }
?>