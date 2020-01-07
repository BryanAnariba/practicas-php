$(document).ready(function() {

    //Codigo para procesar la informacion y mostrar el contenido de articulos de la BD
    $('#btn-mostrar-datos').click(function() {
        //console.log('mostrando datos');
        document.getElementById("contenedor-mostrar-informacion").style.display = "block";
    });

    //Codigo para procesar la informacion y guardar datos en la base de datos del servidor
    $('#btn-insertar-registro').click(function() {
        //console.log('insertando datos');
        document.getElementById("contenedor-insertar-informacion").style.display = "block";
    });

    //Codigo para procesar la peticion de borrado
    $('#btn-borrar-registro').click(function() {
        //console.log('Eliminando Datos');
        document.getElementById("contenedor-eliminar-informacion").style.display = "block";
    });

    //Codigo para procesar la informacion a actualizar y guardar la nueva info en la BD del servidor
    $('#btn-actualizar-registro').click(function () {
        //console.log('Actualizando Informacion');
    });
});