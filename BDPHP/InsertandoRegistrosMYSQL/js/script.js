$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#Seccion').val() == '' ) {
            errores += '<p>Escriba La Seccion del Articulo</p>';
            $('#Seccion').css("border-bottom-color", "#F14B4B")
        } else{
            $('#Seccion').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Correo ==============================
        if( $('#NombreArticulo').val() == '' ) {
            errores += '<p>Escriba el Nombre del Articulo</p>';
            $('#NombreArticulo').css("border-bottom-color", "#F14B4B")
        } else{
            $('#NombreArticulo').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Mensaje ==============================
        if( $('#FechaArticulo').val() == '' ) {
            errores += '<p>Escriba una Fecha del Articulo</p>';
            $('#FechaArticulo').css("border-bottom-color", "#F14B4B")
        } else{
            $('#FechaArticulo').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Pais de Origen ==============================
        if($('#PaisOrigen').val() == '') {
            errores += '<p>Escriba el Pais de Origen del Articulo</p>';
            $('#PaisOrigen').css("border-bottom-color", "#F14B4B");
        } else{
            $('#PaisOrigen').css("border-bottom-color", "#d1d1d1")
        }

        //Validando Precio
        if($('#Precio').val() == '') {
            errores += '<p>Escriba el Pais de Origen del Articulo</p>';
            $('#Precio').css("border-bottom-color", "#F14B4B");
        } else{
            $('#Precio').css("border-bottom-color", "#d1d1d1")
        }



        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        } else {
            var mensajeModal = '<div class="modal_wrap">'+
            '<div class="mensaje_modal">'+
                '<h3>Datos Insertados Con Exito.........!</h3>'+
                '<span id="btnClose">Cerrar</span>'+
            '</div>'+
        '</div>'

$('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
