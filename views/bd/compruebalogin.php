<?php
include "conexion.php";
$consulta = "SELECT * FROM `Usuarios` WHERE Nom_Usuario=:usuario AND Pas_Usuario=:password";
$resultado = $conexion->prepare($consulta);

$usuario = htmlentities(addslashes($_POST['usuario']));
$password = htmlentities(addslashes($_POST['password']));
$pass = md5($password);
$resultado->bindValue(":usuario", $usuario);
$resultado->bindValue(":password", $pass);
$resultado->execute();
$numero_registro = $resultado->rowCount();
if ($numero_registro != 0) {
    session_start();
    $_SESSION["usuario"] = $_POST["usuario"];
    header("location:../index.php");
} else {
    echo "no";
    header("location:../login.php");
}
