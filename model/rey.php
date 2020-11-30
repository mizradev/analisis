<?php 
    
    error_reporting(0);
    require_once '../controllers/private.php';
    require_once '../model/generales.php';
    require_once '../model/consultaacti.php';
    require_once '../Model/consultahistorial.php';
    

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

    <div class="page-wrapper">

      <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
          <h3 class="text-themecolor mb-0">Control de Vida Estudiantil VOAE</h3>
          <ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item active">Informatica Adminitrativa</li>
            <li class="breadcrumb-item" ><a >Bienvenid@ al Mod. Actividades  <?php echo $_SESSION['Nombre']?></a>  </li>
          </ul>
        </div>
      </div>
      
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
      <div class="container-fluid">
                <div id="ModalActualizarDirecciones" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Matricular Actividad</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body card-body wizard-content">
                                    <form action="#" class="">
                                        <section>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="Cod_Actividad"> Cod_Actividad: <span class="danger">*</span> </label>
                                                        <input type="text" placeholder=<?php foreach ($hquery as $row){echo $row['Cod_Actividad'];} ?> disabled   class="form-control" name="Cod_Actividad" id="Cod_Actividad" required></input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="Usr_Registro"> Usr_Registro : <span class="danger">*</span> </label>
                                                        <input type="text" placeholder="<?php foreach ($general as $row){echo $row['Usr_Registro'];} ?>" disabled  class="form-control"  id="Usr_Registro" name="Usr_Registro" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="Cod_Estudiante"> Cod_Estudiante : <span class="danger">*</span> </label>
                                                        <input type="text" placeholder=<?php foreach ($hquery as $row){echo $row['Cod_Estudiante'];} ?> disabled class="form-control" id="Cod_Estudiante" name="Cod_Estudiante" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <button type="submit" class="btn btn-success float-right">Matricular</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    
                    <!-- Fin Modal -->
                    <!-- Tabla Personas -->
                    <div class="card card-body">
                        <h5 class="">Actividades Disponibles</h5>
                        <div class="table-responsive">
                            <table class="scroll-sidebar table table-striped search-table v-middle">
                                <thead class="header-item">
                                    
                                    <th class="text-dark font-weight-bold ">Nombre de Actividad</th>
                                    <!--<th class="text-dark text-center font-weight-bold"></th>-->
                                    <th class="text-dark text-center font-weight-bold">Cantidad de Horas VOAE</th>
                                    <th class="text-dark text-center font-weight-bold">Descripcion de la Actividad</th>
                                    <th class="text-dark text-center font-weight-bold">Fecha</th>
                                    <th class="text-dark text-center font-weight-bold">Matricular</th>
                                </thead>
                                <tbody id="datos">
                                <?php foreach ($lquery as $row) { ?>  
                                <tr>
                                       
                                    <td class="text-center"><span class=""><?php echo $row['Nom_Actividad']; ?> </span>   </td>
                                    <td class="text-center"><span class=""><?php echo $row['Can_Horas']; ?> </span></td>
                                    <td class="text-center"><span class=""><?php echo $row['Des_Actividad']; ?>  </span>  </td>
                                    <td class="text-center"><span class=""><?php echo $row['Fec_Actividad']; ?>  </span>  </td>
                                    <td class="text-center">
                                        <div class="action-btn">
                                            <a href="" class="text-info" data-toggle="modal" data-target="#ModalActualizarDirecciones"><i class="fas fa-user font-20"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php  }  ?> 
                                    <!-- /.row -->
                                </tbody>
                            </table>
                            <!-- Paginador -->

                            <!-- end Paginador -->
                        </div>
                    </div>
                
                
            </div>

      <div class="container-fluid">

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

<a class="link_edit" href="matriculaactividades.php?id=<?php echo $row['Nom_Actividad']; ?> ">Matricular</a>