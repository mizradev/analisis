<?php 

     error_reporting(0);
     require_once '../controllers/private.php';
    require_once '../model/consultahistorial.php';
    require_once '../model/generales.php';
    require_once '../model/aprobadas.php';
    require_once '../model/reprobadas.php';
  //  require_once '../model/historilactividades.php';
     
?>

<!DOCTYPE html>
<html dir="ltr" lang="esp">

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
    <h3 class="text-themecolor mb-0">REGISTRO DE CALIFICACIONES</h3>
    <ul class="breadcrumb mb-0 p-0 bg-transparent">
      <li class="breadcrumb-item active">Informatica Adminitrativa</li>
      <li class="breadcrumb-item" ><a >Bienvenid@ al Mod. Actividades  <?php echo $_SESSION['Nombre']?></a>  </li>
    </ul>
  </div>
</div>


<div class="container-fluid">
    <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Historial de Actividades </h4>
                        <h6 class="card-subtitle"></h6>
                        <h6 class="card-title mt-5"><i class="mr-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Historial Actividades</h6>
                        <div class="table-responsive">
                           <table class="table">
                               <thead class="">
                                 <tr>
                                     <th scope="col">Nombre de la Actividad</th>
                                     <th scope="col">Categoria</th>    
                                     <th scope="col">Cantidad de Horas</th>
                                     <th scope="col">Descripcion de la Actividad</th>
                                     <th scope="col">Fecha Actividad</th>
                                     <th scope="col">Asistencia</th>
                                     <th scope="col">Inasistencia</th>
                                 </tr>
                               </thead>
                               <tbody id="datos">
                                     <?php foreach ($allan as $row) { ?>                                              
                                  <tr>
                                     <td class="text-center"><?php echo $row['Nom_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Categoria']; ?> </td>
                                     <td class="text-center"><?php echo $row['Can_Horas']; ?> </td>
                                     <td class="text-center"><?php echo $row['Des_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Fec_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Asi_Reporte']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Ina_Reporte']; ?>    </td>
                                  </tr>
                               </tbody>
                                     <?php  }  ?>   
                           </table>
                        </div>
                        </div>
                </div>
                <div class="card">
              
              
                <div class="card-body">
                                 <h4 class="card-title">Historial de Actividades Asistidas </h4>
                                 <h6 class="card-title mt-5"><i class="mr-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Actividades asistidas</h6>
                        
                           <table class="table">
                               <thead class="">
                                 <tr>
                                     <th scope="col">Nombre de la Actividad</th>
                                     <th scope="col">Categoria</th>    
                                     <th scope="col">Cantidad de Horas</th>
                                     <th scope="col">Descripcion de la Actividad</th>
                                     <th scope="col">Fecha Actividad</th>
                                     <th scope="col">Asistencia</th>
                                 </tr>
                               </thead>
                               <tbody id="datos">
                                     <?php foreach ($Rquery as $row) { ?>                                              
                                  <tr>
                                     <td class="text-center"><?php echo $row['Nom_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Categoria']; ?> </td>
                                     <td class="text-center"><?php echo $row['Can_Horas']; ?> </td>
                                     <td class="text-center"><?php echo $row['Des_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Fec_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Asi_Reporte']; ?>    </td>
                                  </tr>
                               </tbody>
                                     <?php  }  ?>   
                           </table>
                           </div>
                           </DIV>
                           <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Historial de Actividades Inasistidas </h4>
                        <h6 class="card-subtitle"></h6>
                        <h6 class="card-title mt-5"><i class="mr-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Historial Actividades Inasistidas</h6>
                        <div class="table-responsive">
                           <table class="table">
                               <thead class="">
                                 <tr>
                                     <th scope="col">Nombre de la Actividad</th>
                                     <th scope="col">Categoria</th>    
                                     <th scope="col">Cantidad de Horas</th>
                                     <th scope="col">Descripcion de la Actividad</th>
                                     <th scope="col">Fecha Actividad</th>
                                     <th scope="col">Inasistencia</th>
                                 </tr>
                               </thead>
                               <tbody id="datos">
                                     <?php foreach ($Aquery as $row) { ?>                                              
                                  <tr>
                                     <td class="text-center"><?php echo $row['Nom_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Categoria']; ?> </td>
                                     <td class="text-center"><?php echo $row['Can_Horas']; ?> </td>
                                     <td class="text-center"><?php echo $row['Des_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Fec_Actividad']; ?>    </td>
                                     <td class="text-center"><?php echo $row['Ina_Reporte']; ?>    </td>
                                  </tr>
                               </tbody>
                                     <?php  }  ?>   
                           </table>
                        </div>
                        </div>
                           
    </div>
</div>

        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        <span>© 2020 VOAE |
          <a href="https://www.unah.edu.hn/">Universidad Nacional Autonoma de Honduas.<i class=""></i></a></span>
      </footer>

    </div>


  </div>
 </div>
  <!-- ============================================ -->
  <?php
  include "partes/panel.php"
  ?>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
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

<!-- Copied from https://www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/material/app-calendar.html by Cyotek WebCopy 1.8.0.651, sábado 11 de abril de 2020, 23:00:21 -->
</html>