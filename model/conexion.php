<?php
error_reporting(0);
//conexion buena
//$servername= "142.44.161.115";
//$username= "P4E2";
//$password= 'H##nduras2020E2CV';
//$database= "P4E2";
$servername= "localhost";
$username= "root";
$password= '';
$database= "nicole";
$conexion = new mysqli();

$conexion->connect($servername,$username,$password,$database);
if ($conexion->connect_error){
    die("conexion fallida: ".$conexion->connect_error);
}else
//echo " nube VOAE que excelente trabajo para conectarse, se ha conectado exitosamente.    "
?>

