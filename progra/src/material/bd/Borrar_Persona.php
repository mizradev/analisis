<?php
include "conexion.php";
if (empty($_GET['Cod_Persona']) or empty($_GET['Cod_Correo'])) {
    header("Location:../personascopy.php");
}

if (isset($_GET["Cod_Persona"]) or isset($_GET["Cod_Correo"]) or isset($_GET["Cod_Telefono"]) or isset($_GET["Cod_Direccion"])) {
    if (isset($_GET["Cod_Persona"])) {
        $Cod_Persona = $_GET["Cod_Persona"];
        $conexion->query("DELETE  FROM `Personas` WHERE `Cod_Persona`=$Cod_Persona;
                          ##Se Borra el correo
                          SELECT @Cod_Correo:=Cod_Correo FROM `Rel_PerCor` WHERE `Cod_Persona`=$Cod_Persona;
                          DELETE  FROM `Rel_PerCor` WHERE `Cod_Persona`=$Cod_Persona;
                          DELETE  FROM `Correos` WHERE `Cod_Correo`=@Cod_Correo;
                          ##Se Borra el telefono
                          SELECT @Cod_Telefono:=Cod_Telefono FROM `Rel_PerTel` WHERE `Cod_Persona`=$Cod_Persona;
                          DELETE  FROM `Rel_PerTel` WHERE `Cod_Persona`=$Cod_Persona;
                          DELETE  FROM `Telefonos` WHERE `Cod_Telefono`=@Cod_Telefono;
                          ##Se Borra el Direccion
                          SELECT @Cod_Direccion:=Cod_Direccion FROM `Rel_PerDir` WHERE `Cod_Persona`=$Cod_Persona;
                          DELETE  FROM `Rel_PerDir` WHERE `Cod_Persona`=$Cod_Persona;
                          DELETE  FROM `Direcciones` WHERE `Cod_Direccion`=@Cod_Direccion;
                          ##Se Borra el Docente
                          DELETE FROM `Docentes` WHERE `Cod_Persona`=$Cod_Persona;
                          ##Se Borra el Estudiante
                          SELECT @Cod_Estudiante:=Cod_Estudiante FROM `Estudiantes` WHERE `Cod_Persona`=$Cod_Persona;
                          SELECT @Cod_Usuario:=Cod_Usuario FROM `Rel_EstUsr` WHERE `Cod_Estudiante`=@Cod_Estudiante;
                          DELETE FROM `Estudiantes` WHERE `Cod_Persona`=$Cod_Persona;
                          DELETE FROM `Rel_EstUsr` WHERE `Cod_Estudiante`=@Cod_Estudiante;
                          DELETE FROM `Usuarios` WHERE `Cod_Usuario`= @Cod_Usuario;
                          ##Se Borra el Administrador
                          SELECT @Cod_Administrador:=Cod_Administrador FROM `Administradores` WHERE `Cod_Persona`=$Cod_Persona;
                         
                          DELETE FROM `Administradores` WHERE `Cod_Persona`=$Cod_Persona;
                          SELECT @Cod_Usuario:=Cod_Usuario FROM `Rel_AdmUsr` WHERE `Cod_Administrador`=@Cod_Administrador;
                          DELETE FROM `Rel_AdmUsr` WHERE `Cod_Estudiante`=@Cod_Estudiante;
                          DELETE FROM `Usuarios` WHERE `Cod_Usuario`= @Cod_Usuario;
            ");
    } elseif (isset($_GET["Cod_Correo"])) {
        $Cod_Correo = $_GET["Cod_Correo"];
        $conexion->query("DELETE  FROM `Correos` WHERE `Cod_Correo`=$Cod_Correo;
                      DELETE  FROM `Rel_PerCor` WHERE `Cod_Correo`=$Cod_Correo");
    } elseif (isset($_GET["Cod_Telefono"])) {
        $Cod_Telefono = $_GET["Cod_Telefono"];
        $conexion->query("DELETE  FROM `Telefonos` WHERE `Cod_Telefono`=$Cod_Telefono;
                      DELETE  FROM `Rel_PerTel` WHERE `Cod_Correo`=$Cod_Correo");
    } elseif (isset($_GET["Cod_Direccion"])) {
        $Cod_Direccion = $_GET["Cod_Direccion"];
        $conexion->query("DELETE  FROM `Direcciones` WHERE `Cod_Direccion`=$Cod_Direccion;
                      DELETE  FROM `Rel_PerDir` WHERE `Cod_Correo`=$Cod_Correo");
    }
    header("Location:../personascopy.php");
}
