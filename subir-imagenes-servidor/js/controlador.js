$(document).ready(function() {
    //console.log('Works');
    $("#btn-enviar").click(function () {
        var formData = new FormData($("#formulario")[0]);
        var ruta = "procesar-imagen.php";
        $.ajax({
            url: ruta ,
            type: "POST" ,
            data: formData ,
            contentType: false ,
            processData: false ,
            success:function(datos){
                $("#respuesta").html(datos);
            }
        });
    });
});