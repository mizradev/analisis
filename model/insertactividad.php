
<?php
require_once '../model/conexion.php' ;



echo 'Cod_Matricula'
Cod_Actividad
Fec_Registro
Usr_Registro


Cod_Categoria
Categoria

Cod_Reporte
Cod_Matricula
Ina_Repoirte
Asi_Reporte
Fec_Registro
Usr_Registro


Rel_EstMal
Cod_Rel_EstMal
Cod_Estudiante
Cod_Matricula
Fec_Registro
Usr_Registro


session_start();
if (!empty($_SESSION['active'] )) //si existe esta sesion 
{
$r=$_SESSION['Nombre'];
 
$insert =$conexion->query("INSERT INTO Matriculas (?,)");
      
          $Rquery = mysqli_query($conexion,$consultar);
 }
 


?>