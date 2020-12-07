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
 <?php include ("../partes/head.php"); ?>
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
    include ("../partes/menu-superior.php");
    ?>
   
    <!-- ========================================= -->

    <?php
    include ("../partes/menu-izquierdo.php");
    ?>
    <!-- ========================================== -->

    <div class="page-wrapper">

      <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
          <h3 class="text-themecolor mb-0">SISTEMA DE REGISTRO DE CALIFICACIONES</h3>
          <ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item active">Informatica Adminitrativa</li>
            <li class="breadcrumb-item" ><a >Bienvenid@s  <?php echo $_SESSION['Nombre']?></a>  </li>
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
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="../assets/images/users/66.png" class="rounded-circle" width="150">                                  
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body text-center"> <h5 class="text-muted">UNIVERSIDAD NACIONAL AUTONOMA DE HONDURAS</h5>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Informacion</a>
                                </li>
                            </ul>
                            
                           
                                <div class="tab-pane" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <div class="card-body">
                                    <h5>Visión</h5>
                                    <h5 class="text-muted">Una institución líder de la educación superior nacional e internacional; protagonista en la transformación de la sociedad hondureña 
                                    hacia el desarrollo humano sostenible con recursos humanos del más alto nivel académico, científico y ético.</h5>
                                    <h5 class="text-muted">Una institución con un gobierno democrático, organizada en redes y descentralizada, transparente en la rendición de cuentas,
                                     con una gestión académica y administrativo/ financiera, participativa, estratégica, moderna y orientada hacia la calidad y la pertinencia de la educación,
                                      la investigación y su vinculación con la sociedad hondureña y mundial, procesos basados en los nuevos paradigmas de la ciencia y la educación.</h5>
                                      <h5>Misión</h5>
                                      <h5 class="text-muted">Somos una universidad estatal y autónoma; responsable constitucionalmente de organizar, dirigir y desarrollar el tercer y cuarto nivel del sistema educativo nacional.
                                       Nuestro ámbito de producción y acción científica es universal. Nuestro compromiso es contribuir a través de la formación de profesionales, la investigación y la vinculación universidad-sociedad 
                                       al desarrollo humano sostenible del país y por medio de la ciencia y la cultura que generamos, contribuir a que toda Honduras participe de la universalidad y a que se desarrolle en condiciones de
                                      equidad y humanismo, atendiendo la pertinencia académica para las diversas necesidades regionales y el ámbito nacional.</h5>
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
  include ("../partes/panel.php");
  ?>
  <!-- ============================================ -->
  <!-- All Jquery -->
  <!-- ============================================ -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- apps -->
  <script src="../dist/js/app.min.js"></script>
  <script src="../dist/js/app.init.js"></script>
  <script src="../dist/js/app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <!--Wave Effects -->
  <script src="../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../dist/js/custom.min.js"></script>
</body>

</html>