<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <div class="user-profile position-relative" style="
              background: url(../assets/images/background/fondo-user.jpg)
                no-repeat;
            ">
            <!-- User profile image -->
            <div class="profile-img">
                <img src="../assets/images/users/5.jpg" alt="user" class="w-100 profile-pic rounded-circle" />
            </div>
            <!-- User profile text-->

        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- Item Inicio-->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="fas fa-tachometer-alt"></i><span class="hide-menu"> Inicio</span></a>
                </li>
                <!-- Item Persona-->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu"> Mod. Personas</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="personascopy.php" class="sidebar-link">
                                <i class="fas fa-user-alt"></i>
                                <span class="hide-menu">Personas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="administradores.php" class="sidebar-link"><i class="fas fa-user-cog"></i><span class="hide-menu">Administradores</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="estudiante.php" class="sidebar-link"><i class="fas fa-user-graduate"></i></i><span class="hide-menu">Estudiantes</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="docentes.php" class="sidebar-link"><i class="fas fa-chalkboard-teacher"></i><span class="hide-menu">Docentes</span></a>
                        </li>
                    </ul>
                </li>
                <!-- Item Actividades-->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-calendar-alt"></i><span class="hide-menu"> Mod. Actividades</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="actividades.php" class="sidebar-link"><i class="far fa-dot-circle"></i><span class="hide-menu">Agrega actividad</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="HrsVOAE.php" class="sidebar-link"><i class="far fa-dot-circle"></i><span class="hide-menu"> Horas VOAE</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a href="reportes2.php" class="sidebar-link"><i class="far fa-dot-circle"></i><span class="hide-menu">Reportes</span></a>
                        </li>
                    </ul>
                </li>
                <!-- Item Faltas-->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="faltas.php" aria-expanded="false"><i class="fas fa-address-book"></i><span class="hide-menu">Faltas</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="faltas.php" aria-expanded="false"><i class="fas fa-address-book"></i><span class="hide-menu">analisi y diseño</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
        <div class="sidebar-footer justify-content-center">
            <a href="../../../controllers/salir.php" class="link" data-toggle="tooltip" title="Cerrar Sección"><i class="fas fa-sign-out-alt font-15"></i></a>
        </div>
        <!-- End Bottom points-->
    </div>
    <!-- End Sidebar scroll-->
</aside>