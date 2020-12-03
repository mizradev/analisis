<?php
include '../model/hora.php';
?>
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <div class="user-profile position-relative" style="
              background: url(assets/images/background/fondo-user.jpg)
                no-repeat;
            ">
            <!-- User profile image -->
            <div class="profile-img">
                <img src="assets/images/users/profile.png" alt="user" class="w-100" />
            </div>
            <!-- User profile text-->
            <div class="profile-text pt-1">
                <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">UNAH, <?php  echo fechaC();?></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="usuarios.php" class="dropdown-item">
                        <i class="fas fa-user-cog"></i> Mi perfil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="../controllers/salir.php" class="dropdown-item">
                        <i class="fa fa-power-off"></i> Cerrar sesión
                    </a>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- Item Inicio-->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="estudiantes.php" aria-expanded="false">
                    <i class="fas fa-tachometer-alt"></i><span class="hide-menu"> Inicio</span></a>
                </li>


                          <!-- FIN ANALISI Y DISEÑO grupo -->   



                <!-- Item Persona-->                    <!-- ANALISI Y DISEÑO GRUPO 3-->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="usuarios.php" aria-expanded="false">
                    <i class="fas fa-users"></i><span class="hide-menu"> Usuario</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                    </ul>
                </li>
                <!-- Item Actividades-->     <!-- FIN ANALISI Y DISEÑO GRUPO 3-->
                <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Actividades</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="actividadesdisponibles.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Acti. Disponibles </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Acti. Matriculadas </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> analisi y diseño</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>


                <!-- ANALISI Y DISEÑO-->
                      <!-- ANALISI Y DISEÑO login  -->   
                <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Mod. Login</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                   
                                    <li class="sidebar-item">
                                        <a href="grupo4/login.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Login</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>
                <!--fin ANALISI Y DISEÑO login-->  


                         <!-- ANALISI Y DISEÑO Docente-->   
                <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Mod. Docente</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="actividadesdisponibles.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Acti. Disponibles </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Acti. Matriculadas </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> analisi y diseño</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>

                          <!-- FIN ANALISI Y DISEÑO Docente-->   


                         <!-- ANALISI Y DISEÑO Estudiante-->   
                <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Mod. Estudiante</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="actividadesdisponibles.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Acti. Disponibles </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Acti. Matriculadas </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> analisi y diseño</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>

                          <!-- FIN ANALISI Y DISEÑO Estudiante-->   


                         <!-- ANALISI Y DISEÑO Calificaciones-->   
                         <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Mod. Calificaciones</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="actividadesdisponibles.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Acti. Disponibles </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Acti. Matriculadas </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> analisi y diseño</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>

                          <!-- FIN ANALISI Y DISEÑO Calificaciones-->   


                         <!-- ANALISI Y DISEÑO Calendario-->   
                         <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Mod. Calendario</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                   
                                    <li class="sidebar-item">
                                        <a href="grupo4/calendario.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Calendario</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>

                          <!-- FIN ANALISI Y DISEÑO Calendario-->   


                         <!-- ANALISI Y DISEÑO Biblioteca V.-->   
                         <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Mod. Biblioteca V.</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="actividadesdisponibles.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Acti. Disponibles </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Acti. Matriculadas </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> analisi y diseño</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>

                          <!-- FIN ANALISI Y DISEÑO Ticket-->   

                                                   
                         <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Mod. Ticket.</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="actividadesdisponibles.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Acti. Disponibles </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Acti. Matriculadas </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> analisi y diseño</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>

                          <!-- FIN ANALISI Y DISEÑO Ticket-->





                    <!-- FIN ANALISI Y DISEÑO Historial A.-->   

                                                   
                    <li class="sidebar-item">
                                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    
                                            <i class="fas fa-calendar"></i><span class="hide-menu">Mod. Historial A.</span>
                                        </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="actividadesdisponibles.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu">Acti. Disponibles </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Acti. Matriculadas </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="actividadesmatriculadas.php" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> analisi y diseño</span>
                                        </a>
                                    </li>

                                    
                                </ul>
                </li>

                          <!-- FIN ANALISI Y DISEÑO Historial A.-->






















               <!--FIN   ANALISIS Y DISEÑO   GENERAL -->









                <!-- Item Faltas
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="faltas.php" aria-expanded="false">
                    <i class="fas fa-address-book"></i><span class="hide-menu">Faltas</span></a>
                </li>
                         <li class="sidebar-item">
                                  <a><i class="fas fa-tachometer-alt"></i><span > extra</span></a>
                              </li>
                               <!-- parte inferior izquierda del programa-->

            
                         </li>

                         <a href="../controllers/salir.php" class="dropdown-item">
                            <i class="fa fa-power-off"></i> Cerrar sesión
                         </a>
                      


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>