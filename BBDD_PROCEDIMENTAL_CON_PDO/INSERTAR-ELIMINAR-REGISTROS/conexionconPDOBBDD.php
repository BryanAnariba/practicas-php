<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conexion BBDD con PDO</title>
</head>
<body>
    <?php
        $codigoArticulo = $_GET["codigoArticulo"];
        $nombreArticulo = $_GET["nombreArticulo"];
        $seccionArticulo = $_GET["seccionArticulo"];
        $precioArticulo = $_GET["precioArticulo"];
        $fechaArticulo = $_GET["fechaArticulo"];
        $importadoArticulo = $_GET["importadoArticulo"];
        $origenArticulo = $_GET["origenArticulo"];
        $fotoArticulo = $_GET["fotoArticulo"];
        //FORMA DE CONECTAR LA BASE DE DATOS CON PDO EN UN BLOQUE TRY CATCH
        try{

        //  $nombre_BBDD = new PDO('mysql:host=proveedor; dbname=nombre_BBDD','usuario','password');
            $BBDD = new PDO('mysql:host=localhost; dbname=prueba','root','');
            $BBDD->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $BBDD->exec("SET CHARACTER SET utf8");// compatibilidad utf8
            $instruccionSQL = "INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO,NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN,FECHA,IMPORTADO,FOTO) VALUES
            (:codigoarticulo, :nombrearticulo , :seccionarticulo , :precioarticulo, :paisarticulo , :fechaarticulo , :importadoarticulo , :fotoarticulo);";

            $resultado = $BBDD->prepare($instruccionSQL);//guarda la consulta o intruccion

            //$resultado->execute(array(":secc"=>$seccion, ":orig"=>$origen));// el campo ? lo reemplazamos aqui por destornillador
            $resultado->execute(array(":codigoarticulo"=>$codigoArticulo,":nombrearticulo"=>$nombreArticulo,":seccionarticulo"=>$seccionArticulo,":precioarticulo"=>$precioArticulo,":paisarticulo"=>$origenArticulo,":fechaarticulo"=>$fechaArticulo,":importadoarticulo"=>$importadoArticulo,":fotoarticulo"=>$fotoArticulo));
            
            /*while($linea = $resultado->fetch(PDO::FETCH_ASSOC)){//ASOCIA DENTRO DEL ARRAY LOS CAMPOS
             echo "Nombre Articulo: " . $linea["NOMBREARTÍCULO"] . " Seccion: " . $linea['SECCIÓN'] . " Precio: " . $linea['PRECIO'] . " Origen: " . $linea['PAÍSDEORIGEN'] . "<br><br>";
            }*/

            echo "El registro se INSERTO CORRECTAMENTE A LA BASE DE DATOS.....";

            $resultado->closeCursor();
            
            echo "La Conexion Se Realizo con Exito!";

        }catch(Exception $e){

            die('Error: ' . $e->GetMessage());

        }finally{
            $BBDD = null;
        }
    ?>
</body>
</html>