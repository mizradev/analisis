<?php
include_once "bd/conexion.php";
$tamano_pagina = 5;
/*session_start();
if (!isset($_SESSION['rol'])) {
  header('location:login.php');
} else {
  if ($_SESSION['rol'] != 1) {
    header('location:login.php');
  }
}*/
if (isset($_GET["pagina"])) {
  if ($_GET["pagina"] == 1) {
    header("Location:docentes.php");
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
          <h3 class="text-themecolor mb-0">Docentes</h3>
          <ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item active">Informacion de Docentes</li>
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
          <!-- Modal Actualizar Docente-->
          <div id="ModalActualizarDocente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Actializar Docente</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body Docente card-body wizard-content">
                  <form action="#" class="">
                    <section>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="FacultadDoUda"> Facultad : <span class="text-danger">*</span> </label>
                            <select class="form-control" id="FacultadDoUda" name="FacultadDoUda" required>
                              <option selected=""></option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="DepartamentoDodUda"> Departamento : <span class="text-danger">*</span> </label>
                            <select class="form-control" id="DepartamentoDodUda" name="DepartamentoDodUda" required>
                              <option selected=""></option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="JornadaDoUda"> Jornada : <span class="text-danger">*</span> </label>
                            <select class="form-control" id="JornadaDoUda" name="JornadaDoUda" required>
                              <option selected=""></option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </section>
                    <button type="submit" class="btn btn-success float-right">Actualizar</button>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>
          <!-- End Modal -->
          <!-- Tabla -->
          <div class="card card-body">
            <div class="table-responsive">
              <h5 class="">Tabla de Docentes</h5>
              <table class="scroll-sidebar table table-striped search-table v-middle">
                <thead class="header-item  bg-info text-white">
                  <th class="text-center font-weight-bold">Id</th>
                  <th class="font-weight-bold">Nombre</th>
                  <th class="text-center font-weight-bold">Facultad</th>
                  <th class="text-center font-weight-bold">Departamento</th>
                  <th class="text-center font-weight-bold">Jornada</th>
                  <th class="text-center font-weight-bold">Acciones</th>
                </thead>
                <tbody>
                  <!-- row -->
                  <?php
                  $empezar_desde = ($pagina - 1) * $tamano_pagina;
                  $sql_total = "SELECT * FROM `Docentes`";
                  $resultado = $conexion->prepare($sql_total);
                  $resultado->execute(array());
                  $num_filas = $resultado->rowCount();
                  $total_paginas = ceil($num_filas / $tamano_pagina);
                  $registro_docen = $conexion->query("SELECT * FROM `Docentes`LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
                  foreach ($registro_docen as $docen) :
                    $persona = $conexion->query(" SELECT `Nom_Persona`,`Ape_Persona`,`Foto_Persona` FROM `Personas` WHERE `Cod_Persona`= $docen->Cod_Persona")->fetchAll(PDO::FETCH_OBJ);
                    foreach ($persona as $personadocen) :
                  ?>
                      <tr>
                        <!-- ID -->
                        <td class="text-center">
                          <span class="">
                            <?php echo $docen->Cod_Docente ?>
                          </span>
                        </td>
                        <!-- Nombre -->
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="../assets/images/users/<?php echo $personadocen->Foto_Persona ?>" alt="avatar" class="rounded-circle" width="35">
                            <div class="ml-2">
                              <div class="user-meta-info">
                                <h5 class="user-name mb-0" data-name="Penelope Baker">
                                  <?php echo $personadocen->Nom_Persona . " " . $personadocen->Ape_Persona ?>
                                </h5>
                                <span class="user-work text-muted" data-occupation="Web Developer">Docente</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <!-- Facultad -->
                        <td class="text-center">
                          <span class="">
                            <?php
                            $facultad = $conexion->query(" SELECT `Nom_Facultad`FROM `Facultades` WHERE `Cod_Facultad`= $docen->Facultad")->fetchAll(PDO::FETCH_OBJ);
                            foreach ($facultad as $personafacultad) :
                              echo $personafacultad->Nom_Facultad;
                            endforeach;
                            ?>
                          </span>
                        </td>
                        <!-- Departamento -->
                        <td class="text-center">
                          <span class="">
                            <?php
                            $departamento = $conexion->query(" SELECT `Nom_Departamento`FROM `Departamentos` WHERE `Cod_Departamento`= $docen->Departamento")->fetchAll(PDO::FETCH_OBJ);
                            foreach ($departamento as $personadepartamento) :
                              echo $personadepartamento->Nom_Departamento;
                            endforeach;
                            ?>
                          </span>
                        </td>
                        <!-- Jornada -->
                        <td class="text-center">
                          <span class="">
                            <?php
                            $Jornada = $conexion->query(" SELECT `Nom_Jornada`FROM `Jornadas` WHERE `Cod_Jornada`= $docen->Jornada")->fetchAll(PDO::FETCH_OBJ);
                            foreach ($Jornada as $personaJornada) :
                              echo $personaJornada->Nom_Jornada;
                            endforeach;

                            ?>

                          </span>
                        </td>
                        <td class="text-center">
                          <div class="action-btn">
                            <a class="text-info editarDocente" id="<?php echo $docen->Cod_Docente ?>">
                              <i class="fas fa-user-edit font-20"></i>
                            </a>

                          </div>
                        </td>
                      </tr>

                      <!-- /.row -->
                  <?php endforeach;
                  endforeach; ?>
                </tbody>
              </table>
              <!-- Paginador -->
              <!-- Paginador -->
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
              <!-- end Paginador -->
              <!-- end Paginador -->
            </div>
          </div>
          <!-- End Tabla -->

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
          <a href="https://www.unah.edu.hn/">Universidad Nacional Autónoma de Honduras. <i class=""></i></a></span>
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
    $(".editarDocente").click(function() {
      var id = $(this).attr("id");
      $.ajax({
        url: "fetch.php",
        data: "editarDocente=" + id,
        type: "POST",
        success: function($datos) {
          $(".Docente").html($datos);
        }
      });
      $("#ModalActualizarDocente").modal("show");
    });
  </script>
</body>

</html>