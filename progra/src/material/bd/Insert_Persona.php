<?php
include_once "conexion.php";
/*Asignacion de los varoles a las Variales*/
/*Persona Variales*/
$Id = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Edad = $_POST['Edad'];
$Genero = $_POST['Genero'];
$Civil = $_POST['Civil'];
$Nacimiento = $_POST['Nacimiento'];
$Estado = $_POST['Estado'];
$Imagen = "user_defaul.jpg";
$Fecha = date("Y-m-d H:i:s");
$Usr = "Root--PRUEBA";
/*Telefono Variales*/
$Numero = $_POST['Numero'];
$TipoTel = $_POST['TipoTel'];
$EstadoTel = $_POST['EstadoTel'];
/*Correo Variales*/
$Correo = $_POST['Correo'];
$TipoCor = $_POST['TipoCor'];
$EstadoCor = $_POST['EstadoCor'];
/*direccion Variales*/
$Dirrecion = $_POST['Dirrecion'];
$TipoDir = $_POST['TipoDir'];
$EstadoDir = $_POST['EstadoDir'];

$Puesto = $_POST['Puesto'];

$FacultadAdmin = $_POST['FacultadAdmin'];
$PuestoAdmin = $_POST['PuestoAdmin'];
$UsuarioAdmin = $_POST['UsuarioAdmin'];
$PasswordAdmin = $_POST['PasswordAdmin'];
$EstadoUserAdmin = $_POST['EstadoUserAdmin'];
$passAdmin = md5($PasswordAdmin);

$NumeroEstu = $_POST['NumeroEstu'];
$CentroEstu = $_POST['CentroEstu'];
$FacultadEstu = $_POST['FacultadEstu'];
$CarreraEstu = $_POST['CarreraEstu'];
$ModalidadEstu = $_POST['ModalidadEstu'];
$UsuarioEstu = $_POST['UsuarioEstu'];
$PasswordEstu = $_POST['PasswordEstu'];
$passEstu = md5($PasswordEstu);


$EstadoUserEstu = $_POST['EstadoUserEstu'];

$FacultadDoce = $_POST['FacultadDoce'];
$DepartamentoDoce = $_POST['DepartamentoDoce'];
$JornadaDoce = $_POST['JornadaDoce'];

/*########################################*/
$sql = "INSERT INTO `Personas`(`Num_Identidad`,`Nom_Persona`,`Ape_Persona`,`Eda_Persona`,`Gen_Persona`,`Ind_Civil`,`Fec_Nacimiento`,`Ind_Persona`,`Foto_Persona`,`Fec_Registro`,`Usr_Registro`)VALUES(:Id,:Nombre,:Apellido,:Edad,:Genero,:Civil,:Nacimiento,:Estado,:Imagen,:Fecha,:Usr);
SELECT @COD_PERSONA:=MAX(Cod_Persona) FROM `Personas`;
INSERT INTO `Direcciones`(`Tip_Direccion`,`Des_Direccion`,`Ind_Direccion`,`Fecha_Registro`,`Usr_Registro`)VALUES(:TipoDir,:Dirrecion,:EstadoDir,:Fecha,:Usr);
SELECT @COD_DIRECCION:=MAX(Cod_Direccion) FROM `Direcciones`;
INSERT INTO `Rel_PerDir`(`Cod_Direccion`,`Cod_Persona`,`Fec_Registro`,`Usr_Registro`)VALUES(@COD_DIRECCION,@COD_PERSONA,:Fecha,:Usr);
INSERT INTO `Correos`(`Correo`,`Tip_Correo`,`Ind_Correo`,`Fec_Registro`,`Usr_Registro`)VALUES (:Correo,:TipoCor,:EstadoCor,:Fecha,:Usr);
SELECT @COD_CORREOS:=MAX(Cod_Correo) FROM `Correos`;
INSERT INTO `Rel_PerCor`(`Cod_Correo`,`Cod_Persona`,`Fec_Registro`,`Usr_Registro`)VALUES(@COD_CORREOS,@COD_PERSONA,:Fecha,:Usr);
INSERT INTO `Telefonos`(`Num_Telefono`,`Tip_Telefono`,`Ind_Telefono`,`Fec_Registro`,`Usr_Registro`)VALUES (:Numero,:TipoTel,:EstadoTel,:Fecha,:Usr);
SELECT @COD_TELEFONO:=MAX(Cod_Telefono) FROM `Telefonos`;
INSERT INTO `Rel_PerTel`(`Cod_Telefono`,`Cod_Persona`,`Fec_Registro`,`Usr_Registro`)VALUES(@COD_TELEFONO,@COD_PERSONA,:Fecha,:Usr);";
$resultado = $conexion->prepare($sql);
$resultado->execute(array(":Id" => $Id, ":Nombre" => $Nombre, ":Apellido" => $Apellido, ":Edad" => $Edad, ":Genero" => $Genero, ":Civil" => $Civil, ":Nacimiento" => $Nacimiento, ":Estado" => $Estado, ":Imagen" => $Imagen, ":Fecha" => $Fecha, ":Usr" => $Usr, ":TipoDir" => $TipoDir, ":Dirrecion" => $Dirrecion, ":EstadoDir" => $EstadoDir, ":Correo" => $Correo, ":TipoCor" => $TipoCor, ":EstadoCor" => $EstadoCor, ":Numero" => $Numero, ":TipoTel" => $TipoTel, ":EstadoTel" => $EstadoTel));
if ($Puesto == 0) {
    $sql = "SELECT @COD_PERSONA:=MAX(Cod_Persona) FROM `Personas`;
    INSERT INTO `Docentes`(`Cod_Persona`,`Facultad`,`Departamento`,`Jornada`,`Fec_Registro`,`Usr_Registro`)VALUES(@COD_PERSONA,:FacultadDoce,:DepartamentoDoce,:JornadaDoce,:Fecha,:Usr)";
    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(":FacultadDoce" => $FacultadDoce, ":DepartamentoDoce" => $DepartamentoDoce, ":JornadaDoce" => $JornadaDoce, ":Fecha" => $Fecha, ":Usr" => $Usr));
} elseif ($Puesto == 1) {
    $sql = "SELECT @COD_PERSONA:=MAX(Cod_Persona) FROM `Personas`;
    INSERT INTO `Administradores`(`Cod_Persona`,`Fac_Administrador`,`Pue_Administrador`,`Fec_Registro`,`Usr_Registro`)VALUES(@COD_PERSONA,:FacultadAdmin,:PuestoAdmin,:Fecha,:Usr);
    SELECT @COD_ADMINISTRADOR:=MAX(Cod_Administrador) FROM `Administradores`;
    INSERT INTO `Usuarios`(
        `Nom_Usuario`, 
        `Pas_Usuario`, 
        `Tip_Rol`, 
        `Ind_Usuario`, 
        `Ult_Session`,
        `Activacion`, 
        `Token`, 
        `Token_Password`, 
        `Password_Request`, 
        `Fec_Registro`, 
        `Usr_Registro`) 
        VALUES (
            :UsuarioAdmin, 
            :passAdmin,
            '1',
            :EstadoUserAdmin, 
            NULL,
            '0', 
            NULL, 
            NULL, 
            NULL,
            :Fecha,
            :Usr);
    SELECT @COD_Usuario:=MAX(Cod_Usuario) FROM `Usuarios`;
    INSERT INTO `Rel_AdmUsr`(
        `Cod_Administrador`,
        `Cod_Usuario`,
        `Fec_Registro`,
        `Usr_Registro`) 
        VALUES (
            @COD_ADMINISTRADOR,
            @COD_Usuario,
            :Fecha,
            :Usr);
    ";
    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(
        ":UsuarioAdmin" => $UsuarioAdmin,
        ":passAdmin" => $passAdmin,
        ":EstadoUserAdmin" => $EstadoUserAdmin,
        ":FacultadAdmin" => $FacultadAdmin,
        ":PuestoAdmin" => $PuestoAdmin,
        ":Fecha" => $Fecha,
        ":Usr" => $Usr
    ));
} elseif ($Puesto == 2) {
    $sql = "SELECT @COD_PERSONA:=MAX(Cod_Persona) FROM `Personas`;
    INSERT INTO `Estudiantes`(`Cod_Persona`,`Num_Cuenta`,`Car_Estudiante`,`Cen_RegEstudiante`,`Mod_Estudiante`,`Fac_Estudiante`,`Fec_Registro`,`Usr_Registro`)VALUES(@COD_PERSONA,:NumeroEstu,:CarreraEstu,:CentroEstu,:ModalidadEstu,:FacultadEstu,:Fecha,:Usr);
    SELECT @COD_ESTUDIANTE:=MAX(Cod_Estudiante) FROM `Estudiantes`;
    INSERT INTO `Usuarios`(`Nom_Usuario`,`Pas_Usuario`,`Tip_Rol`,`Ind_Usuario`,`Ult_Session`,`Activacion`,`Token`,`Token_Password`,`Password_Request`,`Fec_Registro`,`Usr_Registro`)VALUES(:UsuarioEstu,:passEstu,'1',:EstadoUserEstu,NULL,'0',NULL,NULL,NULL,:Fecha,:Usr);
    SELECT @COD_Usuario:=MAX(Cod_Usuario) FROM `Usuarios`;
    INSERT INTO `Rel_EstUsr`(`COD_ESTUDIANTE`,`Cod_Usuario`,`Fec_Registro`,`Usr_Registro`)VALUES (@COD_ESTUDIANTE,@COD_Usuario,:Fecha,:Usr);";
    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(":UsuarioEstu" => $UsuarioEstu, ":passEstu" => $passEstu, ":EstadoUserEstu" => $EstadoUserEstu, ":NumeroEstu" => $NumeroEstu, ":CentroEstu" => $CentroEstu, ":FacultadEstu" => $FacultadEstu, ":ModalidadEstu" => $ModalidadEstu, ":Fecha" => $Fecha, ":Usr" => $Usr));
}
header("Location:../personascopy.php");
