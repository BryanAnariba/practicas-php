<?php
    include('dataBaseConection.php');
    $id = $_POST["id"];
    $query = "SELECT * FROM TBL_TASK WHERE ID = $id;";
    $res = mysqli_query($conexion , $query);
    if($res){
        $json = array();
        while($row = mysqli_fetch_array($res)){
            $json[] = array(
                'names' => $row['NAME'],
                'descriptions' => $row['DESCRIPTION'],
                'id' => $row['ID']
            );
        }
        $string = json_encode($json[0]);//OJO AQUI EL 0 DA IMPORTANCIA A LA HORA QUE LOS REGISTROS SE PINTEN EN LOS INPUTS
        echo $string;
    }else{
        die('Query Failed...' . mysqli_error());
    }
?>