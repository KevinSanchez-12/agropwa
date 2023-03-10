<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agropwa ❘ Frutas</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/frutas.css?4.0">
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
                    <li class="menu__item"><a href="agricultores.php"  title="Agricultores" class="menu__link">Agricultores</a></li>
                    <li class="menu__item"><a href="nosotros.html"  title="Nosotros" class="menu__link">Nosotros</a></li>
                    <li class="menu__item"><a href="galeria.html" title="Galería" class="menu__link">Galería</a></li>
                </ul>
                <div class="social-icon">
                    <a class="cerrarsesion" href="index.php">Cerrar Sesión</a>
                </div>
            </div>
        </nav>
        <section class="banner">
        	<img class="banner__img" src="img/frutasbanner.jpg" alt="">
			<div class="banner__content">¡Las mejores<span style="color:#44bd32 "> frutas!</span></div>
			<div class="banner__content2">Al alcance de tus manos</div>
        </section>
        
        <main class="main">
                <h2 class="main__title" style="margin-top:20px; margin-bottom:20px; font-weight: 100; text-align: center;font-size: 80px"><span style="color:#44bd32;text-align: center">¡B</span>usca tu fruta favorita!</h2>
            <div class="espaciobuscador"></div> 
             
            <div class="contenedor">
		<header>
			<form action="">
				<input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Ingresa el nombre de una fruta o el nombre de un agricultor">
			</form>
			<div class="categorias" id="categorias">
				<a href="#" class="activo">Todos</a>
				<a href="#">Demandadas</a>
				<a href="#">Ofertas</a>
			</div>
		</header>
		<section class="grid" id="grid">
					<div class="item" 
					 data-categoria="demandadas"
					 data-etiquetas=" julio cordova Julio Cordova manzana Manzana">
						<div class="item-contenido">
							<img src="img/apple.jpg" alt="">
							<h3>Julio Córdova</h2>
							<h2>Manzana</h2>
							<h1>1.20 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
						</div>
					</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="andres almeyda Andres Almeyda mandarina Mandarina" 
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Andrés Almeyda</h2>
							<h2>Mandarina</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="daniel pelaez Daniel Pelaez granada Granada"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Daniel Pélaez</h2>
							<h2>Granada</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="santiago paredes Santiago Paredes naranja Naranja"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Santiago Paredes</h2>
							<h2>Naranja</h2>
							<h1>0.90 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="lucia levano Lucia Levano arandano Arandano"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Lucía Lévano</h2>
							<h2>Arándanos</h2>
							<h1>2.40 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="ana huaman Ana Huaman platano Platano"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ana Huamán</h2>
							<h2>Plátano</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="julio cordova Julio Cordova pacai Pacai"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Julio Córdova</h2>
							<h2>Pacaí</h2>
							<h1>1.50 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item" 
				 data-categoria="ofertas"
				 data-etiquetas="andres almeyda Andres Almeyda chirimoya Chirimoya"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Andrés Almeyda</h2>
							<h2>Chirimoya</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="daniel pelaez Daniel Pelaez aguaymanto Aguaymanto"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Daniel Pélaez</h2>
							<h2>Aguaymanto</h2>
							<h1>1.60 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="santiago paredes Santiago Paredes uva italia Uva Italia "
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Santiago Paredes</h2>
							<h2>Uva Italia</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="lucia levano Lucia Levano camu Camu"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Lucía Lévano</h2>
							<h2>Camu Camu</h2>
							<h1>1.70 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="ana huaman Ana Huaman carambola Carambola"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ana Huamán</h2>
							<h2>Carambola</h2>
							<h1>1.40 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="julio cordova Julio Cordova sandia Sandia"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Julio Córdova</h2>
							<h2>Sandia</h2>
							<h1>1.20 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="andres almeyda Andres Almeyda uva blanca Uva Blanca"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Andrés Almeyda</h2>
							<h2>Uva Blanca</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="daniel pelaez Daniel Pelaez cereza Cereza"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Daniel Pélaez</h2>
							<h2>Cereza</h2>
							<h1>1.80 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="santiago paredes Santiago Paredes ciruela Ciruela"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Santiago Paredes</h2>
							<h2>Ciruela</h2>
							<h1>1.20 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="lucia levano Lucia Levano cocona Cocona"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Lucía Lévano</h2>
							<h2>Cocona</h2>
							<h1>1.60 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="ana huaman Ana Huaman pitahaya Pitahaya"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ana Huamán</h2>
							<h2>Pitahaya</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="julio cordova Julio Cordova durazno Durazno"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Julio Córdova</h2>
							<h2>Durazno</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="andres almeyda Andres Almeyda tumbo Tumbo"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Andrés Almeyda</h2>
							<h2>Tumbo</h2>
							<h1>1.40 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="daniel pelaez Daniel Pelaez fresa Fresa"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Daniel Pélaez</h2>
							<h2>Fresa</h2>
							<h1>4.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="santiago paredes Santiago Paredes guanabano Guanabano"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Santiago Paredes</h2>
							<h2>Guanábano</h2>
							<h1>1.20 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas=" lucia levano Lucia Levano higo Higo"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Lucía Lévano</h2>
							<h2>Higo</h2>
							<h1>1.50 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="ana huaman Ana Huaman lucuma Lucuma"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ana Huamán</h2>
							<h2>Lúcuma</h2>
							<h1>1.90 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="julio cordova Julio Cordova menbrillo Menbrillo"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Julio Córdova</h2>
							<h2>Menbrillo</h2>
							<h1>1.40 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="andres almeyda Andres Almeyda palta Palta"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Andrés Almeyda</h2>
							<h2>Palta</h2>
							<h1>2.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="daniel pelaez Daniel Pelaez palta Palta fuerte Fuerte"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Daniel Pélaez</h2>
							<h2>Palta Fuerte</h2>
							<h1>5.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="santiago paredes Santiago Paredes papaya Papaya"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Santiago Paredes</h2>
							<h2>Papaya</h2>
							<h1>1.20 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="lucia levano Lucia Levano pepino Pepino"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Lucía Lévano</h2>
							<h2>Pepino</h2>
							<h1>1.00 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="ana huaman Ana Huaman nispero Nispero"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ana Huamán</h2>
							<h2>Níspero</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="julio cordova Julio Cordova uva negra Uva Negra"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Julio Córdova</h2>
							<h2>Uva Negra</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="andres almeyda Andres Almeyda pera Pera"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Andrés Almeyda</h2>
							<h2>Pera</h2>
							<h1>6.50 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
		</section>
	</div>
    </main> 
        <span class="ir-arriba icon-ea41"></span>

        
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