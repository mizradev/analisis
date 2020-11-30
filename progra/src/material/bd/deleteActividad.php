<?php
  include_once "conexion.php";

  if (isset($_GET["CodigoActividad"])) {
    $CodigoActividad = $_GET["CodigoActividad"];

    $conexion->query("DELETE FROM `Actividades` WHERE `Cod_Actividad`=$CodigoActividad");
    $conexion->query("DELETE FROM `Rel_ActDoc` WHERE `Cod_Actividad`=$CodigoActividad");
};

header("Location:../actividades.php");
?>