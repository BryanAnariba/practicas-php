<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php
  include("Conexion.php");//Creamos la conexion en el Index
  $conexion = $BasedeDatos->query("SELECT * FROM DATOS_USUARIOS");//Probando la conexion
  $registros = $conexion->fetchAll(PDO::FETCH_OBJ);//ARRAY DE OBJETOS
  //$registros = $BasedeDatos->query("SELECT * FROM DATOS_USUARIOS")->fetchAll(PDO::FETCH_OBJ);}

  if(isset($_POST["insertar-registro"])){
    $nombre = $_POST["Nom"];
    $apellido = $_POST["Ape"];
    $direccion = $_POST["Dir"];
    $sql = "INSERT INTO DATOS_USUARIOS(NOMBRE,APELLIDO,DIRECCION) VALUES (:nombre, :apellido , :direccion)";
    $resultado = $BasedeDatos->prepare($sql);
    $resultado->execute(array(":nombre"=>$nombre,":apellido"=>$apellido,":direccion"=>$direccion));
    header("Location:index.php");
  }
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>


<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
    <!--OJO AL CODIGO COMO ESTA INCRUSTADO EN DOS ZONAS PHP RECORRE EL FOR EACH HASTA QUE SE TERMINE LA CANTIDAD DE REGISTROS DE LA BD-->
	  <!--MOSTRAR REGISTRO-->
    <?php
      foreach($registros as $persona)://POR CADA OBJETO QUE HAYA EN $PERSONA REPITEME LA LINEA DE HTML?> 
        <tr>
          <td><?php echo $persona->ID?></td>
          <td><?php echo $persona->NOMBRE?></td>
          <td><?php echo $persona->APELLIDO?></td>
          <td><?php echo $persona->DIRECCION?></td>


          <!--OJO Al CODIGO AQUI SE ENVIA EL PARAMETRO Y SE INCRUSTA EN UN PHP-->
          <td class="bot"><a href="BorrarRegistro.php?ID=<?php echo $persona->ID?>"><input type='button' name='eliminar' id='eliminar' value='Eliminar'></a></td>
          <td class='bot'><a href="editar.php?ID=<?php echo $persona->ID?> & nombre=<?php echo $persona->NOMBRE?> & apellido=<?php echo $persona->APELLIDO?> & direccion=<?php echo $persona->DIRECCION?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
        </tr> 
     
      <?php
        endforeach;
      ?>
	<tr>
	<td></td>
  
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='insertar-registro' id='insertar-registro' value='Insertar'></td></tr>  
  </table>
</form>  
<p>&nbsp;</p>
</body>
</html>