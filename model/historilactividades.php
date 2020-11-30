<?php
require_once '../model/conexion.php' ;

//$consultar = "SELECT * FROM Faltas WHERE Tip_Falta = 'L' ";
//$lquery = mysqli_query($conexion,$consultar);

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
  Categorias.Cod_Categoria, Categorias.Categoria
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
            where (Nom_Usuario='$r')
        ";      
      
          $allan = mysqli_query($conexion,$consultar);
 }
 


?>