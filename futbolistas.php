<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>futbolistas</title>
</head>
<body>
	<?php include("header.php") ?>

	<section class="futbolistas">
		<h1>futbolistas</h1>
		<div class="jugadores">
		<ul>
			<li><a href="futbolistas.php?futbolistas=db">cristiano ronaldo</a></li>
			<li><a href="futbolistas.php?futbolistas=hd">lionel messi</a></li>
			<li><a href="futbolistas.php?futbolistas=mg">juan roman riquelme</a></li>
		</ul>
	</div>
		
	</section>

	<?php
	$futbolista="";
	$descripcion="" ;
	$img= "";
	if (isset($_GET['futbolistas'])) {
	 	switch ($_GET['futbolistas']) {
	 		
	 		case 'db':
	 		$futbolista ="cristiano ronaldo";
	 		$descripcion ="cristiano ronaldo es el mejor futbolista en la historia de portugal y del futbol,ganador de 5 balones de oro,5 champions y 5 botas de oro.uno de sus mayores logros es salir campeon de la eurocopa con la seleccion de portugal y hacer que su pais se vuelva una potencia mundial en el mundo del futbol";
	 		$img ="ronaldo.jpg";
	 		 
	 		break;

	 		case 'hd':
	 		$futbolista = "messi";
	 		$descripcion = "lionel messi es el mejor futbolista de la seleccion argentina, ganador de 4 champions con el barcelona, ganador de 7 balones de oro,6 botas de oro y campeon de la copa america ademas de ser un gran futbolista es una gran persona humilde y trankilo ";
	 		$img= "messi.jpg";

	 		break;

	 		case 'mg':
	 		$futbolista = "riquelme";
	 		$descripcion = "juan roman riquelme es el mayor idolo en la histira de boca juniors, ganador de 4 copa libertadores y ganador de una copa intercontinental ganandole al real madrid,fue jugador del barcelona pero su mayor trayectoria la hizo en el virrareal llegando a una semi final de champions";
	 		$img="riquelme.jpg";
	 			
	 			break;
	 			
	 			
	 	}
	 } 
	 ?>
	 <div class="futbolistas__descripcion">
	 	<h3><?php echo $futbolista;  ?></h3>
	 	<p><?php echo $descripcion; ?></p>
	 	<div class="contenedor__img">
	 		<img src="<?php echo $img  ?>" >
	 		
	 	</div>
	 	
	 </div>
	 <footer>
	<h3>soy el pie de pagina</h3>
</footer>

</body>
</html>