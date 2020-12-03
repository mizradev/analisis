<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/recuperacion.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">

                <div class="caja__trasera-recuperacion">
                    <h3>¿Olvidaste tu contraseña?</h3>
                    <p>Recupera tu contraseña aquí</p>
                    <p>Se te enviara un correo de confirmación</p>

                </div>
                <!--caja trasera recuperacion -->

            </div> <!-- caja trasera -->

            <div class="contenedor__login-recuperacion">
                <form action="" class="formulario__recuperacion">
                    <img src="assets/images/email.svg" alt="">
                    <h2>Recuperar Contraseña</h2>
                    <input type="email" placeholder="Correo Electrónico">
                    <a href="login.php">
                        <p>¿Deseas iniciar sesión?</p>
                    </a>
                    <a href="cambiar-pass.php">
                        <p>Cambia tu contraseña aquí</p>
                    </a>
                    <button>Verificar</button>
                </form> <!-- Formulario login-->


            </div> <!-- contenedor formularios -->

        </div> <!-- contenedor__todo -->
    </main> <!-- Main -->

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
</body>

</html>