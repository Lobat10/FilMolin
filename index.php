<?php
include "./conexion/conexion.php";
session_name("login");
session_start();
$conexion = new mysqli($servidor3, $usuario3, $clave3, "id5676343_filmolin");
$conexion->query("SET NAMES 'UTF8'");
if ($conexion->connect_errno) {
    echo "
<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>
";
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

<script>

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

function valora(num){
	var id='valora'+num;
	var valor=document.getElementById(id).alt;

	if(valor=="blanca"){
	
    	while(num!=0) {
    		document.getElementById(id).src='./img/butaca_amarillo.png';
    		document.getElementById(id).alt='amarillo';
    		num-=1;
    		id='valora'+num;
    	}
	}else{
		
		while(num!=6) {
    		document.getElementById(id).src='./img/butaca_blanca.png';
    		document.getElementById(id).alt='blanca';
    		num+=1;
    		id='valora'+num;
    	}	
	}
	
}

</script>
<style>
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

a#login {
	color: white;
}

a#login:hover {
	font-size: 150%;
	text-decoration: underline;
}

.btn:hover {
	color: white;
}
</style>

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
				<a href="../index.php"
					class="navbar-brand d-flex align-items-center"> <img
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



	<main role="main">

	<div class="container">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="./img/oferta1.jpg" style="width: 100%; height: 250px;">
					<div class="carousel-caption"></div>
				</div>

				<div class="item">
					<img src="./img/oferta2.jpg" style="width: 100%; height: 250px;">
					<div class="carousel-caption" style="color: white"></div>
				</div>

				<div class="item">
					<img src="./img/fondo2.jpg" style="width: 100%; height: 250px;">
					<div class="carousel-caption">
						<h3>No más colas en el cine!</h3>
						<p>Con nuestro servicio 'express' no tendras que esperar colas,
							compra los productos a la vez que compras tus entradas desde
							casa.</p>
					</div>
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
	<br>


	<div class="container">
		<form action="./index.php" method="post" style="float: right;">
			<div class="container">
				<div class="col-sm-6" style="height: 130px;">
					<div class="form-group">
						<div class='input-group date' id='datetimepicker9'>
							<h3>Elige la fecha</h3>
							<div class="alert alert-info" style="align-items: center">
								<strong>Atención!</strong> Solo hay disponibilidad de las
								peliculas durante esta semana. Diculpe las molestias.
							</div>
							<input type='date' id='date' class='form-control form-control-lg'
								onChange="window.location.href = 'index.php?date=' + this.value;" />
						</div>
					</div>
				</div>
				<a href="./index.php?today=true"><button type="button"
						class="btn btn-info btn-lg">Peliculas de hoy</button></a>
			</div>

		</form>


		<h3>
			<a onClick="flotante(1)"><button type="button" class="btn btn-dark"
					style="float: right; clear: left;">Valora tu experiencia!</button></a>
		</h3>

		<div id="contenedor" style="display: none">

			<div id="flotante">
				<h1>Valora del 1 al 5</h1>
				<div class="container" style="padding-left: 35px;">
                <?php
                $loop = 1;
                while ($loop < 6) {
                    echo "<img src='./img/butaca_blanca.png' style='width:30px;height:30px' onclick='valora(" . $loop . ")' id='valora" . $loop . "' alt='blanca'>";
                    $loop += 1;
                }
                ?>	
    			</div>
				<h3>
					<a onClick="flotante(2)">Enviar</a>
				</h3>
			</div>

			<div id="fondo"></div>

		</div>


	</div>


	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
<?php

$error = "";
$fecha = "";
$date = "";
$where = "";
$hoy = "";
$todayh = getdate();

$ano = $todayh['year'];
$mes = $todayh['mon'];
$dia = $todayh['mday'];

if (strlen($mes) == 1) {
    $mes = "0" . $mes;
}
if (strlen($dia) == 1) {
    $dia = "0" . $dia;
}
if (isset($_GET['today'])) {
    if ($_GET['today'] == true) {
        $hoy = ", sesiones WHERE sesiones.filmcode = peliculas.filmcode AND sesiones.date='" . $ano . "-" . $mes . "-" . $dia . "' GROUP BY peliculas.filmcode";
        $fecha = " AND sesiones.date='" . $ano . "-" . $mes . "-" . $dia . "'";
    }
}

if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $hoy = ", sesiones WHERE sesiones.filmcode = peliculas.filmcode AND sesiones.date='" . $date . "' GROUP BY peliculas.filmcode";
    $fecha = " AND sesiones.date='" . $date . "'";
}
$resultado = $conexion->query("SELECT * FROM peliculas" . $hoy);
if ($resultado->num_rows === 0)
    $error = "<p>No hay obras en la base de datos</p>";

while ($pelicula = $resultado->fetch_assoc()) {
    
    echo "	<div class='col-md-4'>
					<div class='card mb-4 box-shadow'>";
    echo "                  <img class='card-img-top' src='./img/" . $pelicula['image'] . ".jpg'>";
    echo "                  <div class='card-body text-light bg-dark'>";
    echo "	                    <h1>" . $pelicula['filmname'] . "</h1>";
    echo "                      <button class='navbar-toggler bg-dark text-light' type='button' data-toggle='collapse'
					            data-target='#navbar" . $pelicula['image'] . "' aria-controls='navbarHeader'
					            aria-expanded='false' aria-label='Toggle navigation'>
					            <span class='navbar-toggler-icon'> &darr; </span></button>";
    
    echo "                      <div class='collapse bg-dark' id='navbar" . $pelicula['image'] . "'>
			                         <div class='container'>
                        				<div class='row'>
                        					<div class='col-sm-8 col-md-7 py-4'>
                                                <ul class='list-unstyled'>
                        						 <li><p class='card-text' style='width: 200px '>" . $pelicula['description'] . "</p></li>
                                                 <li><p class='card-text'>" . $pelicula['duration'] . " mins. </p></li>
                                                        <hr size='8px' color='blue' />";
    
    $resultado2 = $conexion->query("SELECT * FROM sesiones WHERE sesiones.filmcode=" . $pelicula['filmcode'] . "" . $fecha);
    if ($resultado2->num_rows === 0) {
        $error = "<p>No hay obras en la base de datos</p>";
    }
    
    while ($sesion = $resultado2->fetch_assoc()) {
        
        echo "                                       <li><ul class='list-unstyled'>
                                                        <li><p class='card-text'>Fecha: " . $sesion['date'] . "</p></li>
                                                        <li><p class='card-text'> Sala nº " . $sesion['roomcode'] . "</p><a href='./showSesion.php?code=" . $pelicula['filmcode'] . "&hora=" . $sesion['timetable'] . "&sala=" . $sesion['roomcode'] . "'><p class='btn btn-link'>" . $sesion['timetable'] . "</p></a></li>
                                                        <hr size='8px' color='blue' />
                                                     </ul>";
    }
    echo "                                      </ul>
                        					</div>
                        				</div>
                        			</div>
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
			<p>Pie de página</p>
		</div>
	</footer>
</body>
</html>