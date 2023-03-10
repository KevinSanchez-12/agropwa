<?php

	// Incluimos nuestro archivo de conexión baseDeDatos.php
	include 'baseDeDatos.php';

	$mensaje = null;
	$mensaje_dni = null;
	$mensaje_nombre = null;
	$mensaje_contrasena = null;
	$mensaje_correo = null;
	$mensaje_tipo = null;


	// Verificamos que los campos enviados no estén vacios
	if(!empty($_POST['dni']) && !empty($_POST['nombre']) && !empty($_POST['correo']) && 
	!empty($_POST['contrasena']) && !empty($_POST['confirmar_contrasena'])){

		// Guardamos los datos enviados por el usuario
			$dni = $_POST['dni'];
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$contrasena = $_POST['contrasena'];
			$confirmar_contrasena = $_POST['confirmar_contrasena'];
			// Encriptamos contraseña 
			$contrasena_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);
			$tipo_usuario = $_POST['tipo'];

		// VALIDACIÓN DE USUARIO EXISTENTE 

			/* ------------------------------DNI-------------------------------- */


				$consultar_dni_cliente = "SELECT dni FROM clientes WHERE dni = '$dni' ";
				$usuario_dni_cliente = mysqli_query($conexion, $consultar_dni_cliente);
				$campos_usuario_dni_cliente = mysqli_fetch_array($usuario_dni_cliente);


				$consultar_dni_agricultor = "SELECT dni FROM agricultores WHERE dni = '$dni' ";
				$usuario_dni_agricultor = mysqli_query($conexion, $consultar_dni_agricultor);
				$campos_usuario_dni_agricultor = mysqli_fetch_array($usuario_dni_agricultor);


			if($campos_usuario_dni_cliente>0){
				$mensaje_dni= "Ya existe, intenta con otro";
				/* alert('Este correo ya existe, intenta con otro');  */
				echo "
				<script> 
					windows.history.back();
				</script>
				";
			} else if ($campos_usuario_dni_agricultor>0){
				$mensaje_dni= "Ya existe, intenta con otro";
				/* alert('Este correo ya existe, intenta con otro');  */
				echo "
				<script> 
					windows.history.back();
				</script>
				";
			} 


			
			/* -------------------------------CORREO-------------------------------- */
			

				$consultar_correo_cliente= "SELECT dni, correo FROM clientes WHERE correo = '$correo' ";
				$usuario_correo_cliente = mysqli_query($conexion, $consultar_correo_cliente);
				$campos_usuario_correo_cliente = mysqli_fetch_array($usuario_correo_cliente);


				$consultar_correo_agricultor = "SELECT dni, correo FROM agricultores WHERE correo = '$correo' ";
				$usuario_correo_agricultor = mysqli_query($conexion, $consultar_correo_agricultor);
				$campos_usuario_correo_agricultor = mysqli_fetch_array($usuario_correo_agricultor);


			if($campos_usuario_correo_cliente>0){
				$mensaje_correo = "Ya existe, intenta con otro";
				/* alert('Este correo ya existe, intenta con otro');  */
				echo "
				<script> 
					windows.history.back();
				</script>
				";
			} else if ($campos_usuario_correo_agricultor>0){
				$mensaje_correo = "Ya existe, intenta con otro";
				/* alert('Este correo ya existe, intenta con otro');  */
				echo "
				<script> 
					windows.history.back();
				</script>
				";
			}
		/* ------------------------------------------------------------------------------------------------------------------- */

		/*----------------------------------------------------------- REGISTRO---------------------------------------------------------- */

		if(!isset($campos_usuario_dni_clie) && !isset($campos_usuario_dni_agricultor)  && !isset($campos_usuario_correo_cliente) && !isset($campos_usuario_correo_agricultor) && strlen($dni)>7 
		&& strlen($dni)<9 && !preg_match('/[1-9]/', $nombre)  && strlen($contrasena)>7 && preg_match("/[A-Z]/",$contrasena) 
		&& preg_match("/[a-z]/",$contrasena) && preg_match("/[1-9]/",$contrasena) && $contrasena == $confirmar_contrasena && $tipo_usuario != ""){
	
			if($tipo_usuario == "Cliente"){
				// Creamos un nuevo usario a través de las consultas mysql
				$datos_usuario = "INSERT INTO clientes(dni, nombre, correo, contrasena, confirmar_contrasena, tipo_usuario) VALUES ('$dni', '$nombre', '$correo', '$contrasena_encriptada', '$confirmar_contrasena', '$tipo_usuario')";			
				// Ejecutamos la consulta con prepare
				$declarar = mysqli_query($conexion, $datos_usuario);		
				// Comprobar la ejecución correcta
				if($declarar) {
					echo "
						<script> 
							alert('REGISTRO EXITOSO') 
						</script>";
					header('Location: /nuevo/Agropwa2020/inicioSesion.php');

				}
			} elseif($tipo_usuario == "Agricultor"){
				// Creamos un nuevo usario a través de las consultas mysql
				$datos_usuario = "INSERT INTO agricultores(dni, nombre, correo, contrasena, confirmar_contrasena, tipo_usuario) VALUES ('$dni', '$nombre', '$correo', '$contrasena_encriptada', '$confirmar_contrasena', '$tipo_usuario')";		
				// Ejecutamos la consulta con prepare
				$declarar = mysqli_query($conexion, $datos_usuario);		
				// Comprobar la ejecución correcta
				if($declarar) {
					echo "
						<script> 
							alert('REGISTRO EXITOSO') 
						</script>";
					header('Location: /nuevo/Agropwa2020/inicioSesion.php');
				}
			}

		} else {
			echo "<script> alert('No se pudo registrar') </script>";
		}

		/* --------------------------------------------VALIDACIÓN DE CAMPOS---------------------------------------------------------*/


		if(strlen($dni)<8 || strlen($dni)>8){
			$mensaje_dni = "El DNI no es válido";
		}
		if(preg_match('/[1-9]/', $nombre)){
			$mensaje_nombre = "No puede contener números";
		}
		if($correo == ""){
			$mensaje_correo= "Por favor ingrese el correo que desea registrar";
		}
		if($contrasena == "" || strlen($contrasena)<8){
			$mensaje_contrasena = "Mínimo 8 carácteres";
		}
		if (!preg_match("/[A-Z]/",$contrasena) || !preg_match("/[a-z]/",$contrasena) || !preg_match("/[1-9]/",$contrasena) ){
			$mensaje_contrasena = "Mín(1 Mayús,1 Minús y 1 num)";					
		}	
		if($contrasena != $confirmar_contrasena){
			$mensaje = "Debe ser igual a contraseña";
		}
		if($tipo_usuario == ""){
			$mensaje_tipo = "Escoge un tipo de usuario por favor";
		}

 	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agropwa ❘ Registro</title>
	<link rel="icon" href="img/logoagro.ico">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/registro.css?3.0">
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
	<div class="contenedoriniciarsesion" >
		<h2>Registrarse</h2>
		<div class="iconos">
			<img class="icon icondni" src="img/dni-r.png" alt="">
			<img class="icon icondatos" src="img/user-r.png" alt="">
			<img class="icon icongmail" src="img/gmail-r.png" alt="">
			<img class="icon iconcontra" src="img/password-r.png" alt="">
			<img class="icon iconcontra" src="img/passwordconfi-r.png" alt="">	
		</div>
			<form class="inputs" action="registro.php" method="post">

			<input class="input inputdni" name="dni" value="<?php echo $_POST['dni']?>"  type="number" placeholder="DNI" required>
			<?php if(!empty($mensaje_dni)): ?>
				<p class="mensajes"><?php echo $mensaje_dni;?></p>
			<?php endif; ?>

			<input class="input inputdatos" name="nombre" value="<?php echo $_POST['nombre']?>" type="text" placeholder="Nombres y Apellidos" required>
			<?php if(!empty($mensaje_nombre)): ?>
				<p class="mensajes"><?php echo $mensaje_nombre;?></p>
			<?php endif; ?>

			<input class="input inputcorreo" name="correo" value="<?php echo $_POST['correo']?>" type="email" placeholder="Correo electrónico" required>
			<?php if(!empty($mensaje_correo)): ?>
				<p class="mensajes"><?php echo $mensaje_correo;?></p>
			<?php endif; ?>

			<input class="input inputcontra" name="contrasena" value="<?php echo $_POST['contrasena']?>" type="password" placeholder="Contraseña" required>
			<?php if(!empty($mensaje_contrasena)): ?>
				<p class="mensajes"><?php echo $mensaje_contrasena;?></p>
			<?php endif; ?>

			<input class="input inputcontraconfi" name="confirmar_contrasena" value="<?php echo $_POST['confirmar_contrasena']?>" type="password" placeholder="Confirmar Contraseña" required>
			<?php if(!empty($mensaje) || !empty($mensaje_dni)): ?>
				<p class="mensajes"><?php echo $mensaje; ?></p>
			<?php endif; ?>

			<div class="tipo">
				<select id="tipo_usuario" class="tipo_usuario" name="tipo" autocomplete="off">
					<option value="" class="input Cliente">Tipo de Usuario</option>
					<option value="Agricultor" class="input Agricultor">Agricultor</option>
					<option value="Cliente" class="input Cliente">Cliente</option>
				</select>
			</div>
			<?php if(!empty($mensaje_tipo)): ?>
				<p class="mensajes"><?php echo $mensaje_tipo;?></p>
			<?php endif; ?>

			<!-- AGREGAR EL BOTON SUBMIT PARA ENVIAR DATOS -->
			<input type="submit" value="Registrarse" class="btnlogeo">
		</form>
		
	</div>
	
	<img class="logo" src="img/logoregistro.svg" alt="">
	<h3 class="encuentranos">Encuéntranos en:</h3>
	<div class="contenedoricon2">
		<a href=""><img src="img/slackiconblack.png" alt=""></a>
		<a class="iconlinkedin" href=""><img src="img/linkediniconblack.png" alt=""></a>
	</div>
	<h4 class="copy">Copyright © 2020 Agropwa. Todos los Derechos Reservados.</h4>
</body>
</html>