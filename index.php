<?php

require 'baseDeDatos.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agropwa</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css?1.0">
	<link rel="icon" href="img/logoagro.ico">
</head>
<body>

	<?php 

		// Comprobamos si la sesión se ha iniciado
		session_start();

		/* ------------------------------------------EVITAR SALIR SIN CERRAR SESIÓN--------------------------------------------- */
		if(isset($_SESSION['usuario_id']) || isset($_SESSION['usuario_correo']) || isset(($_SESSION['usuario_nombre']))){
			header('Location: inicio.php');
		}
		/* ----------------------------------------------------------------------------------------------------------------- */
	
	?>

	<div class="box" style="width:1400px; margin:auto">
	<div class="espaciotitulo"></div>
	<a href="index.php" class="tituloagropwa"><span>A</span>gropwa</a>
	<div class="contenedormenu" >
		<a href="consultas.php" title="Más Información">Consultas</a>
		<a href="comoPertenecer.php" title="Más Información">¿Cómo pertenecer a Agropwa?</a>
		<a href="comoComprar.php" title="Más Información">¿Como comprar productos?</a>
	</div>
	<div class="contenedoricon">
		<a href="" title="Facebook"><img src="img/facebookiconblack.png" alt=""></a>
		<a href="" title="WhatsApp"><img src="img/wspticonblack.png" alt=""></a>
		<a href="" title="Instagram"><img src="img/instagramiconblack.png" alt=""></a>
	</div>
	<div class="contenido">
		<h1 class="titulofyv"><span>¡F</span>rutas, <span>V</span>erduras y más!</h1>
		<h3 class="titulodescripcion">¡Los mejores productos agrícolas!</h3>
		<h4 class="titulodescripcion2">Aquí en Agropwa encontrarás productos de calidad con certificado SENASA.</h4>
		<div class="espaciobtn"></div>
		<a class="btnlogin" href="inicioSesion.php" title="Iniciar Sesión">Iniciar Sesión</a>
		<a class="btnregistrarse" href="registro.php" title="Registrarse">Registrarse</a>
		<img class="logo" src="img/logoagro.png" alt="">
		<h3 class="encuentranos">Encuéntranos en:</h3>
		<div class="contenedoricon2">
			<a href="" title="Slack"><img src="img/slackiconblack.png" alt=""></a>
			<a class="iconlinkedin" href="" title="Linkedin"><img src="img/linkediniconblack.png" alt=""></a>
		</div>
		<h4 class="copy">Copyright © 2020 Agropwa. Todos los Derechos Reservados.</h4>
	</div>	
	</div>
</body>
</html>