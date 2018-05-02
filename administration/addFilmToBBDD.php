
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

include "../conexion/conexion.php";

$conexion = new mysqli($servidor, $usuario, $clave, "filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
$errormsg = "";
$successmsg = "";

if (isset($_POST['filmcode']) && isset($_POST['filmname']) && isset($_POST['duration']) && isset($_POST['description']) && isset($_POST['image'])) {
    
    if (! empty($_POST['filmcode']) && ! empty($_POST['filmname']) && ! empty($_POST['duration']) && ! empty($_POST['description']) && ! empty($_POST['image'])) {
        
        $fcode = $_POST['filmcode'];
        $fname = $_POST['filmname'];
        $fduration = $_POST['duration'];
        $fdescription = $_POST['description'];
        $fimage = $_POST['image'];
        
        $resultado = $conexion->query("SELECT * FROM peliculas WHERE peliculas.filmcode=" . $fcode);
        if ($resultado->num_rows != 0) {
            
            $errormsg = " Ya existe el FILMCODE de esta pelicula";
        } else {
            
            $resultado = $conexion->query("SELECT * FROM peliculas WHERE peliculas.filmname='" . $fname . "'");
            echo "<p>" . $resultado->num_rows . "</p>";
            if ($resultado->num_rows != 0) {
                
                $errormsg = "Ya existe el FILMNAME de esta pelicula";
            } else {
                if ($fduration < 100) {
                    $errormsg = "La duracion de la pelicula tiene que ser superior a 100 minutos.";
                } else {
                    
                    $resultado2 = $conexion->query("INSERT INTO peliculas values (" . $fcode . ",'" . $fname . "'," . $fduration . ",'" . $fdescription . "','" . $fimage . "')");
                    
                    $successmsg = "La pelicula " . $fname . " se ha introducido.";
                }
            }
        }
    } else {
        $errormsg = "No puede haber ningún campo vacío.";
    }
} else {
    $errormsg = "No se han enviado todos los campos del formulario, no se ha insertalo la pelicula";
}

?>

<body>
	<img src="../img/introductor.jpg" id="introductor" />


	<div class="container">
		<form action="./addFilmToBBDD.php" method="post">
			<h1>Rellena todos los campos del objeto PELICULA</h1>
			<div class="form-group">
				<label class="form-group-label" for="codigo">Filmcode</label> <input
					class="form-group-input" type="number" name="filmcode" id="codigo">
				<br> <label class="form-group-label" for="nombre">Filmname</label> <input
					class="form-group-input" type="text" name="filmname" id="nombre"><br>
				<label class="form-group-label" for="duracion">Duration</label> <input
					class="form-group-input" type="number" name="duration"
					id="duracion"><br> <label class="form-group-label"
					for="descripcion">Description</label> <input
					class="form-group-input" type="text" name="description"
					id="descripcion"><br> <label class="form-group-label" for="imagen">Image(sin
					extension .jpg)</label> <input class="form-group-input" type="text"
					name="image" id="imagen"><br> <input type="submit" id='enviar'
					name="enviarP" class="form-control btn btn-info" />
			</div>
		</form>
	</div>
	<?php if($errormsg!=""){?>
	<div class="container">
		<span class="border-bottom border-right border-danger"><?php echo $errormsg ?></span>
	<?php }?>
	</div>
	
	<?php if($successmsg!=""){?>
	<div class="container">
		<span class="border-bottom border-right border-success"><?php echo $successmsg ?></span>
	<?php }?>
	</div>
</body>
</html>