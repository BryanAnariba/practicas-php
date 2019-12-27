$(document).ready(function(){
    //peticion ajax para procesar los insert de nuevos usuarios a diferentes tablas
    $("#btn-registrar-persona").click(function () {
        var parametros = `nombres=${$("#txt-nombre").val()}&apellidos=${$("#txt-apellido").val()}&edad=${$("#txt-edad").val()}&genero=${$("#genero").val()}&estadoCivil=${$("#estado-civil").val()}&residencia=${$("#txt-residencia").val()}&usuario=${$("#txt-usuario").val()}&password=${$("#txt-password").val()}&email=${$("#txt-email").val()}&cargo=${$("#txt-cargo").val()}`;
        console.log(parametros);
        $.ajax({
            url:'ajax-php/procesar-inserts.php',
            method:'POST',
            dataType:'json',
            data:parametros,
            success:function(respuesta) {
                for(var i=0;i<respuesta.length;i++) {
                    $("#mostrar-contenido").append(`
                        <div class="alert alert-success" role="alert">
                            <center>
                                ${respuesta[i].mensaje}
                            </center>
                        </div>`
                    );
                }
            },
            error:function(error) {
                $("#formulario").append(error.responseText);
            }
        });
    });

    //Peticion ajax para loguear a un usuario
    $("#btn-login").click(function(){
        var parametros = `email=${$("#email").val()}&password=${$("#password").val()}`;
        console.log(parametros);
        $.ajax({
            url:'ajax-php/procesar-login.php',
            method:'POST',
            dataType:'json',
            data:parametros,
            success:function(respuesta) {
                console.log(respuesta);
                for(var i=0 ; i<respuesta.length ; i++) {
                    if(respuesta[i].mensaje == true) {
                        window.location.href = "index.php";
                    } else {
                        console.log(respuesta[i].mensaje);
                        $("#mostrar-contenido").append(
                            `<div class="alert alert-danger" role="alert">
                                <center>
                                    <h2>Credenciales Incorrectas, Introduzcalas Nuevamente.</h2>
                                </center>
                            </div>`
                        );
                        document.getElementById("email").value = "";
                        document.getElementById("password").value = "";
                    }
                }
            },
            error:function(error) {
                $("#formulario").append(error.responseText);
            }
        });
    });
});