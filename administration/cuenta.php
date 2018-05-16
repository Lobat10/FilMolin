<?php
include "../conexion/conexion.php";

$conexion = new mysqli($servidor, $usuario, $clave, "filmolin");
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
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
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
<?php if($_SESSION['admin']){ ?>					
					<th scope="col">Admin</th>
		<?php }?>
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
					<th scope='row'>" . $usuario['description'] . "</th>";
if ($_SESSION['admin']) {
    echo "<th scope='row'>" . $admin . "</th>";
}
echo "				</tr>
			</tbody>";
?>		
		</table>
	</div>
	
	<?php
if ($mensajeError != "") {
    echo "<p>" . $mensajeError . "</p>";
}
?>
<?php if($_SESSION['admin']){?>

<div class="btn-group btn-group-vertical">
		<h1>Introducir datos a la BBDD</h1>
		<div class="container">
			<a href="./addFilmToBBDD.php" class="btn btn-primary">Pelicula</a> <a
				href="./addRoomToBBDD.php" class="btn btn-primary">Sala</a> <a
				href="./addSesionToBBDD.php" class="btn btn-primary">Sesion</a>
		</div>
	</div>
<?php
}

if (isset($_SESSION['precio'])) {
    
    $array = $_SESSION['entradas'];
    $price = $_SESSION['precio']?>

<table class="table table-bordered table-responsive">
		<h1>Carrito productos/entradas</h1>
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Producto</th>
				<th scope="col">Precio</th>
			</tr>
		</thead>
		<tbody>
<?php
    $cont = 1;
    
    $total = ($price * count($array));
    
	echo "		<tr>
				<th scope='row'>".$cont."</th>
				<td>".count($array)." entrada/s</td>
				<td>".$total."</td>

			</tr>";
    
    ?>
		</tbody>
		<tfoot>
			<tr>
				<th scope="row" colspan="2">TOTAL:</th>
				<td></td>
			</tr>
		</tfoot>
	</table>
<?php }?>
<div class="btn-group btn-group-vertical">
		<div class="container">
			<h1>Operaciones</h1>
			<a href="../logout/logout.php"><button type="button"
					class="btn btn-warning">Cerrar Sesion</button></a> <a
				href="../logout/logout.php"><button type="button"
					class="btn btn-danger">Baja Cuenta</button></a>
		</div>
	</div>
</body>
</html>