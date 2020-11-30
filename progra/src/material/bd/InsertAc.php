<?php

  include_once "conexion.php";

   $Nom_Actividad = $_POST["NombreAct"];
   $Des_Actividad = $_POST["DescripccionAct"];
   $Tipo_Actividad = $_POST["TipoAct"];
   $Can_Horas = $_POST["HorasAct"];
   $Fecha_Acti = $_POST["FechaAct"];
   $Periodo_Acti = $_POST["PeriodoAct"];
   $Foto_Acti = "actividad-defaul.jpg";
   $Docente_Acti = $_POST["Doc_Acti"]; 
   $Fecha = date("Y-m-d H:i:s");
   $Usr = "Root--PRUEBA";

    $In_Actividad = "INSERT INTO `Actividades`
    (`Cod_Categoria`, 
    `Nom_Actividad`, 
    `Can_Horas`, 
    `Des_Actividad`, 
    `Fec_Actividad`, 
    `Per_Actividad`, 
    `Foto_Actividad`, 
    `Fec_Registro`, 
    `Usr_Registro`) 
    VALUES (:Tipo_Actividad, 
    :Nom_Actividad,
    :Can_Horas,
    :Des_Actividad,
    :Fecha_Acti,
    :Periodo_Acti,
    :Foto_Acti,
    :Fecha,
    :Usr);
    SELECT @COD_ACTIVIDAD:=MAX(Cod_Actividad) FROM `Actividades`;
    INSERT INTO `Rel_ActDoc`(
      `Cod_Actividad`, 
      `Cod_Docente`, 
      `Fec_Registro`, 
      `Usr_Registro`) 
      VALUES (@COD_ACTIVIDAD, 
      :Docente_Acti, 
      :Fecha, 
      :Usr);
    ";

      

  $resultado = $conexion->prepare($In_Actividad);
  $resultado->execute(array(
    ":Tipo_Actividad" =>$Tipo_Actividad, 
  ":Nom_Actividad" =>$Nom_Actividad, 
  ":Can_Horas" =>$Can_Horas, 
  ":Des_Actividad" =>$Des_Actividad, 
  ":Fecha_Acti" =>$Fecha_Acti, 
  ":Periodo_Acti" =>$Periodo_Acti, 
  ":Foto_Acti" =>$Foto_Acti, 
  ":Docente_Acti" =>$Docente_Acti, 
  ":Fecha" =>$Fecha, 
  ":Usr" =>$Usr));

 header("Location:../actividades.php");
  
?>