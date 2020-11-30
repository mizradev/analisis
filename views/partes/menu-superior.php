<?php
     error_reporting(0);
    session_start();
    if (empty($_SESSION['active'] )) //si no existe esta sesion 
    {
    	header('location: ../'); //haga esto
    }

?>




<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="fas fa-bars"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="assets/images/logo.png" alt="Inicio" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="assets/images/logo.png" alt="Inicio" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="assets/images/logo-texto-oscuro.png" alt="Inicio" class="dark-logo" />
                    <!-- Light Logo text -->
                    <img src="" class="light-logo" alt="Inicio" />
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-ellipsis-v"></i>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto float-left">
                <!-- This is  -->
                <li class="nav-item">
                    <a class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/users/1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                        <ul class="dropdown-user list-style-none">
                            <li>
                                <div class="dw-user-box p-3 d-flex">
                                    <div class="u-img">
                                        <img src="assets/images/users/1.jpg" alt="user" class="rounded" width="80" />
                                    </div>
                                    <div class="u-text ml-2">
                                        <h4 class="mb-0"> LUCEM ASPICIO  <?php echo $_SESSION['Nombre']?></h4>
                                        <br />
                                    </div>
                                </div>
                            </li>
                            <li class="user-list">
                                <a class="px-3 py-2" href="usuarios.php"><i class="fas fa-user-cog"></i> Mi perfil</a>
                            </li>
                            <li role="separator" class="dropdown-divider"></li>
                            <li class="user-list">
                                <a class="px-3 py-2" href="../controllers/salir.php"><i class="fa fa-power-off"></i> Cerrar la sesión</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>