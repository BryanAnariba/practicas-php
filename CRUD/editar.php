<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>
<?php
  //ESTOS PARAMETROS SON LOS QUE ESTA IGUALADOS EJ : & nombre=<php echo persona->NOMBRE>
  include("Conexion.php");
  if(!isset($_POST["bot_actualizar"])){//SI NO SE A PULSADO EL BOTON DE ACTUALIZAR carga los datos de la pag anterios que es index
      $id = $_GET["ID"];
      $nombre = $_GET["nombre"];
      $apellido = $_GET["apellido"];
      $direccion = $_GET["direccion"];
  }else{//EN CASO QUE SI SE AYA PULSADO EL BOTON DE ACTUALIZAR: almacena las variables con los datos de esta pagina
      $ID = $_POST["id"];
      $nombres = $_POST["nom"];
      $apellidos = $_POST["ape"];
      $direc = $_POST["dir"];

      //ESTAS LINEAS SON PARA EVITAR LA INYECION SQL
      $sql = "UPDATE DATOS_USUARIOS SET NOMBRE=:miNom, APELLIDO=:miApe , DIRECCION=:miDir WHERE ID=:miId";
      $resultado = $BasedeDatos->prepare($sql);
      $resultado->execute(array(":miId"=>$ID,":miNom"=>$nombres,":miApe"=>$apellidos,":miDir"=>$direc));
      header("Location: index.php");
      /*-----------------------------------------------------------------------------------------------------*/
    }


  
?>
  
<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td>Identificador</td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>"><?php echo $id?></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $apellido?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $direccion?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>