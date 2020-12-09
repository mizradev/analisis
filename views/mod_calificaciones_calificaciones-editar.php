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
              <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="mod_calificaciones_calificaciones.php">Calificaciones</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle de calificaciones</li>
  </ol>
</nav>

              <div class="tab-pane" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                <div class="card-body">
                  <h2>Detalle de calificaciones</h2>
                  <hr>
                  <section class="row">
                    <div class="col-sm-12 col-md-2">
                      <img class="rounded-circle" src="https://images.pexels.com/photos/2014422/pexels-photo-2014422.jpeg?auto=compress&cs=tinysrgb&h=130" alt="">
                    </div>
                    <div class="col-sm-12 col-md-10">
                      <h2>Cresencio Cecilio Lopez Arellano</h2>
                      <p>Informática Administrativa</p>
                      <p>Análisis y Diseño de Sistemas</p>
                      <p>Periodo: 3 | Año: 2020</p>
                      <p>2009101589</p>
                    </div>

                  </section>
                  <br>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Parcial 1</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Parcial 2</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Parcial 3</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                    <table id="calificaciones" class="table"></table>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><table id="calificaciones" class="table"></table></div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><table id="calificaciones" class="table"></table></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Actividad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Actividad</label>
          <input class="form-control" value="Diagrama ER">
        </div>
        <div class="form-group">
          <label for="">Valor</label>
          <input class="form-control" type="tel" value="0">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
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
          { title: 'Asignación',"data": "asignacion" },
          { title: 'Valor', "data": "valor" },
          { title: 'Acciones', "data": "acciones" },
        ],
        'data':[
          {
            asignacion: 'Tarea 1',
            valor: 0,
            acciones: `<button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-alt"></i></button>`,
          },
          {
            asignacion: 'Tarea 2',
            valor: 0,
            acciones: `<button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-alt"></i></button>`,
          },
          {
            asignacion: 'Exposición Diagrama de Macrofunciones',
            valor: 0,
            acciones: `<button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-alt"></i></button>`,
          },
          {
            asignacion: 'Diagrama ER',
            valor: 0,
            acciones: `<button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-alt"></i></button>`,
          },
          
        ]
      });
  } );
  </script>
</body>

</html>