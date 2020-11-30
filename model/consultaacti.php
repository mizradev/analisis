<?php
require_once '../model/conexion.php' ;

$consultar = "SELECT Actividades.Cod_Actividad, Actividades.Nom_Actividad, 
                 Actividades.Can_Horas, Actividades.Des_Actividad, Actividades.Fec_Actividad, 
                 Actividades.Per_Actividad, Actividades.Foto_Actividad, Actividades.Fec_Registro, 
                 Categorias.Cod_Categoria, Categorias.Categoria

             FROM Actividades
               JOIN Categorias
             ON  Categorias.Cod_Categoria = Actividades.Cod_Categoria   
" ;
$Danelia = mysqli_query($conexion,$consultar);

?>