<?php 
    
    error_reporting(0);
    require_once '../controllers/private.php';
    require_once '../model/generales.php';
    require_once '../model/consultaacti.php';
    require_once '../Model/consultahistorial.php';
    require_once '../Model/insertactividadd.php';
    require_once '../model/historilactividades.php';
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
    <?php
    include "partes/menu-izquierdo.php";
    ?>
    <div class="page-wrapper">
      <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
          <h3 class="text-themecolor mb-0">Control de Vida Estudiantil VOAE</h3>
          <ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item active">Informatica Adminitrativa</li>
            <li class="breadcrumb-item" ><a >Bienvenid@ al Mod. Actividades Matriculadas ||  <?php echo $_SESSION['Nombre']?></a>  </li>
          </ul>
        </div>
      </div>
      
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
        <div class="container-fluid">
                      <!-- Fin Modal -->
                      <!--COGIGO DE MODAL-->              
                    <!-- Fin Modal -->
                     <!-- Tabla Personas informacion que muestra-->
                    <div class="card card-body">
                        <h2 class="" >Actividades Matriculadas</h2>
                        <div class="card card-body">
                        <div class="row">
                            <div class="col-md-12 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                <button type="button" onclick="location='matriculaactividades.php'" class="btn btn-info">
                                    <i class="fas fa-user-plus"></i>
                                    Matricular otra Actividad
                                </button>
                            </div>
                        </div>
                    </div>
                <form action="">
                         <div class="table-responsive">
                            <table class="scroll-sidebar table table-striped search-table v-middle">
                                <thead class="header-item">
                                    
                                <th class="text-dark font-weight-bold ">Codigo de Actividad</th>
                                    <th class="text-dark font-weight-bold ">Nombre de Actividad</th>
                                    <th class="text-dark text-center font-weight-bold">Cantidad de Horas VOAE</th>
                                    <th class="text-dark text-center font-weight-bold">Descripcion de la Actividad</th>
                                    <th class="text-dark text-center font-weight-bold">categoria</th>
                                    <th class="text-dark text-center font-weight-bold">fecha</th>
                                </thead>
                                <tbody id="datos">
                                    <?php foreach ($allan as $row) { ?>  
                                <tr>

                                    <td class="text-center"><span class=""><?php echo $row['Cod_Actividad']; ?> </span>   </td>    
                                    <td class="text-center"><span class=""><?php echo $row['Nom_Actividad']; ?> </span>   </td>
                                    <td class="text-center"><span class=""><?php echo $row['Can_Horas']; ?> </span></td>
                                    <td class="text-center"><span class=""><?php echo $row['Des_Actividad']; ?>  </span>  </td>
                                    <td class="text-center"><span class=""><?php echo $row['Categoria']; ?>  </span>  </td>
                                    <td class="text-center"><span class=""><?php echo $row['Fec_Actividad']; ?>  </span>  </td>
                                <?php  }  ?> 
                                    <!-- /.row -->
                                </tbody>
                            </table>
                            <!-- Paginador -->

                            <!-- end Paginador -->
                        </div>
                        </form>
                    </div>
                     <!-- FIN  Tabla Personas informacion que muestra-->   
        </div>
        <footer class="footer text-center">
        <span>© 2020 VOAE |
          <a href="https://www.unah.edu.hn/">Universidad Nacional Autonoma de Honduas.<i class=""></i></a></span>
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
</body>

</html>