<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bidimensionales</title>
</head>
<body>
    <?php
        /*
            arrays asociativos:

            frutas:  kiwi, mandarina, manzana

            leches: vaca, coco

            carnes: lomo, pata
        
        */


        //ARREGLO ASOCIATIVO DE DOS DIMENSIONES
        $alimentos =    array(
                            "Frutas"=>  array(
                                            "Tropical"=>"Kiwi",
                                            "Citrico"=>"Mandarina",
                                            "Otros"=>"manzana"
                                        ),

                            "Leche"=>   array(
                                            "Animal"=>"Vaca",
                                            "Vegetal"=>"Coco"
                                        ),

                            "Carne"=> array(
                                            "Vacuno"=>"Lomo",
                                            "Porcino"=>"Pata"
                                        )
                            );
    
        //ACCEDIENDO A LOS ELEMENTOS DEL ARREGLO
        echo $alimentos["Carne"]["Vacuno"] . "<br>";//accediendo a Lomo


        echo "<h2>Imprimiendo un arreglo asociativo bidimensional</h2><br>";
        //      ! arreglo       fruta,lecha,carne   nombre los alimentos kiwi lomo coco                  
        foreach($alimentos as $categoriaAlimentos=>$nombreAlimentos){
            echo "<b>$categoriaAlimentos: </b><br>";
            while(list($clave,$valor)=each($nombreAlimentos)){//mintras aya elementos en la lista imprimi clave:valor ej: tropical:kiwi
                echo "$clave = $valor" . "<br>";//tropical:kiwi
            }
            echo "<br>";
        }   


        echo "<h2>Imprimiendo un arreglo asociativo bidimensional con VAR_DUMP()</h2><br>";
        echo var_dump($alimentos);

    ?>
</body>
</html>