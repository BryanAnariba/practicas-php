$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado Codigo ==============================
        if( $('#codigoArticulo').val() == '' ) {
            errores += '<p>Escriba El Codigo del Articulo</p>';
            $('#codigoArticulo').css("border-bottom-color", "#F14B4B")
        } else{
            $('#codigoArticulo').css("border-bottom-color", "#d1d1d1")
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
                '<h3>Datos Eliminados Con Exito.!!!!!!!!!!!!</h3>'+
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
