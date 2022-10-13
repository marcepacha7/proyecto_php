


<?php

include("header.php");



$titulo = "ventas de autos el primer año" ;
$unidades_curso = 450;
$dinero_ganado= 255.769;
$auto_vendidos=380;



$titulo2 = "ventas de autos el segundo año" ;
$unidades_curso2 = 500;
$dinero_ganado2= 375.776;
$auto_vendidos2=480;

$valor_dolar = 380;

?>



<section class="contenido">
	<div class="curso1">
		<h2> <?php echo $titulo; ?></h2>
		<ul>
			<li> autos a vender:<?php echo $unidades_curso;?></li>
			<li> valor del auto:<?php echo $dinero_ganado; ?></li>
			<li> autos vendidos:<?php echo $auto_vendidos;  ?></li>

		</ul>
	</div>

	<div class="curso2">
		<h2> <?php echo $titulo2; ?></h2>
		<ul>
			<li> autos a vender:<?php echo $unidades_curso2;?></li>
			<li> valor del auto:<?php echo $dinero_ganado2; ?></li>
			<li> autos vendidos:<?php echo $auto_vendidos2;  ?></li>
		</ul>
	</div>
	
	<?php
	$duracion_total = $unidades_curso + $unidades_curso2;
	$dinero_total = $dinero_ganado + $dinero_ganado2;
	$precio_dolar = $dinero_total * $valor_dolar;
	?>


	<div class="balanze_general">
		<h2>balanze general</h2>
		<ul>
			<li> total de autos vendidos:<?php echo $duracion_total; ?></li>
			<li> plata generada:<?php echo $dinero_total; ?></li>
			<li> plata ganada en dolares: <?php echo $precio_dolar ?></li>
			
		</ul>
		
	</div>

	
	
</section>
<footer>
	<h3>soy el pie de pagina</h3>
</footer>


</body>
</html>