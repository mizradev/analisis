<?php
require_once '../model/conexion.php' ;

//$consultar = "SELECT * FROM Faltas WHERE Tip_Falta = 'L' ";

//$lquery = mysqli_query($conexion,$consultar);

    session_start();
    if (!empty($_SESSION['active'] )) //si existe esta sesion 
    {
        $r=$_SESSION['Nombre'];
            $consultar= "SELECT Usuarios.Cod_Usuario, Usuarios.Nom_Usuario, Usuarios.Tip_Rol,
              Personas.Nom_Persona, Personas.Ape_Persona,
               Estudiantes.Num_Cuenta, Estudiantes.Car_Estudiante,Estudiantes.Car_Estudiante,Estudiantes.Mod_Estudiante,
               Telefonos.Num_Telefono, Estudiantes.Cod_Estudiante,
               Correos.Correo 
               FROM  Usuarios JOIN Rel_EstUsr
                   ON  Rel_EstUsr.Cod_Usuario = Usuarios.Cod_Usuario  
              JOIN Estudiantes
                   ON  Rel_EstUsr.Cod_Estudiante = Estudiantes.Cod_Estudiante
              JOIN Personas
                   ON Estudiantes.Cod_Persona=Personas.Cod_Persona
              JOIN Rel_PerTel
                   ON Rel_PerTel.Cod_Persona=Personas.Cod_Persona
              JOIN Telefonos
                   ON Rel_PerTel.Cod_Telefono = Telefonos.Cod_Telefono 
              JOIN Rel_PerCor
                   ON Rel_PerCor.Cod_Persona=Personas.Cod_Persona
              JOIN Correos
                   ON Rel_PerCor.Cod_Correo = Correos.Cod_Correo
                   WHERE Nom_Usuario='$r'
                   " ;

                   $Egeneral = mysqli_query($conexion,$consultar);
    }

?>