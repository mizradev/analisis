<?php

define('servidor', '142.44.161.115');
define('nombre_bd', 'P4E2');
define('usuario_bd', 'P4E2');
define('password_bd', 'H##nduras2020E2CV');
$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
try {
    $conexion = new PDO("mysql:host=" . servidor . "" . ";dbname=" . nombre_bd, usuario_bd, password_bd, $opciones);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conexion;
} catch (PDOException $e) {
    die("El error de la Conexión es : " . $e->getMessage());
    echo "en la línea" . $e->getLine();
}
