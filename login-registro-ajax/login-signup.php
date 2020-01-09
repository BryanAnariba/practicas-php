<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login And Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="contenedor-form">
        <div class="toggle">
            <span>Crear Cuenta</span>
        </div>
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="#">
                <input type="text" placeholder="Digite su Correo de Empleado" id="email" required>
                <input type="password" placeholder="Digite la Contraseña de Empleado" required id="password">
                <button style="cursor-pointer" type="button" id="btn-login" class="btn btn-success btn-block">
                    Iniciar Sesion
                </button>
            </form>
            <div class="reset-password mt-3">
                <a href="#">Olvide mi Contraseña?</a>
            </div>
        </div>
        
        <div class="formulario" id="formulario"> 
            <h2>Iniciar Sesion</h2>
            <form action="#">
                <input type="text" placeholder="Digite los Nombres del Empleado"  required id="txt-nombre">

                <input type="text" placeholder="Digite los Apellidos del Empleado"  required id="txt-apellido">

                <input type="text" placeholder="Digite la edad del Empleado"  required id="txt-edad">

                <select name="genero" id="genero" class="form-control">
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                    <option value="3">Otro</option>
                </select>
                <br>
                <select name="estado-civil" id="estado-civil" class="form-control">
                    <option value="1">Soltero</option>
                    <option value="2">Casado</option>
                    <option value="3">Divorciado</option>
                    <option value="4">Viudo</option>
                    <option value="5">Otro</option>
                </select>
                <br>
                <input type="text" placeholder="Lugar De Residencia" id="txt-residencia" required>

                <input type="text" placeholder="Usuario" id="txt-usuario" required>
                
                <input type="password" placeholder="Contraseña" id="txt-password" required>
                
                <input type="email" placeholder="Correo Electronico" id="txt-email" required>
                
                <input type="text" placeholder="Cargo Del Empleado" id="txt-cargo" required>
                
                <button style="cursor-pointer" type="button" id="btn-registrar-persona" class="btn btn-success btn-block">
                    Registrar Persona
                </button>
            </form>
        </div>
        <div class="mostrar-contenido" id="mostrar-contenido">
            
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>    
    <script src="js/main.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>