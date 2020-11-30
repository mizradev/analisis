<?php
//session_start();
//if (!isset($_SESSION['rol'])) {
  //  header('location:login.php');
//} else {
  //  if ($_SESSION['rol'] != 1) {
    //    header('location:login.php');
   // }/
//}
include_once "bd/conexion.php";
$tamano_pagina = 30;
if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == 1) {
        header("Location:personas.php");
    } else {
        $pagina = $_GET["pagina"];
    }
} else {
    $pagina = 1;
}
if (isset($_GET["paginaCorreos"])) {
    if ($_GET["paginaCorreos"] == 1) {
        header("Location:personas.php");
    } else {
        $paginaCorreos = $_GET["paginaCorreos"];
    }
} else {
    $paginaCorreos = 1;
}
if (isset($_GET["paginaTelefono"])) {
    if ($_GET["paginaTelefono"] == 1) {
        header("Location:personas.php");
    } else {
        $paginaTelefono = $_GET["paginaTelefono"];
    }
} else {
    $paginaTelefono = 1;
}
if (isset($_GET["paginaDireccion"])) {
    if ($_GET["paginaDireccion"] == 1) {
        header("Location:personas.php");
    } else {
        $paginaDireccion = $_GET["paginaDireccion"];
    }
} else {
    $paginaDireccion = 1;
}
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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon.png" />
    <title>Control de Vida estudiantil</title>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <!-- This page CSS -->
    <link href="../assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="../assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/dbe875cbad.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script>
        $('#Numero').mask('0000-0000');
        $('#NumeroUda').mask('0000-0000');
        $('#Id').mask('0000-0000-00000');
        $('#IdUda').mask('0000-0000-00000');
    </script>
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
                    <h3 class="text-themecolor mb-0">Personas</h3>
                    <ul class="breadcrumb mb-0 p-0 bg-transparent">
                        <li class="breadcrumb-item active">Información de las Personas</li>
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
                <div class="widget-content searchable-container list">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalAgregar">
                                    <i class="fas fa-user-plus"></i>
                                    Agregar
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Agregar-->
                    <div id="ModalAgregar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Agregar Persona</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body card-body wizard-content">
                                    <form action="bd/Insert_Persona.php" method="Post" class="" id="prueba">
                                        <!-- Step 1 -->
                                        <h5>Datos personales</h5>
                                        <section>
                                            <!-- input Nombre y Apellido -->
                                            <div class="row">
                                                <!-- input Nombre -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Nombre"> Nombre : <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                                                    </div>
                                                </div>
                                                <!-- input Apellido -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Apellido"> Apellido : <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="Apellido" name="Apellido" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input Id y Edad -->
                                            <div class="row">
                                                <!-- input Id-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Id"> Id: <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="Id" name="Id" required>
                                                    </div>
                                                </div>
                                                <!-- input Edad -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Edad"> Edad: <span class="text-danger">*</span> </label>
                                                        <input type="number" class="form-control required" id="Edad" name="Edad" required min="1" max="150">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input Género y Civil -->
                                            <div class="row">
                                                <!-- input Género -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Genero"> Género: <span class="text-danger">*</span> </label>
                                                        <select class="form-control" id="Genero" name="Genero" required>
                                                            <option selected=""></option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Femenino</option>
                                                            <option value="3">Nada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- input Civil -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Civil"> Estado Civil: <span class="text-danger">*</span> </label>
                                                        <select class="form-control" id="Civil" name="Civil" required>
                                                            <option selected=""></option>
                                                            <option value="1">Soltero</option>
                                                            <option value="2">Casado</option>
                                                            <option value="3">Divorciado</option>
                                                            <option value="4">Viudo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input Fecha y Estado -->
                                            <div class="row">
                                                <!-- input Fecha -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Nacimiento"> Fecha Nacimiento: <span class="text-danger">*</span> </label>
                                                        <input type="date" class="form-control required" id="Nacimiento" name="Nacimiento" required>
                                                    </div>
                                                </div>
                                                <!-- input Estado -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Estado">Estado: <span class="text-danger">*</span> </label>
                                                        <select class="form-control" id="Estado" name="Estado" required>
                                                            <option selected=""></option>
                                                            <option value="1">Activo</option>
                                                            <option value="2">Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input Imagen -->
                                            <div class="row">
                                                <!-- input Imagen -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="Imagen">Imagen: <span class="text-danger">*</span> </label>
                                                        <input type="file" class="form-control required" id="Imagen" name="Imagen" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class=" dropdown-divider" role="separator"></div>
                                        <h5>Datos de contacto</h5>
                                        <section>
                                            <!-- input Numero Télefono y Tipo -->
                                            <div class="row">
                                                <!-- input Numero Télefono -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Numero"> Numero Télefono : <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" id="Numero" name="Numero" maxlength="9" required>
                                                    </div>
                                                </div>
                                                <!-- input Tipo -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="TipoTel"> Tipo de Télefono : <span class="text-danger">*</span> </label>
                                                        <select class="form-control" id="TipoTel" name="TipoTel" required>
                                                            <option selected=""></option>
                                                            <option value="1">Personal</option>
                                                            <option value="2">Casa</option>
                                                            <option value="3">Laboral</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input Estado Telefono  y Correo -->
                                            <div class="row">
                                                <!-- input Estado Telefono -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EstadoTel"> Estado : <span class="text-danger">*</span> </label>
                                                        <select class="form-control" id="EstadoTel" name="EstadoTel" required>
                                                            <option selected=""></option>
                                                            <option value="1">Activo</option>
                                                            <option value="2">Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- input Correo -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Correo"> Correo : <span class="text-danger">*</span> </label>
                                                        <input type="email" class="form-control" id="Correo" name="Correo" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input tipo Correo y Estado Correo -->
                                            <div class="row">
                                                <!-- input tipo Correo -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="TipoCor"> Tipo de Correo : <span class="text-danger">*</span> </label>
                                                        <select class="form-control" id="TipoCor" name="TipoCor" required>
                                                            <option selected=""></option>
                                                            <option value="1">Personal</option>
                                                            <option value="2">Laboral</option>
                                                            <option value="3">Institucional</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- input Estado Correo -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EstadoCor"> Estado : <span class="text-danger">*</span> </label>
                                                        <select class="form-control" id="EstadoCor" name="EstadoCor" required>
                                                            <option selected=""></option>
                                                            <option value="1">Activo</option>
                                                            <option value="2">Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="dropdown-divider" role="separator"></div>
                                        <h5>Datos de dirección</h5>
                                        <section>
                                            <!-- input dirección -->
                                            <div class="row">
                                                <!-- input dirección -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="Dirrecion"> Dirreción : <span class="text-danger">*</span> </label>
                                                        <textarea class="form-control" name="Dirrecion" id="Dirrecion" cols="30" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input Tipo de Direccion Estado de Direccion -->
                                            <div class="row">
                                                <!-- input Tipo de Direccion -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="TipoDir"> Tipo de Dirección : <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" id="TipoDir" name="TipoDir" required>
                                                    </div>
                                                </div>
                                                <!-- input Estado de Direccion -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EstadoDir"> Estado : <span class="text-danger">*</span> </label>
                                                        <select class="form-control" id="EstadoDir" name="EstadoDir" required>
                                                            <option selected=""></option>
                                                            <option value="1">Activo</option>
                                                            <option value="2">Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="dropdown-divider" role="separator"></div>
                                        <h5>Tipo de Usuario</h5>
                                        <ul class="nav nav-pills bg-white justify-content-center mb-3 rounded-pill align-items-center">
                                            <li class="nav-item">
                                                <a href="#Todas" data-toggle="tab" aria-expanded="false" class="nav-link  rounded-pill d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" onclick="Administrador();">
                                                    <i class="fas fa-user-cog"></i>
                                                    <span class="d-none d-md-block ml-2"> Administrador</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#Deportivas" data-toggle="tab" aria-expanded="true" class="nav-link  nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" onclick="Estusiante();">
                                                    <i class="fas fa-user-graduate"></i>
                                                    <span class="d-none d-md-block ml-2">Estudiante</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#Sociales" data-toggle="tab" aria-expanded="false" class="nav-link  nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" onclick="Docente();">
                                                    <i class="fas fa-chalkboard-teacher"></i>
                                                    <span class="d-none d-md-block ml-2">Docente</span>
                                                </a>

                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- Admin -->
                                            <div class="tab-pane show " id="Todas">
                                                <div class="row">
                                                    <div class="col">
                                                        <br>
                                                        <h5>Datos de Administrador</h5>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="FacultadAdmin"> Facultad donde Trabaja: <span class="text-danger">*</span> </label>
                                                                    <select class="form-control" id="FacultadAdmin" name="FacultadAdmin">
                                                                        <option selected=""></option>
                                                                        <?php
                                                                        $FacultadAdmin = $conexion->query("SELECT`Nom_Facultad`  FROM `Facultades`")->fetchAll(PDO::FETCH_OBJ);
                                                                        foreach ($FacultadAdmin as $FacultadAdmin) :
                                                                            echo '<option value="' . $FacultadAdmin->Nom_Facultad . '">' . $FacultadAdmin->Nom_Facultad . '</option>';
                                                                        endforeach;
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="PuestoAdmin"> Puesto : <span class="text-danger">*</span> </label><input type="text" class="form-control" id="PuestoAdmin" name="PuestoAdmin"></div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-divider" role="separator"></div>
                                                        <section id="User">
                                                            <h5>Datos de usuario</h5><!-- input dirección -->
                                                            <div class=" row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group"><label for="UsuarioAdmin"> Nombre de usuario : <span class="text-danger">*</span> </label><input type="text" class="form-control" id="UsuarioAdmin" name="UsuarioAdmin"></div>
                                                                </div>
                                                            </div><!-- input Estado Telefono  y Correo -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group"><label for="Password"> Password : <span class="text-danger">*</span> </label><input type="password" class="form-control" id="PasswordAdmin" name="PasswordAdmin"></div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group"><label for="EstadoUser"> Estado : <span class="text-danger">*</span> </label><select class="form-control" id="EstadoUserAdmin" name="EstadoUserAdmin">
                                                                            <option selected=""></option>
                                                                            <option value="1">Activo</option>
                                                                            <option value="2">Inactivo</option>
                                                                        </select></div>
                                                                </div>
                                                            </div>
                                                        </section>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--  Estudiante -->
                                            <div class="tab-pane" id="Deportivas">
                                                <div class="row">
                                                    <div class="col">
                                                        <br>
                                                        <h5>Datos de Estudiante</h5><!-- input dirección -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="NumeroEstu"> Numero de cuenta: <span class="text-danger">*</span> </label><input type="text" class="form-control" id="NumeroEstu" name="NumeroEstu"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label for="CentroEstu"> Centro Regional : <span class="text-danger">*</span> </label><input type="text" class="form-control" id="CentroEstu" name="CentroEstu"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label for="FacultadEstu"> Facultad: <span class="text-danger">*</span> </label>
                                                                    <select class="form-control" id="FacultadEstu" name="FacultadEstu">
                                                                        <option selected=""></option>
                                                                        <?php
                                                                        $FacultadEstu = $conexion->query("SELECT`Cod_Facultad`,`Nom_Facultad`  FROM `Facultades`")->fetchAll(PDO::FETCH_OBJ);
                                                                        foreach ($FacultadEstu as $FacultadEstu) :
                                                                            echo '<option value="' . $FacultadEstu->Cod_Facultad . '">' . $FacultadEstu->Nom_Facultad . '</option>';
                                                                        endforeach;
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label for="CarreraEstu"> Carrera : <span class="text-danger">*</span> </label><input type="text" class="form-control" id="CarreraEstu" name="CarreraEstu"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label for="ModalidadEstu"> Modalidad : <span class="text-danger">*</span> </label><select class="form-control" id="ModalidadEstu" name="ModalidadEstu">
                                                                        <option selected=""></option>
                                                                        <option value="P">Presencial</option>
                                                                        <option value="D">Distancia</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-divider" role="separator"></div>
                                                        <section id="User">
                                                            <h5>Datos de usuario</h5><!-- input dirección -->
                                                            <div class=" row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group"><label for="UsuarioEstu"> Nombre de usuario : <span class="text-danger">*</span> </label><input type="text" class="form-control" id="UsuarioEstu" name="UsuarioEstu"></div>
                                                                </div>
                                                            </div><!-- input Estado Telefono  y Correo -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group"><label for="PasswordEstu"> Password : <span class="text-danger">*</span> </label><input type="password" class="form-control" id="PasswordEstu" name="PasswordEstu"></div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group"><label for="EstadoUserEstu"> Estado : <span class="text-danger">*</span> </label><select class="form-control" id="EstadoUserEstu" name="EstadoUserEstu">
                                                                            <option selected=""></option>
                                                                            <option value="1">Activo</option>
                                                                            <option value="2">Inactivo</option>
                                                                        </select></div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  Docente -->
                                            <div class="tab-pane" id="Sociales">
                                                <div class="row">
                                                    <div class="col">
                                                        <br>
                                                        <h5>Datos de Docente</h5>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label for="FacultadDoce"> Facultad: <span class="text-danger">*</span> </label>

                                                                    <select class="form-control" id="FacultadDoce" name="FacultadDoce" required>
                                                                        <option selected=""></option>
                                                                        <?php
                                                                        $Facultad = $conexion->query("SELECT `Cod_Facultad`,`Nom_Facultad`  FROM `Facultades`")->fetchAll(PDO::FETCH_OBJ);
                                                                        foreach ($Facultad as $FacultadDoce) :
                                                                            echo '<option value="' . $FacultadDoce->Cod_Facultad . '">' . $FacultadDoce->Nom_Facultad . '</option>';
                                                                        endforeach;
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label for="DepartamentoDoce"> Departamento : <span class="text-danger">*</span> </label>
                                                                    <select class="form-control" id="DepartamentoDoce" name="DepartamentoDoce" required>
                                                                        <option selected=""></option>
                                                                        <?php
                                                                        $DepartamentoDoce = $conexion->query("SELECT `Cod_Departamento`,`Nom_Departamento`  FROM `Departamentos`")->fetchAll(PDO::FETCH_OBJ);
                                                                        foreach ($DepartamentoDoce as $DepartamentoDoce) :
                                                                            echo '<option value="' . $DepartamentoDoce->Cod_Departamento . '">' . $DepartamentoDoce->Nom_Departamento . '</option>';
                                                                        endforeach;
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"><label for="JornadaDoce"> Jornada : <span class="text-danger">*</span> </label>
                                                                    <select class="form-control" id="JornadaDoce" name="JornadaDoce" required>
                                                                        <option selected=""></option>
                                                                        <?php
                                                                        $JornadaDoce = $conexion->query("SELECT `Cod_Jornada`,`Nom_Jornada`  FROM `Jornadas`")->fetchAll(PDO::FETCH_OBJ);
                                                                        foreach ($JornadaDoce as $JornadaDoce) :
                                                                            echo '<option value="' . $JornadaDoce->Cod_Jornada . '">' . $JornadaDoce->Nom_Jornada . '</option>';
                                                                        endforeach;
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button id="btn-add" type="submit" class="btn btn-success float-right">Agregar</button>
                                        <input type="text" class="form-control" id="Puesto" value="1" name="Puesto" hidden>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div>
                    <!-- End Modal -->
                    <!-- Modal Actualizar-->
                    <div id="ModalActualizar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Actualizar Información</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body Personas card-body wizard-content">

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!-- End Modal -->
                    <!-- Modal Actualizar Correos-->
                    <div id="ModalActualizarCorreos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Actializar Correo</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body Correos card-body wizard-content ModalActualizarCorreosdato">

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!-- End Modal -->
                    <!-- Modal Actualizar Telefonos-->
                    <div id="ModalActualizarTelefonos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Actializar Teléfonos</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body Telefonos card-body wizard-content">

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!-- End Modal -->
                    <!-- Modal Actualizar Direcciones-->
                    <div id="ModalActualizarDirecciones" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Actializar Dirección</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body Direcciones card-body wizard-content">

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <!-- End Modal -->
                    <!-- Tabla Personas -->
                    <div class="card card-body">
                        <h5 class="">Tabla de Personas</h5>
                        <div class="table-responsive">
                            <table class="scroll-sidebar table table-striped search-table v-middle">
                                <thead class="header-item bg-info text-white">
                                    <th class="text-center font-weight-bold">Id</th>
                                    <th class="font-weight-bold">Nombre</th>
                                    <th class="text-center font-weight-bold">Identidad</th>
                                    <th class="text-center font-weight-bold">Edad</th>
                                    <th class="text-center font-weight-bold">Género</th>
                                    <th class="text-center font-weight-bold">Est. Civil</th>
                                    <th class="text-center font-weight-bold">Nacimiento</th>
                                    <th class="text-center font-weight-bold">Estado</th>
                                    <th class="text-center font-weight-bold">Acciones</th>
                                </thead>
                                <tbody>
                                    <!-- row -->
                                    <?php
                                    $empezar_desde = ($pagina - 1) * $tamano_pagina;
                                    $sql_total = "SELECT * FROM `Personas`";
                                    $resultado = $conexion->prepare($sql_total);
                                    $resultado->execute(array());
                                    $num_filas = $resultado->rowCount();
                                    $total_paginas = ceil($num_filas / $tamano_pagina);
                                    //***************************** */
                                    $registro_personas = $conexion->query("SELECT * FROM `Personas` LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($registro_personas as $persona) :
                                    ?>
                                        <tr>
                                            <!-- ID -->
                                            <td class="text-center">
                                                <span class="">
                                                    <?php echo $persona->Cod_Persona ?>
                                                </span>
                                            </td>
                                            <!-- Nombre -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/users/<?php echo $persona->Foto_Persona ?>" alt="avatar" class="rounded-circle" width="35">
                                                    <div class="ml-2">
                                                        <div class="user-meta-info">
                                                            <h5 class="user-name mb-0" data-name="Penelope Baker">
                                                                <?php echo $persona->Nom_Persona . " " . $persona->Ape_Persona ?>
                                                            </h5>
                                                            <span class="user-work text-muted" data-occupation="Web Developer">
                                                                <?php
                                                                if ($conexion->query("SELECT * FROM `Estudiantes` WHERE `Cod_Persona`= $persona->Cod_Persona")->rowCount() != 0) {
                                                                    echo "Estudiante";
                                                                } else if ($conexion->query("SELECT * FROM `Administradores` WHERE `Cod_Persona`= $persona->Cod_Persona")->rowCount() != 0) {
                                                                    echo "Administrador";
                                                                } else if ($conexion->query("SELECT * FROM `Docentes` WHERE `Cod_Persona`= $persona->Cod_Persona")->rowCount() != 0) {
                                                                    echo "Docente";
                                                                } else {
                                                                    echo "Indefinido";
                                                                }
                                                                ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- N° ID -->
                                            <td class="text-center">
                                                <span class="">
                                                    <?php echo $persona->Num_Identidad ?>
                                                </span>
                                            </td>
                                            <!-- Edad -->
                                            <td class="text-center">
                                                <span class="">
                                                    <?php echo $persona->Eda_Persona ?>
                                                </span>
                                            </td>
                                            <!-- Genero -->
                                            <td class="text-center">
                                                <span class="">
                                                    <?php
                                                    if ($persona->Gen_Persona == "M") {
                                                        echo "<span class='badge badge-pill badge-info'>
                                                    $persona->Gen_Persona
                                                     </span>";
                                                    } else if ($persona->Gen_Persona == "F") {
                                                        echo "<span class='badge badge-pill badge-danger'>
                                                    $persona->Gen_Persona
                                                     </span>";
                                                    } else {
                                                        echo "<span class='badge badge-pill badge-primary'>
                                                    $persona->Gen_Persona
                                                     </span>";
                                                    }
                                                    ?>
                                                </span>
                                            </td>
                                            <!-- Civil -->
                                            <td class="text-center">
                                                <span class="">
                                                    <?php echo $persona->Ind_Civil ?>
                                                </span>
                                            </td>
                                            <!-- Nacimiento -->
                                            <td class="text-center">
                                                <span class="">
                                                    <?php echo $persona->Fec_Nacimiento ?>
                                                </span>
                                            </td>
                                            <!-- Estado -->
                                            <td class="text-center">
                                                <span class="">
                                                    <?php
                                                    if ($persona->Ind_Persona == "A") {
                                                        echo "<span class='badge badge-success'>
                                                    $persona->Ind_Persona
                                                     </span>";
                                                    } else {
                                                        echo "<span class='badge badge-warning'>
                                                    $persona->Ind_Persona
                                                     </span>";
                                                    }
                                                    ?>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <div class="action-btn">
                                                    <a class="text-info editarPersona" id="<?php echo $persona->Cod_Persona ?>">
                                                        <i class="fas fa-user-edit font-20"></i>
                                                    </a>
                                                    <a href="bd/Borrar_Persona.php?Cod_Persona=<?php echo $persona->Cod_Persona ?>" class="text-danger ml-2"><i class="fas fa-trash-alt font-20"></i></a>
                                            </td>
                                        </tr>
                                        <!-- /.row -->
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                        <!-- Paginador -->
                        <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <?php
                                //-----------------------Paguinacion
                                for ($i = 1; $i <= $total_paginas; $i++) {
                                    echo " <a class='btn btn-info' href='?pagina=" . $i . "'>" . $i . "</a>  ";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- end Paginador -->
                    </div>
                    <!-- End Tabla -->
                    <!-- Tabla Correos -->
                    <div class="card card-body">
                        <h5>Tabla de Correos</h5>
                        <div class="table-responsive">
                            <table class="scroll-sidebar table table-striped search-table v-middle">
                                <thead class="header-item bg-info text-white">
                                    <th class="text-center font-weight-bold">Id</th>
                                    <th class="font-weight-bold">Nombre</th>
                                    <th class="text-center font-weight-bold">Correo</th>
                                    <th class="text-center font-weight-bold">Tipo de Correo</th>
                                    <th class="text-center font-weight-bold">Estado</th>
                                    <th class="text-center font-weight-bold">Acciones</th>
                                </thead>
                                <tbody>
                                    <?php $empezar_desde = ($paginaCorreos - 1) * $tamano_pagina;
                                    $sql_total = "SELECT * FROM `Correos`";
                                    $resultado = $conexion->prepare($sql_total);
                                    $resultado->execute(array());
                                    $num_filas = $resultado->rowCount();
                                    $total_paginas = ceil($num_filas / $tamano_pagina);
                                    //***************************** */
                                    $registro_Correos = $conexion->query("SELECT * FROM `Correos`LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($registro_Correos as $Correos) :
                                        $NombreCorreo_persona = $conexion->query(" SELECT `Cod_Persona`,`Nom_Persona`,`Ape_Persona`,`Foto_Persona` FROM `Personas` WHERE `Cod_Persona`= (SELECT `Cod_Persona` FROM `Rel_PerCor` WHERE`Cod_Correo`=$Correos->Cod_Correo)")->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($NombreCorreo_persona as $NombreCorreo) :
                                    ?>
                                            <!-- row -->
                                            <tr>
                                                <!-- ID -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Correos->Cod_Correo ?>
                                                    </span>
                                                </td>
                                                <!-- Nombre -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../assets/images/users/<?php echo $NombreCorreo->Foto_Persona ?>" alt="avatar" class="rounded-circle" width="35">
                                                        <div class="ml-2">
                                                            <div class="user-meta-info">
                                                                <h5 class="user-name mb-0" data-name="Penelope Baker">
                                                                    <?php
                                                                    echo $NombreCorreo->Nom_Persona . " " . $NombreCorreo->Ape_Persona;
                                                                    ?>
                                                                </h5>
                                                                <span class="user-work text-muted" data-occupation="Web Developer">
                                                                    <!-- Puestos -->
                                                                    <?php
                                                                    if ($conexion->query("SELECT * FROM `Estudiantes` WHERE `Cod_Persona`= $NombreCorreo->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Estudiante";
                                                                    } else if ($conexion->query("SELECT * FROM `Administradores` WHERE `Cod_Persona`= $NombreCorreo->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Administrador";
                                                                    } else if ($conexion->query("SELECT * FROM `Docentes` WHERE `Cod_Persona`= $NombreCorreo->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Docente";
                                                                    } else {
                                                                        echo "Indefinido";
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- Correo -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Correos->Correo ?>
                                                    </span>
                                                </td>
                                                <!-- Tipo de Correo -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Correos->Tip_Correo ?>
                                                    </span>
                                                </td>
                                                <!-- Estado -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php
                                                        if ($Correos->Ind_Correo == "A") {
                                                            echo "<span class='badge badge-success'> $Correos->Ind_Correo</span>";
                                                        } else {
                                                            echo "<span class='badge badge-warning'>$Correos->Ind_Correo</span>";
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="action-btn">

                                                        <a class="text-info editarCorreo" id="<?php echo $Correos->Cod_Correo ?>">
                                                            <i class="fas fa-edit font-20"></i>
                                                        </a>

                                                        <a href="bd/Borrar_Persona.php?Cod_Correo=<?php echo $Correos->Cod_Correo ?>" class="text-danger ml-2">
                                                            <i class="fas fa-trash-alt font-20"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- /.row -->
                                    <?php endforeach;
                                    endforeach; ?>
                                </tbody>
                            </table>
                            <!-- Paginador -->
                            <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <?php
                                    //-----------------------Paguinacion
                                    for ($i = 1; $i <= $total_paginas; $i++) {
                                        echo " <a class='btn btn-info' href='?paginaCorreos=" . $i . "'>" . $i . "</a>  ";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- end Paginador -->
                        </div>
                    </div>
                    <!-- End Tabla -->
                    <!-- Tabla Teléfonos -->
                    <div class="card card-body">
                        <h5 class="">Tabla de Teléfonos</h5>
                        <div class="table-responsive">
                            <table class="scroll-sidebar table table-striped search-table v-middle">
                                <thead class="header-item bg-info text-white">
                                    <th class="text-center font-weight-bold">Id</th>
                                    <th class="font-weight-bold">Nombre</th>
                                    <th class="text-center font-weight-bold">Teléfonos</th>
                                    <th class="text-center font-weight-bold">Tipo de Teléfonos</th>
                                    <th class="text-center font-weight-bold">Estado</th>
                                    <th class="text-center font-weight-bold">Acciones</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $empezar_desde = ($paginaTelefono - 1) * $tamano_pagina;
                                    $sql_total = "SELECT * FROM `Telefonos`";
                                    $resultado = $conexion->prepare($sql_total);
                                    $resultado->execute(array());
                                    $num_filas = $resultado->rowCount();
                                    $total_paginas = ceil($num_filas / $tamano_pagina);
                                    //***************************** */
                                    $registro_Telefonos = $conexion->query("SELECT * FROM `Telefonos`LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($registro_Telefonos  as $Telefonos) :
                                        $NombreTelefono_persona = $conexion->query("SELECT `Cod_Persona`,`Nom_Persona`,`Ape_Persona`,`Foto_Persona` FROM `Personas` WHERE `Cod_Persona`= (SELECT `Cod_Persona` FROM `Rel_PerTel` WHERE`Cod_Telefono`= $Telefonos->Cod_Telefono)")->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($NombreTelefono_persona as $NombreTelefono) :

                                    ?>

                                            <!-- row -->
                                            <tr>
                                                <!-- ID -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Telefonos->Cod_Telefono ?>
                                                    </span>
                                                </td>
                                                <!-- Nombre -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../assets/images/users/<?php echo $NombreTelefono->Foto_Persona ?>" alt="avatar" class="rounded-circle" width="35">
                                                        <div class="ml-2">
                                                            <div class="user-meta-info">
                                                                <h5 class="user-name mb-0" data-name="Penelope Baker">
                                                                    <?php echo $NombreTelefono->Nom_Persona . " " . $NombreTelefono->Ape_Persona ?>
                                                                </h5>
                                                                <span>
                                                                    <?php
                                                                    if ($conexion->query("SELECT * FROM `Estudiantes` WHERE `Cod_Persona`= $NombreTelefono->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Estudiante";
                                                                    } else if ($conexion->query("SELECT * FROM `Administradores` WHERE `Cod_Persona`= $NombreTelefono->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Administrador";
                                                                    } else if ($conexion->query("SELECT * FROM `Docentes` WHERE `Cod_Persona`= $NombreTelefono->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Docente";
                                                                    } else {
                                                                        echo "Indefinido";
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- Teléfono -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Telefonos->Num_Telefono ?>
                                                    </span>
                                                </td>
                                                <!-- Tipo de Telefon -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Telefonos->Tip_Telefono ?>
                                                    </span>
                                                </td>
                                                <!-- Estado -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php
                                                        if ($Telefonos->Ind_Telefono == "A") {
                                                            echo "<span class='badge badge-success'>
                                                        $Telefonos->Ind_Telefono
                                                     </span>";
                                                        } else {
                                                            echo "<span class='badge badge-warning'>
                                                        $Telefonos->Ind_Telefono
                                                     </span>";
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="action-btn">
                                                        <a class="editarTelefono text-info" id="<?php echo $Telefonos->Cod_Telefono ?>">
                                                            <i class="fas fa-edit font-20"></i>
                                                        </a>
                                                        <a href="bd/Borrar_Persona.php?Cod_Telefono=<?php echo $Telefonos->Cod_Telefono ?>" class="text-danger ml-2">
                                                            <i class="fas fa-trash-alt font-20"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- /.row -->
                                    <?php endforeach;
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                            <!-- Paginador -->

                            <!-- end Paginador -->
                        </div>
                        <!-- Paginador -->
                        <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <?php
                                //-----------------------Paguinacion
                                for ($i = 1; $i <= $total_paginas; $i++) {
                                    echo " <a class='btn btn-info' href='?paginaTelefono=" . $i . "'>" . $i . "</a>  ";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- end Paginador -->
                    </div>
                    <!-- End Tabla -->
                    <!-- Tabla Direcciones -->
                    <div class="card card-body">
                        <h5 class="">Tabla de Direcciones</h5>
                        <div class="table-responsive">
                            <table class="scroll-sidebar table table-striped search-table v-middle">
                                <thead class="header-item bg-info text-white">
                                    <th class=" text-center font-weight-bold">Id</th>
                                    <th class=" font-weight-bold">Nombre</th>
                                    <th class=" text-center font-weight-bold">Dirección</th>
                                    <th class=" text-center font-weight-bold">Tipo de Dirección</th>
                                    <th class=" text-center font-weight-bold">Estado</th>
                                    <th class=" text-center font-weight-bold">Acciones</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $empezar_desde = ($paginaDireccion - 1) * $tamano_pagina;
                                    $sql_total = "SELECT * FROM `Direcciones`";
                                    $resultado = $conexion->prepare($sql_total);
                                    $resultado->execute(array());
                                    $num_filas = $resultado->rowCount();
                                    $total_paginas = ceil($num_filas / $tamano_pagina);
                                    //***************************** */
                                    $registro_Direcciones = $conexion->query("SELECT * FROM `Direcciones`LIMIT $empezar_desde,$tamano_pagina")->fetchAll(PDO::FETCH_OBJ);
                                    foreach ($registro_Direcciones  as $Direcciones) :
                                        $NombreDireccion_persona = $conexion->query("SELECT`Cod_Persona`, `Nom_Persona`,`Ape_Persona`,`Foto_Persona` FROM `Personas` WHERE `Cod_Persona`= (SELECT `Cod_Persona` FROM `Rel_PerDir` WHERE`Cod_Direccion`=$Direcciones->Cod_Direccion )")->fetchAll(PDO::FETCH_OBJ);
                                        foreach ($NombreDireccion_persona as $NombreDireccion) :
                                    ?>
                                            <!-- row -->
                                            <tr>
                                                <!-- ID -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Direcciones->Cod_Direccion ?>
                                                    </span>
                                                </td>
                                                <!-- Nombre -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../assets/images/users/<?php echo $NombreDireccion->Foto_Persona ?>" alt="avatar" class="rounded-circle" width="35">
                                                        <div class="ml-2">
                                                            <div class="user-meta-info">
                                                                <h5 class="user-name mb-0" data-name="Penelope Baker">
                                                                    <?php echo $NombreDireccion->Nom_Persona . " " . $NombreDireccion->Ape_Persona ?>
                                                                </h5>
                                                                <span class="user-work text-muted" data-occupation="Web Developer">
                                                                    <?php
                                                                    if ($conexion->query("SELECT * FROM `Estudiantes` WHERE `Cod_Persona`= $NombreDireccion->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Estudiante";
                                                                    } else if ($conexion->query("SELECT * FROM `Administradores` WHERE `Cod_Persona`= $NombreDireccion->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Administrador";
                                                                    } else if ($conexion->query("SELECT * FROM `Docentes` WHERE `Cod_Persona`= $NombreDireccion->Cod_Persona")->rowCount() != 0) {
                                                                        echo "Docente";
                                                                    } else {
                                                                        echo "Indefinido";
                                                                    }
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- Dirección -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Direcciones->Des_Direccion ?>
                                                    </span>
                                                </td>
                                                <!-- Tipo de Dirección -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php echo $Direcciones->Tip_Direccion ?>
                                                    </span>
                                                </td>
                                                <!-- Estado -->
                                                <td class="text-center">
                                                    <span class="">
                                                        <?php
                                                        if ($Direcciones->Ind_Direccion == "A") {
                                                            echo "<span class='badge badge-success'>
                                                        $Direcciones->Ind_Direccion
                                                     </span>";
                                                        } else {
                                                            echo "<span class='badge badge-warning'>
                                                        $Direcciones->Ind_Direccion
                                                     </span>";
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="action-btn">
                                                        <a class="text-info editarDireccion" id="<?php echo $Direcciones->Cod_Direccion ?>">
                                                            <i class="fas fa-edit font-20"></i>
                                                        </a>
                                                        <a href="bd/Borrar_Persona.php?Cod_Direccion=<?php echo $Direcciones->Cod_Direccion ?>" class="text-danger ml-2">
                                                            <i class="fas fa-trash-alt font-20"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- /.row -->


                                    <?php endforeach;
                                    endforeach; ?>
                                </tbody>
                            </table>
                            <!-- Paginador -->

                            <!-- end Paginador -->
                        </div>
                        <!-- Paginador -->
                        <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <?php
                                //-----------------------Paguinacion
                                for ($i = 1; $i <= $total_paginas; $i++) {
                                    echo " <a class='btn btn-info' href='?paginaDireccion=" . $i . "'>" . $i . "</a>  ";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- end Paginador -->
                    </div>
                    <!-- End Tabla -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <span>© 2020 VOAE |
                    <a href="https://www.unah.edu.hn/">Universidad Nacional Autónoma de Honduras. .</a></span>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>


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
    <!--This page plugins -->
    <script src="../../dist/js/pages/contact/contact.js"></script>
    <script>
        $(".editarPersona").click(function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "fetch.php",
                data: "editarPersona=" + id,
                type: "POST",
                success: function($datos) {
                    $(".Personas").html($datos);
                }
            });
            $("#ModalActualizar").modal("show");
        });

        $(".editarTelefono").click(function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "fetch.php",
                data: "editarTelefono=" + id,
                type: "POST",
                success: function($datos) {
                    $(".Telefonos").html($datos);
                }
            });
            $("#ModalActualizarTelefonos").modal("show");
        });

        $(".editarDireccion").click(function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "fetch.php",
                data: "editarDireccion=" + id,
                type: "POST",
                success: function($datos) {
                    $(".Direcciones").html($datos);
                }
            });
            $("#ModalActualizarDirecciones").modal("show");
        });

        $(".editarCorreo").click(function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "fetch.php",
                data: "editarCorreo=" + id,
                type: "POST",
                success: function($datos) {
                    $(".Correos").html($datos);
                }
            });
            $("#ModalActualizarCorreos").modal("show");
        });

        function Administrador() {
            document.getElementById("Puesto").setAttribute("value", "1");
            document.getElementById("FacultadAdmin").setAttribute("required", "");
            document.getElementById("PuestoAdmin").setAttribute("required", "");
            document.getElementById("UsuarioAdmin").setAttribute("required", "");
            document.getElementById("PasswordAdmin").setAttribute("required", "");
            document.getElementById("EstadoUserAdmin").setAttribute("required", "");

            document.getElementById("UsuarioEstu").removeAttribute("required", "");
            document.getElementById("PasswordEstu").removeAttribute("required", "");
            document.getElementById("EstadoUserEstu").removeAttribute("required", "");

            document.getElementById("NumeroEstu").removeAttribute("required", "");
            document.getElementById("CentroEstu").removeAttribute("required", "");
            document.getElementById("FacultadEstu").removeAttribute("required", "");
            document.getElementById("CarreraEstu").removeAttribute("required", "");
            document.getElementById("ModalidadEstu").removeAttribute("required", "");
            document.getElementById("FacultadDoce").removeAttribute("required", "");
            document.getElementById("DepartamentoDoce").removeAttribute("required", "");
            document.getElementById("JornadaDoce").removeAttribute("required", "");
        }

        function Estusiante() {
            document.getElementById("Puesto").setAttribute("value", "2");

            document.getElementById("NumeroEstu").setAttribute("required", "");
            document.getElementById("CentroEstu").setAttribute("required", "");
            document.getElementById("FacultadEstu").setAttribute("required", "");
            document.getElementById("CarreraEstu").setAttribute("required", "");
            document.getElementById("ModalidadEstu").setAttribute("required", "");
            document.getElementById("UsuarioEstu").setAttribute("required", "");
            document.getElementById("PasswordEstu").setAttribute("required", "");
            document.getElementById("EstadoUserEstu").setAttribute("required", "");

            document.getElementById("FacultadDoce").removeAttribute("required", "");
            document.getElementById("DepartamentoDoce").removeAttribute("required", "");
            document.getElementById("JornadaDoce").removeAttribute("required", "");

            document.getElementById("FacultadAdmin").removeAttribute("required", "");
            document.getElementById("PuestoAdmin").removeAttribute("required", "");
            document.getElementById("UsuarioAdmin").removeAttribute("required", "");
            document.getElementById("PasswordAdmin").removeAttribute("required", "");
            document.getElementById("EstadoUserAdmin").removeAttribute("required", "");
        }

        function Docente() {
            document.getElementById("Puesto").setAttribute("value", "0");
            document.getElementById("FacultadDoce").setAttribute("required", "");
            document.getElementById("DepartamentoDoce").setAttribute("required", "");
            document.getElementById("JornadaDoce").setAttribute("required", "");

            document.getElementById("UsuarioEstu").removeAttribute("required", "");
            document.getElementById("PasswordEstu").removeAttribute("required", "");
            document.getElementById("EstadoUserEstu").removeAttribute("required", "");
            document.getElementById("UsuarioAdmin").removeAttribute("required", "");
            document.getElementById("PasswordAdmin").removeAttribute("required", "");
            document.getElementById("EstadoUserAdmin").removeAttribute("required", "");
            document.getElementById("FacultadAdmin").removeAttribute("required", "");
            document.getElementById("PuestoAdmin").removeAttribute("required", "");
            document.getElementById("NumeroEstu").removeAttribute("required", "");
            document.getElementById("CentroEstu").removeAttribute("required", "");
            document.getElementById("FacultadEstu").removeAttribute("required", "");
            document.getElementById("CarreraEstu").removeAttribute("required", "");
            document.getElementById("ModalidadEstu").removeAttribute("required", "");
        }
    </script>
</body>

</html>