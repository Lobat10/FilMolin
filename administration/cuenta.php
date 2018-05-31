<?php
include "../conexion/conexion.php";

$conexion = new mysqli($servidor3, $usuario3, $clave3, "id5676343_filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

session_name("login");
session_start();

$mensajeError = '';

?>
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

<title>FilMolin Cinema</title>


</head>

<body>
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
					<a href="./cuenta.php"><span id="icon"
						style="float: right; width: 150px; clear: right;"
						class="glyphicon glyphicon-user"><?php echo $_SESSION['usuario']; ?></span></a>

		<?php }else{?>
					
					 <a href="../login/login.php" class="btn btn-primary btn-lg active"
						role="button" aria-pressed="true"
						style="float: right; clear: right;">Inicia sesión</a>
					
					<?php
        }
    } else {
        ?>
    
    <a href="../login/login.php" class="btn btn-primary btn-lg active"
						role="button" aria-pressed="true"
						style="float: right; clear: right;">Inicia sesión</a>
    <?php
    }
    ?>
    
				
				
				</div>
				<a href="../index.php"
					class="navbar-brand d-flex align-items-center"> <img
					src="../img/icon.png" width="50px" height="50px">
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
	<div class="container text-center">
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
					<th scope='row'>" . $usuario['nombre'] . "</th>
					<th scope='row'>" . $usuario['descripcion'] . "</th>";
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
    
    $numeroEntradas = $_SESSION['entradas'];
    $price = $_SESSION['precio']?>
<div class="container jumbotron">
		<table class="table table-bordered">
			<h1>Carrito productos/entradas</h1>
			<thead>
				<tr>
					<th style="text-align: center;" scope="col">#</th>
					<th style="text-align: center;" scope="col">Producto</th>
					<th style="text-align: center;" scope="col">Precio</th>
				</tr>
			</thead>
			<tbody>
<?php
    $cont = 1;
    
    $total = ($price * $numeroEntradas);
    
    echo "	<tr>
				<th style='text-align:center;' scope='row'>" . $cont . "</th>
				<td style='text-align:center;'>" . $numeroEntradas . " entrada/s</td>
				<td style='text-align:right;'>" . $total . "€</td>

			</tr>";
    if (isset($_POST['enviar'])) {
        $resultado2 = $conexion->query("SELECT * FROM productos");
        while ($product = $resultado2->fetch_assoc()) {
            $actual = $product['id'];
            if (isset($_POST[$actual])) {
                $cantidad = $_POST[$actual];
                if ($cantidad > 0) {
                    $cont += 1;
                    echo "	<tr>
				            <th style='text-align:center;' scope='row'>" . $cont . "</th>
				            <td style='text-align:center;'>" . $cantidad . " x " . $product['nombre'] . "</td>
				            <td style='text-align:right;'>" . $product['precio'] * $cantidad . "€</td>
		                </tr>";
                    $total += ($product['precio'] * $cantidad);
                }
            }
        }
    }
    ?>
		</tbody>
			<tfoot>
				<tr>
					<th scope="row" colspan="2"
						style="text-align: right; border-left: 0px; border-bottom: 0px;">TOTAL:</th>
					<td style="text-align: right;"><?php echo $total ?>€</td>
				</tr>
			</tfoot>
		</table>
	</div>
<?php }?>
<div class="container">
		<div class="text-center">
			<div class="btn-group btn-group-vertical">
				<h1>Operaciones</h1>
				<a href="https://www.paypal.com/es/home"><button type="button"
						class="btn btn-info">Pagar con Paypal</button></a> <a
					href="../logout/logout.php"><button type="button"
						class="btn btn-warning">Cerrar Sesion</button></a> <a
					href="../logout/logout.php"><button type="button"
						class="btn btn-danger">Baja Cuenta</button></a>
			</div>
		</div>
	</div>
	<p></p>
</body>
</html>