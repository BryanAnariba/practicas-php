$(document).ready(function() {

    //Codigo para procesar la informacion y mostrar el contenido de articulos de la BD
    $('#btn-mostrar-datos').click(function() {
        //console.log('mostrando datos');
        
        
        //HACE VISIBLE EL CONTENEDOR DE MOSTRAR INFORMACION
        document.getElementById("contenedor-mostrar-informacion").style.display = "block";
        
        //OCULTA LOS DEMAS DIVS DE CRUD
        document.getElementById("contenedor-insertar-informacion").style.display = "none";
        document.getElementById("contenedor-eliminar-informacion").style.display = "none";


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
    });
    $('#btn-insertar').click(function () {

        //paramtros normales
        var parametros = `idUsuario=${$("#user_id").val()}&nombreArticulo=${$("#txt-nombre-art").val()}&seccionArticulo=${$("#txt-seccion-art").val()}&paisArticulo=${$("#txt-pais-art").val()}&precioArticulo=${$("#txt-precio-art").val()}&cantidadArticulo=${$("#txt-cantidad-art").val()}`;
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
    });

    //Codigo para procesar la informacion a actualizar y guardar la nueva info en la BD del servidor
    $('#btn-actualizar-registro').click(function () {
        //console.log('Actualizando Informacion');

    });
});