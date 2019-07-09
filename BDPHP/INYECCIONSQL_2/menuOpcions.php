<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Principal</title>
    <link rel="stylesheet" type="text/css" href = "css/estilosMenu.css">
    <link rel="stylesheet" type="text/css" href = "css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark "><!--navbar navbar-expand es para que se adapte a dispositivos mobiles  fixed-top  si le quieres meter efecto-->
        <div class="container">
            <a href="index.html" class="navbar-brand">Web Site</a><!--navbar-brand para que se mire como logo-->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><!--El boton es para cuando se adapte a movil se va a ver-->

            <div class="collapse navbar-collapse" id="navbarCollapse"><!--Para cuando se adapte a movil al dar click al boton de arriba se despliegle un menu-->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home-section" class="nav-link">Home</a>
                    </li><!--Se estiliza aplicando todo lo que esta en class-->
                    <li class="nav-item">
                            <a href="#info-section" class="nav-link">Info</a>
                    </li><!--Se estiliza aplicando todo lo que esta en class-->
                    <li class="nav-item">
                        <a href="#create-section" class="nav-link">Create</a>
                    </li><!--Se estiliza aplicando todo lo que esta en class-->
                    <li class="nav-item">
                            <a href="#share-section" class="nav-link">Share</a>
                    </li><!--Se estiliza aplicando todo lo que esta en class-->
                </ul>
            </div>
        </div>
    </nav>





    <center><h1>Menu Principal</h1></center>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Seleccione una Opcion: </h4>
            </div>
        </div>
    </div><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <section class="portafolio">
                    <div class="portafolio-container">
                        <section class="portafolio-item">
                            <img src="img/insertar.png" alt="Insertar Registros" class="portafolio-imagen">
                            <section class="portafolio-text">
                                <h3>Insertar Registros.</h3>
                                <p>Accede a esta Opcion para Insertar Registros a la Base de Datos.</p>
                                <input type="submit" class="btn btn-outline-light btn-block " value="Insertar Datos"
                                onclick="location.href='Insercion.php'">
                            </section>
                        </section>
                    </div>
                </section>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <section class="portafolio">
                    <div class="portafolio-container">
                        <section class="portafolio-item">
                            <img src="img/Eliminar.png" alt="Insertar Registros" class="portafolio-imagen">
                            <section class="portafolio-text">
                                <h3>Eliminar Registros.</h3>
                                <p>Accede a esta Opcion para Eliminar Registros a la Base de Datos.</p>
                                <input type="submit" class="btn btn-outline-light btn-block " value="Eliminar Datos"
                                onclick="location.href='Eliminacion.php'">
                            </section>
                        </section>
                    </div>
                </section>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <section class="portafolio">
                    <div class="portafolio-container">
                        <section class="portafolio-item">
                            <img src="img/actualizar.png" alt="Insertar Registros" class="portafolio-imagen">
                            <section class="portafolio-text">
                                <h3>Modificar Registros.</h3>
                                <p>Accede a esta Opcion para Actualizar Registros a la Base de Datos.</p>
                                <input type="button" class="btn btn-outline-light btn-block " value="Modificar Datos" onclick="location.href='busquedaActualizar.php'">               
                            </section>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>