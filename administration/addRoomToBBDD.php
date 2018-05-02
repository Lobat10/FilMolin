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

<style type="text/css">
#introductor {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	position: fixed;
	z-index: -1;
}
</style>

<title>FilMolin Cinema</title>


</head>
<?php

include "../conexion/conexion.php";

$conexion = new mysqli($servidor, $usuario, $clave, "filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
$errormsg = "";
$successmsg = "";
$rsize = "";
if (isset($_POST['roomcode']) && isset($_POST['capacity'])) {
    
    if (! empty($_POST['roomcode']) && ! empty($_POST['capacity'])) {
        
        $rcode = $_POST['roomcode'];
        $rcapacity = $_POST['capacity'];
        $rimage = "";
        
        $resultado = $conexion->query("SELECT * FROM salas WHERE salas.roomcode=" . $rcode);
        if ($resultado->num_rows != 0) {
            
            $errormsg = " Ya existe el ROOMCODE de esta sala.";
        } else {
            if ($rcapacity == 50) {
                $rsize = "pequeña";
                $rimage = "salapequeña.jpg";
                $resultado2 = $conexion->query("INSERT INTO salas values (" . $rcode . "," . $rcapacity . ",'" . $rimage . "')");
                $successmsg = "La sala " . $rsize . " nº " . $rcode . " se ha introducido.";
            } else if ($rcapacity == 80) {
                $rsize = "mediana";
                $rimage = "salamediana.jpg";
                $resultado2 = $conexion->query("INSERT INTO salas values (" . $rcode . "," . $rcapacity . ",'" . $rimage . "')");
                $successmsg = "La sala " . $rsize . " nº " . $rcode . " se ha introducido.";
                echo "<p>INSERT INTO salas values (" . $rcode . "," . $rcapacity . ",'" . $rimage . "'</p>";
            } else if ($rcapacity == 100) {
                $rsize = "grande";
                $rimage = "salagrande.jpg";
                $resultado2 = $conexion->query("INSERT INTO salas values (" . $rcode . "," . $rcapacity . ",'" . $rimage . "')");
                $successmsg = "La sala " . $rsize . " nº " . $rcode . " se ha introducido.";
            }
        }
    } else {
        $errormsg = "No puede haber ningún campo vacío, no se ha insertalo la sala.";
    }
} else {
    $errormsg = "No se han enviado todos los campos del formulario, no se ha insertalo la sala.";
}

?>

<body>
	<img src="../img/sala.jpg" id="introductor" />


	<div class="container">
		<form action="./addRoomToBBDD.php" method="post">
			<h1 class="bg-dark text-light">Rellena todos los campos del objeto
				SALA</h1>
			<div class="form-group">
				<label class="form-group-label bg-dark text-light" for="codigosala">Roomcode</label>
				<input class="form-group-input" type="number" name="roomcode"
					id="codigosala"><br> <label
					class="form-group-label bg-dark text-light" for="capacidad">Capacity</label>
				<input class="form-group-input" type="radio" name="capacity"
					id="capacidad" value="50" checked> <label
					class="form-group-label bg-dark text-light" for="capacidad">50
					(sala pequeña)</label> <input class="form-group-input" type="radio"
					name="capacity" id="capacidad" value="80"> <label
					class="form-group-label bg-dark text-light" for="capacidad">80
					(sala mediana)</label> <input class="form-group-input" type="radio"
					name="capacity" id="capacidad" value="100"> <label
					class="form-group-label bg-dark text-light" for="capacidad">100
					(sala grande)</label> <br> <input type="submit" id='enviar'
					name="enviarS" class="form-control btn btn-danger" />
			</div>
		</form>
	</div>
	<?php if($errormsg!=""){?>
	<div class="container">
		<span
			class="border-bottom border-right border-danger bg-dark text-light"><?php echo $errormsg ?></span>
	<?php }?>
	</div>
	
	<?php if($successmsg!=""){?>
	<div class="container bg-light">
		<span class="border-bottom border-right border-success"><?php echo $successmsg ?></span>
	<?php }?>
	</div>
</body>
</html>