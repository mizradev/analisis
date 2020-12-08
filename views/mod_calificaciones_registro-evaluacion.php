<?php
/*
  error_reporting();
 
require_once '../controllers/private.php';?>
<?php

if($_SESSION['Rol'] == 2){
         header('location: ../progra/index.php');
         }
  */
?>


<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
  <?php include "partes/head.php"; ?>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>

<body>

  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>

  <div id="main-wrapper">


    <?php
    include "partes/menu-superior.php";
    ?>

    <!-- ========================================= -->

    <?php
    include "partes/menu-izquierdo.php";
    ?>
    <!-- ========================================== -->

    <div class="page-wrapper">

      <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
          <h3 class="text-themecolor mb-0">SISTEMA DE REGISTRO DE CALIFICACIONES</h3>
          <ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item active">Informatica Adminitrativa</li>
            <li class="breadcrumb-item"><a>Bienvenid@s <?php echo $_SESSION['Nombre'] ?></a> </li>
          </ul>
        </div>
      </div>

      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page <> Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
          <!-- Column -->
          <div class="col-md-12">
            <div class="card">
              <!-- Tabs -->
              <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">

                <li class="nav-item">
                  <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Informacion</a>
                </li>
              </ul>


              <div class="tab-pane" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                    <h2>Registro de Actividades a Evaluar</h2>
                    <p>Ingrese el nombre y valor de las actividades a evaluar en el parcial</p> 
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <select id="inputState" class="form-control">
                          <option desabled selected>Seleccione el parcial</option>
                          <option>Parcial 1</option>
                          <option>Parcial 2</option>
                          <option>Parcial 3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  
                  <hr>
                  <form>
                    <section id="content-activities" class="">
                      <div class="form-row shadow-sm rounded p-3 mb-3">
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre de la actividad">
                        </div>
                        <div class="col-md-5">
                          <input type="tel" class="form-control" id="inputPassword4" placeholder="Valor de la actividad">
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary mr-1 btn-add-field" data-toggle="tooltip" data-placement="top" title="Agregar nuevo campo">  <i class="fa fa-plus"></i> </button>
                        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar este campo">  <i class="fa fa-trash"></i> </button>
                        </div>
                      </div>
                    </section>
                    
                    <hr>
                    <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"> Registrar actividades <i class="fa fa-plus"></i> </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <footer class="footer text-center">
      <span>© 2020 VOAE |
        <a href="https://www.unah.edu.hn/ ">ANALISI Y DISEÑO DE DATOS.<i class=""></i></a></span>
    </footer>

  </div>

  </div>

  <!-- ============================================ -->
  <?php
  include "partes/panel.php"
  ?>
  <!-- ============================================ -->
  <!-- All Jquery -->
  <!-- ============================================ -->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- apps -->
  <script src="dist/js/app.min.js"></script>
  <script src="dist/js/app.init.js"></script>
  <script src="dist/js/app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <!--Wave Effects -->
  <script src="dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="dist/js/custom.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
    const content_activities = $('#content-activities');

    $('.btn-add-field').on('click', function (){
      content_activities.append(`
      <div class="form-row shadow-sm rounded p-3 mb-3">
        <div class="col-md-5">
          <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre de la actividad">
        </div>
        <div class="col-md-5">
          <input type="tel" class="form-control" id="inputPassword4" placeholder="Valor de la actividad">
        </div>
        <div class="col-md-2 d-flex justify-content-center">
        <button type="button" class="btn btn-secondary mr-1 btn-add-field" data-toggle="tooltip" data-placement="top" title="Agregar nuevo campo">  <i class="fa fa-plus"></i> </button>
        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar este campo">  <i class="fa fa-trash"></i> </button>
        </div>
      </div>
      `);
    });


    });
  </script>
</body>

</html>