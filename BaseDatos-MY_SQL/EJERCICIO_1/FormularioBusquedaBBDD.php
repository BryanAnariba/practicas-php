<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Busqueda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        #consulta{
            width:100%;
        }
        #buscar{
            width:100%;
        }
        #principal{
            border-bottom: 6px solid rgb(0,36,132);
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <div class="alert alert-success" role="alert" style="text-align:center; color:rgb(0,36,132); weight:700;">
    GENERADOR BASICO DE CONSULTAS SQL(LENGUAJE DE CONSULTAS ESTRUCTURADO)
    </div>
    <div class="container">
        <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12" id="principal" style="display: block; justify-content:center; ">
            <form action="PaginaBusqueda.php" method="GET" style="">
                <div class = "form-group">
                    <label for="buscar" style="color:black; font-weight:800; font-size:20px; font-family=arial;" >Buscar: </label><br>
                    <input type="text" placeholder="Digite la Consulta:" id="buscar" name="buscar" class="form-control"><br>
                    <input type="submit" name="consulta" id="consulta" value="Generar Consulta" class="btn btn-success">  
                </div>   
            </form>
        </div>
    </div>

</body>
</html>