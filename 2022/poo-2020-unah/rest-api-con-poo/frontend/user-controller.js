var usuarios = [];
const URI = '../../rest-api-con-poo/backend/routes/usuarios.php';
// obtenemos los usuarios de usuarios.json
function obtenerUsuarios () {
    axios({
        method: 'GET' ,
        url: URI ,
        responseType: 'json' ,
    })  .then((res) => { 
            console.log(res.data);
            usuarios = res.data;
            llenarTabla ();
        }) 
        .catch((error) => { 
            console.error(error); 
        });
}
obtenerUsuarios();

// Pintamos usuarios retornados en una tabla
function llenarTabla () {
    document.querySelector('table #usuarios-retornados').innerHTML = '';
    for(let i=0;i<usuarios.length;i++) {
        document.querySelector('#usuarios-retornados').innerHTML += 
        `
            <tr>
                <td>${ usuarios[i].completeName }</td>
                <td>${ usuarios[i].email }</td>
                <td>${ usuarios[i].password }</td>
                <td>${ usuarios[i].role }</td>
                <td><input type="button" value="Eliminar" class="btn btn-danger" onclick="eliminarUsuario(${ i })"></td>
                <td><input type="button" value="Editar" class="btn btn-danger" onclick="editarUsuario(${ i })"></td>
            </tr>
        `;
    }
}

// Eliminamos un usuario con un identificador especifico
function eliminarUsuario (identificador) {
    console.log(identificador);
    axios({
        method: 'DELETE' ,
        url: URI + `?id=${ identificador }` ,
        responseType: 'json' 
    })
        .then((res) => {
            console.log(res.data);
            obtenerUsuarios();
        })
        .catch((error) => {
            console.error(error);
        });
} 

// Guardar un usuario
function guardarUsuario () {
    let usuario = {
        completeName: document.getElementById('completeName').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
        role: document.getElementById('role').value
    };
    console.log(usuario);
    axios({
        method: 'POST' ,
        url: URI ,
        responseType: 'json' ,
        data: usuario
    })
        .then((res) => {
            console.log(res);
            obtenerUsuarios();
            limpia();
        })
        .catch((error) => {
            console.error(error);
        })
}

// Proceso de Actualizacion de un usuarui
function editarUsuario (identificador) {
    console.log(identificador);
    axios({
        method: 'GET' ,
        url: URI + `?id=${identificador}` ,
        responseType: 'json' ,
    })
        .then((res) => {
            console.log(res.data);
            document.getElementById('completeName').value = res.data.completeName;
            document.getElementById('email').value = res.data.email;
            document.getElementById('password').value =res.data.password;
            document.getElementById('role').value = res.data.role;
        })
        .catch((res) => {
            console.error(error);
        });
    document.getElementById('actualizar').style.display = 'block';
    document.getElementById('guardar').style.display = 'none';
}

function actualizarUsuario () {
    document.getElementById('actualizar').style.display = 'none';
    document.getElementById('guardar').style.display = 'block';
}

// limpia casilla
function limpia ()
{
    document.getElementById('completeName').value=null;
    document.getElementById('email').value=null;
    document.getElementById('password').value=null;
    document.getElementById('role').value=null;
}