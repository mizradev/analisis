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
<div class="container">
            <br><br><br><br>
            <br>
            <div class="bg-white rounded-lg formulario">
                <form class="p-4 needs-validation" action="registrar_libros.php" method="POST" novalidate>
                  <center>
                  <label for=""><h4>REGISTRAR LIBROS</h4></label>
                
                  </center>
                <div class="form-row">
                  <div class="col-md-4 col-lg-6 mb-4">
                    <label for="validationCustom01">Titulo</label>
                    <input type="text" class="form-control" autocomplete="off" id="validationCustom01"required name="titulo" placeholder="Titulo del libro" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="50">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-4">
                    <label for="validationCustom02">Edición</label>
                    <input type="text" class="form-control" id="validationCustom02" required name="edición" placeholder="Número de Edición" pattern="[0-9]{1}">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-4">
                    <label for="validationCustom03">Editorial</label>
                    <input type="text" class="form-control" id="validationCustom03" required name="editorial" placeholder="Editorial" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="30">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                </div>
                 <div class="form-row">
                  <div class="col-md-6 col-lg-4 mb-3">
                    <label for="validationCustom04">Autor</label>
                    <input type="text" class="form-control" id="validationCustom04" required name="fecha" placeholder=" Nombre de Autor" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="30">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-3">
                    <label for="validationCustom05">Categoría</label>
                    <input type="text" class="form-control" id="validationCustom05" required name="cate" placeholder="Categoría/Carrera" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="30">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-3">
                    <label for="validationCustom06">Descripción</label>
                    <input type="text" class="form-control" id="validationCustom06" required name="estante" placeholder="breve descripción" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" maxlength="30">
                    <div class="valid-feedback">
                      Correcto!
                    </div>
                    <div class="invalid-feedback">
                      Porfavor rellena el campo.
                    </div>
                  </div>
                 </div>
                 <br>
                 <table>
                    <tr>
                        <td></td>
                        <label for="validationCustom07">Selecionar Documento</label>
                        <td><input type="file" name="archivo" class="form-control" required></td>
                    <tr>
                        <td></td>
                        

                        </td>
                    </tr>
                </table>

                <br>
                <button class="btn btn-warning text-white" type="submit" name="registrar">Registrar</button>
                <br>
                <div class="container">

                <form method="post" action="" enctype="multipart/form-data">
                <table width="70%">
                    
                <br>
               
             
          
            <br><br>
          
            <div class="container-fluid p-0">
                <div class="row">
                <div class="col-md-5 col-lg-3 p-0 p-1">
                    <div class="row no-gutters bg-white shadow-sm">
                        <div class="col-md-3 bg-danger p-3">
                            <span class="fas fa-book-reader h2 text-white"></span>
                        </div>
                        <div class="col-md-9 pt-2">
                            <small class="ml-3 h3 text-secondary border-danger"><b class="count">
                                22
                            </b></small>
                            <br>
                            <small class="ml-3 h6 text-secondary">Total de libros</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3 p-0 p-1">
                    <div class="row no-gutters bg-white shadow-sm">
                        <div class="col-md-3 bg-info p-3">
                            <span class="fas fa-archive h2 text-white"></span>
                        </div>
                        <div class="col-md-9 pt-2">
                            <small class="ml-3 h3 text-secondary border-info"><b class="count">
                                10
                            </b></small>
                            <br>
                            <small class="ml-3 h6 text-secondary">Total de Categorias</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3 p-0 p-1">
                    <div class="row no-gutters bg-white shadow-sm">
                        <div class="col-md-3 bg-warning p-3">
                            <span class="fas fa-user-alt h2 text-white"></span>
                        </div>
                        <div class="col-md-9 pt-2">
                            <small class="ml-3 h3 text-secondary border-warning"><b class="count">
                               12
                            </b></small>
                            <br>
                            <small class="ml-3 h6 text-secondary">Total de Autores</small>
                        </div>
                    </div>
                </div>
               
                </div>
              
              </form>
             
            </div>
          <br>



          </div>

          
        
        
        <script src="../push/push.min.js" type="text/javascript"></script> 
        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();

        </script>
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