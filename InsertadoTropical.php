<!-- RESERVACION DE ADRIAN TROPICAL // HOME -->
<!DOCTYPE html>
<html>
<head>
	<title>[Reservacion] Adrian Tropical</title>
	<!--VINCULACION -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=ClienteTropical.html">
	<link rel="stylesheet" type="text/css" href="InsertadoStyle.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
		<!-- LOGO IMAGEN DE INICIO -->
	<header>
		<a href="Responsive.html" class="logo"><img src="Logo.png" width="150px" height="57px">.</a>
		<!-- MENU DE NAVEGACION -->
		<div class="menu-toggle"></div>
		<nav>
			<ul>
				<li><a href="Responsive.html">Inicio</a></li>
				<li><a href="LoginTropical.html">Log-out</a></li>
				<li><a href="ReservacionTropical.html" class="active">Mesas</a></li>
				<li><a href="MenuTropical.html">Menu</a></li> 
			</ul>
		</nav>
		<div class="clearfix"></div>
	</header>
	<!-- SCRIPT DEL RESPONSIVE DESIGN -->
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	  <script type="text/javascript">
	  	$(document).ready(function(){
	  		$('.menu-toggle').click(function(){
	  			$('.menu-toggle').toggleClass('active')
	  			$('nav').toggleClass('active')
	  		})
	  	})
	  </script>

<div class="loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<?php
$conexion=mysqli_connect("localhost","root","","adriantropical") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into restaurant
	(NOMBRE,DIA,ENTRADA,SALIDA,CANTIDAD) 
	values ('$_REQUEST[NOMBRE]','$_REQUEST[DIA]','$_REQUEST[ENTRADA]','$_REQUEST[SALIDA]','$_REQUEST[CANTIDAD]')")
    or die("Problemas en el select: ".mysqli_error($conexion));

mysqli_close($conexion);

echo "Yes.";
?>

<h1>Datos Insertados Correctamente!</h1>

</body>
</html>