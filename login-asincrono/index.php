<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To Your App</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-5 col-sm-12 mx-auto">
                <div class="card animated jello">
                    <div class="card-header bg-primary">
                        <h4 class="text-white text-center">Lo que Puedes Hacer</h4>
                    </div>
                    <div class="card-body bg-dark">
                        <div class="form-group text-center text-white">
                            <input type="button" id="btn-login" class="btn btn-success" value="Login"> Or
                            <input type="button" id="btn-signup" class="btn btn-success" value="Sign Up">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Contenedor para crear un nuevo usuario-->
    <div class="container" id="contenedor-signup">
        <div class="row mt-5">
            <div class="col-lg-5 col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white text-center">Rellene Los Siguientes Campos</h4>
                    </div>
                    <div class="card-body bg-dark text-white">
                        <div class="form-group">
                            <input type="text" id="firstName" class="form-control" placeholder="Write First Name"> 
                        </div>  
                        <div class="form-group">
                            <input type="text" id="lastName" class="form-control" placeholder="Write Last Name">
                        </div>
                        <div class="form-group">
                            <input type="number" id="age" class="form-control" placeholder="Write Your Age">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Write Your Email">
                        </div>
                        <div class="form-group">
                            <input type="password" id="pass" class="form-control" placeholder="Write Your Password">
                        </div>
                        <div class="form-group">
                            <input type="button" id="btn-save-user" value="Save User" class="btn btn-success btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Contenedor para loguearse-->
    <div id="contenedor-email" class="container">
        <div class="row mt-5">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white text-center">Correo Electronico</h4>
                    </div>
                    <div class="card-body bg-dark">
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Write Your Email">
                        </div>
                        <div class="form-group">
                            <input type="button" id="btn-next" value="Next" class="btn btn-success btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contenedor-password" class="container">
        <div class="row mt-5">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white text-center">Contraseña</h4>
                    </div>
                    <div class="card-body bg-dark">
                        <div class="form-group">
                            <input type="email" id="password" class="form-control" placeholder="Write Your Email">
                        </div>
                        <div class="form-group">
                            <input type="button" id="btn-ok" value="Next" class="btn btn-success btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/controller.js"></script>
</body>
</html>