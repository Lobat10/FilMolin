<?php
include "SalaGrande.php";
include "SalaPequeña.php";
include "SalaMediana.php";
include "Asiento.php";
include "Pelicula.php";
include "conexion/conexion.php";

$conexion = new mysqli($servidor, $usuario, $clave, "filmmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
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

<title>FilMolin Cinema</title>


</head>

<body>
	<header>
		<div class="collapse bg-dark" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-white">About</h4>
						<p class="text-muted">Somos los chavales, creando un cine</p>
					</div>
					<div class="col-sm-4 offset-md-1 py-4">
						<h4 class="text-white">Contactanos</h4>
						<ul class="list-unstyled">
							<li><a href="#" class="text-white">Siguenos en Twitter</a></li>
							<li><a href="#" class="text-white">Siguenos en Facebook</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-dark bg-dark box-shadow">
			<div class="container d-flex justify-content-between">
				<a href="#" class="navbar-brand d-flex align-items-center"> <img
					src="./img/icon.png" width="50px" height="50px">
					<h1 style="font-size: 100px">FilMolin Cinema</h1>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarHeader" aria-controls="navbarHeader"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
	</header>

	<main role="main">
	<?php
if (isset($_GET['oferta'])) {
    
    if ($_GET['oferta'] == 1) {
        ?>
        <section class="jumbotron text-center "
		style="background-image: url('./img/fondo.jpg'); background-repeat: no-repeat; background-position: center; background-color: white">
		<div class="container">
			<h1 class="jumbotron-heading" style="color: white">Cartelera FilMolin</h1>
			<p class="lead" style="color: white">A continuación os mostraremos la
				lista de peliculas disponibles en nuestro cine.</p>
			<p>
				<a href="./index.php?oferta=1" class="btn btn-primary my-2">Oferta 1</a>
				<a href="./index.php?oferta=2" class="btn btn-primary my-2">Oferta 2</a>
			</p>
		</div>
	</section>
        <?php
    } else {
        ?><section class="jumbotron text-center "
		style="background-image: url('./img/fondo2.jpg'); background-repeat: no-repeat; background-position: center; background-color: white">
		<div class="container">
			<h1 class="jumbotron-heading" style="color: white">Cartelera FilMolin</h1>
			<p class="lead" style="color: white">A continuación os mostraremos la
				lista de peliculas disponibles en nuestro cine.</p>
			<p>
				<a href="./index.php?oferta=1" class="btn btn-primary my-2">Oferta 1</a>
				<a href="./index.php?oferta=2" class="btn btn-primary my-2">Oferta 2</a>
			</p>
		</div>
	</section><?php
    }
} else {
    ?>
	<section class="jumbotron text-center "
		style="background-image: url('./img/fondo2.jpg'); background-repeat: no-repeat; background-position: center; background-color: white">
		<div class="container">
			<h1 class="jumbotron-heading" style="color: white">Cartelera FilMolin</h1>
			<p class="lead" style="color: white">A continuación os mostraremos la
				lista de peliculas disponibles en nuestro cine.</p>
			<p>
				<a href="./index.php?oferta=1" class="btn btn-primary my-2">Oferta 1</a>
				<a href="./index.php?oferta=2" class="btn btn-primary my-2">Oferta 2</a>
			</p>
		</div>
	</section>
<?php }?>
	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
<?php
$error = "";
$resultado = $conexion->query("SELECT * FROM peliculas");
if ($resultado->num_rows === 0)
    $error = "<p>No hay obras en la base de datos</p>";

while ($pelicula = $resultado->fetch_assoc()) {
    
    echo "	<div class='col-md-4'>
					<div class='card mb-4 box-shadow'>";
    echo "<img class='card-img-top' src='./img/" . $pelicula['image'] . "'>";
    echo "<div class='card-body'>";
    echo "	<h1>" . $pelicula['filmname'] . "</h1>";
    echo "		<p class='card-text'>" . $pelicula['description'] . "</p>
							<div class='d-flex justify-content-between align-items-center'>
								<div class='btn-group'>";
    echo "									<button type='button' class='btn btn-sm btn-outline-secondary'>Hora comienzo: " . $pelicula['timetable'] . "</button>";
    echo "	<button type='button' class='btn btn-sm btn-outline-secondary'>Sala nº" . $pelicula['roomcode'] . " </button>
								</div>";
    echo "	<small class='text-muted'>" . $pelicula['duration'] . " mins. </small>
							</div>
						</div>
					</div>
				</div>";
}
?>
			</div>
		</div>
	</div>
	</main>
	<footer class="text-muted">
		<div class="container">
			<p class="float-right">
				<a href="#">Back to top</a>
			</p>
			<p>Este es el pie de pagina que huele a roquefortttt!</p>
		</div>
	</footer>
</body>
</html>

