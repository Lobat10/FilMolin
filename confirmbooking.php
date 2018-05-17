<?php
include "./conexion/conexion.php";

session_name('login');
session_start();

if (! isset($_SESSION['login'])) {
    header('Location: ./login/login.php');
}

$conexion = new mysqli($servidor3, $usuario3, $clave3, "id5676343_filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

$cod = "";
$where = "";
$sala = $_GET['sala'];

$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];

$resultado = $conexion->query("SELECT * FROM salas WHERE roomcode=" . $sala);
if ($resultado->num_rows === 0) {
    $error = "<p>No hay obras en la base de datos</p>";
}
$room = $resultado->fetch_assoc();

if ($room['capacity'] == 100) {
    $tabla = "asientosgrande";
    $precioXentrada = $room['price'];
} else if ($room['capacity'] == 80) {
    $tabla = "asientosmediana";
    $precioXentrada = $room['price'];
} else {
    $tabla = "asientospequeña";
    $precioXentrada = $room['price'];
}
if (isset($_POST['enviar'])) {
    
    if (isset($_POST['butacas'])) {
        // setcookie("reservando",count($butacas),time()+(600),"/"); POR SI ACASO AQUI ESTA PARA DEJAR LIBRE EL ASIENTO A LOS 10 MINUTOS
        $butacas = $_POST['butacas'];
        $entradas = count($butacas);
        $cont = 0;
        $_SESSION['precio'] = $precioXentrada;
        $_SESSION['entradas'] = $entradas;
        
        foreach ($butacas as $i) {
            $result = $conexion->query("UPDATE " . $tabla . " SET taken=1 WHERE seatcode=" . $i);
            $arr[] = $i;
        }
        
        // header("Location: ./confirmBooking.php?sala=" . $sala . "&entradas=" . count($butacas));
    }
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
							<li><a href="#" class="text-white">Siguenos en Twitter</a></li>
							<li><a href="#" class="text-white">Siguenos en Facebook</a></li>
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
					<a href="./administration/cuenta.php"><span id="icon"
						style="float: right; width: 150px; clear: right;"
						class="glyphicon glyphicon-user"><?php echo $_SESSION['usuario']; ?></span></a>

		<?php }else{?>
					
					 <a href="./login/login.php" class="btn btn-primary btn-lg active"
						role="button" aria-pressed="true"
						style="float: right; clear: right;">Inicia sesión</a>
					
					<?php
        }
    } else {
        ?>
    
    <a href="./login/login.php" class="btn btn-primary btn-lg active"
						role="button" aria-pressed="true"
						style="float: right; clear: right;">Inicia sesión</a>
    <?php
    }
    ?>
    
				
				
				</div>
				<a href="./index.php" class="navbar-brand d-flex align-items-center">
					<img src="./img/icon.png" width="50px" height="50px">
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
	<div class="container jumbotron">

        <?php
        if (isset($_POST['butacas'])) {
            echo "<p>El precio de la entrada de esta sala es : " . $precioXentrada . "€</p><br>";
            echo "<p>Usted quiere reservar " . $entradas . " entradas, el precio total es de : " . ($precioXentrada * $entradas) . "€</p><br>";
        }
        ?>
	

</div>
	<div class="container">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="./img/combo3.jpg" style="width: auto;"> <a
						href="./shop.php"><div class="carousel-caption"
							style="color: black;">
							<h3>SERVICIO UNICO EN CUALQUIER CINE &darr;</h3>
							<p>Reserva tus palomitas, bebidas o chucherias y ahorrate las
								colas de espera!</p>
							<br>
							<p>Pincha aquí!</p>
						</div></a>
				</div>

				<div class="item">
					<img src="./img/combo3.jpg" style="width: auto;"> <a
						href="./shop.php"><div class="carousel-caption"
							style="color: black;">
							<h3>SERVICIO UNICO EN CUALQUIER CINE &darr;</h3>
							<p>Reserva tus palomitas, bebidas o chucherias y ahorrate las
								colas de espera!</p>
							<br>
							<p>Pincha aquí!</p>

						</div></a>
				</div>

				<div class="item">
					<img src="./img/combo3.jpg" style="width: auto;"> <a
						href="./shop.php"><div class="carousel-caption"
							style="color: black;">
							<h3>SERVICIO UNICO EN CUALQUIER CINE &darr;</h3>
							<p>Reserva tus palomitas, bebidas o chucherias y ahorrate las
								colas de espera!</p>
							<br>
							<p>Pincha aquí!</p>
						</div></a>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span> <span
				class="sr-only">Previous</span>
			</a> <a class="right carousel-control" href="#myCarousel"
				data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="container jumbotron">
		<p>
			Si no deseas nada de nuestra tienda, pincha aqui para seguir con tu
			compra:<br> <a href='./administration/cuenta.php'> Pagar!<img
				src="./img/carrito.png"></a>
		</p>
	</div>
</body>
</html>