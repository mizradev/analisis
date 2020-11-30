<?php
require_once "conexion.php";

if (isset($_GET["Cod_Falta"])) {
    $Borrar_Faltas = $_GET["Cod_Falta"];

    $conexion->query("DELETE  FROM `Faltas` WHERE `Cod_Falta`=$Borrar_Faltas");
    $conexion->query("DELETE FROM `Rel_EstFal` WHERE `Cod_Falta`=$Borrar_Faltas");
};

header("Location:../faltas.php");

?>