<?php
  include_once "conexion.php";

  if (isset($_GET["CodigoHoras"])) {
    $CodigoHoras = $_GET["CodigoHoras"];

    $conexion->query("DELETE FROM `HHVOAES` WHERE `Cod_Hhvoae`=$CodigoHoras");
    $conexion->query("DELETE FROM `Rel_EstHhv` WHERE `Cod_Hhvoae`=$CodigoHoras");
};

header("Location:../HrsVOAE.php");
?>

