<?php
  include_once "conexion.php";
    
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

   if (isset($_POST["Actualir_Ac"])) {
       $Codigo_Activi = $_POST["Codigo_Activi"];
       $NombreActUda = $_POST["NombreActUda"]; 
       $DescripccionActUda = $_POST["DescripccionActUda"];
       $TipoActUda = $_POST["TipoActUda"];
       $HorasActUda = $_POST["HorasActUda"];
       $FechaActUda = $_POST["FechaActUda"];
       $PeriodoActUda = $_POST["PeriodoActUda"];

       $sql = "UPDATE `Actividades` SET 
       `Cod_Categoria`=:TipoActUda,
       `Nom_Actividad`=:NombreActUda,
       `Can_Horas`=:HorasActUda,
       `Des_Actividad`=:DescripccionActUda,
       `Fec_Actividad`=:FechaActUda,
       `Per_Actividad`=:PeriodoActUda,
       `Fec_Registro`=:Fecha,
       `Usr_Registro`=:Usr
        WHERE `Cod_Actividad`=:Codigo_Activi";

     $resultado = $conexion->prepare($sql);
     $resultado->execute(array(
    ":Codigo_Activi" => $Codigo_Activi,
    ":NombreActUda" => $NombreActUda,
    ":DescripccionActUda" => $DescripccionActUda,
    ":TipoActUda" => $TipoActUda,
    ":HorasActUda" => $HorasActUda,
    ":FechaActUda" => $FechaActUda,
    ":PeriodoActUda" => $PeriodoActUda,
    ":Fecha" => $Fecha,
    ":Usr" => $Usr
     ));

   }

   header("Location:../actividades.php");

?>