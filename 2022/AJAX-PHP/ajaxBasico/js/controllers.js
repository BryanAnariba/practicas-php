function sendRequest(){
    theObject = new XMLHttpRequest();//declaramos una peticion con nombre theObject
    theObject.open('POST','backend.php' , true);//pedir algo al archivo backend.php
    theObject.setRequestHeader('content-type','application/x-www-form-urlencoded');//que tipo de contenido estoy solicitando , en este caso solo datos
    theObject.send('Username=Bryan Ariel Sanchez Anariba');//Enviamos parametros
    theObject.onreadystatechange = function() {//lo que devuelve el backend.php en una funcion
        console.log(theObject.responseText);
        document.getElementById('resAjax' ).innerHTML = theObject.responseText;
    }

}