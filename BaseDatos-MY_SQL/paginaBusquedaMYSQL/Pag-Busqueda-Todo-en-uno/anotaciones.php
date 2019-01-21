<?php
//OJOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO LOS ARRAYS ASOCIATIVOS HACEN MENCION A LAS CAMPOS ES MEJOR QUE FETCH_ROW ES MEJOR FETCH_ARRAY
$busqueda=$_GET["buscar"];
require("../funcionConexion.php");// llama a la funcion para tener un solo archivo para conectar y asi evitar incluir en cada php que hagamos


//Ahora Viene el Conecte a la WEB CON LA BASE DE DATOS
$Conexion = mysqli_connect($Direccion_BBDD,$UsuarioBBDD,$PasswordBBDD);



//Manejo de errores con la base de datos algo asi como try catch
if(mysqli_connect_errno()){//se ejecuta siempre y cuando se ejecute y genere un error
    echo "Fallo al conectar la BBDD con la plataforma.......";
    exit();
}
mysqli_select_db($Conexion,$NombreBBDD) or die ("No se encuentra la BBDD");//por si no se encuentra la base de datoss....

//PARA QUE INCLUYA CUALQUIER TIPO DE CARACTER: Ñ TILDES ACENTOS
mysqli_set_charset($Conexion,"utf8");


//SE HACE UNA CONSULTA ALMACENANDOLA EN UNA VARIABLE

/*==============================================================LISTA DE CONSULTAS==================================================*/
//$Consulta="SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN='USA';";


//CONSULTA QUE MUESTRE TODOS LOS ARTICULOS DE CABALLERO
//$Consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%CABALLERO';";

//CONSULTA PARA VER LOS ARTICULOS QUE LLEVEN BALON
//$Consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE 'BALON%';";


//CONSULTA PARA VER LOS ARTICULOS QUE LLEVEN BALON PERO DUDAS QUE ESCRIBIERON BALON MAL EN EL CARACTER N
$Consulta="SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%';";

//SE GUARDA LA TABLA VIRTUAL QUE GENERA LA CONSULTA Y SE PONE EL NOMBRE VAR $RESULTADO
$Resultado = mysqli_query($Conexion,$Consulta);





/*-----------------------------------OJO AL DESCOMENTAR ESTO NO FUNCIONA BIEN EL RECORRIDO CON EL WHILE-----------------------------------

//REVISA FILA A FILA LO QUE HAY ALMACENADO EN $Resultado
$Fila = mysqli_fetch_row($Resultado);//AL METERLA EN UN BUCLE SE LOGRARIA EL RECORRIDO COMPLETO DE LA CONSULTA

echo "<b>Recorrer Linea a Linea la Consulta</b>" . "<br><br>";
//IMPRIMIR EL PRIMER REGISTRO DE LA TABLA

echo $Fila[0] . " ";
echo $Fila[1] . " ";
echo $Fila[2] . " ";
echo $Fila[3] . "<br>"; 

$Fila = mysqli_fetch_row($Resultado);//AL METERLA EN UN BUCLE SE LOGRARIA EL RECORRIDO COMPLETO DE LA CONSULTA
//IMPRIMIR EL SEGUNDO REGISTRO DE LA TABLA
echo $Fila[0] . " ";
echo $Fila[1] . " ";
echo $Fila[2] . " ";
echo $Fila[3];

*/

echo "<br>";
echo "<br>";
echo "<br>";
echo "<b>ASI SE RECORRE UNA CONSULTA COMPLETA DE BBDD CON BUCLE YA QUE ESTO ES LO QUE SE NECESITA:::::::</b>" . "<br><br>";
while($Fila = mysqli_fetch_array($Resultado,MYSQLI_BOTH)){//Mientras la variable fila tenga informacion hara lo del bucle ... arreglo asociativo (, MYSQL_ASSOC)
echo "<table width='50%' align='center'><tr><td>";
    echo $Fila['CÓDIGOARTÍCULO'] . "</td><td>";//USO DE LOS ARREGLOS ASOCIATIVOS::::: EN VEZ DE [1] SERIA ['CODIGOARTICULO']
    echo $Fila['NOMBREARTÍCULO'] . "</td><td>";
    echo $Fila['SECCIÓN'] . "</td><td>";
    echo $Fila['IMPORTADO'] . "</td><td>";
    echo $Fila['PRECIO'] . "</td><td>";
    echo $Fila['FECHA'] . "</td><td>";
    /*echo $Fila[2] . "</td><td>";
    echo $Fila[3] . "</td><td>";
    echo $Fila[4] . "</td><td>";
    echo $Fila[5] . "</td><td>";
    echo $Fila[6] . "</td><td>";*/
    echo $Fila['PAÍSDEORIGEN'] . "</td><td></tr></table>";
    echo "<br>";
    echo "<br>";
}



//CERRAR LA CONEXION PARA DEJAR DE CONSUMIR RECURSOS
mysqli_close($Conexion)//se especifica las conexiones ya que en la vida real se trabajan con varias bases de datos ($conexion,$conexion2,....,$Conexionn)

//IMPORTAR A LA BBDD INFORMACION PARA NO HACERLO MANUALMENTE CON EL CMD O PHPMYADMIN

/*
    CARACTERES COMODIN:
     % SUSTITUYE UNA CADENA DE CARACTERES: queremos ver todos los articulos que terminen en caballero o tambien inicien en caballero o bien en ambos  terminen e inicien
     _ SUSTITUYE UN UNICO CARACTER: este es por seguridad por si aun acaso no sabes si esta bien escrita un campo de la consulta por ejemplo:
     balon 
     pero tu escribres balom
     si no sabes pones balo_
    
     OJOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO SE UNA EL CARACTER "LIKE" EN ESTE TIPO DE CONSULTA CON LOS CARACTERES COMODIN
*/

?>