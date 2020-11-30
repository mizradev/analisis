
<?php

   include_once "conexion.php";

   $Cod_Estudiante = $_POST["EstudianteHrsvoae"];
   $Realizadas = $_POST["HrsRealizadas"];
   $Acumuladas = $_POST["HrsAcumuladas"];

   $Insert_Horas= "INSERT INTO `HHVOAES`(`Hor_Realizada`, `Hor_Acumulada`, `Fecha_Registro`, `Usr_Registro`) 
                   VALUES ($Realizadas, $Acumuladas, NOW(),'Root-PRUEBA');
                   SELECT @COD_HHVOAES:=MAX(Cod_Hhvoae) FROM `HHVOAES`; INSERT INTO `Rel_EstHhv`
                          (`Cod_Estudiante`, `Cod_Hhvoae`, `Fecha_Registro`, `Usr_Registro`) 
                   VALUES ($Cod_Estudiante,@COD_HHVOAES,NOW(), 'Root-PRUEBA' );";
    
    $resultado = $conexion->prepare($Insert_Horas);
    $resultado->execute();

    header("Location:../HrsVOAE.php");

?>



