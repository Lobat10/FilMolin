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
$hora = $_GET['hora'];

$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

if(isset($_POST['enviar'])){
    if (isset($_POST['butacas'])){
        $butacas=$_POST['butacas'];
        foreach ($butacas as $i){
            $result = $conexion->query("UPDATE".$tabla." SET taken=1 WHERE seatcode=".$i);
        }
        header("Location: ./confirmBooking.php?sala=".$sala."&entradas=".count($butacas));
    }
}

$resultado = $conexion->query("SELECT * FROM salas WHERE roomcode=" . $sala);
if ($resultado->num_rows === 0) {
    $error = "<p>No hay obras en la base de datos</p>";
}
$room = $resultado->fetch_assoc();

if ($room['capacity'] == 100) {
    $tabla = "asientosgrande";
} else if ($room['capacity'] == 80) {
    $tabla = "asientosmediana";
} else {
    $tabla = "asientospequeña";
}

$resultado2 = $conexion->query("SELECT DISTINCT fila FROM " . $tabla . " ORDER BY fila DESC" );




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
	
	
<div class="container">
		<form  method="post" action='./confirmbooking.php?sala=<?php echo $sala; ?>'>
			<div class="container">
				<table class="table table-striped">
					<thead>

						<th scope="col">FILAS</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>
						<th scope="col">8</th>
						<th scope="col">9</th>
						<th scope="col">10</th>

					</thead>
					<tbody>
	
<?php
while ($filas = $resultado2->fetch_assoc()) {
    
    echo "<tr>
            <th scope='col'>" . $filas['fila'] . "</th>";
    
    $resultado = $conexion->query("SELECT * FROM " . $tabla . " WHERE roomcode=" . $sala . " AND timetable='" . $hora . "' AND fila=" . $filas['fila']);
    
    while ($asientos = $resultado->fetch_assoc()) {
        
        if ($asientos['taken'] == 0) {
            echo "<td style='background-color:green;'><input name='butacas[]' type='checkbox' class='form-check-input' value='" . $asientos['seatcode'] . "'> </td>";
        } else {
            echo "<td style='background-color:red;'><input name='butacas[]' type='checkbox' class='form-check-input' value='" . $asientos['seatcode'] . "' disabled></td>";
        }
    }
    
    echo "</tr>";
}
?>
				</tbody>
					<tfoot>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td class="table-info" colspan="11">PANTALLA</td>
						</tr>
					</tfoot>
				</table>
				<button class="btn btn-lg btn-primary btn-block" type="submit"
				name="enviar">Confirmar y continuar!</button>
			</div>
            
		</form>
	</div>
</body>
</html>