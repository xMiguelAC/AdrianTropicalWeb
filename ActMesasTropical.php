<!-- RESERVACION DE ADRIAN TROPICAL // HOME -->
<!DOCTYPE html>
<html>
<head>
	<title>[Empleado] Adrian Tropical</title>
	<!--VINCULACION -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="ActMesasStyle3.css">
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
				<li><a href="EmpleadoTropical.html">Inicio</a></li>
				<li><a href="LoginTropical.html">Log-out</a></li>
				<li><a href="ActMesasTropical.php" class="active">Actualizar Mesas</a></li>
				<li><a href="ActMenusTropical2.php">Actualizar Menu</a></li> 
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
	  <h1>Actualizar Mesas</h1>

	  <h2>Nombre:</h2>
<div class="conten">
<form method="POST" action="ActMesasTropical.php">
	<input type="text" name="name">
	<input type="submit" name="button" value="CONSULTAR">
	<input type="submit" name="eliminate" value="DELETE">
</form>
</div>

<?php


$conexion=mysqli_connect("localhost","root","","adriantropical") or
    die("Problemas con la conexión");

//$Name  ="";
$Day   ="";
$Entry ="";
$Exit  ="";
$Count ="";

 if (isset($_POST['button'])) {


 	$Name = $_POST['name'];
 	$Existe =0;

 	if ($Name=="") {
 		echo "<style>
	  				h2{color:white;
	  					text-align:center;
		text-shadow: 2px 2px 4px #000000;}
	  				</style>";
 		echo "<h2>Por favor digite un Nombre que va a consultar.</h2>";
 	}
 		elseif ($Name=="todos" || $Name=="todo" || $Name=="TODOS" || $Name=="TODO") {

 			$resultados = mysqli_query($conexion,"SELECT * FROM restaurant");
 			echo "<br><br><table>
		  <tr>
		    <th>Nombre</th>
		    <th>Dia de la Cena</th> 
		    <th>Hora de Entrada</th>
		    <th>Hora de Salida</th>
		    <th>Cantidad de Personas</th>
		  </tr> ";
	  while($consulta = mysqli_fetch_array($resultados))
	  {
	  	echo "<style>
			  		table {
		  width:100%;
		}
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 15px;
		  text-align: left;
		}
		table tr:nth-child(even) {
		  background-color: #eee;
		}
		table tr:nth-child(odd) {
		 background-color: #fff;
		}
		table th {
		  background-color: black;
		  color: white;
		}
	  			</style>
	  	<tr> <td>";
	    echo $consulta['NOMBRE']."</td><td>";
	    echo $consulta['DIA']."</td><td>";
	    echo $consulta['ENTRADA']."</td><td>";
	    echo $consulta['SALIDA']."</td><td>";
	    echo $consulta['CANTIDAD']."</td>";
	    $Existe++;
	  }
 		}

 	else{

	 		$resultados = mysqli_query($conexion,"SELECT * FROM restaurant WHERE NOMBRE LIKE '%$Name%'");
	 		echo "<br><br><table>
		  <tr>
		    <th>Nombre</th>
		    <th>Dia de la Cena</th> 
		    <th>Hora de Entrada</th>
		    <th>Hora de Salida</th>
		    <th>Cantidad de Personas</th>
		  </tr>";
	  while($consulta = mysqli_fetch_array($resultados))
	  {
	  	echo "<style>
	  		table {
		  width:100%;
		}
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 15px;
		  text-align: left;
		}
		table tr:nth-child(even) {
		  background-color: #eee;
		}
		table tr:nth-child(odd) {
		 background-color: #fff;
		}
		table th {
		  background-color: black;
		  color: white;
		}
	  			</style>
	  	  <tr> <td>";
	    echo $consulta['NOMBRE']."</td><td>";
	    echo $consulta['DIA']."</td><td>";
	    echo $consulta['ENTRADA']."</td><td>";
	    echo $consulta['SALIDA']."</td><td>";
	    echo $consulta['CANTIDAD']."</td>";
	    $Existe++;
	  }
	  	if ($Existe==0) {
	  		echo "<style>
	  				h2{color:white;
	  					text-align:center;
		text-shadow: 2px 2px 4px #000000;}
	  				</style>";
	  		echo "<h2> No existe el registro. </h2>";
	  	}
 	}

 }

if (isset($_POST['eliminate'])) {

	$Name = $_POST['name'];
 	$Existe =0;

 	if ($Name=="") {
 		echo "<style>
	  				h2{color:white;
	  					text-align:center;
		text-shadow: 2px 2px 4px #000000;}
	  				</style>";
 		echo "<h2>Por favor digite un Nombre que va a eliminar.</h2>";
 	}

 	else{
	 		$resultados = mysqli_query($conexion,"SELECT * FROM restaurant WHERE NOMBRE = '$Name'" );
	  while($consulta = mysqli_fetch_array($resultados))
	  {
	    $Existe++;
	  }
	  	if ($Existe==0) {
	  		echo "<style>
	  				h2{color:white;
	  					text-align:center;
		text-shadow: 2px 2px 4px #000000;}
	  				</style>";
	  		echo "<h2>No existe el registro.</h2>";
	  	}
	  	else{

	  		$_DELETE_SQL =  "DELETE FROM restaurant WHERE NOMBRE = '$Name'";
  			mysqli_query($conexion,$_DELETE_SQL); 

	  		echo "<style>
	  				h2{color:white;
	  					text-align:center;
		text-shadow: 2px 2px 4px #000000;}
	  				</style>";
  			echo "<h2>Registro eliminado con exito.</h2>";
	  	}
 	}
}

?>

 <!-- <table id="t01">
  <tr>
    <th>Nombre</th>
    <th>Dia de la Cena</th> 
    <th>Hora de Entrada</th>
    <th>Hora de Salida</th>
  </tr>
  <tr>
    <td>Miguel</td>
    <td>12 de Abril</td>
    <td>8am</td>
    <td>8pm</td>
  </tr>
  <tr>
    <td>Angel</td>
    <td>02 de Abril</td>
    <td>10am</td>
    <td>1pm</td>
  </tr>
  <tr>
    <td>Colon</td>
    <td>22 de Agosto</td>
    <td>9pm</td>
    <td>10pm</td>
  </tr>
</table> -->

<div class="margen"></div>
	  
</body>
</html>