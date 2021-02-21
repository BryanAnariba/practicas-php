<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos 1</title>
</head>
<body>
    <?php
        /*
            TIPOS DE ARRAYS:

                *INDEXADOS :> los que usan indices , osea las indices son la pocisiones siempre su pocision inicial es 0.

                *ASOCIATIVOS :> no se usan indices si no nombres ej
                    [1,5,8,7,7,8]
                    valor1,valor2,valor3,valor4,valor5
                    
                    para acceder:
                    echo array["valor3"];
        */

        //INDEXADOS: no ocupa la posicion pero solo es PHP ya que asume las posiciones
        /*FORMA 1
                    $arraySemanas[] = "Lunes";
                    $arraySemanas[] = "Martes";
                    $arraySemanas[] = "Miercoles";
                    $arraySemanas[] = "Jueves";
                    $arraySemanas[] = "Viernes";
                    $arraySemanas[] = "Sabado";
                    $arraySemanas[] = "Domingo";
        */

        //FORMA 2

        $arraySemanas = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");







        //ARREGLOS INDEXADOS
        echo "<strong>ARREGLOS INDEXADOS</strong>" . "<br>";
        echo $arraySemanas[0] . "<br>";
        echo $arraySemanas[1] . "<br>";
        echo $arraySemanas[2] . "<br>";
        echo $arraySemanas[3] . "<br>";
        echo $arraySemanas[4] . "<br>";
        echo $arraySemanas[5] . "<br>";
        echo $arraySemanas[6] . "<br><br>";




        //ARREGLOS ASOCIATIVOS
        echo "<strong>ARREGLOS NO INDEXADOS O ASOCIATIVOS</strong>" . "<br>";
        $datos = array("Nombre"=>"Bryan Ariel Sanchez Anariba","Edad"=>22,"Carrera"=>"Ingenieria en Sistemas");
        echo $datos["Nombre"] . "<br>";
        echo $datos["Edad"] . "<br>";
        echo $datos["Carrera"] . "<br>";
    ?>
</body>
</html>