<?php
include_once "bd/conexion.php";
$tamano_pagina = 10;
if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == 1) {
        header("Location:faltas.php");
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
                    <h3 class="text-themecolor mb-0">Faltas</h3>
                    <ul class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item active">Historial de Faltas</li>
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
                                    Agregar Falta
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Agregar -->
                    <div id="ModalAgregarFalta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Agregar Falta</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body card-body wizard-content">
                                    <form id="ModalAgregarFalta" method="POST" action="bd/insert.php" class="">
                                        <section>
                                            <!-- input dirección -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EstudianteFalta"> Estudiante : <span class="danger">*</span> </label>
                                                        <select class="form-control" id="EstudianteFalta" name="EstudianteFalta" required>
                                                            <option selected=""></option>

                                                            <?php
                                                            $Cod_EstFalta = $conexion->query("SELECT `Cod_Estudiante` FROM `Estudiantes`")->fetchAll(PDO::FETCH_OBJ);
                                                            foreach ($Cod_EstFalta as $CodEstudianteFalta) :

                                                                $Estudiante_Falta = $conexion->query("SELECT `Cod_Persona`,  `Nom_Persona`,`Ape_Persona` FROM `Personas` WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM `Estudiantes`
                                                             WHERE `Cod_Estudiante` = $CodEstudianteFalta->Cod_Estudiante)")->fetchAll(PDO::FETCH_OBJ);
                                                                foreach ($Estudiante_Falta as $Est_Falta) :



                                                                endforeach;

                                                                echo '<option value = " ' . $CodEstudianteFalta->Cod_Estudiante . ' ">' . $Est_Falta->Nom_Persona . " " . $Est_Falta->Ape_Persona . '</option>';
                                                            endforeach;


                                                            ?>



                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="TipoFalta"> Tipo de Falta : <span class="danger">*</span> </label>
                                                        <select class="form-control" id="TipoFalta" name="TipoFalta" required>
                                                            <option selected=""></option>
                                                            <option value="L">Leve</option>
                                                            <option value="M">Moderada</option>
                                                            <option value="G">Grave</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input Tipo de Direccion Estado de Direccion -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="DescripcionFalta"> Descripción : <span class="danger">*</span> </label>
                                                        <textarea class="form-control" name="DescripcionFalta" id="DescripcionFalta" cols="30" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <button type="submit" class="btn btn-success float-right">Agregar</button>
                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!-- Modal Actualizar Falta -->
                    <div id="ModalActualizarFalta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Actualizar Falta</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body card-body wizard-content Faltas">

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!-- End Modal -->
                    <!-- Tabla Faltas -->
                    <div class="card card-body">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-hover">
                                    <div class="p-2 rounded bg-success text-center">
                                        <h1 class="font-light text-white">
                                            <?php
                                            $Leve_Falta = "SELECT COUNT(*) `Tip_Falta` FROM `Faltas` WHERE `Tip_Falta` = 'L'";
                                            $result = $conexion->query($Leve_Falta); //$conexion sería el objeto conexión
                                            $total = $result->fetchColumn();
                                            echo '' . $total;

                                            ?>
                                        </h1>
                                        <h5 class="text-white">Faltas Leves</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-hover">
                                    <div class="p-2 rounded bg-warning text-center">
                                        <h1 class="font-light text-white">
                                            <?php
                                            $Moderada_Falta = "SELECT COUNT(*) `Tip_Falta` FROM `Faltas` WHERE `Tip_Falta` = 'M'";
                                            $result = $conexion->query($Moderada_Falta); //$conexion sería el objeto conexión
                                            $total = $result->fetchColumn();
                                            echo '' . $total;

                                            ?>
                                        </h1>
                                        <h5 class="text-white">Faltas Moderadas</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-hover">
                                    <div class="p-2 rounded bg-danger text-center">
                                        <h1 class="font-light text-white">
                                            <?php
                                            $Grave_Falta = "SELECT COUNT(*) `Tip_Falta` FROM `Faltas` WHERE `Tip_Falta` = 'G'";
                                            $result = $conexion->query($Grave_Falta); //$conexion sería el objeto conexión
                                            $total = $result->fetchColumn();
                                            echo '' . $total;

                                            ?>

                                        </h1>
                                        <h5 class="text-white">Faltas Graves</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="">Tabla de Faltas</h5>
                        <div class="table-responsive">
                            <table class="table table-striped search-table v-middle">
                                <thead class="header-item bg-info text-white">

                                    <th class="text-center font-weight-bold">Id</th>
                                    <th class="font-weight-bold">Nombre</th>
                                    <th class="text-center font-weight-bold">Cuenta</th>
                                    <th class="text-center font-weight-bold">Tipo de Falta</th>
                                    <th class="text-center font-weight-bold">Descripción</th>
                                    <th class="text-center font-weight-bold">Acciones</th>

                                </thead>

                                <!-- LISTA DE AGREGADOS A LA TABLA -->
                                <tbody>

                                    <!---------------SELECT PARA EL REGISTRO DE FALTAS------------------------->
                                    <?php

                                    $empezar_desde = ($pagina - 1) * $tamano_pagina;
                                    $sql_total = "SELECT * FROM `Faltas`";
                                    $resultado = $conexion->prepare($sql_total);
                                    $resultado->execute(array());
                                    $num_filas = $resultado->rowCount();
                                    $total_paginas = ceil($num_filas / $tamano_pagina);

                                    $Registro_Faltas = $conexion->query("SELECT * FROM `Faltas`  WHERE `Cod_Falta` IN(SELECT `Cod_Falta` FROM `Rel_EstFal`
                                   WHERE `Cod_Estudiante` IN (SELECT `Cod_Estudiante` FROM `Estudiantes`) )  LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);

                                    foreach ($Registro_Faltas as $Falta) :;

                                        $NombreEstudiante_Falta = $conexion->query("SELECT `Cod_Persona`,`Nom_Persona`,`Ape_Persona`,`Foto_Persona` FROM `Personas` WHERE `Cod_Persona` 
                                   IN(SELECT `Cod_Persona` FROM `Estudiantes`WHERE `Cod_Estudiante` IN (SELECT `Cod_Estudiante`  FROM `Rel_EstFal` WHERE `Cod_Falta` = $Falta->Cod_Falta ))")->fetchAll(PDO::FETCH_OBJ);

                                        foreach ($NombreEstudiante_Falta as $N_Falta) :

                                            $CuentaEstudiante_Falta = $conexion->query("SELECT `Cod_Persona`,`Cod_Estudiante`,`Num_Cuenta` FROM `Estudiantes` 
                                    WHERE `Cod_Estudiante` IN(SELECT `Cod_Estudiante` FROM `Rel_EstFal` WHERE `Cod_Falta` = $Falta->Cod_Falta  )")->fetchAll(PDO::FETCH_OBJ);

                                            foreach ($CuentaEstudiante_Falta as $C_Falta) :


                                    ?>
                                                <!-- FILAS-->
                                                <tr class="text-center">

                                                    <td>
                                                        <span class="Cod_Horas" data-location="1">
                                                            <!----------------SELECT PARA EL ID DE FALTA------------------------------>

                                                            <?php echo $Falta->Cod_Falta;  ?>


                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../assets/images/users/<?php echo $N_Falta->Foto_Persona;  ?>" alt="avatar" class="rounded-circle" width="35">
                                                            <div class="ml-2">
                                                                <div class="user-meta-info">
                                                                    <h5 class="user-name mb-0" data-name="Ariel Sanchez">
                                                                        <!------------------------SELECT PARA EL NOMBRE------------------------------------------------->
                                                                        <?php




                                                                        echo $N_Falta->Nom_Persona . " " . $N_Falta->Ape_Persona;


                                                                        ?>



                                                                    </h5>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="usr-location" data-location="20182534789">
                                                            <?php




                                                            echo $C_Falta->Num_Cuenta;


                                                            ?>



                                                        </span>
                                                    </td>

                                                    <td>

                                                        <span class="usr-ph-no" data-phone="2">

                                                            <?php
                                                            if ($Falta->Tip_Falta == "L") {
                                                                echo "<span class='badge badge-pill bg-success class=font-light text-white'>
                                                    $Falta->Tip_Falta
                                                     </span>";
                                                            } else if ($Falta->Tip_Falta == "M") {
                                                                echo "<span class='badge badge-pill bg-warning class=font-light text-white '>
                                                    $Falta->Tip_Falta
                                                     </span>";
                                                            } else {
                                                                echo "<span class='badge badge-pill bg-danger class=font-light text-white'>
                                                    $Falta->Tip_Falta
                                                     </span>";
                                                            }
                                                            ?>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <span class="usr-ph-no" data-phone="5">
                                                            <?php
                                                            echo $Falta->Des_Falta;
                                                            ?>
                                                        </span>
                                                    </td>

                                                    <!--ICONOS DE EDITAR Y ELIMINAR-->
                                                    <td class="text-center">
                                                        <div class="action-btn">

                                                            <a class="text-info editar" id="<?php echo $Falta->Cod_Falta ?> ">

                                                                <i class="fas fa-user-edit font-20"></i>

                                                            </a>

                                                            <a href="bd/delete.php?Cod_Falta=<?php echo $Falta->Cod_Falta ?> " class="text-danger delete ml-2">

                                                                <i class="fas fa-trash-alt font-20"></i>

                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- /.FILAS-->
                                    <?php endforeach;
                                        endforeach;
                                    endforeach;
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <?php
                                //-----------------------Paguinacion
                                for ($i = 1; $i <= $total_paginas; $i++) {
                                    echo " <a class='btn btn-info' href='?pagina=" . $i . "'>" . $i . "</a>  ";
                                }
                                ?>
                            </div>
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
                url: "fetchfalta.php",
                data: "editar=" + id,
                type: "POST",
                success: function($datos) {
                    $(".Faltas").html($datos);
                }
            });
            $("#ModalActualizarFalta").modal("show");
        });
    </script>


</body>

</html>