<?php
include "./conexion/conexion.php";

session_name('login');
session_start();

$conexion = new mysqli($servidor, $usuario, $clave, "filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

$cod="";
$where="";

if(!isset($_SESSION['login'])){
    header('Location: ./login/login.php');
}
if (!isset($_GET['code'])){
    header('Location: ./index.php');
}else{
    $cod=$_GET['code'];
    $where=" WHERE filmcode=".$cod."";
}

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
<link rel="icon" href="./img/favicon.ico" type="image/x-icon">
<link rel='stylesheet'
	href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
	integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
	crossorigin='anonymous'>
<link rel='stylesheet'
	href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<script
	src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script
	src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

<style type="text/css">
</style>

<title>FilMolin Cinema</title>

</head>

<body class="text-center">

	<?php 
	
	$resultado = $conexion->query("SELECT * FROM peliculas".$where);
	if ($resultado->num_rows === 0){
	    $error = "<p>No hay obras en la base de datos</p>";
	}
	    while ($pelicula = $resultado->fetch_assoc()) {
	        echo "<div class='page-header'>";
	        echo "<h1>".$pelicula['filmname']."<small>&nbsp;Una película de ".$pelicula['director']."</small></h1>";
	        echo "</div>";
	        
	        echo "	<div class='col-md-4'>
					<div class='card mb-4 box-shadow'>";
	        echo "                  <img class='card-img-top' src='./img/" . $pelicula['image'] . ".jpg'>";
	        echo "<div class='text-left'>";
	        echo "<h4>Director: ".$pelicula['director']."</h4>"; 
	        //Seguirá con datos, mañana lo hago.
	    }
	
	?>
</body>
</html>