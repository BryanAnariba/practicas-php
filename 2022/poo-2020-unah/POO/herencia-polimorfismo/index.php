<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Herencia Polimorfismo</title>
</head>
<body>  
    <?php
        include_once("class/class-alumno.php");
        include_once('class/class-maestro.php');
        $alumno = new Alumno('Bryan Ariel','Sanchez Anariba',23,'Masculino','Ingenieria en Sistemas','20151900086',84);
        echo '<h1>Pilares POO -> Encapsulacion , Herencia , Abstraccion , Polimorfismo.</h1>';
        echo '<br>';
        echo '<br>';
        echo '<b>Imprimiendo objeto del tipo alumno herendando de clase persona</b><br>';
        $alumno->matricular();
        $alumno->cancelarClase();
        echo '<br>';
        echo '<br>';
        echo '<b>Imprimiendo metodos abstractos</b><br>';
        $alumno->aprobar();
        $alumno->reprobar();
        echo '<br>';
        echo '<br>';
        echo '<b>Esta clase de persona por si sola no se puede instanciar como tal ya que es generica.</b><br>';
        //$persona = new Persona('Erick David', 'Jimenez Anariba' , 14 , 'Masculino');
        echo '<br>';
        echo '<br>';
        echo '<strong>Por Ultimo aplicando polimorfismo o cambiar el comportamiento de un objeto.</strong><br>';
        $maestro = new Maestro('Maria Fernanda','Sanchez Anariba',22,'Femenino','Derecho','22334455',25000,'Matutino');
        $maestro->aprobar();
        $maestro->reprobar();

    ?>
    
</body>
</html>