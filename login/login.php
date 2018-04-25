<?php
include "../conexion/conexion.php";

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
#inputUser {
	width: 50%;
}

#inputPassword {
	width: 50%;
}

#idForm {
	align-items: stretch;
}

label {
	display: inline-block;
	float: left;
	clear: left;
	width: 250px;
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
		<form class="form-signin" id="idForm" action="./login.php"
			method="post">
			<img class="mb-4" src="../img/icon.png" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
			<label for="inputUser" class="sr-only">Nombre usuario</label> <input
				type="text" id="inputUser" class="form-control"
				placeholder="Nombre usuario" required autofocus> <label
				for="inputPassword" class="sr-only">Password</label> <input
				type="password" id="inputPassword" class="form-control"
				placeholder="Password" required>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Entra!</button>
			<div class="checkbox mb-3">
				<label> <input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<p class="mt-5 mb-3 text-muted">&copy; FilMolin Cinema 2018</p>
		</form>
		<a href="./alta.php">
			<button type="button" class="btn btn-info">Aún no estas registrado?
				Accede aquí.</button>
		</a>

	</div>
</body>
</html>