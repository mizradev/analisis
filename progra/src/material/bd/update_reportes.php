<?php
require_once "conexion.php";
$Fecha = date("Y-m-d H:i:s");
$Usr = "Root--PRUEBA";

if (isset($_POST["ActReportes"])) {
    $Cod_Reporte = $_POST["Cod_Reporte"];
    $Inas_Reporte = $_POST["Inas_Reporte"];  
    $Asis_Reporte = $_POST["Asis_Reporte"];
    

    $sql = "UPDATE `Reportes` SET 
    `Ina_Reporte`=:Inas_Reporte,
    `Asi_Reporte`=:Asis_Reporte,
    `Fec_Registro`=:Fecha,
    `Usr_Registro`=:Usr
     WHERE `Cod_Reporte`=:Cod_Reporte";

        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(
            ":Inas_Reporte" => $Inas_Reporte,
            ":Asis_Reporte" => $Asis_Reporte,
            ":Fecha" => $Fecha,
            ":Usr" => $Usr,
            ":Cod_Reporte" => $Cod_Reporte
        ));
}

header("Location:../reportes2.php");

?>