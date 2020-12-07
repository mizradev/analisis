
<?php
error_reporting();
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


  

<!-- ========================================== -->
<div class="container table-responsive">
            <br><br><br><br>
            <form action="#" class="form" method="POST">
                <div class="form-row container">
                    <div class="col-md-6 col-lg-5">
                        <div class="input-group" style="z-index: 0;">
                            <input type="search" name="dato" placeholder="Titulo del libro" class="form-control shadow-sm border-0" autocomplete="off">
                            <div class="input-group-prepend bg-white p-0">
                              <button name="buscar" type="submit" class="input-group-text btn btn-danger border-0 shadow-sm fas fa-search"></button>
                            </div> 
                        </div>
                    </div>
                </div>
                <br>
                <div class="container-fluid" id="datos">
                    <table class='table table-sm table-hover gb-white shadow-sm'>
                        <thead>
                                <tr class='bg-warning text-white font-weight-bold'>
                                <th class='text-center'><small>ID</small></th>
                                <th class='text-center'><small>Titulo</small></th>
                                <th class='text-center'><small>Edición</small></th>
                                <th class='text-center'><small>Editorial</small></th>
                                <th class='text-center'><small>Autor</small></th>
                                <th class='text-center'><small>Categoría</small></th>
                                <th class='text-center'><small>Descripción</small></th>
                                <th colspan='2' class='text-center'><small>Acciones</small></th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>01</td>
                            <td>los 3 cerditps</td>
                            <td>1</td>
                            <td>Trillas</td>
                            <td>Charles Perrault</td>
                            <td>Primaria</td>
                            <td>Los tres cochinitos es una fábula con personajes animales personificados</td>                          
                            <td><div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="fas fa-file"></i></button>
                                <button type="button" class="btn btn-default"><i class="fas fa-trash"></i></button>
                            </div>
                            </td> 
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td>02</td>
                            <td>Codigo limpio</td>
                            <td>2</td>
                            <td>Pearson</td>
                            <td>Robert C. Martin</td>
                            <td>Informatica Administrativa</td>
                            <td>Incluso el código incorrecto puede funcionar. Pero si el código no está limpio, puede poner de rodillas a una organización de desarrollo. Cada año, se pierden innumerables horas y recursos importantes debido a un código mal escrito. Pero no tiene por qué ser así.</td>                          
                            <td><div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="fas fa-file"></i></button>
                                <button type="button" class="btn btn-default"><i class="fas fa-trash"></i></button>
                            </div>
                            </td> 
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td>03</td>
                            <td>Above the fold</td>
                            <td>1</td>
                            <td>Libros HOW</td>
                            <td>Brian D Miller</td>
                            <td>Diseño web</td>
                            <td>Above the Fold se divide en tres secciones: Diseño y tipografía Planificación y usabilidad Valor empresarial Cada sección representa una fase en el ciclo continuo del diseño web.</td>                          
                            <td><div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="fas fa-file"></i></button>
                                <button type="button" class="btn btn-default"><i class="fas fa-trash"></i></button>
                            </div>
                            </td> 
                          </tr>
                        </tbody>
                    </table>
                </div>
                </form>
          </div>
    </div>
<!-- ========================================== -->




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

   

</body>

</html>