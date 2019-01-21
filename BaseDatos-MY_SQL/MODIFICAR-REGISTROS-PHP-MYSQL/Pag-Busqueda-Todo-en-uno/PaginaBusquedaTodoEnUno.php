<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina De Busqueda Todo en Uno</title>
    <link rel="stylesheet" href="../../../../POO2018/frameworks/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <style>
        body{
            background-image: url("../img/fondo pantalla.jpg");
        }
    </style>
    <script src="../bootstrap.min.js"></script>
    <?php
    $busqueda = "";
    function ejecuta_Consulta($busqueda){//se encapsula en una funcion para que solo se llame cuando se necesite
        //$articulo = $_GET["articulo"];
        require("../../funcionConexion.php");
        $conexion = mysqli_connect($Direccion_BBDD,$UsuarioBBDD,$PasswordBBDD);

        if(mysqli_connect_errno()){
            echo "No se encuentra la Base de Datos";
            exit();
        }
        mysqli_select_db($conexion,$NombreBBDD) or die ("No se encuentra la BBDD");
        mysqli_set_charset($conexion,"utf8");

        $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%';";
        $resultado = mysqli_query($conexion,$consulta);
        echo "<h1 style='text-align:center;'>Resultados De La Busqueda.</h1>";
        while($fila=mysqli_fetch_array($resultado,MYSQLI_BOTH)){
            echo "<table class='table' style='text-align:center; background:gray; margin-left:auto; margin-right:auto;'><tr scope='row'><td>";
            echo $fila['CÓDIGOARTÍCULO'] . "</td><td>";
            echo $fila['NOMBREARTÍCULO'] . "</td><td>";
            echo $fila['SECCIÓN'] . "</td><td>";
            echo $fila['IMPORTADO'] . "</td><td>";
            echo $fila['PRECIO'] . "</td><td>";
            echo $fila['FECHA'] . "</td><td>";
            /*echo $Fila[2] . "</td><td>";
            echo $Fila[3] . "</td><td>";
            echo $Fila[4] . "</td><td>";
            echo $Fila[5] . "</td><td>";
            echo $Fila[6] . "</td><td>";*/
            echo $fila['PAÍSDEORIGEN'] . "</td><td></tr></table>";
            echo "<br>";
            echo "<br>";
        }
        mysqli_close($conexion);
    }    
    ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <?php
        $mibusqueda = $_GET["buscar"];
        $mipag = $_SERVER["PHP_SELF"];//PAGINA DEL SERVIDOR OSEA INDICA QUE LA INFORMACION SE PROCESARA EN LA MISMA PAGINA
        if($mibusqueda!=""){
            ejecuta_Consulta($mibusqueda);
        }else{
            echo ("<form action='" . $mipag . "' method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'>
            </form>");
        }
    ?>
</body>
</html>