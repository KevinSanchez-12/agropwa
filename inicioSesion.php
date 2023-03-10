<?php

	// Incluimos nuestro archivo de conexión baseDeDatos.php
	include 'baseDeDatos.php';

	$mensaje = '';

	// Verificamos que los campos no estén vacios
	if(!empty($_POST['correo']) && !empty($_POST['contrasena'])){

		// Inicamos sesión 
		session_start();
		
		// Guardamos los datos enviados por el usuario
		$correo = $_POST['correo'];
		$contrasena = $_POST['contrasena'];

		/* LOGIN CLIENTES */
		// Buscamos en la Base de Datos con las consulas mysql -- verificamos la existencia del campo $correo ingresado por el usuario
		// Dentro de la consulta los campos enviados por el usuario deben ir dentro comillas 
		// Ejm: $contrasena $_POST['contrasena'] --> where contrasena = '$contrasena'
		$registros = "SELECT nombre, correo, contrasena, confirmar_contrasena, tipo_usuario FROM clientes WHERE correo = '$correo'";
		// Ejecutamos la consulta
		$buscar_registros = mysqli_query($conexion, $registros);
		// Recorremos la fila de los datos del usuario 
		$datos_usuario = mysqli_fetch_array($buscar_registros);
		// Comparamos si existe la contraseña ingresada por el usuario en el campo contraseña de la BD
		if(password_verify($contrasena, $datos_usuario['contrasena'])){
			$_SESSION['usuario_id'] = $datos_usuario['id'];
			$_SESSION['usuario_correo'] = $datos_usuario['correo'];
			$_SESSION['usuario_nombre'] = $datos_usuario['nombre'];
			$_SESSION['usuario_tipo']=$datos_usuario['tipo_usuario'];
			// Indicamos a donde queremos redireccionar al usuario
			header("Location: /Agropwa2020/inicio.php");
		} else{
			$mensaje = "El correo o la contraseña no son correctos";
		}

		/* LOGIN AGRICULTORES */
		// Buscamos en la Base de Datos con las consulas mysql -- verificamos la existencia del campo $correo ingresado por el usuario
		// Dentro de la consulta los campos enviados por el usuario deben ir dentro comillas 
		// Ejm: $contrasena $_POST['contrasena'] --> where contrasena = '$contrasena'
		$registrosA = "SELECT id, dni, nombre, correo, contrasena, confirmar_contrasena, tipo_usuario FROM agricultores WHERE correo = '$correo'";
		// Ejecutamos la consulta
		$buscar_registrosA = mysqli_query($conexion, $registrosA);
		// Recorremos la fila de los datos del usuario 
		$datos_usuarioA = mysqli_fetch_array($buscar_registrosA);
		// Comparamos si existe la contraseña ingresada por el usuario en el campo contraseña de la BD
		if(password_verify($contrasena, $datos_usuarioA['contrasena'])){
			$_SESSION['usuario_id'] = $datos_usuarioA['id'];
			$_SESSION['usuario_dni'] = $datos_usuarioA['dni'];
			$_SESSION['usuario_correo'] = $datos_usuarioA['correo'];
			$_SESSION['usuario_nombre'] = $datos_usuarioA['nombre'];
			$_SESSION['usuario_tipo']=$datos_usuarioA['tipo_usuario'];
			// Indicamos a donde queremos redireccionar al usuario
			header("Location: /Agropwa2020/inicioAgricultor.php");
		} else{
			$mensaje = "El correo o la contraseña no son correctos";
		}

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agropwa ❘ Inicio de Sesión</title>
	<link rel="icon" href="img/logoagro.ico">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/inicioSesion.css?2.0">
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

	<div class="espaciotitulo"></div>
	<a href="index.php" class="tituloagropwa"><span>A</span>gropwa</a>
	<div class="contenedormenu">
		<a href="index.php">Inicio</a>
		<a href="consultas.php" title="Más Información">Consultas</a>
		<a href="comoPertenecer.php" title="Más Información">¿Cómo pertenecer a Agropwa?</a>
		<a href="comoComprar.php" title="Más Información">¿Como comprar productos?</a>
	</div>
	<div class="contenedoricon">
		<a href="" title="Facebook"><img src="img/facebookiconblack.png" alt=""></a>
		<a href="" title="WhatsApp"><img src="img/wspticonblack.png" alt=""></a>
		<a href="" title="Instagram"><img src="img/instagramiconblack.png" alt=""></a>
	</div>
	<form action="inicioSesion.php" method="post">
		<div class="contenedoriniciarsesion">
		<h2>Iniciar Sesión</h2>
		<img class="iconusuario" src="img/user-r.png" alt="">
		<input required class="inputcorreo" type="text" placeholder="Ingresa tu correo" name="correo" id="nombre" value="<?php echo $_POST['correo']?>">
		<img class="iconcontra" src="img/password-r.png" alt="">
		<input class="inputcontra" name="contrasena" type="password" placeholder="Contraseña" value="<?php echo $_POST['contrasena']?>">
		<input type="submit" value="Iniciar Sesión" class="btnlogeo">

		<div class="mensaje">
			<?php if(!empty($mensaje)): ?>
				<p class="mensaje_text">
					<?= $mensaje ?>
				</p>
			<?php endif; ?>
		</div>
		
	</div>
	</form>
	<img class="logo" src="img/logologin.svg" alt="">
	<h3 class="encuentranos">Encuéntranos en:</h3>
	<div class="contenedoricon2">
		<a href="" title="Slack"><img src="img/slackiconblack.png" alt=""></a>
		<a class="iconlinkedin" href="" title="Linkedin"><img src="img/linkediniconblack.png" alt=""></a>
	</div>
	<h4 class="copy">Copyright © 2020 Agropwa. Todos los Derechos Reservados.</h4>
</body>
</html>