<?php
include "./conexion/conexion.php"; 

session_name('login');
session_start();

$conexion = new mysqli($servidor3, $usuario3, $clave3, "id5676343_filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
$cod = "";
$where = "";
if (! isset($_SESSION['login'])) {
    header('Location: ./login/login.php');
}
if (! isset($_GET['code']) || ! isset($_GET['hora']) || ! isset($_GET['sala'])) {
    header('Location: ./index.php');
} else {
    $cod = $_GET['code'];
    $sala = $_GET['sala'];
    $hora = $_GET['hora'];
    $where = " WHERE filmcode=" . $cod . "";
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
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
	integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9"
	crossorigin="anonymous">
<script
	src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script
	src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

<style type="text/css">
a#login {
	color: white;
}

a#login:hover {
	font-size: 150%;
	text-decoration: underline;
}
</style>

<title>FilMolin Cinema</title>

</head>

<body class="text-center">
	<header>
		<div class="collapse bg-dark" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-white">About</h4>
						<p class="text-muted">FilMolin Cinema, es el nuevo cine con un
							servicio unico que nos diferencia de otros empresas, ya que ahora
							no solo podras reservar tu entrada, si no que podras reservar las
							palomitas, las bebidas, las golosinas, etc. Sin tener que esperar
							colas en la tienda. Los creadores y dueños de este cine son Pablo
							Molina y Adrián Lobato.</p>
					</div>
					<div class="col-sm-4 offset-md-1 py-4">
						<h4 class="text-white">Contactanos</h4>
						<ul class="list-unstyled">
							<li><a href="#" class="text-white">Siguenos en Twitter </a><i
								style="font-size: 1em; color: lightblue" class="fab fa-twitter"></i></li>
							<li><a href="#" class="text-white">Siguenos en Facebook </a><i
								style="font-size: 1em; color: lightblue" class="fab fa-facebook"></i></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-dark bg-dark box-shadow"
			style="align-items: initial">
			<div class="container d-flex justify-content-between">
				<div class="container">
				<?php
    if (isset($_SESSION['login'])) {
        $login = $_SESSION['login'];
        if ($login == 1) {
            ?>
					<a href="./administration/cuenta.php" id="login"><span id="icon"
						style="float: right; width: 150px; clear: right;"
						class="glyphicon glyphicon-user"><?php echo $_SESSION['usuario']; ?></span></a>

		<?php }else{?>
					
					 <a href="./login/login.php" class="btn btn-light btn-lg active"
						role="button" aria-pressed="true"
						style="float: right; clear: right;">Inicia sesión</a>
					
					<?php
        }
    } else {
        ?>
    
    <a href="./login/login.php" class="btn btn-light btn-lg active"
						role="button" aria-pressed="true"
						style="float: right; clear: right;">Inicia sesión</a>
    <?php
    }
    ?>
    
				
				
				</div>
				<a href="#" class="navbar-brand d-flex align-items-center"> <img
					src="./img/icon.png" width="50px" height="50px">
					<h1 style="font-size: 100px">FilMolin Cinema &copy;</h1>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarHeader" aria-controls="navbarHeader"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>

	</header>
	<?php

$resultado = $conexion->query("SELECT * FROM peliculas" . $where);
if ($resultado->num_rows === 0) {
    $error = "<p>No hay obras en la base de datos</p>";
}
while ($pelicula = $resultado->fetch_assoc()) {
    echo "<div class='page-header'>";
    echo "<h1>" . $pelicula['filmname'] . "<small>&nbsp;Una película de " . $pelicula['director'] . "</small></h1>";
    echo "</div>";
    
    echo "	<div class='col-md-4'>
					<div class='card mb-4 box-shadow'>";
    echo "                  <img class='card-img-top' src='./img/" . $pelicula['image'] . ".jpg'>";
    echo "<div class='text-left'>";
    echo "<br><h4>Director: " . $pelicula['director'] . "</h4>";
    echo "<br><h4>País: " . $pelicula['pais'] . "</h4>";
    echo "<br><h4>Duración: " . $pelicula['duration'] . " min.</h4>";
    echo "<br><h4>Género: " . $pelicula['genero'] . "</h4>";
    echo "</div></div></div>";
    echo "<div class='col-md-4'>
	        <div class='card'>
	        <div class='card-header'><h3>Sala " . $sala . " - Sesión: " . $hora . "</h3></div>
	        <div class='card-body'>" . $pelicula['description'] . "</div>
	        <div class='card-footer'><a href='./seatbooking.php?sala=" . $sala . "&hora=" . $hora . "'><button type='button' class='btn btn-default btn-block'>Ver disponibilidad</button></div>
	        </div>";
    echo "<br><div>" . $pelicula['trailer'] . "</div>";
}

?>
</body>
</html>