<?php

include_once "bd/conexion.php";

$tamano_pagina = 10;
if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == 1) {
        header("Location:HrsVOAE.php");
    } else {
        $pagina = $_GET["pagina"];
    }
} else {
    $pagina = 1;
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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon" />
    <title>Control de Vida estudiantil</title>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <!-- ICONOS -->
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

        <!--MENU SUPERIOR-->
        <?php
        include "partes/menu-superior.php"
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        include "partes/menu-izquierdo.php"
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
                    <h3 class="text-themecolor mb-0">Horas VOAE</h3>
                    <ul class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item active">Historial Estudiantes</li>
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

                <!--PARTE DEL MENU-->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <div class="widget-content searchable-container list">

                        <!--BUSCADOR-->
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                    <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info "><i class="fas fa-user-plus"></i>Agregar Horas</a>
                                </div>
                            </div>
                        </div>


                        <!-- MODAL DEL BOTON AGREGAR -->

                        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">

                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Agregar Horas VOAE</h5>
                                        <button type="button" class="Salir" data-dismiss="modal" aria-label="Salir">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <!-- MODAL DEL BOTON AGREGAR -->
                                    <div class="modal-body">
                                        <div class="add-contact-box">
                                            <div class="add-contact-content">
                                                <form id="addContactModalTitle" method="POST" action="bd/INSERThora.php">

                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <div class="contact-email">
                                                                <label for="Nombre">Estudiante: <span class="danger">*</span></label>
                                                                <select class="form-control" id="EstudianteHrsvoae" name="EstudianteHrsvoae">
                                                                    <option selected=""></option>

                                                                    <?php

                                                                    $Cod_EstuHoras = $conexion->query("SELECT `Cod_Estudiante` FROM `Estudiantes`")->fetchAll(PDO::FETCH_OBJ);
                                                                    foreach ($Cod_EstuHoras as $Cod_EstudianteHoras) :

                                                                        $Estudiante_HrsVOAE = $conexion->query("SELECT `Cod_Persona`, `Nom_Persona`, `Ape_Persona` FROM `Personas` 
                                                               WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM `Estudiantes` WHERE `Cod_Estudiante` =  $Cod_EstudianteHoras->Cod_Estudiante)")->fetchAll(PDO::FETCH_OBJ);
                                                                        foreach ($Estudiante_HrsVOAE as $Est_HrsVOAE) :

                                                                        endforeach;
                                                                        echo '<option value = " ' . $Cod_EstudianteHoras->Cod_Estudiante . ' ">' . $Est_HrsVOAE->Nom_Persona . " " . $Est_HrsVOAE->Ape_Persona . '</option>';
                                                                    endforeach;


                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <div class="contact-occupation">
                                                                <label for="HrsAcu">Horas Acumuladas:</label>
                                                                <input type="number" id="Hrs_Acumuladas" class="form-control" name="HrsAcumuladas" requiered min="0" max="50">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="contact-phone">
                                                                <label for="HrsRea">Horas Realizadas:</label>
                                                                <input type="number" id="Hrs_Realizadas" class="form-control required" name="HrsRealizadas" required min="0" max="50">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">

                                                        <button id="btn-Guardar" class="btn btn-success">Guardar</button>

                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!--MODAL ACTUALIZAR -->
                        <div id="ModalEditarHoras" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="MyModalLabel">Actualizar Horas VOAE</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                    </div>
                                    <!-- MODAL DEL BOTON EDITAR -->
                                    <div class="modal-body ActualizarHoras">

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- TABLA CON LOS DATOS -->


                        <div class="card card-body">
                            <div class="table-responsive">
                                <table class="table table-striped search-table v-middle">
                                    <thead class="header-item bg-info text-white">

                                        <th class="text-center font-weight-bold">Cod.</th>
                                        <th class="text-center font-weight-bold">Nombre</th>
                                        <th class="text-center font-weight-bold">Num. Cuenta</th>
                                        <th class="text-center font-weight-bold">Horas Realizadas</th>
                                        <th class="text-center font-weight-bold">Horas Acumuladas</th>
                                        <th class="text-center font-weight-bold">Acciones</th>

                                    </thead>

                                    <!-- LISTA DE AGREGADOS A LA TABLA -->
                                    <tbody>

                                        <?php

                                        $empezar_desde = ($pagina - 1) * $tamano_pagina;
                                        $sql_total = "SELECT * FROM `HHVOAES`";
                                        $resultado = $conexion->prepare($sql_total);
                                        $resultado->execute(array());
                                        $num_filas = $resultado->rowCount();
                                        $total_paginas = ceil($num_filas / $tamano_pagina);

                                        $Registro_Horas = $conexion->query("SELECT * FROM `HHVOAES` WHERE `Cod_Hhvoae` IN (SELECT `Cod_Hhvoae` FROM `Rel_EstHhv` WHERE `Cod_Estudiante` 
                                      IN (SELECT `Cod_Estudiante` FROM `Estudiantes`))")->fetchAll(PDO::FETCH_OBJ);

                                        foreach ($Registro_Horas as $Horas) :;

                                            $NombreEst_Horas = $conexion->query("SELECT `Cod_Persona`, `Nom_Persona`, `Ape_Persona`, `Foto_Persona` FROM `Personas` 
                                        WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM`Estudiantes` WHERE `Cod_Estudiante` IN (SELECT `Cod_Estudiante` FROM `Rel_EstHhv` WHERE `Cod_Hhvoae` = $Horas->Cod_Hhvoae ))")->fetchAll(PDO::FETCH_OBJ);

                                            foreach ($NombreEst_Horas as $Nom_Horas) :

                                                $Cuenta_Estudiante = $conexion->query("SELECT `Cod_Persona`, `Cod_Estudiante`, `Num_Cuenta` FROM `Estudiantes`
                                       WHERE `Cod_Estudiante` IN (SELECT `Cod_Estudiante` FROM `Rel_EstHhv` WHERE `Cod_Hhvoae` = $Horas->Cod_Hhvoae)")->fetchAll(PDO::FETCH_OBJ);


                                                foreach ($Cuenta_Estudiante as $Cod_Horas) :
                                        ?>



                                                    <!-- FILAS-->
                                                    <tr class="text-center">

                                                        <td>
                                                            <span class="Cod_Horas" data-location="1">
                                                                <?php echo $Horas->Cod_Hhvoae; ?>

                                                            </span>
                                                        </td>

                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="../assets/images/users/<?php echo $Nom_Horas->Foto_Persona; ?>" alt="avatar" class="rounded-circle" width="35">
                                                                <div class="ml-2">
                                                                    <div class="user-meta-info">
                                                                        <h5 class="user-name mb-0" data-name="Ariel Sanchez">
                                                                            <?php echo $Nom_Horas->Nom_Persona . " " . $Nom_Horas->Ape_Persona; ?>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <span class="usr-location" data-location="20182534789">
                                                                <?php echo $Cod_Horas->Num_Cuenta; ?>
                                                            </span>
                                                        </td>

                                                        <td>
                                                            <span class="usr-ph-no" data-phone="2">
                                                                <?php
                                                                echo $Horas->Hor_Realizada;
                                                                ?>
                                                            </span>
                                                        </td>

                                                        <td>
                                                            <span class="usr-ph-no" data-phone="5">
                                                                <?php
                                                                echo $Horas->Hor_Acumulada;
                                                                ?>
                                                            </span>
                                                        </td>

                                                        <!--ICONOS DE EDITAR Y ELIMINAR-->
                                                        <td class="text-center">
                                                            <div class="action-btn">
                                                                <a class="text-info BtnActualizar" id="<?php echo $Horas->Cod_Hhvoae ?> ">
                                                                    <i class="fas fa-user-edit font-20"></i>
                                                                </a>

                                                                <a href="bd/DeleteHoras.php?CodigoHoras=<?php echo $Horas->Cod_Hhvoae ?> " class="text-danger">
                                                                    <i class="fas fa-trash-alt font-20"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- /.FILAS-->


                                        <?php
                                                endforeach;
                                            endforeach;
                                        endforeach;

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <?php
                                    //--PAGINACION
                                    for ($i = 1; $i <= $total_paginas; $i++) {
                                        echo "<a class='btn btn-info' href='?pagina=" . $i . "'>" . $i . "</a> ";
                                    }

                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
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
                    <a href="https://www.unah.edu.hn/">Universidad Nacional Autonoma de Honduas.<i class=""></i></a></span>
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

    <!--BOTON DE CONFIGURACION PARTE INFERIOR DERECHA-->




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

    <script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="../../dist/js/pages/contact/contact.js"></script>

    <script>
        $(".BtnActualizar").click(function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "fetchHORAS.php",
                data: "BtnActualizar=" + id,
                type: "POST",
                success: function($datos) {
                    $(".ActualizarHoras").html($datos);
                }
            });
            $("#ModalEditarHoras").modal("show");
        });
    </script>

</body>

</html>