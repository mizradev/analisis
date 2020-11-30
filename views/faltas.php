<?php 
     require_once '../controllers/private.php';
     require_once '../model/gconsultafalta.php';
     require_once '../model/lconsultafalta.php';
     require_once '../model/mconsultafalta.php';
     require_once '../model/generales.php';
     
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
            <li class="breadcrumb-item" ><a >Bienvenid@ al Mod. Faltas  <?php echo $_SESSION['Nombre']?></a>  </li>
          </ul>
        </div>
      </div>


          <!-- ========INICIO DE CONTENIDO DE FALTAS======== -->
          <div class="container-fluid">

<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center" class="card-title">Datos del Estudiante</h4>
                                
<br>
                        <div class="table-responsive">
                             <table class="table">
                                    <thead>
                                            <th class="text-center" scope="col">Carrera</th>
                                            <th class="text-center" scope="col">Numero de Cuenta</th>
                                            <th class="text-center" scope="col">Nombre</th>
                                            <th class="text-center" scope="col">Apellido</th>
                                            <th class="text-center" scope="col">Usuario</th>
                                            <th class="text-center" scope="col">Telefono</th>
                                            <th class="text-center" scope="col">Correo</th>
                                    </thead>
                                    <tbody id="datos">
                                             <?php foreach ($general as $row) { ?>                                              
                                        <tr>
                                            <td class="text-center" ><?php echo $row['Car_Estudiante']; ?>    </td>
                                            <td class="text-center" ><?php echo $row['Num_Cuenta']; ?> </td>
                                            <td class="text-center" ><?php echo $row['Nom_Persona']; ?>    </td>
                                            <td class="text-center" ><?php echo $row['Ape_Persona']; ?>    </td>
                                            <td class="text-center" ><?php echo $row['Nom_Usuario']; ?>    </td>
                                            <td class="text-center" ><?php echo $row['Num_Telefono']; ?>    </td>
                                            <td class="text-center" ><?php echo $row['Correo']; ?>    </td>
                                        </tr>
                                    </tbody>
                                             <?php  } ?>  
                             </table>
                        </div>
                        <h6 class="card-title"><i class="mr-1 font-18 mdi mdi-numeric-2-box-multiple-outline"></i> Fin de Pagina</h6>
                    </div>
                </div>
    </div>
    <div class="col-12">
        <?php ?>
        
  <div class="card">
            <div class="card-body">
                <h4  class="card-title"  >Faltas Leves</h4>
                <h6 class="card-subtitle">Articul de la UNAH referente a este tipo de faltas</h6>
                <h6 class="card-title mt-5"><i class="mr-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Faltas Leves</h6>


                <div class="table-responsive">
                    <table class="table" >
                        <thead class="">
                            <tr>
                                <th class="text-center" scope="col"># de Falta</th>
                                <th class="text-center" scope="col">Fecha</th>
                                <th class="text-center" scope="col">Tipo Falta</th>
                                <th class="text-center" scope="col">Descripcion de la Falta</th>
                            </tr>
                        </thead>
                        <tbody id="datos" >
                        <?php foreach ($lquery as $row) { ?>                                              
                            <tr>
                                <td class="text-center" ><?php echo $row['Cod_Falta']; ?>    </td>
                                <td class="text-center"><?php echo $row['Fec_Registro']; ?> </td>
                                <td class="text-center"><?php echo $row['Tip_Falta']; ?>    </td>
                                <td class="text-center"><?php echo $row['Des_Falta']; ?>    </td>
                            </tr>
                        </tbody>
                        <?php  } ?>   
                    </table>
                </div>
                <h6 class="card-title"><i class="mr-1 font-18 mdi mdi-numeric-2-box-multiple-outline"></i> Fin de Pagina</h6>
            </div>
        </div>
    </div>

    <div class="col-12">
    <?php ?>
     
   <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Faltas Moderadas</h4>
                    <h6 class="card-subtitle">Articul de la UNAH referente a este tipo de faltas</h6>
                    <h6 class="card-title mt-5"><i class="mr-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Falat Moderadas</h6>


                    <div class="table-responsive">
                    <table class="table">
                        <thead class="">
                            <tr>
                            <th class="text-center" scope="col"># de Falta</th>
                                <th class="text-center" scope="col">Fecha</th>
                                <th class="text-center" scope="col">Tipo Falta</th>
                                <th class="text-center" scope="col">Descripcion de la Falta</th>
                            </tr>
                        </thead>
                        <tbody id="datos">
                        <?php foreach ($mquery as $row) { ?>                                              
                            <tr>
                                <td class="text-center"><?php echo $row['Cod_Falta']; ?>    </td>
                                <td class="text-center"><?php echo $row['Fec_Registro']; ?> </td>
                                <td class="text-center"><?php echo $row['Tip_Falta']; ?>    </td>
                                <td class="text-center"><?php echo $row['Des_Falta']; ?>    </td>
                            </tr>
                        </tbody>
                        <?php  } ?>   
                    </table>
                    </div>
                    <h6 class="card-title"><i class="mr-1 font-18 mdi mdi-numeric-2-box-multiple-outline"></i> Fin de Pagina</h6>
                </div>
            </div>
    </div>

    <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Faltas Graves</h4>
                        <h6 class="card-subtitle">Articul de la UNAH referente a este tipo de faltas</h6>
                        <h6 class="card-title mt-5"><i class="mr-1 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Falat Graves</h6>


                        <div class="table-responsive">
                        <table class="table">
                        <thead class="">
                            <tr>
                                <th class="text-center" scope="col"># de Falta</th>
                                <th class="text-center" scope="col">Fecha</th>
                                <th class="text-center" scope="col">Tipo Falta</th>
                                <th class="text-center" scope="col">Descripcion de la Falta</th>
                            </tr>
                        </thead>
                        <tbody id="datos">
                        <?php foreach ($gquery as $row) { ?>                                              
                            <tr>
                                <td class="text-center" ><?php echo $row['Cod_Falta']; ?>    </td>
                                <td class="text-center" ><?php echo $row['Fec_Registro']; ?> </td>
                                <td class="text-center"><?php echo $row['Tip_Falta']; ?>    </td>
                                <td class="text-center"><?php echo $row['Des_Falta']; ?>    </td>
                            </tr>
                        </tbody>
                        <?php  }  ?>   
                        </table>
                            <thead class="">    
                            </thead>
                            
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                        <h6 class="card-title"><i class="mr-1 font-18 mdi mdi-numeric-2-box-multiple-outline"></i> Fin de Pagina</h6>
                    </div>
                </div>
            </div>

</div>

</div>

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