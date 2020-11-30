<?php
require_once '../model/conexion.php' ;

//$consultar = "SELECT * FROM Faltas where Tip_Falta = 'M' ";
//$mquery = mysqli_query($conexion,$consultar);


session_start();
if (!empty($_SESSION['active'] )) //si existe esta sesion 
{
$r=$_SESSION['Nombre'];
 
$consultar = " SELECT Usuarios.Cod_Usuario, Usuarios.Nom_Usuario,
             Rel_EstUsr.Cod_Usuario, Rel_EstUsr.Cod_Estudiante,Rel_EstUsr.Cod_Rel_EstUsr,
             Estudiantes.Cod_Estudiante,Estudiantes.Num_Cuenta, Estudiantes.Cod_Persona,
             Rel_EstFal.Cod_Estudiante, Rel_EstFal.Cod_Falta, Rel_EstFal.Cod_Rel_EstFal,
             Faltas.Tip_Falta, Faltas.Des_Falta, Faltas.Cod_Falta, Faltas.Fec_Registro
          FROM  Usuarios JOIN Rel_EstUsr
              ON  Rel_EstUsr.Cod_Usuario = Usuarios.Cod_Usuario  
          JOIN Estudiantes
              ON Rel_EstUsr.Cod_Estudiante=Estudiantes.Cod_Estudiante
          JOIN Rel_EstFal
              ON Rel_EstFal.Cod_Estudiante = Estudiantes.Cod_Estudiante 
          JOIN Faltas
              ON Rel_EstFal.Cod_Falta=Faltas.Cod_Falta
        WHERE (Tip_Falta='M') AND (Nom_Usuario='$r')
       ";
          $mquery = mysqli_query($conexion,$consultar);
 }

?>