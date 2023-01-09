function datosUsuario () {
    axios({
        method: 'GET',
        url: 'http://localhost/repositorio-php/poo-2020-unah/peticiones-con-axios/backend/routes/home-routes.php',
    })
    .then((usuario)=> {
        let img = 'img';
        if (usuario.data.codigo === 1) {
            console.log(usuario.data);
            document.getElementById('id').innerHTML = usuario.data.id;
            document.getElementById('nombre').innerHTML = usuario.data.nombre;
            document.getElementById('apellido').innerHTML = usuario.data.apellido;
            document.getElementById('correo').innerHTML = usuario.data.correo;
        } else {
            location.href ="not-found.html";
        }
    })
    .catch((error) => {
        console.error(error);
    });
}
datosUsuario();

