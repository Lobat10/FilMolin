<?php
include "../conexion/conexion.php";

session_name("login");
session_start();

$conexion = new mysqli($servidor3, $usuario3, $clave3, "id5676343_filmolin");
$conexion->query("SET NAMES 'UTF8'");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

$user = "";
$where = "";

if (! isset($_SESSION['login'])) {
    header('Location: ../login/login.php');
}

if (isset($_GET['hist'])) {
    
    $user = $_GET['hist'];
    $where = " WHERE login = '" . $user . "'";
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
<script type="text/javascript">

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
	margin-top: -252px;
	margin-left: -353px;
	top: 30%;
	left: 30%;
	padding: 12px;
	position: fixed;
	width: 100%;
	background-color: #fff;
	border-radius: 10px;
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
					<a href="./cuenta.php"><span id="icon"
						style="float: right; width: 150px; clear: right;"
						class="glyphicon glyphicon-user"><?php echo $_SESSION['usuario']; ?></span></a>

		<?php }else{?>
					
					 <a href="../login/login.php" class="btn btn-primary btn-lg active"
						role="button" aria-pressed="true"
						style="float: right; clear: right;">Inicia sesión</a>
					
					<?php
        }
    } else {
        ?>
    
    <a href="../login/login.php" class="btn btn-primary btn-lg active"
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

	<main role="main">
	<h3>
		<a onClick="flotante(1)"><button type="button" class="btn btn-dark"
				style="float: left; clear: right;">Ver tabla de puntos.</button></a>
	</h3>

	<div id="contenedor" style="display: none">

		<div id="flotante">
			<h1>Tabla de puntos</h1>
			<div class="container">
				<div class="container">
					<table class="table table-striped">
						<thead class="thead-dark">
							<tr class="table-active">
								<th class="col-md-2" style="text-align: center" scope="col">#</th>
								<th class="col-md-2" style="text-align: center" scope="col">Precios</th>
								<th class="col-md-2" style="text-align: center" scope="col">Puntos</th>
							</tr>
						</thead>
						<tbody>
    
    <?php
    $resultado = $conexion->query("SELECT * FROM listadoPuntos ");
    
    while ($ref = $resultado->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td style='text-align: center'>" . $ref['idPuntos'] . "</td>";
        echo "<td style='text-align: center'>Entre " . $ref['precioMin'] . "€ y " . $ref['precioMax'] . "€</td>";
        echo "<td style='text-align: center'>" . $ref['puntos'] . " = " . $ref['valor'] . "€</td>";
        echo "</tr>";
    }
    ?>
				</tbody>
					</table>
				</div>
			</div>
			<h3>
				<a onClick="flotante(2)">Cerrar</a>
			</h3>
		</div>

		<div id="fondo"></div>

	</div>

	<div class="container">
		<div class="container">
			<table class="table table-striped">
				<thead>
					<tr class="table-active">
						<th style="text-align: center" scope="col">#</th>
						<th style="text-align: center" scope="col">Descripción</th>
						<th style="text-align: center" scope="col">Fecha</th>
						<th style="text-align: center" scope="col">Precio</th>
					</tr>
				</thead>
				<tbody>
    
    <?php
    $cont = 0;
    $tamano_paginas = 5;
    
    if (isset($_GET['pagina'])) {
        
        if ($_GET['pagina'] == 1) {
            
            header("Location:historial.php?hist=" . $_SESSION['usuario'] . "");
        } else {
            
            $pagina = $_GET['pagina'];
        }
    } else {
        
        $pagina = 1;
    }
    
    $inicio = ($pagina - 1) * $tamano_paginas;
    $sql_total = $conexion->query("SELECT * FROM compras" . $where);
    $num_filas = mysqli_num_rows($sql_total);
    $total_paginas = ceil($num_filas / $tamano_paginas);
    
    $resultado = $conexion->query("SELECT * FROM compras" . $where . " LIMIT " . $inicio . "," . $tamano_paginas);
    
    while ($compra = $resultado->fetch_assoc()) {
        
        $cont += 1;
        echo "<tr>";
        echo "<td style='text-align: center'>" . $cont . "</td>";
        echo "<td style='text-align: center'>" . $compra['descripcion'] . "</td>";
        echo "<td style='text-align: center'>" . $compra['fecha'] . "</td>";
        echo "<td style='text-align: center'>" . $compra['gasto'] . " €</td>";
        echo "</tr>";
    }
    $primera = $pagina - ($pagina % 10) + 1;
    if ($primera > $pagina) {
        $primera = $primera - 10;
    }
    $ultima = $primera + 9 > $total_paginas ? $total_paginas : $primera + 9;
    ?>
     <div class="container">
						<nav aria-label="Page navigation" class="text-right">
							<ul class="pagination">
    <?php
    if ($total_paginas > 1) {
        // comprobamos $primera en lugar de $pagina
        if ($primera != 1)
            echo '<li class="page-item"><a class="page-link" href="historial.php?hist=' . $_SESSION['usuario'] . '&pagina=' . ($primera - 1) . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
        
        // mostramos de la primera a la última
        for ($i = $primera; $i <= $ultima; $i ++) {
            if ($pagina == $i) {
                echo '<li class="active"><a href="#">' . $pagina . '</a></li>';
            } else {
                if ($i == $primera) {
                    echo '<li class="page-item"><a class="page-link" href="historial.php?hist=' . $_SESSION['usuario'] . '">' . $i . '</a></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link" href="historial.php?hist=' . $_SESSION['usuario'] . '&pagina=' . $i . '">' . $i . '</a></li>';
                }
            }
        }
        
        if ($i <= $total_paginas)
            echo '<li class="page-item"><a class="page-link" href="historial.php?hist=' . $_SESSION['usuario'] . '&pagina=' . ($i) . '"><span aria-hidden="true">&raquo;</span></a></li>';
    }
    /*
     * for ($i = 1; $i <= $total_paginas; $i ++) {
     *
     * echo "<li class='page-item'><a class='page-link'<a href='historial.php?hist=" . $_SESSION['usuario'] . "&pagina=" . $i . "'>" . $i . "</a></li> ";
     * }
     */
    
    ?>
     </ul>
						</nav>
					</div>
				</tbody>
			</table>



			<a href="./cuenta.php"><button type="button"
					class="btn btn-lg btn-primary btn-block">Volver</button></a>
		</div>

		</form>
	</div>
	</main>
	<footer class="text-muted">
		<div class="container">
			<p class="float-right"></p>

		</div>
	</footer>
</body>
</html>