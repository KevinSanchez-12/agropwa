<?

    $correo = $_POST['correo'];
    if(isset($_POST['contrasena'])){      
        include 'baseDeDatos.php';

        $correo_gmail = mysqli_real_escape_string($conexion, $correo);

        echo $correo_gmail;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECUPERAR CONTRASEÑA</title>
    <link rel="stylesheet" href="css/recuperar.css">
</head>
<body>
    <div class="contenedoriniciarsesion" >
		<h2>Registrarse</h2>
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
</body>
</html>