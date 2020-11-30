<?php
require_once "conexion.php";
$Fecha = date("Y-m-d H:i:s");
$Usr = "Root--PRUEBA";

if (isset($_POST["ActFaltas"])) {
    $Cod_Falta = $_POST["Cod_Falta"];
    $TipoFaltaUda = $_POST["TipoFaltaUda"];
    $DescripcionFaltaUda = $_POST["DescripcionFaltaUda"];  

    $sql = "UPDATE `Faltas` SET 
                    `Tip_Falta`=:TipoFaltaUda,
                    `Des_Falta`=:DescripcionFaltaUda,
                    `Fec_Registro`=:Fecha,
                    `Usr_Registro`=:Usr
                     WHERE `Cod_Falta`=:Cod_Falta";
        $resultado = $conexion->prepare($sql);
        $resultado->execute(array(
            ":TipoFaltaUda" => $TipoFaltaUda,
            ":DescripcionFaltaUda" => $DescripcionFaltaUda,
            ":Fecha" => $Fecha,
            ":Usr" => $Usr,
            ":Cod_Falta" => $Cod_Falta
        ));
}

header("Location:../faltas.php");

?>