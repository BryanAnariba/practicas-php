$(document).ready(function(){
    fetchTask();//ejecuta la funcion que lista las tareas
    console.log("Jquery Is Working");
    let edit = false;//para update
    //PARA BUSCAR UNA TAREA POR NOMBRE
    $('#search').keyup(function(e){//cuando el usuario tipea en la casilla search
        var parametros = `search=${$('#search').val()}`;
        //console.log(search);
        if($('#search').val()){
            $.ajax({
                url:"task-search.php",
                method:"POST",
                dataType:"json",
                data:parametros,
                success:function(response){
                    console.log(response);
                    for(var i=0 ; i<response.length ; i++){
                        $('#tasks').append(`
                            <tr>
                                <td>${response[i].IDTask}</td>
                            </tr>
                        `);
                    }
                },
                error:function(error){
                    console.log(error);
                }
            });
        }
    });
    //PARA INSERTAR TAREAS A LA BASE DE DATOS
    //--------------------------------LA PETICION MAS COMPLEJA HASTA EL MOMENTO ----------------------------
    $('#btn-send-task').click(function(){
        var parametros2 = `name= ${$('#name').val()}&description=${$('#description').val()}&id=${$('#taskID').val()}`;
        console.log(parametros2);
        let url = edit === false ? 'task-add.php' : 'task_update2.php';//un if -> si false , enviar a task-add.php 
        console.log(url);//para ver que url esta usando la plataforma
        $.ajax({
            url:url,
            method:"POST",
            dataType:"json",
            data:parametros2,
            success:function(response){
                console.log(response);
                //OTRA FORMA DE LIMPIAR EL FORMULARIO
                fetchTask();
            },error:function(error){
                console.log(error);
            }
        });
    });
    //PARA LISTAR LAS TAREAS GUARDADAS DE LA BASE DE DATOS A LA TABLA DE TAREAS DEL CRUD
    function fetchTask(){
        document.getElementById("tasks").innerHTML="";
        $.ajax({
            url:'task-list.php',
            method: 'GET',
            dataType: 'json',
            success:function(response){
                console.log(response);
                for(var i=0 ; i<response.length ; i++){
                    $('#tasks').append(`
                    <tr taskID="${response[i].id}">
                        <td>${response[i].id}</td>
                        <td><a href="#" class="task-item">${response[i].name}</a></td>
                        <td>${response[i].description}</td>
                        
                        <td><button class="btn btn-danger task-delete" id="btn-delete">Delete Task</button></td>
                    </tr>
                    `);//task-delete para buscar el elemento
                }
            }
        });
    }
    //evento para que cuando pulses cualquier boton se envie una peticion ajax al server
    $(document).on('click','.task-delete',function(){
        if(confirm('Are You Sure That Want to Delete This Task??????')){//alert para confirmar borrar
            let element = $(this)[0].parentElement.parentElement;/*
            capturamos el boton que da el click el usuario, parentElement.parentElement -> el primer parentElemento
            sirve para obtener el td del boton , el siguiente es para obtener todo el tr y con ello el id , es como
            escalar niveles hasta obtener el id*/
            let idTask = $(element).attr('taskID');
            let idSend = `id=${$(element).attr('taskID')}`;
            console.log(idSend)
            console.log(element);//imprimimos el boton que estamos dando el click
            console.log('ID del Elemento Clickeado -> ' + idTask);
            $.ajax({
                url:"task-delete.php",
                method:"POST",
                dataType:"json",
                data:idSend,
                success:function(response){
                    console.log(response);
                    fetchTask();//EJECUTA LA FUNCION PARA VOLVER A CARGAR TAREAS EXISTENTES SIN CARGAR LA PAGINA
                }
            });
        }
    });
    //Evento para modificar una tarea
    $(document).on('click','.task-item' , function() {
        let element = $(this)[0].parentElement.parentElement;
        let idTask = $(element).attr('taskID');
        console.log("Editing The Element With ID -> " + idTask);
        let idSend = `id=${$(element).attr('taskID')}`;
        $.ajax({
            url:'task-update.php',
            method:'POST',
            dataType:'json',
            data:idSend,
            success:function(response){
                console.log(response);
                $('#name').val(response.names);
                $('#description').val(response.descriptions);
                $('#taskID').val(response.id);
                edit = true;//edit pasa a verdadero 
            },
            error:function(error){
                console.log(error);

            }
        });
    });
});
