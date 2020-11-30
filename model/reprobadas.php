<?php
require_once '../model/conexion.php' ;



session_start();
if (!empty($_SESSION['active'] )) //si existe esta sesion 
{
$r=$_SESSION['Nombre'];
 
$consultar = " SELECT Usuarios.Cod_Usuario, Rel_EstUsr.Cod_Usuario, Rel_EstUsr.Cod_Estudiante,
                      Estudiantes.Cod_Estudiante, Rel_EstMat.Cod_Estudiante, Rel_EstMat.Cod_Matricula,
                      Matriculas.Cod_Matricula, Matriculas.Cod_Actividad, Actividades.Cod_Actividad,
                      Actividades.Cod_Categoria, Actividades.Nom_Actividad, Actividades.Can_Horas,
                      Actividades.Can_Horas, Actividades.Des_Actividad, Actividades.Fec_Actividad,
                       Actividades.Per_Actividad, Actividades.Foto_Actividad, Actividades.Fec_Registro,
                        Categorias.Cod_Categoria, Categorias.Categoria, Reportes.Ina_Reporte, Reportes.Asi_Reporte

            FROM Usuarios
            JOIN Rel_EstUsr 
               ON Usuarios.Cod_Usuario=Rel_EstUsr.Cod_Usuario
            JOIN  Estudiantes
               ON Rel_EstUsr.Cod_Estudiante=Estudiantes.Cod_Estudiante
            JOIN Rel_EstMat
               ON Estudiantes.Cod_Estudiante=Rel_EstMat.Cod_Estudiante
            JOIN Matriculas
               ON Rel_EstMat.Cod_Matricula= Matriculas.Cod_Matricula
            JOIN Actividades
               ON Matriculas.Cod_Actividad=Actividades.Cod_Actividad
            JOIN Categorias
               ON Actividades.Cod_Categoria=Categorias.Cod_Categoria 
            Join Reportes
               ON Matriculas.Cod_Matricula = Reportes.Cod_Matricula
            
            where (Nom_Usuario='$r') AND (Ina_Reporte=1)
        ";      
      
          $Aquery = mysqli_query($conexion,$consultar);
 }