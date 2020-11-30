<?php
  include_once "conexion.php";

  $Actividad_Reporte = $_POST["ActividadReporte"];
  $Inasistencias = $_POST["Inasistencias"];
  $Asistencias = $_POST["Asistencias"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_Reporte = "INSERT INTO `Reportes`
     (
    `Cod_Actividad`,
     `Ina_Reporte`, 
     `Asi_Reporte`,
    `Fec_Registro`, 
    `Usr_Registro`)
      VALUES (:Actividad_Reporte,
      :Inasistencias,
      :Asistencias,
      :Fecha,
      :Usr); ";

    $resultado = $conexion->prepare($Ins_Reporte);
$resultado->execute(array(
":Actividad_Reporte" =>$Actividad_Reporte,
":Inasistencias"=>$Inasistencias,
":Asistencias"=>$Asistencias,
":Fecha"=>$Fecha, 
"Usr"=> $Usr));

    header("Location:../reportes2.php");

?>