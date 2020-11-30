<?php
include_once "bd/conexion.php";
session_start();

if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location:index.php');
            break;
        case 2:
            header('location:estudiantes.php');
            break;
        default:
    }
}

if (isset($_POST['Usuario']) && isset($_POST['Password'])) {
    $Usuario = htmlentities(addslashes($_POST['Usuario']));
    $Password = htmlentities(addslashes($_POST['Password']));

    $consulta = "SELECT * FROM `Usuarios` WHERE Nom_Usuario=:usuario AND Pas_Usuario=:password";
    $resultados = $conexion->prepare($consulta);
    $pass = ($Password);
    $resultados->bindValue(":usuario", $Usuario);
    $resultados->bindValue(":password", $pass);
    $resultados->execute();
    $row = $resultados->fetch(PDO::FETCH_NUM);
    if ($row) {
        $rol = $row[3];
        $_SESSION['rol'] = $rol;
        $_SESSION["usuario"] = $Usuario;
        switch ($_SESSION['rol']) {
            case 1:
                header('location:index.php');
                break;
            case 2:
                header('location:estudiantes.php');
                break;
            default:
        }
    } else {
        header('location:login.php');
    }
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Equipo #2 Lenguaje de Programación 4" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon.png" />
    <title>Control de Vida estudiantil</title>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/dbe875cbad.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../assets/images/background/frontpage-bg.jpg) no-repeat center center; background-size: cover;">
            <div class="auth-box p-4 bg-white rounded">
                <div id="loginform">
                    <div class="logo text-center">
                        <span class="db"><img src="../assets/images/CVE.svg" width="50px" alt="logo" class="mb-3"><br>
                            <img src="../assets/images/logo-texto-oscuro.svg" alt="Home"></span>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3 form-material" id="loginform" method="POST" action="login.php">
                                <div class="form-group mb-3">
                                    <div class="">
                                        <input class="form-control" type="text" required="" placeholder="Usuario" name="Usuario" id="Usuario">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="">
                                        <input class="form-control" type="password" required="" placeholder="Password" name="Password" id="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex">
                                        <div class="checkbox checkbox-info pt-0">
                                            <input id="checkbox-signup" type="checkbox" class="material-inputs chk-col-indigo">
                                            <label for="checkbox-signup"> Recuérdame </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center mt-4">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Iniciar sesión</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>

</html>