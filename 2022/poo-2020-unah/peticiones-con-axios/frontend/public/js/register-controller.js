// Funcion para obtener generos
function getGeneros () {
    axios({
        method: 'GET' ,
        url: 'http://localhost/repositorio-php/poo-2020-unah/peticiones-con-axios/backend/routes/listar-generos.php' ,
        responseType: 'json'
    })
    .then((res)=> {
        console.log(res.data);
        let generos = res.data;
        llenarSelectGeneros(generos);
    })
    .catch((error) => {
        console.error(error);
    });
}
getGeneros();

function llenarSelectGeneros(generos) {
    document.getElementById('generoUsuario').innerHTML = '';
    for(let i=0;i<generos.length;i++) {
        document.getElementById('generoUsuario').innerHTML += `
            <option value="${ generos[i].id }">${ generos[i].genero }</option>
        `;
    }
}
// ---------------------------------------------------------REST API--------------------------------------------------------------

// Funcion para crear un nuevo usuario
function insertarUsuario () {
    let usuario = {
        nombreCompleto: document.getElementById('nombreCompleto').value ,
        apellidoCompleto: document.getElementById('apellidoCompleto').value ,
        telefonoUsuario: document.getElementById('telefonoUsuario').value , 
        generoUsuario: document.getElementById('generoUsuario').value ,
        emailUsuario: document.getElementById('emailUsuario').value ,
        claveUsuario: document.getElementById('claveUsuario').value 
    };
    axios({
        method: 'POST' ,
        url: 'http://localhost/repositorio-php/poo-2020-unah/peticiones-con-axios/backend/routes/user-routes.php' ,
        resposeType: 'json' , 
        data: usuario 
    })
    .then((exito) => {
        console.log(exito.data);
        document.getElementById('nombreCompleto').value = '';
        document.getElementById('apellidoCompleto').value = '';
        document.getElementById('telefonoUsuario').value = '';
        document.getElementById('generoUsuario').value = '';
        document.getElementById('emailUsuario').value = '';
        document.getElementById('claveUsuario').value = '';
        getGeneros ();
    })
    .catch((error) => {
        console.error(error);
    });
}

// Funcion para logueo de usuarios
function logueo () {
    let credenciales = {
        email: document.getElementById('email').value ,
        pass: document.getElementById('clave').value
    };
    console.log(credenciales);
    axios({
        method: 'POST' ,
        url: 'http://localhost/repositorio-php/poo-2020-unah/peticiones-con-axios/backend/routes/login.php' ,
        resposeType: 'json' ,
        data: credenciales 
    })
    .then((exito) => {
        console.log(exito.data);
        if(exito.data.code == 1) {
            location.href ="home.html";
        }
    })
    .catch((error) => {
        console.error(error);
    });
}