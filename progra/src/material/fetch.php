<?php
include_once "bd/conexion.php";
if (isset($_POST["editarTelefono"]) or isset($_POST["editarDireccion"]) or isset($_POST["editarCorreo"]) or isset($_POST["editarPersona"])) {
    if (isset($_POST["editarTelefono"])) {
        $registro_Telefonos = $conexion->query("SELECT * FROM `Telefonos` WHERE Cod_Telefono=" . $_POST["editarTelefono"])->fetchAll(PDO::FETCH_OBJ);
        foreach ($registro_Telefonos  as $Telefonos) :
            if ($Telefonos->Tip_Telefono == "P") {
                $opcTip_Telefono = "<option value='P' selected>Personal</option>
                    <option value='L'>Laboral</option>
                    <option value='C'>Casa</option>";
            } elseif ($Telefonos->Tip_Telefono == "L") {
                $opcTip_Telefono = "<option value='P' >Personal</option>
                    <option value='L'selected>Laboral</option>
                    <option value='C'>Casa</option>";
            } elseif ($Telefonos->Tip_Telefono == "C") {
                $opcTip_Telefono = "<option value='P'>Personal</option>
                    <option value='L'>Laboral</option>
                    <option value='C'selected>Casa</option>";
            }
            if ($Telefonos->Ind_Telefono == "A") {
                $opcInd_Telefono = "<option value='A' selected>Activo</option>
                              <option value='I'>Inactivo</option>";
            } else if ($Telefonos->Ind_Telefono == "I") {
                $opcInd_Telefono = "<option value='A' >Activo</option>
                              <option value='I' selected>Inactivo</option>";
            }
?>
            <form action="bd/update_Persona" method="POST" class="">
                <!-- Step 1 -->
                <section>
                    <!-- input Numero Télefono y Tipo -->
                    <div class="row">
                        <!-- input Numero Télefono -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="codNumero" value="<?php echo $Telefonos->Cod_Telefono ?>" name="codNumero">
                                <label for="NumeroUda"> Numero Télefono : <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="NumeroUda" name="NumeroUda" maxlength="9" value="<?php echo $Telefonos->Num_Telefono ?>" required>
                            </div>
                        </div>
                    </div>
                    <!-- input Estado Telefono  y Correo -->
                    <div class="row">
                        <!-- input Tipo -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="TipoTelUda"> Tipo de Télefono : <span class="text-danger">*</span> </label>
                                <select class="form-control" id="TipoTelUda" name="TipoTelUda" required>
                                    <?php echo $opcTip_Telefono ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- input Estado Telefono -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="EstadoTelUda"> Estado : <span class="text-danger">*</span> </label>
                                <select class="form-control" id="EstadoTelUda" name="EstadoTelUda" required>
                                    <?php echo $opcInd_Telefono  ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>
                <button type="submit" name="actualizarTelefono" id="actualizarTelefono" class="btn btn-success float-right">Actualizar</button>
            </form>
        <?php
        endforeach;
    } elseif (isset($_POST["editarDireccion"])) {
        $registro_Direcciones = $conexion->query("SELECT * FROM `Direcciones`WHERE Cod_Direccion=" . $_POST["editarDireccion"])->fetchAll(PDO::FETCH_OBJ);
        foreach ($registro_Direcciones  as $Direcciones) :
            if ($Direcciones->Ind_Direccion == "A") {
                $opcInd_Direcciones = "<option value='A' selected>Activo</option>
                              <option value='I'>Inactivo</option>";
            } else if ($Direcciones->Ind_Direccion == "I") {
                $opcInd_Direcciones = "<option value='A' >Activo</option>
                              <option value='I' selected>Inactivo</option>";
            }
        ?>
            <form action="bd/update_Persona" method="POST" class="">
                <section>
                    <!-- input dirección -->
                    <div class="row">
                        <!-- input dirección -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="Cod" hidden value="<?php echo $Direcciones->Cod_Direccion ?>" id="">
                                <label for="DirrecionUda"> Dirreción : <span class="text-danger">*</span> </label>
                                <textarea class="form-control" name="DirrecionUda" id="DirrecionUda" cols="30" rows="3" required><?php echo $Direcciones->Des_Direccion ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- input Tipo de Direccion Estado de Direccion -->
                    <div class="row">
                        <!-- input Tipo de Direccion -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="TipoDirUda"> Tipo de Dirección : <span class="danger">*</span> </label>
                                <input type="text" class="form-control" id="TipoDirUda" name="TipoDirUda" required value="<?php echo $Direcciones->Tip_Direccion ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- input Estado de Direccion -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="EstadoDirUda"> Estado : <span class="danger">*</span> </label>
                                <select class="form-control" id="EstadoDir" name="EstadoDirUda" required>
                                    <option selected=""></option>
                                    <?php echo $opcInd_Direcciones ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>
                <button type="submit" name="actualizarDireccion" id="actualizarDireccion" class="btn btn-success float-right">Actualizar</button>
            </form>
        <?php
        endforeach;
    } elseif (isset($_POST["editarCorreo"])) {
        $registro_Correos = $conexion->query("SELECT * FROM `Correos` WHERE Cod_Correo=" . $_POST["editarCorreo"])->fetchAll(PDO::FETCH_OBJ);
        foreach ($registro_Correos  as $Correos) :
            if ($Correos->Tip_Correo == "P") {
                $opcTip_Correo = "<option value='P' selected>Personal</option>
                        <option value='L'>Laboral</option>
                        <option value='I'>Institucional</option>";
            } elseif ($Correos->Tip_Correo == "L") {
                $opcTip_Correo = "<option value='P' >Personal</option>
                        <option value='L'selected>Laboral</option>
                        <option value='I'>Institucional</option>";
            } elseif ($Correos->Tip_Correo == "I") {
                $opcTip_Correo = "<option value='P'>Personal</option>
                        <option value='L'>Laboral</option>
                        <option value='I'selected>Institucional</option>";
            }
            if ($Correos->Ind_Correo == "A") {
                $opcInd_Correo = "<option value='A' selected>Activo</option>
                                  <option value='I'>Inactivo</option>";
            } else {
                $opcInd_Correo = "<option value='A' >Activo</option>
                                  <option value='I' selected>Inactivo</option>";
            }
        ?>
            <form action="bd/update_Persona" method="POST" class="">
                <!-- Step 1 -->
                <section>
                    <div class="row">

                        <!-- input Correo -->
                        <div class="col-md-12">

                            <div class="form-group">
                                <input type="" class="form-control" hidden name="CodCorreoUda" value="<?php echo $Correos->Cod_Correo   ?>" id="CodCorreoUda">
                                <label for="CorreoUda"> Correo : <span class="text-danger">*</span> </label>
                                <input type="email" class="form-control" value="<?php echo $Correos->Correo  ?>" id="CorreoUda" name="CorreoUda" required>
                            </div>
                        </div>
                    </div>
                    <!-- input tipo Correo y Estado Correo -->
                    <div class="row">
                        <!-- input tipo Correo -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="TipoCorUda"> Tipo de Correo: <span class="text-danger">*</span> </label>
                                <select class="form-control" id="TipoCorUda" name="TipoCorUda" required>
                                    <option selected=""></option>
                                    <?php echo $opcTip_Correo; ?>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <!-- input Estado Correo -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="EstadoCorUda"> Estado : <span class="text-danger">*</span> </label>
                                <select class="form-control" id="EstadoCorUda" name="EstadoCorUda" required>
                                    <option selected=""></option>
                                    <?php echo $opcInd_Correo; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>
                <button type="submit" name="actualizarCorreo" id="actualizarCorreo" class="btn btn-success float-right">Actualizar</button>
            </form>
        <?php
        endforeach;
    } elseif (isset($_POST["editarPersona"])) {
        $registro_Personas = $conexion->query("SELECT * FROM `Personas` WHERE Cod_Persona=" . $_POST["editarPersona"])->fetchAll(PDO::FETCH_OBJ);
        foreach ($registro_Personas  as $Personas) :
            if ($Personas->Ind_Civil == "S") {
                $opcInd_Civil = "<option value='S' selected>Soltero</option>
                        <option value='C'>Casado</option>
                        <option value='D'>Divorciado</option>
                        <option value='V'>Viudo</option>";
            } elseif ($Personas->Ind_Civil == "C") {
                $opcInd_Civil = "<option value='S'>Soltero</option>
                        <option value='C' selected>Casado</option>
                        <option value='D'>Divorciado</option>
                        <option value='V'>Viudo</option>";
            } elseif ($Personas->Ind_Civil == "D") {
                $opcInd_Civil = "<option value='S'>Soltero</option>
                        <option value='C' >Casado</option>
                        <option value='D' selected>Divorciado</option>
                        <option value='V'>Viudo</option>";
            } elseif ($Personas->Ind_Civil == "V") {
                $opcInd_Civil = "<option value='S'>Soltero</option>
                        <option value='C' >Casado</option>
                        <option value='D'>Divorciado</option>
                        <option value='V'selected>Viudo</option>";
            }
            if ($Personas->Gen_Persona == "M") {
                $opcGen_Persona = "<option value='M' selected>Masculino</option>
                        <option value='F'>Femenino</option>
                        <option value='N'>Nada</option>";
            } elseif ($Personas->Gen_Persona == "F") {
                $opcGen_Persona = "<option value='M' >Masculino</option>
                        <option value='F'selected>Femenino</option>
                        <option value='N'>Nada</option>";
            } elseif ($Personas->Gen_Persona == "N") {
                $opcGen_Persona = "<option value='M'>Masculino</option>
                        <option value='F'>Femenino</option>
                        <option value='N'selected>Nada</option>";
            }
            if ($Personas->Ind_Persona == "A") {
                $opcInd_Personas = "<option value='A' selected>Activo</option>
                                  <option value='I'>Inactivo</option>";
            } else {
                $opcInd_Personas = "<option value='A' >Activo</option>
                                  <option value='I' selected>Inactivo</option>";
            }
        ?>
            <form action="bd/update_Persona" method="POST" class="">
                <!-- Step 1 -->
                <h5>Datos personales</h5>
                <section>
                    <!-- input Nombre y Apellido -->
                    <div class="row">
                        <!-- input Nombre -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Cod_Persona" hidden name="Cod_Persona" value="<?php echo $Personas->Cod_Persona ?>">
                                <label for="NombreUda"> Nombre : <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="NombreUda" name="NombreUda" value="<?php echo $Personas->Nom_Persona ?>" required>
                            </div>
                        </div>
                        <!-- input Apellido -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ApellidoUda"> Apellido : <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control required" id="ApellidoUda" name="ApellidoUda" value="<?php echo $Personas->Ape_Persona ?>" required>
                            </div>
                        </div>
                    </div>
                    <!-- input Id y Edad -->
                    <div class="row">
                        <!-- input Id-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="IdUda"> Id: <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control required" id="IdUda" name="IdUda" value="<?php echo $Personas->Num_Identidad ?>" required>
                            </div>
                        </div>
                        <!-- input Edad -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="EdadUda"> Edad: <span class="text-danger">*</span> </label>
                                <input type="number" class="form-control required" id="EdadUda" name="EdadUda" value="<?php echo $Personas->Eda_Persona ?>" required min="1" max="150">
                            </div>
                        </div>
                    </div>
                    <!-- input Género y Civil -->
                    <div class="row">
                        <!-- input Género -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="GeneroUda"> Género: <span class="text-danger">*</span> </label>
                                <select class="form-control" id="GeneroUda" name="GeneroUda" required>
                                    <?php echo $opcGen_Persona ?>
                                </select>
                            </div>
                        </div>
                        <!-- input Civil -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="CivilUda"> Estado Civil: <span class="text-danger">*</span> </label>
                                <select class="form-control" id="CivilUda" name="CivilUda" required>
                                    <option selected=""></option>
                                    <?php echo $opcInd_Civil ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- input Fecha y Estado -->
                    <div class="row">
                        <!-- input Fecha -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="NacimientoUda"> Fecha Nacimiento: <span class="text-danger">*</span> </label>
                                <input type="date" class="form-control required" id="NacimientoUda" value="<?php echo $Personas->Fec_Nacimiento ?>" name="NacimientoUda" required>
                            </div>
                        </div>
                        <!-- input Estado -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="EstadoUda">Estado: <span class="text-danger">*</span> </label>
                                <select class="form-control" id="EstadoUda" name="EstadoUda" required>
                                    <?php echo $opcInd_Personas ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- input Imagen 
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ImagenUda">Imagen: <span class="text-danger">*</span> </label>
                                <input type="file" class="form-control required" id="ImagenUda" name="ImagenUda" accept="image/*" value="jose.jpg">
                            </div>
                        </div>
                    </div>-->
                </section>
                <button type="submit" name="actualizarPersona" id="actualizarPersona" class="btn btn-success float-right">Actualizar</button>
            </form>
        <?php
        endforeach;
    }
} elseif (isset($_POST["editarAdministrador"])) {
    $registro_Administrador = $conexion->query("SELECT * FROM `Administradores` WHERE Cod_Administrador=" . $_POST["editarAdministrador"])->fetchAll(PDO::FETCH_OBJ);
    foreach ($registro_Administrador  as $Administrador) :
        ?>
        <form action="bd/update_Persona" method="POST" class="">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" hidden class="form-control" id="Cod_Administrador" value="<?php echo $Administrador->Cod_Administrador ?>" name="Cod_Administrador" required>
                            <label for="FacultadUda"> Facultad donde Trabaja : <span class="text-danger">*</span> </label>
                            <select class="form-control" id="FacultadUda" name="FacultadUda" required>
                                <option selected=""></option>
                                <?php
                                $FacultadAdmin = $conexion->query("SELECT`Nom_Facultad`  FROM `Facultades`")->fetchAll(PDO::FETCH_OBJ);
                                foreach ($FacultadAdmin as $FacultadAdmin) :
                                    if ($FacultadAdmin->Nom_Facultad == $Administrador->Fac_Administrador) {
                                        $pru = "selected";
                                    } else {
                                        $pru = "";
                                    }
                                    echo '<option value="' . $FacultadAdmin->Nom_Facultad . '"' . $pru . '>' . $FacultadAdmin->Nom_Facultad . '</option>';
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="PuestoUda"> Puesto: <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="PuestoUda" value="<?php echo $Administrador->Pue_Administrador ?>" name=" PuestoUda" required>
                        </div>
                    </div>
                </div>
            </section>
            <button type="submit" id="actualizarAdmini" name="actualizarAdmini" class="btn btn-success float-right">Actualizar</button>
        </form>
    <?php
    endforeach;
} elseif (isset($_POST["editarDocente"])) {
    $registro_Docente = $conexion->query("SELECT * FROM `Docentes` WHERE Cod_Docente=" . $_POST["editarDocente"])->fetchAll(PDO::FETCH_OBJ);
    foreach ($registro_Docente  as $Docente) :
    ?>
        <form action="bd/update_Persona" method="POST" class="">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" hidden class="form-control" id="Cod_Docente" value="<?php echo $Docente->Cod_Docente ?>" name="Cod_Docente" required>
                            <label for="FacultadDoUda"> Facultad : <span class="text-danger">*</span> </label>
                            <select class="form-control" id="FacultadDoUda" name="FacultadDoUda" required>
                                <option selected=""></option>
                                <?php
                                $Facultad = $conexion->query("SELECT `Cod_Facultad`,`Nom_Facultad`  FROM `Facultades`")->fetchAll(PDO::FETCH_OBJ);
                                foreach ($Facultad as $FacultadDoce) :
                                    if ($FacultadDoce->Cod_Facultad == $Docente->Facultad) {
                                        $pru = "selected";
                                    } else {
                                        $pru = "";
                                    }
                                    echo '<option value="' . $FacultadDoce->Cod_Facultad . '"' . $pru . '>' . $FacultadDoce->Nom_Facultad . '</option>';
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="DepartamentoDodUda"> Departamento : <span class="text-danger">*</span> </label>
                            <select class="form-control" id="DepartamentoDodUda" name="DepartamentoDodUda" required>
                                <option selected=""></option>
                                <?php
                                $DepartamentoDoce = $conexion->query("SELECT `Cod_Departamento`,`Nom_Departamento`  FROM `Departamentos`")->fetchAll(PDO::FETCH_OBJ);
                                foreach ($DepartamentoDoce as $DepartamentoDoce) :
                                    if ($DepartamentoDoce->Cod_Departamento == $Docente->Departamento) {
                                        $pru = "selected";
                                    } else {
                                        $pru = "";
                                    }
                                    echo '<option value="' . $DepartamentoDoce->Cod_Departamento . '"' . $pru . '>' . $DepartamentoDoce->Nom_Departamento . '</option>';
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="JornadaDoUda"> Jornada : <span class="text-danger">*</span> </label>
                            <select class="form-control" id="JornadaDoUda" name="JornadaDoUda" required>
                                <option selected=""></option>
                                <?php
                                $JornadaDoce = $conexion->query("SELECT `Cod_Jornada`,`Nom_Jornada`  FROM `Jornadas`")->fetchAll(PDO::FETCH_OBJ);
                                foreach ($JornadaDoce as $JornadaDoce) :
                                    if ($JornadaDoce->Cod_Jornada == $Docente->Jornada) {
                                        $pru = "selected";
                                    } else {
                                        $pru = "";
                                    }
                                    echo '<option value="' . $JornadaDoce->Cod_Jornada . '"' . $pru . '>' . $JornadaDoce->Nom_Jornada . '</option>';

                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </section>
            <button type="submit" id="actualizarDocente" name="actualizarDocente" class="btn btn-success float-right">Actualizar</button>
        </form>
    <?php
    endforeach;
} elseif (isset($_POST["editarEstudiante"])) {
    $registro_Estudiante = $conexion->query("SELECT * FROM `Estudiantes` WHERE Cod_Estudiante=" . $_POST["editarEstudiante"])->fetchAll(PDO::FETCH_OBJ);
    foreach ($registro_Estudiante as $Estudiante) :
        if ($Estudiante->Mod_Estudiante == "P") {
            $opcEstudiante = "<option value='P' selected>Presencial</option>
                              <option value='D'>Distancia</option>";
        } else if ($Estudiante->Mod_Estudiante == "D") {
            $opcEstudiante = "<option value='P' >Presencial</option>
                              <option value='D' selected>Distancia</option>";
        }
    ?>
        <form action="bd/update_Persona" method="POST" class="">
            <section>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" hidden id="Cod_Estudiante" Value="<?php echo $Estudiante->Cod_Estudiante ?>" name="Cod_Estudiante" required>
                            <label for="CuentaUda">Numero de Cuenta: <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="CuentaUda" Value="<?php echo $Estudiante->Num_Cuenta ?>" name="CuentaUda" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="CentroUda">Centro Regional: <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="CentroUda" Value="<?php echo $Estudiante->Cen_RegEstudiante ?>" name="CentroUda" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="FacultadUdaES">Facultad: <span class="text-danger">*</span> </label>

                            <select class="form-control" id="FacultadUdaES" name="FacultadUdaES">
                                <option selected=""></option>
                                <?php
                                $FacultadEstu = $conexion->query("SELECT`Cod_Facultad`,`Nom_Facultad`  FROM `Facultades`")->fetchAll(PDO::FETCH_OBJ);
                                foreach ($FacultadEstu as $FacultadEstu) :

                                    if ($FacultadEstu->Cod_Facultad == $Estudiante->Fac_Estudiante) {
                                        $pru = "selected";
                                    } else {
                                        $pru = "";
                                    }
                                    echo '<option value="' .  $FacultadEstu->Cod_Facultad . '"' . $pru . '>' . $FacultadEstu->Nom_Facultad . '</option>';

                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="CarreraUda">Carrera: <span class="text-danger">*</span> </label>
                            <input type="text" class="form-control" id="CarreraUda" Value="<?php echo $Estudiante->Car_Estudiante ?>" name="CarreraUda" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ModalidadUda">Modalidad: <span class="text-danger">*</span> </label>
                            <select class="form-control" id="ModalidadUda" name="ModalidadUda">
                                <option selected=""></option>
                                <?php echo $opcEstudiante ?>
                            </select>
                        </div>
                    </div>
                </div>

            </section>
            <button type="submit" id="actualizarEstudiante" name="actualizarEstudiante" class="btn btn-success float-right">Actualizar</button>
        </form>
<?php
    endforeach;
}
?>