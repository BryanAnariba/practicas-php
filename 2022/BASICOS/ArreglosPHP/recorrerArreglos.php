<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recorriendo Arreglos</title>
</head>
<body>
    <?php
        //comprobar si un arreglo con el nombre ya existe
        $datos = array("BRYAN","Anariba");
        if(is_array($datos)){
            echo "Es un arreglo" . "<br>";
        }else{
            echo "No es un arreglo" . "<br>";
        }

        //RECORRIENDO UNA ARREGLO
        echo "<br><br><br><strong>Recorriendo un arreglo INDEXADO</strong>" . "<br>";
        $arraySemanas[] = "Lunes";
        $arraySemanas[] = "Martes";
        $arraySemanas[] = "Miercoles";
        $arraySemanas[] = "Jueves";
        $arraySemanas[] = "Viernes";
        $arraySemanas[] = "Sabado";

        //agregar un elemento al arreglo con push
        array_push($arraySemanas,"Domingo");


        for($i=0 ; $i<count($arraySemanas) ; $i++){
            echo $arraySemanas[$i] . "<br>";
        }


        //RECORRIENDO ARREGLOS ASOCIATIVOS
        echo "<br><br><br><strong>Recorriendo un arreglo ASOCIATIVO</strong>" . "<br>";
        $datos = array("Nombre"=>"Bryan Ariel Sanchez Anariba","Edad"=>22,"Carrera"=>"Ingenieria en Sistemas");


        //agregar un elemento al arreglo asociativo
        $datos["Pais"]="Honduras";

        foreach($datos as $clave=>$valor){
            echo "A $clave le corresponte $valor " . "<br>";
        }

    ?>
</body>
</html>