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

if (! isset($_GET['hora']) || ! isset($_GET['sala'])) {
    header('Location: ./index.php');
} else {
    $sala = $_GET['sala'];
    $hora = $_GET['hora'];
}

$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];

if (isset($_POST['enviar'])) {
    if (isset($_POST['hid'])) {
        $listaButacs = $_POST['hid'];
        
        $butacas = explode(",", $listaButacs);
        $_SESSION['arrButacs'] = $butacas;
        /*
         * foreach ($butacas as $i) {
         * $result = $conexion->query("UPDATE" . $tabla . " SET taken=1 WHERE seatcode=" . $i);
         * }
         */
        header("Location: ./confirmBooking.php?sala=" . $sala . "&entradas=" . count($butacas));
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

$resultado2 = $conexion->query("SELECT DISTINCT fila FROM " . $tabla . " ORDER BY fila DESC");

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
.n {
	text-align: center;
}

a#login {
	color: white;
}

a#login:hover {
	font-size: 150%;
	text-decoration: underline;
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th,
	.table>thead>tr>td, .table>thead>tr>th {
	padding: 2px;
}

h1, h3 {
	text-align: center;
}

a {
	cursor: pointer;
}

#fondo {
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0px;
	left: 0px;
	z-index: 990;
	opacity: 0.8;
	background: #000;
}

#flotante {
	z-index: 999;
	border: 8px solid #fff;
	margin-top: -756px;
	margin-left: -153px;
	top: 50%;
	left: 50%;
	padding: 12px;
	position: fixed;
	width: 265px;
	background-color: #fff;
	border-radius: 3px;
}

.btn:hover {
	color: white;
}
</style>

<title>FilMolin Cinema</title>

</head>

<script type="text/javascript">

var entradas=Array();

function seleccionarButacas(code){
	var id='butaca'+code;
	var alt=document.getElementById(id).alt;

	if(alt=='blanca'){
		document.getElementById(id).src='./img/butaca_verde.png';
		document.getElementById(id).alt='verde';
		entradas.push(code);
	}else{
		document.getElementById(id).src='./img/butaca_blanca.png';
		document.getElementById(id).alt='blanca';
		var pos=entradas.indexOf(code);
		entradas.splice(pos,1);
	}	
}

function pasarArray(){
	var test=
	document.getElementById('oculto').value=entradas.toString();
}

function flotante(tipo){
	
	if (tipo==1){
	//Si hacemos clic en abrir mostramos el fondo negro y el flotante
	$('#contenedor').show();
    $('#flotante').animate({
      marginTop: "-152px"
    });
	}
	if (tipo==2){
	//Si hacemos clic en cerrar, deslizamos el flotante hacia arriba
    $('#flotante').animate({
      marginTop: "-756px"
    });
	//Una vez ocultado el flotante cerramos el fondo negro
	setTimeout(function(){
	$('#contenedor').hide();
		
	},500)
	}

}

</script>

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

	<h3>
		<a onClick="flotante(1)"><button id="but" type="button"
				class="btn btn-dark"
				style="float: left; clear: right; margin-left: 30px;">Consulta la
				leyenda aquí.</button></a>
	</h3>

	<div id="contenedor" style="display: none">

		<div id="flotante">
			
                <?php
                echo "<h1>Libre:</h1><button type='button' ><img src='./img/butaca_blanca.png' style='width:30px;height:30px' alt='blanca'></button>";
                
                echo "<h1>Ocupada:</h1><button type='button' ><img src='./img/butaca_roja.png' style='width:30px;height:30px' alt='blanca'></button>";
                
                echo "<h1>Seleccionada:</h1><button type='button' ><img src='./img/butaca_verde.png' style='width:30px;height:30px' alt='blanca'></button>";
                ?>	
    		
			<h3>
				<a onClick="flotante(2)">Cerrar</a>
			</h3>
		</div>

		<div id="fondo"></div>

	</div>

	<div class="container"
		style="margin-left: 40px; margin-right: 40px; margin-top: 40px; margin-bottom: 40px;">
		<form method="post"
			action='./confirmbooking.php?sala=<?php echo $sala; ?>'
			onSubmit='pasarArray()'>
			<div class="container">
				<table class="table-sm table-hover" style="margin: auto;">
					<thead>
						<tr style="padding: 2px;">
							<th scope="col" style="text-align: center; width: 50px;">FILAS</th>
							<th class="n" scope="col">1</th>
							<th class="n" scope="col">2</th>
							<th class="n" scope="col">3</th>
							<th class="n" scope="col">4</th>
							<th class="n" scope="col">5</th>
							<th class="n" scope="col">6</th>
							<th class="n" scope="col">7</th>
							<th class="n" scope="col">8</th>
							<th class="n" scope="col">9</th>
							<th class="n" scope="col">10</th>
						</tr>
					</thead>
					<tbody>
	
<?php
while ($filas = $resultado2->fetch_assoc()) {
    
    echo "<tr >
            <th scope='col' style='text-align: center;'>" . $filas['fila'] . "</th>";
    
    $resultado = $conexion->query("SELECT * FROM " . $tabla . " WHERE roomcode=" . $sala . " AND timetable='" . $hora . "' AND fila=" . $filas['fila']);
    
    while ($asientos = $resultado->fetch_assoc()) {
        
        if ($asientos['taken'] == 0) {
            echo "<td style='width: 50px;'><button type='button' onclick='seleccionarButacas(" . $asientos['seatcode'] . ")'><img id='butaca" . $asientos['seatcode'] . "' alt='blanca' src='./img/butaca_blanca.png' width='25px' height='25px' /></button> </td>";
        } else {
            echo "<td style='width: 50px;'><button type='button' disabled><img src='./img/butaca_roja.png'  width='25px' height='25px'/></button></td>";
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
				<input id='oculto' type='hidden' value='' name='hid'>
				<button class="btn btn-lg btn-dark" id="but" type="submit"
					name="enviar">Confirmar y continuar!</button>
			</div>

		</form>
	</div>
</body>
</html>