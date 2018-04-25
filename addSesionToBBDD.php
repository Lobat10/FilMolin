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
include "SalaGrande.php";
include "SalaPequeña.php";
include "SalaMediana.php";
include "Asiento.php";
include "Pelicula.php";
include "conexion/conexion.php";

$conexion = new mysqli($servidor, $usuario, $clave, "filmmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
$errormsg = "";
$successmsg = "";
if (isset($_POST['filmcode']) && isset($_POST['roomcode']) && isset($_POST['timetable']) && isset($_POST['date'])) {
    
    if (! empty($_POST['filmcode']) && ! empty($_POST['roomcode']) && ! empty($_POST['timetable']) && ! empty($_POST['date'])) {
        
        $fcode = $_POST['filmcode'];
        $rcode = $_POST['roomcode'];
        $stime = $_POST['timetable'];
        $sdate = $_POST['date'];
        
        $resultado = $conexion->query("SELECT * FROM peliculas WHERE peliculas.filmcode=" . $fcode);
        if ($resultado->num_rows === 0) {
            
            $errormsg = " No existe el FILMCODE de esta pelicula";
        } else {
            
            $resultado = $conexion->query("SELECT * FROM salas WHERE salas.roomcode=" . $rcode);
            
            if ($resultado->num_rows === 0) {
                
                $errormsg = "No existe el CODEROOM de esta sala.";
            } else {
                
                $resultado2 = $conexion->query("INSERT INTO sesiones values (" . $fcode . "," . $rcode . ",'" . $stime . "','" . $sdate . "')");
                $successmsg = "La sesion de las " . $stime . " en la sala " . $rcode . " se ha introducido.";
            }
        }
    } else {
        $errormsg = "No puede haber ningún campo vacío.";
    }
} else {
    $errormsg = "No se han enviado todos los campos del formulario, no se ha insertalo la sesion.";
}
?>

<body>
	<img src="./img/sesion.jpg" id="introductor" />


	<div class="container">
		<form action="./addSesionToBBDD.php" method="post">
			<h1 class="bg-light text-dark">Rellena todos los campos del objeto
				SESION</h1>
			<div class="form-group">
				<label class="form-group-label bg-light text-dark" for="codigo">Filmcode</label>
				<input class="form-group-input" type="number" name="filmcode"
					id="codigo"> <br> <label
					class="form-group-label bg-light text-dark" for="codigosala">Roomcode</label>
				<input class="form-group-input" type="number" name="roomcode"
					id="codigosala"><br> <label
					class="form-group-label bg-light text-dark" for="hora">Timetable</label>
				<input class="form-group-input" type="time" name="timetable"
					id="hora"><br> <label class="form-group-label bg-light text-dark"
					for="fecha">Date(Y-m-d)</label> <input class="form-group-input"
					type="text" name="date" id="fecha"><br> <input type="submit"
					id='enviar' name="enviarSes" class="form-control btn btn-warning" />
			</div>
		</form>
	</div>
	<?php if($errormsg!=""){?>
	<div class="container">
		<span
			class="border-bottom border-right border-danger bg-light text-dark"><?php echo $errormsg ?></span>
	<?php }?>
	</div>
	
	<?php if($successmsg!=""){?>
	<div class="container bg-light">
		<span
			class="border-bottom border-right border-success bg-light text-dark"><?php echo $successmsg ?></span>
	<?php }?>
	</div>
</body>
</html>
