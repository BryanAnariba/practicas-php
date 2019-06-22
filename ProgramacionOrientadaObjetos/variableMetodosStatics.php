<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Metodos estaticos
    </title>
</head>
<body>
<?php
    class compraVehiculos{
        private $precioBase;

        //variable statico usado en todas las instancias 
        private static $ayudaDelGobiernoDesc=0;//el campo pertenece a la clase

        function compraVehiculos($gama){
            if($gama=="urbano"){
                $this->precioBase = 10000;
            }else if($gama == "compacto"){
                $this->precioBase = 20000;
            }else if($gama == "berlina"){
                $this->precioBase = 30000;
            }
        }

        function climatizador(){
            $this->precioBase = $this->precioBase + 2000;
        }
        function navegadorGPS(){
            $this->precioBase = $this->precioBase + 2500;
        }
        function asientosCuero(){
            $this->precioBase = $this->precioBase + 3000;
        }

        function precioFinal(){
            $valorFinal;
            $valorFinal = $this->precioBase - self::$ayudaDelGobiernoDesc;
            return $valorFinal;
        }


        //metodo ESTATICOS PARA LA AYUDA A LA COMPRA DE UN CARRO
        static function descuentoDelGobierno(){
            if(date("m-d-y")>"21/06/2019"){//si la fecha es mayor que 21 de junio del 2019 se aplica 4500 de descuento
                self::$ayudaDelGobiernoDesc = 4500;
            }else{//caso contrario solo aplica descuento de 1000
                self::$ayudaDelGobiernoDesc = 1000;
            }
            
        }
        
    }


    //$compraVehiculos::$ayudaDelGobiernoDesc = 10000;



    //PARA ESTO SIRVE LA STATIC PARA SOLO LLAMAR UNA VEZ Y APLICA DESCUENTO DE 4500 POR LA COMPRA DE AUTOS
    compraVehiculos::descuentoDelGobierno();



    $compraAntonio = new compraVehiculos("compacto");//precio standar del vehiculo 20000
    $compraAntonio->climatizador();//aumenta 2000
    $compraAntonio->asientosCuero();//aumenta 3000
    echo "El valor de su Vehiculo es: " . $compraAntonio->precioFinal() . "<br>";//total 25000 - 4500 = 20500



    $compraBryan = new compraVehiculos("compacto");
    $compraBryan->climatizador();
    $compraBryan->asientosCuero();
    $compraBryan->navegadorGPS();
    echo "El valor de su Vehiculo es: " . $compraBryan->precioFinal() . "<br>";
    
    
?>    

</body>
</html>