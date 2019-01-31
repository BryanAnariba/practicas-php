<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php

try{
	
	$login=htmlentities(addslashes($_POST["login"]));
	
	$password=htmlentities(addslashes($_POST["password"]));

	$contador=0;
	
	
	$base=new PDO("mysql:host=localhost; dbname=prueba","root", "");
	
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	$sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS = :login";
	
	$resultado=$base->prepare($sql);	
		
	$resultado->execute(array(":login"=>$login));
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){			
			echo "Usuario: " . $registro['USUARIOS'] . " Contraseña: " . $registro['PASSWORD'] . "<br>";	
			if(password_verify($password,$registro['PASSWORD'])){//con esta intruccion se mandan las dos contraseña la 
				//DEVUELVE TRUE SI LAS CONTRASEÑAS SON IGUALES Y FALSE SI NO SON IGUALES
				$contador++;//si no hay conatraseñas $contador tendra 0 y no mostrara nada
				
			}		
		}
		if($contador>0){// se encontro un usuario significa que contador vale uno o mas contador vale mas
			echo "USUARIO REGISTRADO";
		}else{//CASO CONTRARIO QUE $contador sea 0 develve el sigiente registrado
			echo "USUARIO NO REGISTRADO";
		}
							
		
		
		$resultado->closeCursor();

	
	
}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
	
}




?>
</body>
</html>