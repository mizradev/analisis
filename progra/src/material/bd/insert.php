<?php
  include_once "conexion.php";

  $Cod_Estudiante = $_POST["EstudianteFalta"];
  $Tipo_Falta = $_POST["TipoFalta"];
  $Descripcion_Falta = $_POST["DescripcionFalta"];
  $Fecha = date("Y-m-d H:i:s");
  $Usr = "Root--PRUEBA";

     $Ins_Faltas = "INSERT INTO `Faltas`(`Tip_Falta`, `Des_Falta`, `Fec_Registro`, `Usr_Registro`)
      VALUES (:Tipo_Falta, :Descripcion_Falta, :Fecha,:Usr);
     SELECT @COD_FALTAS:=MAX(Cod_Falta) FROM `Faltas`; INSERT INTO `Rel_EstFal`
     (`Cod_Estudiante`, `Cod_Falta`, `Fecha_Registro`, `Usr_Registro`) 
     VALUES (:Cod_Estudiante,@COD_FALTAS,:Fecha,:Usr);";



    $resultado = $conexion->prepare($Ins_Faltas);
$resultado->execute(array(":Tipo_Falta" =>$Tipo_Falta,":Descripcion_Falta"=>$Descripcion_Falta,":Fecha"=>$Fecha, "Usr"=> $Usr,":Cod_Estudiante"=>$Cod_Estudiante));

    header("Location:../faltas.php");

?>
