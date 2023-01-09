<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Class</title>
</head>
<body>
    <?php
        //include once para incluir una sola vez
        include_once('./user-class.php');

        // instancia de clase
        $user = new User('Mael','mael@gmail.com','asd.456','Arcangel');

        // establecimiento de valores en propiedades del objeto usuario y su retorno por medio de metodos get y set
        //$user->setUsername('Estarossa');
        //$user->setEmail('estarossa@gmail.com');
        //$user->setPassword('asd.456');
        //$user->setRole('Mandamiento del Amor');
        
        echo '<b>Username: </b>' . $user->getUsername() . '<br>'; 
        echo '<b>Email: </b>' . $user->getEmail() . '<br>'; 
        echo '<b>Password: </b>' . $user->getPassword() . '<br>';
        echo '<b>Role: </b>' . $user->getRole() . '<br>'; 

        // Imprimiendo objeto user entero por medio del toString
        echo $user;
    ?>
</body>
</html>