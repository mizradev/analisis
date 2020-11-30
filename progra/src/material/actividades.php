<?php

include_once "bd/conexion.php";

?>

<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Equipo #2 Lenguaje de Programación 4" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon" />
  <title>Control de Vida estudiantil</title>
  <!-- Custom CSS -->
  <link href="../../dist/css/style.min.css" rel="stylesheet" />
  <!-- Iconos -->
  <script src="https://kit.fontawesome.com/dbe875cbad.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <?php
    include "partes/menu-superior.php";
    ?>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php
    include "partes/menu-izquierdo.php";
    ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
          <h3 class="text-themecolor mb-0">Actividades</h3>
          <ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Agregar Actividad</li>
          </ul>
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
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Menu de Navegación -->
        <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
          <li class="nav-item">
            <a href="#Todas" data-toggle="tab" aria-expanded="false" class="nav-link active rounded-pill d-flex align-items-center active px-2 px-md-3 mr-0 mr-md-2">
              <i class="fas fa-layer-group"></i>
              <span class="d-none d-md-block ml-2"> Todas las Actividades</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#Deportivas" data-toggle="tab" aria-expanded="true" class="nav-link  nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2">
              <i class="fas fa-futbol"></i>
              <span class="d-none d-md-block ml-2">Deportivas</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#Sociales" data-toggle="tab" aria-expanded="false" class="nav-link  nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2">
              <i class="fas fa-share-square"></i>
              <span class="d-none d-md-block ml-2">Sociales</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#Culturales" data-toggle="tab" aria-expanded="false" class="nav-link  nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2">
              <i class="fas fa-hands"></i>
              <span class="d-none d-md-block ml-2">Culturales</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#Academicas" data-toggle="tab" aria-expanded="false" class="nav-link  nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2">
              <i class="fas fa-university"></i>
              <span class="d-none d-md-block ml-2">Academicas</span>
            </a>
          </li>
          <li class="nav-item ml-auto">
            <a href="" class="nav-link btn-info rounded-pill d-flex align-items-center px-3" id="add-notes" data-toggle="modal" data-target="#ModalAgregarActividad">
              <i class="far fa-calendar-plus"></i>
              <span class="d-none d-md-block font-14 ml-2">Agregar</span>
            </a>
          </li>
        </ul>
        <!-- End Menu de Navegación -->

        <div class="tab-content">
          <!-- Modal Add  -->
          <div id="ModalAgregarActividad" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Agregar Actividad</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body card-body wizard-content">
                  <form id="ModalAgregarActividad" method="POST" action="bd/InsertAc.php">
                    <section>
                      <div class="row">
                        <!-- input Nombre -->
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NombreAct"> Nombre Actividad : <span class="danger">*</span> </label>
                            <input type="text" class="form-control" id="NombreAct" name="NombreAct" required>
                          </div>

                        </div>
                      </div>
                      <div class="row">
                        <!-- input dirección -->
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="DescripccionAct"> Descripcción de la Actividad : <span class="danger">*</span> </label>
                            <textarea class="form-control" name="DescripccionAct" id="DescripccionAct" cols="30" rows="3" required></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <!-- input Estado de Direccion -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TipoAct"> Tipo de Actividad : <span class="danger">*</span> </label>
                            <select class="form-control" id="TipoAct" name="TipoAct" required>
                              <option selected=""></option>
                              <option value="1">Deportiva</option>
                              <option value="2">Social</option>
                              <option value="3">Cultural</option>
                              <option value="4">Academica</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="HorasAct"> Cantidad de Horas VOAE : <span class="danger">*</span> </label>
                            <input type="number" class="form-control" name="HorasAct" id="HorasAct" required min="1">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <!-- input Estado de Direccion -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="FechaAct"> Fecha: <span class="danger">*</span> </label>
                            <input type="date" class="form-control" name="FechaAct" id="FechaAct" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="PeriodoAct"> Periodo : <span class="danger">*</span> </label>
                            <select class="form-control" id="PeriodoAct" name="PeriodoAct" required>
                              <option selected=""></option>
                              <option value="1">I Periodo</option>
                              <option value="2">II Periodo</option>
                              <option value="3">III Periodo</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <!-- input Docente -->
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="Docente"> Docente Encargado : <span class="danger">*</span> </label>
                            <select class="form-control" id="Doc_Acti" name="Doc_Acti">
                              <option selected=""></option>
                              <?php

                              $CodDocen_Activi = $conexion->query("SELECT `Cod_Docente` FROM `Docentes` ")->fetchAll(PDO::FETCH_OBJ);

                              foreach ($CodDocen_Activi as $CodDocente) :;

                                $NomDocen_Act = $conexion->query("SELECT `Cod_Persona`, `Nom_Persona`, `Ape_Persona` FROM `Personas` 
                                  WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM `Docentes` 
                                  WHERE `Cod_Docente` = $CodDocente->Cod_Docente)")->fetchAll(PDO::FETCH_OBJ);

                                foreach ($NomDocen_Act as $Doce_Acti) :

                                endforeach;

                                echo '<option value = " ' . $CodDocente->Cod_Docente . ' ">' . $Doce_Acti->Nom_Persona . " " . $Doce_Acti->Ape_Persona . '</option>';


                              endforeach;

                              ?>

                            </select>
                          </div>

                        </div>
                      </div>
                      <!-- input Imagen -->
                      <div class="row">
                        <!-- input Imagen -->
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="ImagenAct">Imagen: <span class="danger">*</span> </label>
                            <input type="file" class="form-control" id="ImagenAct" name="ImagenAct" required accept="image/*">
                          </div>
                        </div>
                      </div>
                    </section>
                    <button type="submit" class="btn btn-success float-right">Agregar</button>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>

          <!-- Todas Actividades -->
          <div class="tab-pane show active" id="Todas">

            <div class="row">
              <?php

              $Actividades = $conexion->query("SELECT * FROM `Actividades` WHERE `Cod_Actividad` IN 
                      (SELECT `Cod_Actividad` FROM `Rel_ActDoc` 
                      WHERE `Cod_Docente` IN (SELECT `Cod_Docente` FROM `Docentes`))")->fetchAll(PDO::FETCH_OBJ);

              foreach ($Actividades as $Actividad) :;

                $Nom_Docente = $conexion->query("SELECT `Cod_Persona`, `Nom_Persona`, `Ape_Persona` FROM `Personas` 
                     WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM `Docentes` WHERE `Cod_Docente` 
                     IN (SELECT `Cod_Docente` FROM `Rel_ActDoc` 
                     WHERE `Cod_Actividad` = $Actividad->Cod_Actividad))")->fetchAll(PDO::FETCH_OBJ);

                foreach ($Nom_Docente as $Docente) :


              ?>
                  <!-- Actividades -->
                  <div class="col-lg-4 col-md-6">
                    <div class="card blog-widget">
                      <div class="card-body">
                        <div class="blog-image"><img src="../assets/images/big/<?php echo $Actividad->Foto_Actividad; ?>" alt="img" class="img-fluid blog-img-height w-100"></div>
                        <h3 class="text-center">
                          <?php echo $Actividad->Nom_Actividad; ?>
                        </h3>
                        <?php
                        if ($Actividad->Cod_Categoria == 1) {
                          echo " <label class='badge badge-pill badge-success py-1 px-2'><i class='fas fa-futbol mr-2'>
                        </i>Deportiva</label>";
                        } elseif ($Actividad->Cod_Categoria == 2) {
                          echo " <label class='badge badge-pill badge-primary py-1 px-2'><i class='fas fa-share-square mr-2'>
                        </i>Social</label>";
                        } elseif ($Actividad->Cod_Categoria == 3) {
                          echo " <label class='badge badge-pill badge-info py-1 px-2'><i class='fas fa-hands mr-2'>
                        </i>Cultural</label>";
                        } elseif ($Actividad->Cod_Categoria == 4) {
                          echo " <label class='badge badge-pill badge-danger py-1 px-2'><i class='fas fa-university mr-2'>
                        </i>Academica</label>";
                        }


                        ?>

                        <label class="float-right"><i class="far fa-calendar-alt mr-2"></i>
                          <?php echo $Actividad->Fec_Actividad; ?>
                        </label>
                        <p class="my-3">
                          <?php echo $Actividad->Des_Actividad; ?>
                        </p>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-clock mr-1"></i>
                          <?php echo $Actividad->Can_Horas; ?> Horas
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-bookmark mr-1"></i></i>
                          <?php echo $Actividad->Per_Actividad; ?> Periodo
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="fas fa-user-tie mr-1"></i></i>
                          <?php echo $Docente->Nom_Persona . " " . $Docente->Ape_Persona; ?>
                        </label>
                        <div class="d-flex align-items-center">
                          <div class="ml-auto">

                            <a class="text-info BTNActualizar" id="<?php echo $Actividad->Cod_Actividad ?>">
                              <i class="fas fa-edit font-20"></i>
                            </a>

                            <a href="bd/deleteActividad.php?CodigoActividad=<?php echo $Actividad->Cod_Actividad ?>" class="text-danger">
                              <i class="fas fa-trash-alt font-20"></i>
                            </a>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php

                endforeach;
              endforeach;



              ?>
            </div>



          </div>
          <!--  Actividades Deportivas -->
          <div class="tab-pane" id="Deportivas">

            <div class="row">
              <?php

              $Actividades = $conexion->query("SELECT * FROM `Actividades` WHERE `Cod_Categoria` = 1")->fetchAll(PDO::FETCH_OBJ);

              foreach ($Actividades as $Actividad) :;

                $Nom_Docente = $conexion->query("SELECT `Cod_Persona`, `Nom_Persona`, `Ape_Persona` FROM `Personas` 
                  WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM `Docentes` WHERE `Cod_Docente` 
                  IN (SELECT `Cod_Docente` FROM `Rel_ActDoc` WHERE `Cod_Actividad` = $Actividad->Cod_Actividad))")->fetchAll(PDO::FETCH_OBJ);

                foreach ($Nom_Docente as $Docente) :


              ?>
                  <div class="col-lg-4 col-md-12">
                    <div class="card blog-widget">
                      <div class="card-body">
                        <div class="blog-image"><img src="../assets/images/big/<?php echo $Actividad->Foto_Actividad; ?>" alt="img" class="img-fluid blog-img-height w-100"></div>
                        <h3 class="text-center">
                          <?php echo $Actividad->Nom_Actividad; ?>
                        </h3>
                        <label class="badge badge-pill badge-success py-1 px-2"><i class="fas fa-futbol mr-2"></i>
                          Deportiva
                        </label>
                        <label class="float-right"><i class="far fa-calendar-alt mr-2"></i>
                          <?php echo $Actividad->Fec_Actividad; ?>
                        </label>
                        <p class="my-3">
                          <?php echo $Actividad->Des_Actividad; ?>
                        </p>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-clock mr-1"></i>
                          <?php echo $Actividad->Can_Horas; ?> Horas
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-bookmark mr-1"></i></i>
                          <?php echo $Actividad->Per_Actividad; ?> Periodo
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="fas fa-user-tie mr-1"></i></i>
                          <?php echo $Docente->Nom_Persona . " " . $Docente->Ape_Persona; ?>
                        </label>
                        <div class="d-flex align-items-center">
                          <div class="ml-auto">

                            <a class="text-info BTNActualizar" id="<?php echo $Actividad->Cod_Actividad ?>">
                              <i class="fas fa-edit font-20"></i>
                            </a>

                            <a href="bd/deleteActividad.php?CodigoActividad=<?php echo $Actividad->Cod_Actividad ?>" class="text-danger">
                              <i class="fas fa-trash-alt font-20"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                endforeach;
              endforeach;

              ?>
            </div>


          </div>

          <!--  Actividades Sociales -->
          <div class="tab-pane" id="Sociales">


            <div class="row">
              <?php

              $Actividades = $conexion->query("SELECT * FROM `Actividades` WHERE `Cod_Categoria` = 2")->fetchAll(PDO::FETCH_OBJ);

              foreach ($Actividades as $Actividad) :;

                $Nom_Docente = $conexion->query("SELECT `Cod_Persona`, `Nom_Persona`, `Ape_Persona` FROM `Personas` 
                 WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM `Docentes` WHERE `Cod_Docente` 
                 IN (SELECT `Cod_Docente` FROM `Rel_ActDoc` WHERE `Cod_Actividad` = $Actividad->Cod_Actividad))")->fetchAll(PDO::FETCH_OBJ);

                foreach ($Nom_Docente as $Docente) :


              ?>
                  <div class="col-lg-4 col-md-6">
                    <div class="card blog-widget">
                      <div class="card-body">
                        <div class="blog-image"><img src="../assets/images/big/<?php echo $Actividad->Foto_Actividad; ?>" alt="img" class="img-fluid blog-img-height w-100"></div>
                        <h3 class="text-center">
                          <?php echo $Actividad->Nom_Actividad; ?>
                        </h3>
                        <label class="badge badge-pill badge-primary py-1 px-2"><i class="fas fa-share-square mr-2"></i>
                          Social
                        </label>
                        <label class="float-right"><i class="far fa-calendar-alt mr-2"></i>
                          <?php echo $Actividad->Fec_Actividad; ?>
                        </label>
                        <p class="my-3">
                          <?php echo $Actividad->Des_Actividad; ?>
                        </p>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-clock mr-1"></i>
                          <?php echo $Actividad->Can_Horas; ?> Horas
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-bookmark mr-1"></i></i>
                          <?php echo $Actividad->Per_Actividad; ?> Periodo
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="fas fa-user-tie mr-1"></i></i>
                          <?php echo $Docente->Nom_Persona . " " . $Docente->Ape_Persona; ?>
                        </label>
                        <div class="d-flex align-items-center">
                          <div class="ml-auto">

                            <a class="text-info BTNActualizar" id="<?php echo $Actividad->Cod_Actividad ?>">
                              <i class="fas fa-edit font-20"></i>
                            </a>

                            <a href="bd/deleteActividad.php?CodigoActividad=<?php echo $Actividad->Cod_Actividad ?>" class="text-danger">
                              <i class="fas fa-trash-alt font-20"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                endforeach;
              endforeach;
              ?>
            </div>
          </div>

          <!--  Actividades Culturales -->
          <div class="tab-pane" id="Culturales">

            <div class="row">
              <?php

              $Actividades = $conexion->query("SELECT * FROM `Actividades` WHERE `Cod_Categoria` = 3")->fetchAll(PDO::FETCH_OBJ);

              foreach ($Actividades as $Actividad) :;

                $Nom_Docente = $conexion->query("SELECT `Cod_Persona`, `Nom_Persona`, `Ape_Persona` FROM `Personas` 
               WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM `Docentes` WHERE `Cod_Docente` 
               IN (SELECT `Cod_Docente` FROM `Rel_ActDoc` WHERE `Cod_Actividad` = $Actividad->Cod_Actividad))")->fetchAll(PDO::FETCH_OBJ);

                foreach ($Nom_Docente as $Docente) :


              ?>
                  <div class="col-lg-4 col-md-6">
                    <div class="card blog-widget">
                      <div class="card-body">
                        <div class="blog-image"><img src="../assets/images/big/<?php echo $Actividad->Foto_Actividad; ?>" alt="img" class="img-fluid blog-img-height w-100"></div>
                        <h3 class="text-center">
                          <?php echo $Actividad->Nom_Actividad; ?>
                        </h3>
                        <label class="badge badge-pill badge-info py-1 px-2"><i class="fas fa-hands mr-2"></i>
                          Cultural
                        </label>
                        <label class="float-right"><i class="far fa-calendar-alt mr-2"></i>
                          <?php echo $Actividad->Fec_Actividad; ?>
                        </label>
                        <p class="my-3">
                          <?php echo $Actividad->Des_Actividad; ?>
                        </p>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-clock mr-1"></i>
                          <?php echo $Actividad->Can_Horas; ?> Horas
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-bookmark mr-1"></i></i>
                          <?php echo $Actividad->Per_Actividad; ?> Periodo
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="fas fa-user-tie mr-1"></i></i>
                          <?php echo $Docente->Nom_Persona . " " . $Docente->Ape_Persona; ?>
                        </label>
                        <div class="d-flex align-items-center">
                          <div class="ml-auto">

                            <a class="text-info BTNActualizar" id="<?php echo $Actividad->Cod_Actividad ?>">
                              <i class="fas fa-edit font-20"></i>
                            </a>

                            <a href="bd/deleteActividad.php?CodigoActividad=<?php echo $Actividad->Cod_Actividad ?>" class="text-danger">
                              <i class="fas fa-trash-alt font-20"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                endforeach;
              endforeach;

              ?>
            </div>

          </div>

          <!--  Actividades Academicas -->
          <div class="tab-pane" id="Academicas">
            <div class="row">
              <?php

              $Actividades = $conexion->query("SELECT * FROM `Actividades` WHERE `Cod_Categoria` = 4")->fetchAll(PDO::FETCH_OBJ);

              foreach ($Actividades as $Actividad) :;

                $Nom_Docente = $conexion->query("SELECT `Cod_Persona`, `Nom_Persona`, `Ape_Persona` FROM `Personas` 
               WHERE `Cod_Persona` IN (SELECT `Cod_Persona` FROM `Docentes` WHERE `Cod_Docente` 
               IN (SELECT `Cod_Docente` FROM `Rel_ActDoc` WHERE `Cod_Actividad` = $Actividad->Cod_Actividad))")->fetchAll(PDO::FETCH_OBJ);

                foreach ($Nom_Docente as $Docente) :

              ?>

                  <div class="col-lg-4 col-md-6">
                    <div class="card blog-widget">
                      <div class="card-body">
                        <div class="blog-image"><img src="../assets/images/big/<?php echo $Actividad->Foto_Actividad; ?>" alt="img" class="img-fluid blog-img-height w-100"></div>
                        <h3 class="text-center">
                          <?php echo $Actividad->Nom_Actividad; ?>
                        </h3>
                        <label class="badge badge-pill badge-danger py-1 px-2"><i class="fas fa-university mr-2"></i>
                          Academica</label>
                        <label class="float-right"><i class="far fa-calendar-alt mr-2"></i>
                          <?php echo $Actividad->Fec_Actividad; ?>
                        </label>
                        <p class="my-3">
                          <?php echo $Actividad->Des_Actividad; ?>
                        </p>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-clock mr-1"></i>
                          <?php echo $Actividad->Can_Horas; ?> Horas
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="far fa-bookmark mr-1"></i></i>
                          <?php echo $Actividad->Per_Actividad; ?> Periodo
                        </label>
                        <label class="badge badge-pill badge-secondary py-1 px-2"><i class="fas fa-user-tie mr-1"></i></i>
                          <?php echo $Docente->Nom_Persona . " " . $Docente->Ape_Persona; ?>
                        </label>
                        <div class="d-flex align-items-center">
                          <div class="ml-auto">

                            <a class="text-info BTNActualizar" id="<?php echo $Actividad->Cod_Actividad ?>">
                              <i class="fas fa-edit font-20"></i>
                            </a>

                            <a href="bd/deleteActividad.php?CodigoActividad=<?php echo $Actividad->Cod_Actividad ?>" class="text-danger">
                              <i class="fas fa-trash-alt font-20"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                endforeach;
              endforeach;
              ?>
            </div>
          </div>


          <!-- Modal Actualizar  -->
          <div id="ModalActualizarActividad" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Actualizar Actividad</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body card-body wizard-content ActualizarActividades">

                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>

        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center">
        <span>© 2020 VOAE |
          <a href="https://www.unah.edu.hn/">Universidad Nacional Autónoma de Honduras.<i class=""></i></a></span>
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- customizer Panel -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- apps -->
  <script src="../../dist/js/app.min.js"></script>
  <script src="../../dist/js/app.init.js"></script>
  <script src="../../dist/js/app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <!--Wave Effects -->
  <script src="../../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../../dist/js/custom.min.js"></script>
  <script src="../../dist/js/pages/notes/notes.js"></script>
  <script>
    $(".BTNActualizar").click(function() {
      var id = $(this).attr("id");
      $.ajax({
        url: "fetch_activi.php",
        data: "BTNActualizar=" + id,
        type: "POST",
        success: function($datos) {
          $(".ActualizarActividades").html($datos);
        }
      });
      $("#ModalActualizarActividad").modal("show");
    });
  </script>



</body>

</html>