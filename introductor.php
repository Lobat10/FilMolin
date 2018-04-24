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

<style type="text/css">
#introductor {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	position: fixed;
	z-index: -1;
}
</style>

<title>FilMolin Cinema</title>


</head>
<body>
	<img src="./img/introductor.jpg" id="introductor" />

	<div class="container">
		<form action="./introductor.php" method="post">
			<h1>Elige el tipo de objeto a introducir:</h1>
			<div class="form-group">
				<label class="form-check-label" for="objeto">Pelicula</label> <input
					class="form-check-input" type="radio" name="objeto" id="objeto"
					value="1" checked> <br> <label class="form-check-label"
					for="objeto">Sesion</label> <input class="form-check-input"
					type="radio" name="objeto" id="objeto" value="2"><br> <label
					class="form-check-label" for="objeto">Sala</label> <input
					class="form-check-input" type="radio" name="objeto" id="objeto"
					value="3"><br> <input type="submit" id='enviar'
					class="form-group btn-secondary" />
			</div>
		</form>
	</div>
<?php
$object = 0;
if (isset($_POST['objeto'])) {
    
    $object = $_POST['objeto'];
    if ($object == 1) {
        ?>        
        <div class="container">
		<form action="./introductor.php" method="post">
			<h1>Rellena todos los campos del objeto PELICULA</h1>
			<div class="form-group">
				<label class="form-group-label" for="codigo">Filmcode</label> <input
					class="form-group-input" type="number" name="filmcode" id="codigo">
				<br> <label class="form-group-label" for="nombre">Filmname</label> <input
					class="form-group-input" type="text" name="filmname" id="nombre"><br>
				<label class="form-group-label" for="duracion">Duration</label> <input
					class="form-group-input" type="number" name="duration"
					id="duracion"><br> <label class="form-group-label"
					for="descripcion">Description</label> <input
					class="form-group-input" type="text" name="description"
					id="descripcion"><br> <label class="form-group-label" for="imagen">Image(sin
					extension .jpg)</label> <input class="form-group-input" type="text"
					name="image" id="imagen"><br> <label class="form-group-label"
					for="codigosala">Roomcode</label> <input class="form-group-input"
					type="number" name="roomcode" id="codigosala"><br> <input
					type="submit" id='enviar' name="enviarP"
					class="form-control btn btn-info" />
			</div>
		</form>
	</div>
 <?php
    } else if ($object == 2) {
        ?>  
 		<div class="container">
		<form action="./introductor.php" method="post">
			<h1>Rellena todos los campos del objeto SESION</h1>
			<div class="form-group">
				<label class="form-group-label" for="codigo">Filmcode</label> <input
					class="form-group-input" type="number" name="filmcode" id="codigo">
				<br> <label class="form-group-label" for="codigosala">Roomcode</label>
				<input class="form-group-input" type="number" name="roomcode"
					id="codigosala"><br> <label class="form-group-label" for="hora">Timetable</label>
				<input class="form-group-input" type="time" name="timetable"
					id="hora"><br> <label class="form-group-label" for="fecha">Date(Y-m-d)</label>
				<input class="form-group-input" type="text" name="image" id="fecha"><br>
				<input type="submit" id='enviar' name="enviarSes"
					class="form-control btn btn-warning" />
			</div>
		</form>
	</div>
        
  <?php
    } else if ($object == 3) {
        ?>
		<div class="container">
		<form action="./introductor.php" method="post">
			<h1>Rellena todos los campos del objeto SALA</h1>
			<div class="form-group">
				<label class="form-group-label" for="codigosala">Roomcode</label> <input
					class="form-group-input" type="number" name="roomcode"
					id="codigosala"><br> <label class="form-group-label"
					for="capacidad">Capacity</label> <input class="form-group-input"
					type="number" name="capacity" id="codigo"> <br> <label
					class="form-group-label" for="imagen">Image</label> <input
					class="form-group-input" type="text" name="image" id="imagen"><br>
				<input type="submit" id='enviar' name="enviarS"
					class="form-control btn btn-danger" />
			</div>
		</form>
	</div>
<?php
    }
}

?>
</body>
</html>