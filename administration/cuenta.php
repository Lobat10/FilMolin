<?php
include "../conexion/conexion.php";

$conexion = new mysqli($servidor, $usuario, $clave, "filmmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

session_name("login");
session_start();

$mensajeError = '';

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
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
	<div class="container">
	<h1>DATOS DE TU CUENTA PERSONAL</h1>
		<table class="table table-light">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Login</th>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col">Admin</th>
				</tr>
			</thead>
			
<?php
$resultado = $conexion->query("SELECT * FROM usuarios WHERE login='" . $_SESSION['usuario'] . "'");
if ($resultado->num_rows === 0) {
    $mensajeError = "<p>No existe ese usuario en la base de datos</p>";
}

$usuario = $resultado->fetch_assoc();
if ($usuario['admin'] == 1) {
    $admin = "si";
} else {
    $admin = "no";
}

echo "		<tbody>
				<tr>
					<th scope='row'>" . $usuario['login'] . "</th>
					<th scope='row'>" . $usuario['name'] . "</th>
					<th scope='row'>" . $usuario['description'] . "</th>
	                <th scope='row'>" . $admin . "</th>
				</tr>
			</tbody>";
?>		
		</table>
	</div>
	
	<?php
if ($mensajeError != "") {
    echo "<p>" . $mensajeError . "</p>";
}
?>
<div class="container">
	<a href=""><button type="button" class="btn btn-primary btn-lg btn-block"> Cerrar Sesion</button></a>
</div>
</body>
</html>