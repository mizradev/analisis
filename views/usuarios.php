<?php
    require_once '../controllers/private.php';
    require_once '../model/consultaperfil.php';


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
                    <h3 class="text-themecolor mb-0">Perfil</h3>
                    <li class="breadcrumb-item" ><a >Bienvenido/a a tu Perfil <?php echo $_SESSION['Nombre']?></a>  </li>
                    <ol class="breadcrumb mb-0 p-0 bg-transparent">
                    </ol>
                </div>
                <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                    <div class="d-flex mt-2 justify-content-end">
                        <div class="d-flex mr-3 ml-2">
                            
                            <div class="spark-chart">
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <div class="chart-text mr-2"> 
                            </div>
                            <div class="spark-chart">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
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
                                <center class="mt-4"> <img src="../assets/images/users/5.jpg" class="rounded-circle" width="150">                            

                                      <!-- Nombre del Perfil -->
                                        <tbody id="datos">
                                        <?php foreach ($general as $row){?>
                                            <tr>
                                            <h4 class="card-title mt-2"><?php echo $row['Nom_Persona'];?> <?php echo $row['Ape_Persona'];?>  <?php echo $row['Cod_Estudiante'];?></h4>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                      
                                    <h5 class="card-subtitle">Estudiante Informatica Administrativa</h5>
                                    <div class="row text-center justify-content-md-center">
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Correo: </small>
                                
                                        <!-- Correo del Perfil -->
                                        <tbody id="datos">
                                        <?php foreach ($general as $row){?>
                                            <tr>
                                            <h6><?php echo $row['Correo'];?></h6>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                        

                                </h6> <small class="text-muted pt-4 db">Numero de Cuenta: </small>

                                <!-- Cuenta del Perfil -->
                                <tbody id="datos">
                                        <?php foreach ($general as $row){?>
                                            <tr>
                                            <h6><?php echo $row['Num_Cuenta'];?></h6>
                                            </tr>
                                        </tbody>
                                        <?php } ?>

                                <small class="text-muted pt-4 db">Centro de Estudio: </small>
                                <h6>Ciudad Universitaria</h6>
                                <div class="map-box">
                                </div>
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
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Configuraciones</a>
                                </li>
                            </ul>
                            <!-- Tabs -->
                           
                                <div class="tab-pane" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                        
                                        <div class="form-group">
                                               <!-- Codigo para subir una imagen al perfil -->
                                                <div class="col-md-12">
                                                    <label for="Imagen"> Imagen: <span class="danger"></span></label>
                                                    <input type="file" class="form-control required" id="Imagen" name="Image">
                                                </div>
                                            </div>


                                                    <div class="form-group">
                                                        <label class="col-md-12">Nombre del Estudiante:</label>
                                                        <div class="col-md-12">
                                                           <!-- Nombre del Perfil -->
                                                      <tbody id="datos">
                                                              <?php foreach ($general as $row){?>
                                                                  <tr>
                                                                  <td><?php echo $row['Nom_Persona'];?> <?php echo $row['Ape_Persona'];?></td>
                                                                  </tr>
                                                        </tbody>
                                                              <?php } ?>
                                                          </div>
                                               </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Correo:</label>
                                                <div class="col-md-12">
                                                    <!-- Correo del Perfil -->
                                                    <tbody id="datos">
                                                              <?php foreach ($general as $row){?>
                                                                  <tr>
                                                                  <td><?php echo $row['Correo'];?></td>
                                                                  </tr>
                                                        </tbody>
                                                              <?php } ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Contraseña:</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="contraseña" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Numero Cuenta:</label>
                                                <div class="col-md-12">
                                                    <!-- Correo del Perfil -->
                                                    <tbody id="datos">
                                                              <?php foreach ($general as $row){?>
                                                                  <tr>
                                                                  <td><?php echo $row['Num_Cuenta'];?></td>
                                                                  </tr>
                                                        </tbody>
                                                              <?php } ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Carrera:</label>
                                                <div class="col-md-12">
                                                    <!-- Correo del Perfil -->
                                                    <tbody id="datos">
                                                              <?php foreach ($general as $row){?>
                                                                  <tr>
                                                                  <td><?php echo $row['Car_Estudiante'];?></td>
                                                                  </tr>
                                                        </tbody>
                                                              <?php } ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">(Modalidad: P=Presencial,D= Distancia)</label>
                                                <div class="col-md-12">
                                                    <!-- Correo del Perfil -->
                                                    <tbody id="datos">
                                                              <?php foreach ($general as $row){?>
                                                                  <tr>
                                                                  <td><?php echo $row['Mod_Estudiante'];?></td>
                                                                  </tr>
                                                        </tbody>
                                                              <?php } ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Centro Educativo:</label>
                                                <div class="col-sm-12">
                                                    <textarea rows="5" placeholder="Ciudad Universitaria" required disabled class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                   <!-- <button class="btn btn-success">Actualizar Datos</button>-->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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