<!DOCTYPE html>
<html lang="en">



<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="Grupo #4 Analisis y Diseño" />

        <title>Historicos</title>
        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="assets/css/histor.css">
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-orange.min.css">
        <!-- Material Design icon font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Iconos -->
        <script src="https://kit.fontawesome.com/dbe875cbad.js" crossorigin="anonymous"></script>
    </head> -->

</head>

<body>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
    include "partes/menu-superior.php";
    ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
    include "partes/menu-izquierdo.php";
    ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Historial de cursos</h3>
                    <ul class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item active">Cursos matriculados en períodos anteriores</li>
                    </ul>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->

                <!-- end row -->

                <!-- Tabla -->
                <div class="card card-body">
                    <div class="table-responsive">
                        <h5 class="">Mis Cursos</h5>
                        <!-- Square card -->
                        <div class="mdl-card mdl-shadow--2dp demo-card-square">
                            <div class="mdl-card__title mdl-card--expand">
                                <h2 class="mdl-card__title-text">IA-117</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Lenguaje de Programación IV
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect">
                                    Ver Curso
                                </a>
                            </div>
                        </div>
                        <!-- Square card -->
                        <div class="mdl-card mdl-shadow--2dp demo-card-square">
                            <div class="mdl-card__title mdl-card__accent mdl-card--expand">
                                <h2 class="mdl-card__title-text">IA-137</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Base de Datos II
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    Ver Curso
                                </a>
                            </div>
                        </div>
                        <!-- Square card -->
                        <div class="mdl-card mdl-shadow--2dp demo-card-square">
                            <div class="mdl-card__title mdl-card--expand bg-danger">
                                <h2 class="mdl-card__title-text">IA-179</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Redes de Computadoras
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect">
                                    Ver Curso
                                </a>
                            </div>
                        </div>





                    </div>


                </div>
            </div>

        </div>
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <script src="../../dist/js/app.min.js"></script>
        <script src="../../dist/js/app.init.js"></script>
        <script src="../../dist/js/app-style-switcher.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js">
        </script>
        <!--Wave Effects -->
        <script src="../../dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../../dist/js/custom.min.js"></script>
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js">
        </script>


</body>

</html>