<?php

   include_once "conexion.php";

   $Fecha = date("Y-m-d H:i:s");
   $Usr = "Root--PRUEBA";

   if (isset($_POST["ActualiHoras"])) {
      $Codigo_Horas = $_POST["Codigo_Horas"];
      $HrsRealizadas = $_POST["HrsRealizadas"]; 
   
      $sql = "UPDATE `HHVOAES` SET
      `Hor_Realizada`= :HrsRealizadas,
      `Hor_Acumulada`= `Hor_Acumulada` + :HrsRealizadas ,
      `Fecha_Registro`= :Fecha,
      `Usr_Registro`= :Usr 
      WHERE `Cod_Hhvoae`= :Codigo_Horas";

    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(
     ":HrsRealizadas" => $HrsRealizadas,
     ":Fecha" => $Fecha,
     ":Usr" => $Usr,
     ":Codigo_Horas" => $Codigo_Horas
      ));
       
   }

   header("Location:../HrsVOAE.php");


?>