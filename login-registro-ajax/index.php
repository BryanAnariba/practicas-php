<?php
    session_start();
    require('db/connection2.php');
    //si existe una variable de session llamada user id
    if(isset($_SESSION['user_id'])){
        $query = $conn->prepare('SELECT B.ID_EMPLEADO , B.CORREO , B.USUARIO , A.FOTOGRAFIA FROM TBL_PERSONAS A LEFT JOIN  TBL_EMPLEADOS B 
        ON(A.ID_PERSONA = B.ID_EMPLEADO) WHERE B.ID_EMPLEADO = :id');
        $query->bindParam(':id',$_SESSION['user_id']);
        $query->execute();
        $res = $query->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: login-signup.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <?php
        require('partials/header.php');
    ?>
    <?php
        //si existe la variable de session con id de empleado que ejecute el bloque entero
        if(isset($_SESSION['user_id'])):
    ?>
        <div class="container" style="z-index:0;">
            <div class="row" style="margin-top:-250px;">
                <div class="col-md-6 my-auto text-white">
                    <center>
                        <h2>
                           Bienvenido Al Sistema
                        </h2>
                        <h3>
                            Tus Credenciales:
                        </h3>
                        <p>
                            <strong>ID Empleado: <?=$res['ID_EMPLEADO'];?></strong>
                            <br>
                            <b>Correo: </b><?=$res['CORREO'];?><br>
                            <b>Nombre Usuario: </b><?=$res['USUARIO'];?><br>
                        </p><br>
                    </center>
                </div>
                <div class="col-md-6 my-auto">
                    <center>
                        <img src="/intranet/uploads/login-registro-ajax/<?php echo $res['FOTOGRAFIA']?>" style="border-radius: 50%; width: 200px; height:200px;" class="img-fluid" alt=""><br>
                        <br>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Añadir Fotografia
                        </button>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Formulario Para Añadir Una Fotografia</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <form method="POST" id="formulario" enctype="multipart/form-data">
                                        <h3>Subir Imagen:</h3>
                                        <input type="file" name="imagen" id="imagen" class="btn btn-primary"><br><br>
                                        <input type="button" value="Enviar Imagen" class="btn btn-success" id="btn-enviar">
                                    </form><br>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir Sin Hacer Nada</button>
                                </center>
                            </div>
                            <div class="modal-footer">
                                <!--button type="button" class="btn btn-danger" data-dismiss="modal">Salir Sin Hacer Nada</button-->
                            </div>
                            </div>
                        </div>
                        </div>
                    </center>

                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <h2 class="text-center text-whit">Opciones a Realizar.</h2>
            <hr>
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <input type="button" id="btn-mostrar-datos" class="btn btn-success btn-block" value="Mostrar Informacion">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <input type="button" id="btn-insertar-registro" class="btn btn-success btn-block" value="Insertar Registro">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <input type="button" id="btn-borrar-registro" class="btn btn-danger btn-block" value="Borrar Registro">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <input type="button" id="btn-actualizar-registro" class="btn btn-success btn-block" value="Actualizar Registro">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php 
        endif; 
    ?>
    <div class="container mt-5" id="resultado-actualizacion" style="display:none;">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="alert alert-success" role="alert" id="alerta-actualizado">
                    </div>
                    <div class="card-body">
                     <input type="button" class="btn btn-success btn-block" value="Cerrar" id="btn-cerrar">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    <div class="container" id="contenedor-mostrar-informacion" style="display: none">
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-bordered table-dark table-hover">
                    <thead>
                        <th>
                            ID Articulo
                        </th>
                        <th>
                            ID Empleado
                        </th>
                        <th>
                            Nombre Articulo
                        </th>
                        <th>
                            Seccion Articulo
                        </th>
                        <th>
                            Pais de Origen
                        </th>
                        <th>
                            Precio Por Unidad
                        </th>
                        <th>
                            Existencia del Articulo
                        </th>
                    </thead>
                    <tbody id="articulos">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container contenedor-insertar-informacion" id="contenedor-insertar-informacion" style="display:none;">
        <div class="row mt-5">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card text-center" style="background-color: #005073;"><!--Agrega una targeta-->
                    <div class="card-body" style="color:white; font-size:18px;">
                        <h4 class="text-center">Inserta Un Nuevo Producto Aqui.</h3>
                        <p class="text-center">Leer Bien los campor por Favor</p>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Nombre Del Articulo" id="txt-nombre-art">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Seccion Del Articulo" id="txt-seccion-art">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Pais De Origen" id="txt-pais-art">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Precio Del Articulo" id="txt-precio-art">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Cantidad Articulo" id="txt-cantidad-art">
                        </div>
                        <div>
                            <input type="button" class="btn btn-outline-light btn-block " value="Guardar Informacion Del Articulo" id="btn-insertar">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" id="respuesta">
                    
                    </div>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
    <div class="container" id="contenedor-eliminar-informacion" style="display:none;">
        <div class="row mt-5">
            <div class="col-md-4 col-sm-12" >
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Digite El Codigo del Articulo a Eliminar</h2>
                        <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="ID Articulo" id="txt-id-art">
                        </div>
                        <div class="form-group">
                                <input type="button" class="btn btn-outline-success btn-block" value="Ver Datos" id="btn-mostrar-datos-a-eliminar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12" id="art-eliminar" style="display:none;">
                
                
            </div>
            <div class="col-md-4 col-sm-12" style="display:none;" id="art-eliminar2">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <center>
                                <h3>Esta Seguro de Eliminar El Registro</h3>
                                <input type="button" class="btn btn-block btn-success" value="Si" id="btn-si">
                                <input type="button" class="btn btn-block btn-danger" value="No" id="btn-no">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="actualizacion-articulos">
        <div class="row">
            <div class="col-md-3 col-sm-12" id="actualizacion-articulo" style="display:none;">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Digite El Id del Articulo</h3>
                        <input type="text" class="form-control" placeholder="ID del Articulo Ha Actualizar" id="id-articulo-actualizar">
                        <br>
                        <input type="button" id="btn-buscar-articulo" class="btn btn-success btn-block" value="Buscar Informacion">
                        <strong id="en-caso-de-error">

                        </strong>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12" style="display:none;" id="formulario-actualizar">
                           
            </div>
            <div class="col-md-3 col-sm-12" style="display:none;" id="botones-actualizar">
                <div class="card">
                    <div class="card-body">
                        <center><strong>Click Para Modificar Articulo</strong></center>
                        <input type="button" id="btn-si-quiero" class="btn btn-success btn-block" value="Modificar Datos">
                        <input type="button" id="btn-no-quiero" class="btn btn-success btn-block" value="No Hacer Nada">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/ajax-index.js"></script>
</body>
</html>