<?php
require_once "conexion.php";

if (isset($_GET["Cod_Reporte"])) {
    $Borrar_Faltas = $_GET["Cod_Reporte"];

    $conexion->query("DELETE  FROM `Reportes` WHERE `Cod_Reporte`=$Borrar_Faltas");
    
};

header("Location:../reportes2.php");


?>