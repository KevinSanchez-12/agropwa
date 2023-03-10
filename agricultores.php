<?php 

	include 'baseDeDatos.php';

    $agricultores = "SELECT * FROM agricultores";
	$agricultor = mysqli_query($conexion, $agricultores);
	

	$productos = "SELECT * FROM productos";
	$producto = mysqli_query($conexion, $productos);
	

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agropwa ❘ Agricultores</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/agricultores.css?5.0">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/boton.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Didact+Gothic&family=Thasadith:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logoagro.ico">
</head>
<body bgcolor="white">

		<?php

			include_once 'nombre.php';
			include_once 'soloCliente.php';

        ?>
        
        <header class="main-header">
            <div class="container container--flex">
            <div class="logo-container column column--50">
              <div class="space1"></div>
               <img href="index.html" class="logoagro" src="img/logoagro.ico" alt="">
                <a href="index.html" style="text-decoration:none"><h1 class="logo">Agropwa</h1></a>

				  		<img class="imagenusuario" src="img/user1.png">
						
						<div class="nombreusuario">
				  	        <?php echo $nombre . "</br>" . $tipo; ?>
                        </div>

                <div class="space1"></div> 
                <div class="space1"></div>    
            </div>
            </div>
        </header>
        <nav class="main-nav">
            <div class="container container--flex">
                <span class="icon-menu" id="btnmenu"></span>
                <ul class="menu" id="menu">
                    <li class="menu__item"><a href="inicio.php" title="Inicio" class="menu__link  menu__link--select">Inicio</a></li>
                    <li class="menu__item"><a href="agricultores.php"  title="Compra" class="menu__link">Compra</a></li>
                    <li class="menu__item"><a href="nosotros.php"  title="Nosotros" class="menu__link">Nosotros</a></li>
                    <li class="menu__item"><a href="galeria.html" title="Galería" class="menu__link">Galería</a></li>
                </ul>
                <div class="social-icon">
                    <a class="cerrarsesion" href="cerrar.php">Cerrar Sesión</a>
                </div>
            </div>
        </nav>
        <section class="banner">
        	<img class="banner__img" src="img/banner3.jpg" alt="">
			<div class="banner__content">¡Contacta a nuestros<span style="color:#44bd32 "> Agricultores!</span></div>
			<div class="banner__content2">Visita los perfiles</div>
        </section>
        <div class="titulo">
        	<h2><span>N</span>uestros Agricultores</h2>
        </div>
       <div class="espacioperfiles"></div>
		<span class="ir-arriba icon-ea41"></span>

		<div class="contenidoitem">
			<?php while($fila_agricultor = mysqli_fetch_array($agricultor)){ ?>
					<div class="agricultor1">

								<img class="agricultorimg" src="img/agricultor1.png" alt="">
								<img class="agricultor1usericon3" src="img/userperfil.png" alt="">
								<h2 class="agricultor1nombre"><?php echo $fila_agricultor['nombre'];?></h2>
								<h3 class="agricultorproductos">Productos:</h3>
								<?php while($fila_producto = mysqli_fetch_array($producto)){ ?>
									
											
											<table class="tabla">
												<tr>
													<img class="check1" src="img/check.png" alt="">
													<td class="agricultor1producto1">
														<?php 
															echo $fila_producto['nombre_producto'];
														?>
													</td>
												<tr>
											</table>

									
								<?php } ?>
								<h3 class="agricultorvaloracion">Valoración:</h3>
								<img class="agricultor1valoracion1" src="img/star.png" alt="">
								<img class="agricultor1valoracion2" src="img/star.png" alt="">
								<img class="agricultor1valoracion3" src="img/star.png" alt="">
								<img class="agricultor1valoracion4" src="img/star.png" alt="">
								<div class="espacioa"></div>
								<a href="perfila1.php?correo_agricultor=<?php echo $fila_agricultor['correo'];?>&id=<?php echo $fila_agricultor['id'];?>&nombre_agricultor=<?php echo $fila_agricultor['nombre'];?>" class="agricultorbtnperfil" title="Visitar Perfil" >Visitar Perfil</a>


					</div>
			<?php } ?>				
		</div>
        <section>
            <div class="footerx">
               <div class="espacioimg"></div>
                <img class="logofooter" src="img/logoagro.png" alt="">
                <div class="menuf">
                	<h1>Menú</h1>
                	<div class="espaciof"></div>
                	<a href="inicio.php"><span class="iniciofooter" >Inicio</span></a>
                	<div class="espaciof1"></div>
                	<a href="agricultores.html"><span class="agricultoresfooter" >Agricultores</span></a>
                	<div class="espaciof2"></div>
                	<a href="galeria.html"><span class="galeriafooter">Galería</span></a>
                </div>
                <div class="productosf">
                	<h1>Productos</h1>
                	<div class="espaciof"></div>
                	<a href="frutas.php"><span class="frutasfooter">Frutas</span></a>
                	<div class="espaciof1"></div>
                	<a href="verduras.php"><span class="verdurasfooter">Verduras</span></a>
                </div>
                <div class="soportef">
                	<h1>Soporte</h1>
                	<div class="espaciof"></div>
                	<a href="consultas.php">Consultas</a>
                	<div class="espaciof"></div>
                	<a href="comoPertenecer.php">¿Cómo pertener a Agropwa?</a>
                	<div class="espaciof"></div>
                	<a href="comoComprar.php">¿Como comprar productos?</a>
                </div>
                <div>
                	<a href="" title="Facebook"><img class="logofbfooter" src="img/fbwhite.png" alt=""></a>
                	<a href="" title="Instagram"><img class="logoinstafooter" src="img/instagramwhite.png" alt=""></a>
                	<a href="" title="WhatsApp"><img class="logowsptfooter" src="img/wsptwhite.png" alt=""></a>
                </div>
                <div class="espaciobtn"></div>
                <h3 class="copy">Copyright © 2020 Agropwa. Todos los Derechos Reservados.</h3>
            </div>
        </section>
        
<script src="js/menu.js"></script>
<script src="js/btnarriba.js"></script>
<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>