<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //Importando la clase Coche
        include("POO.php");
        //Importando la clase Camion extends Coche
        include("ReutilizandoClaseCoche-POO.php");

        //Instanciando Objetos de cada clase
        $honda = new Coche();//Clase coche
        $pegaso = new Camion();//Clase Camion

        //LLamando a metodos Get ya que tiene modificadores bloqueados ya sea protected y private
        echo "El Honda tiene: " .$honda->getRuedas() . " Ruedas" . "<br>"; // Aqui llamamos a metodo getRuedas para obtener el valor ya que es private
        echo "El Pegaso tiene: " . $pegaso->getRuedas() . " Ruedas" . "<br>";//Aqui llamamos a metodo getRuedas para obtener el valor ya que es private

        echo $pegaso->getFrenar();

        $pegaso->setColor("Azul" , "IZUZU");
        $pegaso->getArrancar();

       
        ?>
</body>
</html>