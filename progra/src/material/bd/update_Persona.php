<?php
include_once "conexion.php";
$Fecha = date("Y-m-d H:i:s");
$Usr = "Root--PRUEBA";
if (isset($_POST["actualizarTelefono"]) or  isset($_POST["actualizarDireccion"]) or isset($_POST["actualizarCorreo"]) or  isset($_POST["actualizarPersona"])) {
    if (isset($_POST["actualizarTelefono"])) {
        $codNumero = $_POST['codNumero'];
        $NumeroUda = $_POST['NumeroUda'];
        $TipoTelUda = $_POST['TipoTelUda'];
        $EstadoTelUda = $_POST['EstadoTelUda'];
        $sql = "UPDATE `Telefonos` SET `Num_Telefono`=:NumeroUda, `Tip_Telefono`=:TipoTelUda, `Ind_Telefono`=:EstadoTelUda,`Fec_Registro`=:Fecha, `Usr_Registro`=:Usr WHERE `Cod_Telefono`=:codNumero";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":NumeroUda" => $NumeroUda, ":TipoTelUda" => $TipoTelUda, ":EstadoTelUda" => $EstadoTelUda, ":Fecha" => $Fecha, ":Usr" => $Usr, ":codNumero" => $codNumero));
    } elseif (isset($_POST["actualizarDireccion"])) {
        $Cod = $_POST['Cod'];
        $DirrecionUda = $_POST['DirrecionUda'];
        $TipoDirUda = $_POST['TipoDirUda'];
        $EstadoDirUda = $_POST['EstadoDirUda'];
        $sql = "UPDATE `Direcciones` SET `Des_Direccion`=:DirrecionUda, `Tip_Direccion`=:TipoDirUda, `Ind_Direccion`=:EstadoDirUda, `Fecha_Registro`=:Fecha, `Usr_Registro`=:Usr WHERE `Cod_Direccion`=:Cod";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":DirrecionUda" => $DirrecionUda, ":TipoDirUda" => $TipoDirUda, ":EstadoDirUda" => $EstadoDirUda, ":Fecha" => $Fecha, ":Usr" => $Usr, ":Cod" => $Cod));
    } elseif (isset($_POST["actualizarCorreo"])) {
        $CodCorreoUda = $_POST['CodCorreoUda'];
        $CorreoUda = $_POST["CorreoUda"];
        $TipoCorUda = $_POST["TipoCorUda"];
        $EstadoCorUda = $_POST["EstadoCorUda"];
        $sql = "UPDATE `Correos` SET `Correo`=:CorreoUda,`Tip_Correo`=:TipoCorUda,`Ind_Correo`=:EstadoCorUda,`Fec_Registro`=:Fecha,`Usr_Registro`=:Usr WHERE `Cod_Correo`=:CodCorreoUda";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(":CorreoUda" => $CorreoUda, ":TipoCorUda" => $TipoCorUda, ":EstadoCorUda" => $EstadoCorUda, ":Fecha" => $Fecha, ":Usr" => $Usr, ":CodCorreoUda" => $CodCorreoUda));
    } elseif (isset($_POST["actualizarPersona"])) {
        $Cod_Persona = $_POST['Cod_Persona'];
        $NombreUda = $_POST["NombreUda"];
        $ApellidoUda = $_POST["ApellidoUda"];
        $IdUda = $_POST["IdUda"];
        $EdadUda = $_POST["EdadUda"];
        $GeneroUda = $_POST["GeneroUda"];
        $CivilUda = $_POST["CivilUda"];
        $NacimientoUda = $_POST["NacimientoUda"];
        $EstadoUda = $_POST["EstadoUda"];
        $sql = "UPDATE `Personas` SET 
                    `Num_Identidad`=:IdUda,
                    `Nom_Persona`=:NombreUda,
                    `Ape_Persona`=:ApellidoUda,
                    `Eda_Persona`=:EdadUda,
                    `Gen_Persona`=:GeneroUda,
                    `Ind_Civil`=:CivilUda,
                    `Fec_Nacimiento`=:NacimientoUda,
                    `Ind_Persona`=:EstadoUda,
                    `Fec_Registro`=:Fecha,
                    `Usr_Registro`=:Usr
                     WHERE `Cod_Persona`=:Cod_Persona";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(
            ":Cod_Persona" => $Cod_Persona,
            ":NombreUda" => $NombreUda,
            ":ApellidoUda" => $ApellidoUda,
            ":IdUda" => $IdUda,
            ":EdadUda" => $EdadUda,
            ":GeneroUda" => $GeneroUda,
            ":CivilUda" => $CivilUda,
            ":EstadoUda" => $EstadoUda,
            ":NacimientoUda" => $NacimientoUda,
            ":Fecha" => $Fecha,
            ":Usr" => $Usr
        ));
    }
    header("Location:../personascopy.php");
} elseif (isset($_POST["actualizarAdmini"])) {
    if ((isset($_POST["actualizarAdmini"]))) {
        $Cod_Administrador = $_POST['Cod_Administrador'];
        $FacultadUda = $_POST["FacultadUda"];
        $PuestoUda = $_POST["PuestoUda"];
        $sql = "UPDATE `Administradores` SET 
                    `Fac_Administrador`=:FacultadUda,
                    `Pue_Administrador`=:PuestoUda,
                    `Fec_Registro`=:Fecha,
                    `Usr_Registro`=:Usr
                     WHERE `Cod_Administrador`=:Cod_Administrador";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(
            ":Cod_Administrador" => $Cod_Administrador,
            ":FacultadUda" => $FacultadUda,
            ":PuestoUda" => $PuestoUda,
            ":Fecha" => $Fecha,
            ":Usr" => $Usr
        ));
    }
    header("Location:../administradores.php");
} elseif (isset($_POST["actualizarDocente"])) {
    if ((isset($_POST["actualizarDocente"]))) {
        $Cod_Docente = $_POST['Cod_Docente'];
        $FacultadDoUda = $_POST["FacultadDoUda"];
        $DepartamentoDodUda = $_POST["DepartamentoDodUda"];
        $JornadaDoUda = $_POST["JornadaDoUda"];
        $sql = "UPDATE `Docentes` SET 
                    `Facultad`=:FacultadDoUda,
                    `Departamento`=:DepartamentoDodUda,
                    `Jornada`=:JornadaDoUda,
                    `Fec_Registro`=:Fecha,
                    `Usr_Registro`=:Usr
                     WHERE `Cod_Docente`=:Cod_Docente";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(
            ":Cod_Docente" => $Cod_Docente,
            ":FacultadDoUda" => $FacultadDoUda,
            ":DepartamentoDodUda" => $DepartamentoDodUda,
            ":JornadaDoUda" => $JornadaDoUda,
            ":Fecha" => $Fecha,
            ":Usr" => $Usr
        ));
    }
    header("Location:../docentes.php");
} elseif (isset($_POST["actualizarEstudiante"])) {
    if ((isset($_POST["actualizarEstudiante"]))) {
        $Cod_Estudiante = $_POST['Cod_Estudiante'];
        $CuentaUda = $_POST["CuentaUda"];
        $CentroUda = $_POST["CentroUda"];
        $FacultadUdaES = $_POST["FacultadUdaES"];
        $CarreraUda = $_POST["CarreraUda"];
        $ModalidadUda = $_POST["ModalidadUda"];
        $sql = "UPDATE `Estudiantes` SET 
                    `Num_Cuenta`=:CuentaUda,
                    `Cen_RegEstudiante`=:CentroUda,
                    `Fac_Estudiante`=:FacultadUdaES,
                    `Car_Estudiante`=:CarreraUda,
                    `Mod_Estudiante`=:ModalidadUda,
                    `Fec_Registro`=:Fecha,
                    `Usr_Registro`=:Usr
                     WHERE `Cod_Estudiante`=:Cod_Estudiante";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(
            ":Cod_Estudiante" => $Cod_Estudiante,
            ":CuentaUda" => $CuentaUda,
            ":CentroUda" => $CentroUda,
            ":FacultadUdaES" => $FacultadUdaES,
            ":CarreraUda" => $CarreraUda,
            ":ModalidadUda" => $ModalidadUda,
            ":Fecha" => $Fecha,
            ":Usr" => $Usr
        ));
    }
    header("Location:../estudiante.php");
}
