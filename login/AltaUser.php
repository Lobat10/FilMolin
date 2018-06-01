<?php
include "../conexion/conexion.php";

$mensajeError = '';
$mensaje = '';
$user = '';
$pass = '';
$nombre = '';
$description = '';

$conexion = new mysqli($servidor3, $usuario3, $clave3, "id5676343_filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

if (isset($_POST['enviar'])) {
    if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['name']) && isset($_POST['description'])) {
        
        if (! empty($_POST['user']) && ! empty($_POST['pass']) && ! empty($_POST['name']) && ! empty($_POST['description'])) {
            
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $nombre = $_POST['name'];
            $description = $_POST['description'];
            
            $resultado = $conexion->query("SELECT * FROM usuarios");
            $existe = false;
            while ($usuarios = $resultado->fetch_assoc()) {
                if ($usuarios['login'] === $user) {
                    $existe = true;
                    $mensajeError = "Ya existe ese nombre de usuario";
                }
            }
            if (! $existe) {
                $passHash = password_hash($pass, PASSWORD_DEFAULT);
                $resultado = $conexion->query("INSERT INTO usuarios VALUES ('" . $user . "','" . $nombre . "','" . $passHash . "','" . $description . "',0)");
                header('Location: ./login.php');
            }
        } else {
            $mensajeError = "No puede haber ningun campo vacio";
        }
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
#inputUser {
	width: 50%;
}

#inputPassword {
	width: 50%;
}

#inputName {
	width: 50%;
}

#inputDesc {
	width: 50%;
}

#idForm {
	align-items: stretch;
}

label {
	display: inline-block;
	float: left;
	clear: left;
	width: 100px;
	text-align: right;
}

input {
	display: inline-block;
	float: left;
}
</style>

<title>FilMolin Cinema</title>


</head>

<body class="text-center">
	<div class="container">
		<form class="form-signin" id="idForm" action="./AltaUser.php"
			method="post">
			<img class="mb-4" src="../img/icon.png" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal">Introduce tus datos</h1>

			<label for="inputUser" class="col-sm-2 col-form-label">Login usuario</label>
			<input name="user" type="text" id="inputUser" class="form-control"
				placeholder="Ej. Flintstones20" required autofocus> <label
				for="inputPassword" class="col-sm-2 col-form-label">Password</label>
			<input name="pass" type="password" id="inputPassword"
				class="form-control" placeholder="Password" required> <label
				for="inputName" class="col-sm-2 col-form-label">Nombre completo</label>
			<input name="name" type="text" id="inputName" class="form-control"
				placeholder="Ej. Pedro Picapiedra Romperocas" required> <label
				for="inputDesc" class="col-sm-2 col-form-label">Descripción</label>
			<input name="description" type="text" id="inputDesc"
				class="form-control" placeholder="Ej. Jefe de equipo de la cantina."
				required>

			<button class="btn btn-lg btn-primary btn-block" type="submit"
				name="enviar">Enviar</button>

			<p class="mt-5 mb-3 text-muted">&copy; FilMolin Cinema 2018</p>
		</form>
		<a href="./login.php">
			<button type="button" class="btn btn-info">Ya estás registrado?
				Accede aquí.</button>
		</a>

	</div>
	<?php
if ($mensajeError != "") {
    ?><p><?php echo $mensajeError;?> </p><?php
}

if ($mensaje != "") {
    ?><p><?php echo $mensaje;?> </p><?php
}
?>
</body>
</html>