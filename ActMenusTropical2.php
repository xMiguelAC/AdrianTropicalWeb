<!DOCTYPE html>
<html>
<head>
	<title>[Empleado] Adrian Tropical</title>
	<!--VINCULACION -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="ActMenusTropical.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

	<?php
	$conexion=mysqli_connect("localhost","root","","adriantropical") or
	    die("Problemas con la conexión");
    ?>
		<!-- LOGO IMAGEN DE INICIO -->
	<header>
		<a href="Responsive.html" class="logo"><img src="Logo.png" width="150px" height="57px">.</a>
		<!-- MENU DE NAVEGACION -->
		<div class="menu-toggle"></div>
		<nav>
			<ul>
				<li><a href="EmpleadoTropical.html">Inicio</a></li>
				<li><a href="LoginTropical.html">Log-out</a></li>
				<li><a href="ActMesasTropical.php">Actualizar Mesas</a></li>
				<li><a href="ActMenusTropical.html" class="active">Actualizar Menu</a></li> 
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
	  <h1>Actualizar Menus</h1>

	  <div class="conte">
	  	 <form action="ActMenusTropical2.php" method="post">
	  	<b>Nombre del Plato:</b>
	  	<select name="NameProduct">
		  <option value="Albondigas">Albondigas</option>
		  <option value="Ensalada de Pasta">Ensalada de Pasta</option>
		  <option value="Pizza de Pasas">Pizza de Pasa</option>
		  <option value="Burritos">Burritos</option>
		  <option value="Pizza de Queso">Pizza de Queso</option>
		  <option value="Aros de Cebolla">Aros de Cebolla</option>
		  <option value="Quipes">Quipes</option>
		  <option value="Sopa">Sopa</option>
		  <option value="Camarones">Camarones</option>
		  <option value="Arroz con Leche">Arroz con Leche</option>
		  <option value="Asopao">Asopao</option>
		  <option value="Sushi">Sushi</option>
		</select>
	  	<br>
	  	<br>
	  	<b>Estado del Menu:</b>
	  	<select name="Disponibilidad">
		  <option value="DISPONIBLE">Disponible</option>
		  <option value="AGOTADO">Agotado</option>
		</select>
	  	<input type="submit" name="send">
	  </form>
	</div>
</div> 

<!-- <form method="post" action="ActMesasTropical.php">
	<input type="text" name="numero">
	<input type="submit" name="enviar">
</form> -->

<?php

if (isset($_POST['send'])) {

	$Name = $_POST['NameProduct'];
 	$Disp = $_POST['Disponibilidad'];


$_UPDATE_SQL="UPDATE menus Set 
  ESTADO='$Disp'
  WHERE PLATO='$Name'";
//WHERE PLATO='Albondigas'"; 
  mysqli_query($conexion,$_UPDATE_SQL); 
}

?>


<div class="container">
	<div class="box">
		<div class="imgBox">
			<img src="Albondiga.png">
		</div>
		<div class="detalles">
			<div class="contenido">
				<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Albondigas'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Albondigas'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div>
	</div>

	<div class="box"><div class="imgBox">
			<img src="Ensalada.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Ensalada de pasta'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Ensalada de pasta'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div></div>


	<div class="box"><div class="imgBox">
			<img src="Pizza.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Pizza de pasas'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Pizza de pasas'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div></div>


	<div class="box"><div class="imgBox">
			<img src="burritos.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Burritos'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Burritos'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div></div>	
</div>

<div class="container">
	<div class="box">
		<div class="imgBox">
			<img src="pizza2.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Pizza de Queso'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Pizza de Queso'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div>
	</div>


	<div class="box"><div class="imgBox">
			<img src="aros.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Aros de Cebolla'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Aros de Cebolla'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div></div>


	<div class="box"><div class="imgBox">
			<img src="quipes.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Quipes'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Quipes'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div></div>


	<div class="box"><div class="imgBox">
			<img src="sopa.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Sopa'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Sopa'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div></div>	
</div>

<div class="container">
	<div class="box">
		<div class="imgBox">
			<img src="camaron.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Camarones'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Camarones'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div>
	</div>


	<div class="box"><div class="imgBox">
			<img src="dulce.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Arroz con leche'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Arroz con leche'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div></div>


	<div class="box"><div class="imgBox">
			<img src="guiso.jpeg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Asopao'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Asopao'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div></div>

		
	<div class="box"><div class="imgBox">
			<img src="sushi.jpg">
		</div>
		<div class="detalles">
			<div class="contenido">
			<h2><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Sushi'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['PLATO'];
					  }
				?></h2>
			<p><?php
					$resultados = mysqli_query($conexion,"SELECT * FROM menus WHERE PLATO = 'Sushi'");
					  while($consulta = mysqli_fetch_array($resultados))
					  {
					    echo $consulta['ESTADO'];
					  }
				?></p>
			</div>
		</div>
	</div>	
</div>

</body>
</html>