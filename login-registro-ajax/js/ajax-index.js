$(document).ready(function() {



    //Codigo para procesar la informacion y mostrar el contenido de articulos de la BD
    $('#btn-mostrar-datos').click(function() {
        //console.log('mostrando datos');
        
        
        //HACE VISIBLE EL CONTENEDOR DE MOSTRAR INFORMACION
        document.getElementById("contenedor-mostrar-informacion").style.display = "block";
        
        //OCULTA LOS DEMAS DIVS DE CRUD
        document.getElementById("contenedor-insertar-informacion").style.display = "none";
        document.getElementById("contenedor-eliminar-informacion").style.display = "none";
        document.getElementById("actualizacion-articulo").style.display = "none";

        document.getElementById("formulario-actualizar").style.display = "none";
        document.getElementById("botones-actualizar").style.display = "none";
        document.getElementById("botones-actualizar").style.display = "none";
        document.getElementById("id-articulo-actualizar").value = "";

        //limpia la tabla al dar click en mostrar articulo
        document.getElementById("articulos").innerHTML = "";


        //con esto le limpia todo el contenido perteneciente al boton eliminar
        document.getElementById("art-eliminar").innerHTML = "";
        document.getElementById("art-eliminar2").style.display = "none";
        document.getElementById("txt-id-art").value = "";


        $.ajax({
            url:'ajax-php/procesar-listado-articulos.php',
            method:'GET',
            dataType: 'json',
            success:function(respuesta) {
                console.log(respuesta);
                for(var i=0; i<respuesta.length;i++) {
                    $("#articulos").append(`
                        <tr idArticle="${respuesta[i].idArticulo}">
                            <td>${respuesta[i].idArticulo}</td>
                            <td>${respuesta[i].idEmpleado}</td>
                            <td>${respuesta[i].nombreArticulo}</td>
                            <td>${respuesta[i].seccionArticulo}</td>
                            <td>${respuesta[i].paisOrigen}</td>
                            <td>${respuesta[i].precioArticulo}</td>
                            <td>${respuesta[i].cantidadArticulo}</td>
                        </tr>
                    `);
                }
            },
            error:function(error) {
                $("#respuesta").append(error.responseText);
            }
        });
    });
    $("#btn-insertar-foto").click(function() {
        alert("works");
    });



    //Codigo para procesar la informacion y guardar datos en la base de datos del servidor
    $('#btn-insertar-registro').click(function() {
        //console.log('insertando datos');

        //HACE VISIBLE EL CONTENEDOR DE INSERTAR INFORMACION
        document.getElementById("contenedor-insertar-informacion").style.display = "block";

        //OCULTA LOS DEMAS DIVS DE CRUD
        document.getElementById("contenedor-mostrar-informacion").style.display = "none";
        document.getElementById("contenedor-eliminar-informacion").style.display = "none";
        document.getElementById("actualizacion-articulo").style.display = "none";

        document.getElementById("formulario-actualizar").style.display = "none";
        document.getElementById("botones-actualizar").style.display = "none";
        document.getElementById("botones-actualizar").style.display = "none";
        document.getElementById("id-articulo-actualizar").value = "";

        
        //con esto le limpia todo el contenido perteneciente al boton eliminar
        document.getElementById("art-eliminar").innerHTML = "";
        document.getElementById("art-eliminar2").style.display = "none";
        document.getElementById("txt-id-art").value = "";
    });
    $('#btn-insertar').click(function () {

        //paramtros normales
        var parametros = `nombreArticulo=${$("#txt-nombre-art").val()}&seccionArticulo=${$("#txt-seccion-art").val()}&paisArticulo=${$("#txt-pais-art").val()}&precioArticulo=${$("#txt-precio-art").val()}&cantidadArticulo=${$("#txt-cantidad-art").val()}`;
        //console.log(parametros);
        $.ajax({
            url:'ajax-php/procesar-insercion-articulos.php' ,
            method:'POST',
            data:parametros ,
            success:function(respuesta) {
                $("#respuesta").append(`
                    <div>
                        <div class="alert alert-success" role="alert mt-3">
                            <center>
                                <strong style='font-size: 25px;'>${respuesta}</strong>
                            </center>
                            
                        </div>
                    </div>`
                   
                );
            },
            error:function(error){
                $("#respuesta").append(error.responseText);
            }
        });

        document.getElementById("txt-nombre-art").value = "";
        document.getElementById("txt-seccion-art").value = "";
        document.getElementById("txt-pais-art").value = "";
        document.getElementById("txt-precio-art").value = "";
        document.getElementById("txt-cantidad-art").value = "";
    });
    
    $("#btn-enviar").click(function() {
        //console.log("works");

        //PARA LA IMAGEN DE LA PERSONA EN EL SERVIDOR
        var formData = new FormData($("#formulario")[0]);
        var ruta = "ajax-php/procesar-imagen-articulo.php";
        console.log(formData);
        $.ajax({
            url: ruta ,
            type: "POST" ,
            data: formData ,
            contentType: false ,
            processData: false ,
            success:function(datos){
                console.log(datos);
                location.href ="index.php";
            },
            error:function(error){
                $("#respuesta").append(error.responseText);
            }
        });
    });


    //Codigo para procesar la peticion de borrado
    $('#btn-borrar-registro').click(function() {
        //console.log('Eliminando Datos');
        //HACE VISIBLE EL CONTENEDOR DE ELIMINAR INFORMACION
        document.getElementById("contenedor-eliminar-informacion").style.display = "block";

        //OCULTA LOS DEMAS DIVS DE CRUD
        document.getElementById("contenedor-mostrar-informacion").style.display = "none";
        document.getElementById("contenedor-insertar-informacion").style.display = "none";
        document.getElementById("actualizacion-articulo").style.display = "none";

        document.getElementById("formulario-actualizar").style.display = "none";
        document.getElementById("botones-actualizar").style.display = "none";
        document.getElementById("botones-actualizar").style.display = "none";
        document.getElementById("id-articulo-actualizar").value = "";
        document.getElementById("art-eliminar").innerHTML = "";
    });
    $("#btn-mostrar-datos-a-eliminar").click(function () {
        let idArticulo = `idArticulo=${$("#txt-id-art").val()}`;//id del articulo a eliminar para mostrar los datos de ese articulo antes de eliminar
        //console.log(idArticulo);
        document.getElementById("art-eliminar").style.display = "block";
        document.getElementById("art-eliminar2").style.display = "block";
        document.getElementById("art-eliminar").innerHTML = "";
        $.ajax({
            url: 'ajax-php/procesar-eliminacion-articulo.php' ,
            method: 'POST' ,
            dataType: 'json',
            data: idArticulo ,
            success:function(respuesta) {
                console.log(respuesta);
                if(respuesta.length == 0) {
                    $("#art-eliminar").append(
                        `<div class="alert alert-danger" role="alert">
                            <center>
                                <h2>No Hay Resultados en La Busqueda.</h2>
                            </center>
                        </div>`
                    );
                    document.getElementById("art-eliminar").display = "none";
                }
                for(var i=0; i<respuesta.length;i++) {
                    $("#art-eliminar").append(`
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">Informacion del Articulo A Eliminar</h2>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="txt-id-articulo" value="${respuesta[i].idArticulo}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="txt-id-empleado" value="${respuesta[i].idEmpleado}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="txt-nombre-art" value="${respuesta[i].nombreArticulo}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="txt-seccion-art" value="${respuesta[i].seccionArticulo}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="txt-pais-art" value="${respuesta[i].paisOrigen}" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="txt-precio-art" value="${respuesta[i].precio}" disabled>
                                </div>
                                <div>
                                    <input type="text" class="form-control form-control-lg" id="txt-cant-art" value="${respuesta[i].cantidad}" disabled>
                                </div>
                                <br>
                            </div>
                        </div>`
                    );                
                } 
            },
            error:function(error) {
                console.log(error);
            }
        });
    });
    $("#btn-si").click(function () {
        let idArticulo = `idArticulo=${$("#txt-id-articulo").val()}`;//id del articulo a eliminar para mostrar los datos de ese articulo antes de eliminar
        //console.log(idArticulo);
        $.ajax({
            url: 'ajax-php/eliminacion-articulo.php' ,
            method: 'POST' ,
            dataType: 'json',
            data: idArticulo ,
            success:function(respuesta) {
                console.log(respuesta);
                document.getElementById("contenedor-eliminar-informacion").style.display = "none";
                document.getElementById("art-eliminar").innerHTML = "";
                document.getElementById("art-eliminar2").style.display = "none";
                document.getElementById("txt-id-art").value = "";
            },
            error:function(error) {
                console.log(error);
            }
        });
    });
    $("#btn-no").click(function () {
        document.getElementById("contenedor-eliminar-informacion").style.display = "none";
        document.getElementById("art-eliminar").innerHTML = "";
        document.getElementById("art-eliminar2").style.display = "none";
        document.getElementById("txt-id-art").value = "";
    });


    //Codigo para procesar la informacion a actualizar y guardar la nueva info en la BD del servidor
    $('#btn-actualizar-registro').click(function () {
        //console.log('Actualizando Informacion');
        document.getElementById("actualizacion-articulo").style.display = "block";
        //OCULTA LOS DEMAS DIVS DE CRUD
        document.getElementById("contenedor-mostrar-informacion").style.display = "none";
        document.getElementById("contenedor-insertar-informacion").style.display = "none";
        document.getElementById("contenedor-eliminar-informacion").style.display = "none";
        
        //con esto le limpia todo el contenido perteneciente al boton eliminar
        document.getElementById("art-eliminar").innerHTML = "";
        document.getElementById("art-eliminar2").style.display = "none";
        document.getElementById("txt-id-art").value = "";
        
    });
    $("#btn-buscar-articulo").click(function () {
        //console.log("works");
        document.getElementById("formulario-actualizar").innerHTML = "";
        document.getElementById("formulario-actualizar").style.display = "block";
        document.getElementById("botones-actualizar").style.display = "block";
        document.getElementById("botones-actualizar").style.display = "block";
        let parametros = `idArticulo=${$("#id-articulo-actualizar").val()}`;
        //console.log(parametros);
        $.ajax({
            url: 'ajax-php/proceso-act-parte-uno.php' ,
            method: 'POST' ,
            dataType: 'json' ,
            data: parametros ,
            success:function(respuesta) {
                //console.log(respuesta);
                for(var i=0;i<respuesta.length;i++){
                    $("#formulario-actualizar").append(`
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">Informacion del Articulo A Eliminar</h3>
                                <h3 class="text-center>
                                    El ID Del Articulo y del Empleado No se Pueden Cambiar
                                </h3>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="txt-id-articulo2" value="${respuesta[i].idArticulo}" disabled>
                                    <br>
                                    <input type="text" class="form-control form-control-lg" id="txt-id-empleado" value="${respuesta[i].idEmpleado}" disabled>
                                    <br>
                                    <input type="text" class="form-control form-control-lg" id="txt-nombre-art2" value="${respuesta[i].nombreArticulo}">
                                    <br>
                                    <input type="text" class="form-control form-control-lg" id="txt-seccion-art2" value="${respuesta[i].seccionArticulo}">
                                    <br>
                                    <input type="text" class="form-control form-control-lg" id="txt-pais-art2" value="${respuesta[i].paisOrigen}">
                                    <br>
                                    <input type="text" class="form-control form-control-lg" id="txt-precio-art2" value="${respuesta[i].precio}">
                                    <br>
                                    <input type="text" class="form-control form-control-lg" id="txt-cantidad-art2" value="${respuesta[i].cantidad}">
                                </div>
                                <br>
                            </div>
                        </div>`
                    );
                }
            },
            error:function(error) {
                console.log(error);
            }
        });
    });
    //si doy click en modificar que haga la modificacion respectiva
    $("#btn-si-quiero").click(function() {
        //alert("works");
        var parametros = `idArticulo=${$("#txt-id-articulo2").val()}&nombreArticulo=${$("#txt-nombre-art2").val()}&seccionArticulo=${$("#txt-seccion-art2").val()}&paisArticulo=${$("#txt-pais-art2").val()}&precioArticulo=${$("#txt-precio-art2").val()}&cantidadArticulo=${$("#txt-cantidad-art2").val()}`;
        //console.log(parametros);
        $.ajax({
            url:'ajax-php/proceso-act-parte-dos.php',
            method:'POST',
            dataType:'json',
            data:parametros,
            success:function(respuesta) {
                //console.log(respuesta);
                document.getElementById("resultado-actualizacion").style.display = "block";
                for(i=0;i<respuesta.length;i++){
                    $("#alerta-actualizado").append(`
                            <h3 class="text-center">${respuesta[i].message}</h3>
                        </div>`
                    );
                } 
            },
            error:function(error){
                console.log(error);
            }
        });
    });
    //si doy click en no hacer nada que haga limpieza en divs y inpust
    $("#btn-no-quiero").click(function () {
        document.getElementById("actualizacion-articulo").style.display = "none";
        document.getElementById("formulario-actualizar").style.display = "none";
        document.getElementById("botones-actualizar").style.display = "none";
        document.getElementById("id-articulo-actualizar").value = "";
        document.getElementById("formulario-actualizar").innerHTML = "";
        
    });
    //despues de mostrar el mensaje de guardado que limpie pantalla
    $("#btn-cerrar").click(function() {
        console.log("works");
        document.getElementById("actualizacion-articulo").style.display = "none";
        document.getElementById("formulario-actualizar").style.display = "none";
        document.getElementById("botones-actualizar").style.display = "none";
        document.getElementById("id-articulo-actualizar").value = "";
        document.getElementById("formulario-actualizar").innerHTML = "";
        document.getElementById("resultado-actualizacion").style.display = "none";
        document.getElementById("alerta-actualizado").innerHTML = "";
    });

    //->
    $("#cursos").click(function() {
        document.getElementById("contenedor-insertar-informacion").style.display = "none";
        document.getElementById("contenedor-eliminar-informacion").style.display = "none";
        document.getElementById("actualizacion-articulo").style.display = "none";
        document.getElementById("contenedor-mostrar-informacion").style.display = "none";
        for(var i = 0; i<20 ; i++) {
            $("#mostrar-cursos").append(`
                <div class="col-lg-4 col-sm-12" style="margin-bottom: 8px;">
                    <div class="card">
                        <div class="card-header">
                            <h3>Lorem ipsum dolor sit.</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero accusantium, id minima facilis nobis sunt laborum soluta quod a corrupti harum sit dignissimos consequuntur alias.</p>
                            <input type="button" id="more-info-teacher" class="btn btn-info btn-block" value="More Info">
                        </div>
                    </div>       
                </div>
            `);
        }    
    });

});



