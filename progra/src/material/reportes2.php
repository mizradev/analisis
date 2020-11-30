<!--   CONEXION A LA BASE DE DATOS -->
<?php
include_once "bd/conexion.php"
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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon" />
    <title>Control de Vida estudiantil</title>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/dbe875cbad.js" crossorigin="anonymous"></script>
</head>

<body>
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
                    <h3 class="text-themecolor mb-0">Reportes</h3>
                    <ul class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item active">Historial de Reportes</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="widget-content searchable-container list">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalAgregarFalta">
                                    <i class="fas fa-user-plus"></i>
                                    Agregar Reporte
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Agregar -->
                    <div id="ModalAgregarFalta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Agregar Reporte</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body card-body wizard-content">
                                    <form action="bd/insert_Reportes.php" method="POST" class="">
                                        <section>
                                            <!-- input dirección -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EstudianteReporte"> Actividad : <span class="danger">*</span> </label>
                                                        <select class="form-control" id="ActividadReporte" name="ActividadReporte" required>
                                                            <option selected=""></option>
                                                            <?php
                                                            $Reporte_Actividad = $conexion->query("SELECT `Cod_Actividad`,  `Nom_Actividad` FROM `Actividades` WHERE `Cod_Actividad` IN (SELECT `Cod_Actividad` FROM `Actividades`)")->fetchAll(PDO::FETCH_OBJ);
                                                            foreach ($Reporte_Actividad as $N_Actividad) :
                                                                echo '<option value = " ' . $N_Actividad->Cod_Actividad . ' ">' . $N_Actividad->Nom_Actividad . '</option>';
                                                            endforeach;

                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Asistencias"> Asistencias : <span class="danger">*</span> </label>
                                                        <input type="number" class="form-control product-search" name="Asistencias" id="Asistencias">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Inasistencias"> Inasistencias : <span class="danger">*</span> </label>
                                                        <input type="number" class="form-control product-search" name="Inasistencias" id="Inasistencias">
                                                    </div>
                                                </div>
                                            </div>

                                        </section>
                                        <button type="submit" class="btn btn-success float-right">Agregar Reporte</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!-- Modal  -->
                    <!-- ////////////////////////////////////////MODAL EDITAR/////////////////////////////////////////////////////////// -->
                    <div id="ModalEditarReporte" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Editar Reporte</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body card-body wizard-content ActualizarReporte">


                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>

                    <div class="card card-body">

                        <h5 class="">Reportes Realizados</h5>
                        <div class="table-responsive">
                            <table class="table table-striped search-table v-middle">
                                <thead class="header-item bg-info text-white">

                                    <th class="text-center font-weight-bold">Id</th>
                                    <th class="font-weight-bold">Actividad</th>
                                    <th class="text-center font-weight-bold">Descripcion de la Actividad</th>
                                    <th class="text-center font-weight-bold">Asistencias</th>
                                    <th class="text-center font-weight-bold">Inasistencias</th>
                                    <th class="text-center font-weight-bold">Acciones</th>

                                </thead>

                                <!-- LISTA DE AGREGADOS A LA TABLA -->
                                <tbody>
                                    <!--/////////// CONEXION A LAS ACTIVIDADES/////////-->
                                    <?php

                                    $Registro_Reporte = $conexion->query("SELECT * FROM `Reportes`")->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($Registro_Reporte as $Reporte) :
                                        $Corredor_Matricula = $conexion->query("SELECT `Cod_Actividad`,`Nom_Actividad`,`Des_Actividad` FROM `Actividades` WHERE `Cod_Actividad` IN( SELECT `Cod_Actividad` FROM `Actividades` WHERE `Cod_Actividad`=  $Reporte->Cod_Actividad)")->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($Corredor_Matricula as $M_Actividad) :

                                    ?>
                                            <!-- FILAS-->
                                            <tr class="text-center">

                                                <td>
                                                    <span class="Cod_Horas" data-location="1">
                                                        <!----------------SELECT PARA EL ID DE FALTA------------------------------>
                                                        <?php
                                                        echo $Reporte->Cod_Reporte;
                                                        ?>
                                                    </span>
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center">

                                                        <div class="ml-2">
                                                            <div class="user-meta-info">
                                                                <h5 class="user-name mb-0" data-name="Actividad Recreativa">
                                                                    <?php

                                                                    echo $M_Actividad->Nom_Actividad;

                                                                    ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <span class="usr-location" data-text="250">
                                                        <?php
                                                        echo $M_Actividad->Des_Actividad;
                                                        ?>
                                                    </span>
                                                </td>


                                                <td>
                                                    <span class="usr-location" data-text="250">
                                                        <?php
                                                        echo "<span class='badge badge-pill bg-success class=font-light text-white'>
                                         $Reporte->Asi_Reporte
                                         </span>";

                                                        ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo "<span class='badge badge-pill bg-danger class=font-light text-white'>
                                         $Reporte->Ina_Reporte
                                        </span>";
                                                    ?>
                                                </td>

                                                <!--ICONOS DE EDITAR Y ELIMINAR-->
                                                <td class="text-center">
                                                    <div class="action-btn">
                                                        <a class="text-info editar" id="<?php echo $Reporte->Cod_Reporte ?>">

                                                            <i class="fas fa-print font-20 "></i>
                                                        </a>
                                                        <a href="bd/delete_Reportes.php?Cod_Reporte=<?php echo $Reporte->Cod_Reporte ?>" class="text-danger delete ml-2"><i class="fas fa-trash-alt font-20"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- /.FILAS-->
                                    <?php
                                        endforeach;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <span>© 2020 VOAE |
                    <a href="https://www.unah.edu.hn/">Universidad Nacional Autónoma de Honduras.<i class=""></i></a></span>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <script>
        $(".editar").click(function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "fetch_reportes.php",
                data: "editar=" + id,
                type: "POST",
                success: function($datos) {
                    $(".ActualizarReporte").html($datos);
                }
            });
            $("#ModalEditarReporte").modal("show");
        });
    </script>




</body>

</html>