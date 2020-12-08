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
                  <table id="calificaciones" class="table"></table>
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
    $(document).ready( function () {
      $('#calificaciones').DataTable({
        'language':{
          url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'
        },
        "columns": [
          { title: 'Número de cuenta',"data": "cuenta" },
          { title: 'Nombre Completo', "data": "nombre" },
          { title: 'Parcial 1', "data": "parcial1" },
          { title: 'Parcial 2', "data": "parcial2" },
          { title: 'Parcial 3', "data": "parcial3" },
          { title: 'Nota', "data": "notaFinal" },
          { title: 'Acciones', "data": "acciones" },
        ],
        'data':[
          {
            cuenta: '20121001581',
            nombre: 'Ozuna Yandel Guerrero Meza',
            parcial1: 35,
            parcial2: 45,
            parcial3: 20,
            notaFinal: 100,
            acciones: `<a href="mod_calificaciones_calificaciones-editar.php" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>`,
          },
          {
            cuenta: '2009101589',
            nombre: 'Cresencio Cecilio Lopez Arellano',
            parcial1: 0,
            parcial2: 0,
            parcial3: 0,
            notaFinal:0,
            acciones: `<a href="mod_calificaciones_calificaciones-editar.php" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>`,
          },
          {
            cuenta: '2010104569',
            nombre: 'Wisin Ricardo Membreño Soto',
            parcial1: 35,
            parcial2: 45,
            parcial3: 20,
            notaFinal: 100,
            acciones: `<a href="mod_calificaciones_calificaciones-editar.php" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>`,
          }
        ]
      });
  } );
  </script>
</body>

</html>