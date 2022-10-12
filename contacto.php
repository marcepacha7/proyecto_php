<?php include("header.php"); ?>
    <section class="contacto__contenido">
    	<h2>contacto</h2>
	<form action="enviar_consulta.php" method="post">
		<label form="nombre">nombre</label>
		<input type="text" name="nombre" class="contacto__input" placeholder="nombre">
		<br>
		<label form="apellido">apellido</label>
		<input type="text" name="apellido" class="contacto__input" placeholder="apellido">
		<br>
		<label form="email">correo</label>
		<input type="text" name="email" class="contacto__input" placeholder="email">
		<br>
		<textarea name="" id="" cols="30" rows="10" placeholder="escribi tu consulta"></textarea> <
		<br>
		<input type="submit" value="enviar respuesta" class="input_botom">

	</section>
		
		
	</form>
	<footer>
	<h3>soy el pie de pagina</h3>
</footer>

</body>
</html>