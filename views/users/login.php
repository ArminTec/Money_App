
<form action="<?php echo APP_URL; ?>users/login" method="POST">
<link rel="stylesheet" href="<?php echo APP_URL_CSS?>estilos.css">
<p>
	<h2>Inicio de sesión</h2>
</p>
	<p>
	    <label for="username">Usuario:</label>
		<input type="text" placeholder="Usuario" name="username">
	</p>
	<p>
	    <label for="username">Contraseña:</label>
		<input type="password" placeholder="Contraseña" name="password">
	</p>
	<p>
		<input type="submit" value="Iniciar sesión">
	</p>
</form>