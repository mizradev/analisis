



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
     error_reporting(0);
    session_start();
    if (empty($_SESSION['active'] )) //si no existe esta sesion 
    {
    	header('location: ../'); //haga esto
    }

?>
    <?php
      //include "partes/menu-superior.php";
    ?>
   
    <!-- ========================================= -->

    <?php
    // include "partes/menu-izquierdo.php";
    ?>
    <!-- ========================================== -->

    <div class="page-wrapper">

      <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
          <h3 class="text-themecolor mb-0">Control de Vida Estudiantil VOAE</h3>
          <ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item active">Informatica Adminitrativa Administrador</li>
            <li class="breadcrumb-item" ><a >Hola  ADMINISTRADOR <?php echo $_SESSION['Nombre']?></a>  </li>
          </ul>
        </div>
        
        <a href="../controllers/salir.php" class="dropdown-item">
                            <i class="fa fa-power-off"></i> Cerrar sesión
                         </a>
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
    //include "partes/panel.php"
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