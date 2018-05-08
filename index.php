<?php


include "./conexion/conexion.php";



session_name("login");
session_start();

$conexion = new mysqli($servidor, $usuario, $clave, "filmolin");
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

	<main role="main">
	
	<?php

if (isset($_GET['oferta'])) {
    $cont = 1;
    if ($_GET['oferta'] == 1) {
        ?>
        <section class="jumbotron text-center "
		style="background-image: url('./img/palomitas.jpg'); background-repeat: no-repeat; background-position: center; background-color: white">
		<a href="./index.php?oferta=3" style="float: left"><img
			src="./img/behind.png" style="width: 150px; height: 150px;"></a>
		<div class="container">
			<h1 class="jumbotron-heading" style="color: black">No pierdas tu
				tiempo!</h1>
			<p class="lead" style="color: black; font-weight: bold;">Recoge tus
				palomitas sin esperar las colas de la tienda.</p>
			<p class="lead" style="color: black; font-weight: bold;">Encarga tus
				palomitas con la compra de tu entrada!</p>
		</div>
		<a href="./index.php?oferta=2" style="float: right"><img
			src="./img/forward.png" style="width: 150px; height: 150px;"></a>
	</section>
        <?php
    } else if ($_GET['oferta'] == 2) {
        ?><section class="jumbotron text-center "
		style="background-image: url('./img/fondo2.jpg'); background-repeat: no-repeat; background-position: center; background-color: white">
		<a href="./index.php?oferta=1" style="float: left"><img
			src="./img/behind.png" style="width: 150px; height: 150px;"></span></a>
		<div class="container">
			<h1 class="jumbotron-heading" style="color: white">Cartelera FilMolin</h1>
			<p class="lead" style="color: white">A continuación os mostraremos la
				lista de peliculas disponibles en nuestro cine.</p>

		</div>
		<a href="./index.php?oferta=3" style="float: right"><img
			src="./img/forward.png" style="width: 150px; height: 150px;"></a>
	</section><?php
    } else {
        ?><section class="jumbotron text-center "
		style="background-image: url('./img/fondo2.jpg'); background-repeat: no-repeat; background-position: center; background-color: white">

		<a href="./index.php?oferta=2" style="float: left"><img
			src="./img/behind.png" style="width: 150px; height: 150px;"></a>
		<div class="container">
			<h1 class="jumbotron-heading" style="color: white">Cartelera FilMolin</h1>
			<p class="lead" style="color: white">A continuación os mostraremos la
				lista de peliculas disponibles en nuestro cine.</p>

		</div>
		<a href="./index.php?oferta=1" style="float: right"><img
			src="./img/forward.png" style="width: 150px; height: 150px;"></a>
	</section><?php
    }
} else {
    ?>
	<section class="jumbotron text-center "
		style="background-image: url('./img/fondo2.jpg'); background-repeat: no-repeat; background-position: center; background-color: white">
		<a href="./index.php?oferta=2" style="float: left"><img
			src="./img/behind.png" style="width: 150px; height: 150px;"></a>
		<div class="container">
			<h1 class="jumbotron-heading" style="color: white">Cartelera FilMolin</h1>
			<p class="lead" style="color: white">A continuación os mostraremos la
				lista de peliculas disponibles en nuestro cine.</p>
		</div>
		<a href="./index.php?oferta=1" style="float: right; clear: left"><img
			src="./img/forward.png" style="width: 150px; height: 150px;"></a>
	</section>
<?php }?>




<div class="container">
		<form action="./index.php" method="post" style="float: right;">
			<div class="container">
				<div class="col-sm-6" style="height: 130px;">
					<div class="form-group">
						<div class='input-group date' id='datetimepicker9'>
							<label for="date"
								class="col-sm-2 col-form-label col-form-label-lg">Elige la fecha</label>
							<div class="alert alert-info" style="align-items: center">
								<strong>Atención!</strong> Solo hay disponibilidad de las
								peliculas durante esta semana. Diculpe las molestias.
							</div>
							<input type='date' id='date' class="form-control form-control-lg" />
							<input type="submit" id='enviar'
								class="form-control form-control btn btn-info" />
						</div>
					</div>
				</div>
				<a href="./index.php?today=true"><button type="button"
						class="btn btn-info btn-lg">Peliculas de hoy</button></a>
			</div>

		</form>


	</div>


	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
<?php

$error = "";
$where = "";
$hoy = "";
$today = "" . date('Y-m-d') . "";
$todayh = getdate();


$anyo = $todayh['year'];

$mes = $todayh['mon'];
$dia = $todayh['mday'];

if (isset($_GET['today'])) {
    if ($_GET['today'] == true) {

        $hoy = ", sesiones WHERE sesiones.filmcode = peliculas.filmcode and sesiones.date='".$ano."-".$mes."-".$dia."'";
    }
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
    
    $resultado2 = $conexion->query("SELECT * FROM sesiones WHERE sesiones.filmcode=" . $pelicula['filmcode'] . " " . $where);
    if ($resultado2->num_rows === 0) {
        $error = "<p>No hay obras en la base de datos</p>";
    }
    
    while ($sesion = $resultado2->fetch_assoc()) {
        
        echo "                                       <li><ul class='list-unstyled'>

                                                        <li><p class='card-text'> Sala nº " . $sesion['roomcode'] . "</p><a href='./showSesion.php?code=" . $pelicula['filmcode'] . "&hora=".$sesion['timetable']."&sala=".$sesion['roomcode']."'><p class='btn btn-link'>" . $sesion['timetable'] . "</p></a></li>

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

