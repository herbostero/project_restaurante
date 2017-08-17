<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<title>Restaurante</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<div id="wrapper">
	<header>
		<img src="images/logo.gif" alt="Logo del restaurante" />
		<nav>
		
		<ul>
			<li><a href="">HOME</a></li>
			<li><a href="">CARTA</a></li>
			<li><a href="">PROMOCIONES</a></li>
			<li><a href="">CONTÁCTENOS</a></li>
		</ul>
		
		
		</nav>
	</header>
<main>
	
	<section id="principal">
	<div> 
	<h1>MENU DEL DIA</h1>
	<?php 
	
	$platos = array (
			"carne.jpg",
			"ensaladas.jpg",
			"pasta.jpg",
			"pechuga.jpg",
			"pizza.jpg",
			"tarta.jpg", 
			"picada.jpg"
			
			
	);
	
	$precios= array (
			"EL PRECIO ES DE $350  ",
			"EL PRECIO ES DE $200  ",
			"EL PRECIO ES DE $240  ",
			"EL PRECIO ES DE $210  ",
			"EL PRECIO ES DE $250  ",
			"EL PRECIO ES DE $230  ",
			"EL PRECIO ES DE $300  ",
			
	);
	
	$diaActual= date('w'); /*0 (para domingo) hasta 6 (para sábado)*/
	$platoDia=$platos[$diaActual];
	$precioDia=$precios[$diaActual];
	
	?>
	
	<img class="centrar"src="images/<?php echo $platoDia ?>" alt="Menú del Dia">
	<p class="precio"><?php echo $precioDia?></p>
	<div class="servicios"id="servicios"></div>
	
	
	
	<script>

		 $(document).ready(function(){
				
				$.getJSON("servicios.json", function(datos){
					for (var i in datos.prestaciones){
						var tiposServicios=datos.prestaciones[i].descripcion;
						$("#servicios").append(" / "+tiposServicios+" / ");	

					}
				});
			});

		
		</script>
	</section>
	</main>
	
	</div>


	<footer><p>&copy; 2017 | Todos los derechos reservados</p></footer>
</div>
</body>
</html>