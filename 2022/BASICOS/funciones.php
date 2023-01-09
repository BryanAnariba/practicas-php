<style>
        h1{
            text-align:center;
        }
        table{
            background-color:rgb(0,36,132);
            padding:5px;
            border: black 5px solid;
        }
        .validado{
            font-size:18px;
            color:#F00;
            font-weight:bold;
        }
        .no_validado{
            font-size:18px;
            color:blue;
            font-weight:bold;
        }
    </style>
<?php
//OJOOOOOOOOOOOOOOOOOOOOOOOOOOO ESTO NO LO SABIA
    if(isset($_POST["enviando"])){//comprueba que hemos apretado el boton enviando
        $usuario = $_POST["nombre_usuario"];//$_POST[""]; variable superglobal en array
        $edad = $_POST["edad_usuario"];

        if($usuario == "Bryan" && $edad >= 18){
            echo "<p class='validado'>Eres mayor de edad por ende Puedes entrar al sistema<p>";
        }else{
            
            echo "<p class='no_validado'>Acceso denegado <p>";
        }
    }
?>
