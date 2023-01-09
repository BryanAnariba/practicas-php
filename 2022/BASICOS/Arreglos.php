<?php
    //Importancia por que en consultas se almacenan en arreglos

    //Que son los arrays
    /*
    Espacio en la memoria del ordenador en la que se puede
    almacenar varios valores, en arreglos se almacenan todo tipo de 
    datos.
    */

    /*
    Tipos de arreglos:
        -Arreglos Indexados::::::>
            Empiezan en php indice 0 $registro[0] = null;
            $registro[3] = "Bryan";
            $registro[4] = "Ariel";
    */
    $semana[] = "Lunes";//ya los detecta los indices php
    $semana[] = "Martes";
    $semana[] = "Miercoles";

    echo $semana[1];

    //Arreglos Bidimencionales "Matrices"
    $alimentos = array("fruta"=>array("Tropical"=>"kiwi",
                                    "Citrico"=>"Mandarina",
                                    "otros"=>"Manzana"),
                        "leche"=>array("animal"=>"vaca",
                                    "vegetal"=>"coco"),
                        "lechse"=>array("animals"=>"vacas",
                                    "vegetals"=>"cocos")
    );

    foreach($alimentos as $clave_alim=>$alim){
        echo "$clave_alim:<br>";
        while(list($clave,$valor)=each($alim)){
            echo "$clave=$valor<br>";
        }
        echo "<br>";
    }




?>