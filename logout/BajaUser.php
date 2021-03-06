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
if (isset($_POST['continuar'])) {
    
    if (isset($_POST['pass'])) {
        
        if (! empty($_POST['pass'])) {
            
            $pass = $_POST['pass'];
            $resultado = $conexion->query("SELECT * FROM usuarios");
            $existe = false;
            while ($usuarios = $resultado->fetch_assoc()) {
                if (password_verify($pass, $usuarios['password']) && $usuarios['login'] === $_SESSION['usuario']) {
                    $existe = true;
                    $resultado = $conexion->query("DELETE FROM usuarios WHERE login = '" . $_SESSION['usuario'] . "'");
                    session_destroy();
                    header('Location: ../index.php');
                }
            }
            
            if (! $existe) {
                
                $mensajeError = "La contraseña no es correcta";
            }
        } else {
            $mensajeError = "No puede haber ningún campo vacio";
        }
    }
}

?>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script
	src="https://js.braintreegateway.com/web/3.11.0/js/client.min.js"></script>
<script
	src="https://js.braintreegateway.com/web/3.11.0/js/paypal-checkout.min.js"></script>
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
<style type="text/css">
a#login {
	color: white;
}

a#login:hover {
	font-size: 150%;
	text-decoration: underline;
}
</style>

</head>

<body>
	<header>
		<div class="collapse bg-dark" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-white">About</h4>
						<p class="text-muted">FilMolin Cinema, es el nuevo cine con un
							servicio unico que nos diferencia de otras empresas, ya que ahora
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

<form class="form-signin" id="idForm" action="./BajaUser.php"
		method="post">
		<label for="inputPassword" class="col-sm-4 col-form-label">Escribe tu
			contraseña:</label> <input name="pass" type="password"
			id="inputPassword" class="form-control" placeholder="Password"
			required>
		<div class="container text-center">
			<h2>Si eliges continuar, tu cuenta se eliminará. ¿Estás seguro?</h2>

			<button class="btn btn-info" type="submit" name="continuar">Continuar</button>
			<a href="../administration/cuenta.php"><button type="button"
					class="btn btn-danger">Volver atrás</button></a>
		</div>

</body>
</html>