<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">

                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div> <!-- caja trasera login -->

                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesiona</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div> <!-- caja trasera register -->

            </div> <!-- caja trasera -->

            <div class="contenedor__login-register">
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <a href="recuperacion.php">
                        <p>¿Olvidaste tu contraseña?</p>
                    </a>
                    <button>Entrar</button>
                </form> <!-- Formulario login-->

                <form action="" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="Apellido">
                    <input type="text" placeholder="Identidad">
                    <input type="text" placeholder="Genero">
                    <input type="email" placeholder="Correo Electronico">
                    <input type="tel" placeholder="Telefono">
                    <input type="password" placeholder="Contraseña">
                    <button>Registrarse</button>
                </form> <!-- Formulario registro -->

            </div> <!-- contenedor formularios -->

        </div> <!-- contenedor__todo -->
    </main> <!-- Main -->

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
</body>

</html>