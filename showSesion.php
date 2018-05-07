<?php
include "./conexion/conexion.php";

session_name('login');
session_start();

$conexion = new mysqli($servidor, $usuario, $clave, "filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
if(!isset($_SESSION['login'])){
    header('Location: ./login/login.php');
}
if (!isset($_GET['code'])){
    header('Location: ./index.php');
}
?>