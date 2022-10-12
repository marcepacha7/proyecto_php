


<?php

include("header.php");



$titulo = "ventas de autos el primer año" ;
$unidades_curso = 200;
$arancel= 25.769;
$fecha=



$titulo2 = "ventas de autos el segundo año" ;
$unidades_curso2 = 290;
$arancel2= 37.776;
$fecha1=

$dolar = 380;

?>



<section class="contenido">
	<div class="curso1">
		<h2> <?php echo $titulo; ?></h2>
		<ul>
			<li> autos a vender:<?php echo $unidades_curso;?></li>
			<li> valor del auto:<?php echo $arancel; ?></li>
			<li> autos vendidos:<?php echo $fecha1;  ?></li>

		</ul>
	</div>

	<div class="curso2">
		<h2> <?php echo $titulo2; ?></h2>
		<ul>
			<li> autos a vender:<?php echo $unidades_curso2;?></li>
			<li> valor del auto:<?php echo $arancel2; ?></li>
			<li> autos vendidos:<?php echo $fecha2;  ?></li>
		</ul>
	</div>
	
	<?php
	$duracion_total = $unidades_curso + $unidades_curso2;
	$arancel_total = $arancel + $arancel2;
	$precio_dolar = $arancel_total * $dolar;
	?>


	<div class="balanze_general">
		<h2>balanze general</h2>
		<ul>
			<li> total de autos vendidos:<?php echo $duracion_total; ?></li>
			<li> plata generada:<?php echo $arancel_total; ?></li>
			<li> precio dolar: <?php echo $precio_dolar ?></li>
			
		</ul>
		
	</div>

	
	
</section>
<footer>
	<h3>soy el pie de pagina</h3>
</footer>


</body>
</html>