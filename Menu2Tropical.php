<!-- RESERVACION DE ADRIAN TROPICAL // HOME -->
<!DOCTYPE html>
<html>
<head>
	<title>[Menu] Adrian Tropical</title>
	<!--VINCULACION -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="MenuStyle.css">
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
				<li><a href="ClienteTropical.html" class="active">Inicio</a></li>
				<li><a href="LoginTropical.html">Log-out</a></li>
				<li><a href="ReservacionTropical.html">Mesas</a></li>
				<li><a href="Menu2Tropical.php">Menu</a></li> 
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

	 <h1>Menu A Elegir</h1>


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
			<p>Hechas con Carne de Res importada desde Caracas Venezuela.</p>
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
			<p>Exquisita ensalada de pastas con frutas frescas!</p>
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
			<p>Masa frescas preparado por FRANCHESCO VIRGOLINI</p>
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
			<p>Hay de Res, Pollo, Cerdo, Pavo, Chivo, Burro, Caballo y vegetariano.</p>
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
			<p>Hechas con masa de Jamaica</p>
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
			<p>Cebollas mas picante que el que una hormiga</p>
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
			<p>Masa frescas importada de Rusia.</p>
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
			<p>Hecha con sangre de Australianos.</p>
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
			<p>Atrapado desde lo mas profundo del Atlantis.</p>
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
			<p>Dulce como el amor de mama...</p>
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
			<p>Con arroz, lenteja, habichuela, obo, maiz, nuez, gandules, entre otros...</p>
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
			<p>Desde china a su Mesa.</p>
			</div>
		</div></div>	
</div>

</body>
</html>