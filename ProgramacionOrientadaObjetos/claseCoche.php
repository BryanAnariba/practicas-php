<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programacion Orientada a Objetos</title>
</head>
<body>
    <?php
        include("claseVehiculos.php");

        //EJEMPLARIZAR UNA CLASE
        $vehiculo_1 = new Coche();
        $vehiculo_2 = new Camion();

        //aqui es necesario usar encapsulacion para proteger los atributos
        //ACCEDER A UNA PROPIEDAD O METODO DE UNA CLASE
        //$vehiculo_1->ruedas = 5;//esto no se debe hacer ya que los coche solo tienen 4 ruedas y aqui es donde van los modificadores de acceso

        /*                              AQUI SOLO QUITANDO EL MODIFICADOR DE ACCESO A PUBLIC FUNCIONA

        echo "Ruedas del Coche: " . $vehiculo_1->ruedas . "<br>";
        echo "Ruedas del Camion: " . $vehiculo_2->ruedas . "<br>";
        
        */

        //echo $vehiculo_2->arrancar() . "<br>";//aqui el ejemplo de herencia ya que hereda de coche
        $vehiculo_2->estableceColor("Blanco","Toyota");
        $vehiculo_2->arrancar();
        echo "<br><strong>********************************PROPIEDADES DEL CAMION******************************</strong>";
        echo "<br>El vehiculo Camion tiene: " . $vehiculo_2->getRuedas() . " Ruedas<br>";//imprimiendo el metodo getRuedas con un atributo protegidO
        echo "<br>El vehiculo Coche tiene un motor: " . $vehiculo_1->getMotor() . "<br>";//imprimiendo el metodo getRuedas con un atributo protegido
        echo "<strong>********************************PROPIEDADES DEL COCHE******************************</strong>";
        echo "<br>El vehiculo Coche tiene: " . $vehiculo_1->getRuedas() . " Ruedas<br>";//imprimiendo el metodo getRuedas con un atributo protegido
        echo "<br>El vehiculo Coche tiene un motor: " . $vehiculo_1->getMotor() . "<br>";//imprimiendo el metodo getRuedas con un atributo protegido
        ?>
        
</body>
</html>