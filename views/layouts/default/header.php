<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Framework Basico</title>
	<link rel="stylesheet" href="<?php echo APP_URL_CSS?>style.css">
	<link rel="stylesheet" href="<?php echo APP_URL_CSS?>estilo.css">
	<link rel="stylesheet" href="<?php echo APP_URL_JS?>main.js">
    <script src=" http://code.jquery.com/jquery-latest.js"></script>
	<script href="main.js"></script>
</head>
<body>
<header>
<div class="contenedor">
	<nav class="menu">
	<ul>
		<li><a href="<?php echo APP_URL; ?>users">Usuarios</a></li>
		<li><a href="<?php echo APP_URL; ?>accounts">Cuentas</a></li>
		<li><a href="<?php echo APP_URL; ?>categories">Categorías</a></li>
		<li><a href="<?php echo APP_URL; ?>transactions">Transaciones</a></li>
		<li><a href="<?php echo APP_URL; ?>users/logout">Cerrar sesión</a></li>
		</ul>
	</nav>
</div>
</header>
<div class="contenedor">
<p>
Este es una página de transacciones básica, sea bienvenido, la UTRM bank esta siempre a su disposición.
</p>
	
</div>
<link rel="stylesheet" href="<?php echo APP_URL_CSS?>estilos.css">
 <?php 
 if (isset($_SESSION['username'])): ?>
 	<h2>Bievenido <?php echo $_SESSION['username']; ?> </h2>
<?php endif; ?>
 
