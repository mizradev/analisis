<?php

session_start();	
if (empty($_SESSION['active'])) //si no  existe esta sesion 
{     // al quitar e ! antes de empty esotoy dicendo si no existe la variable session me redirecciona al login
    header('location: ../ ');
}
    ?>