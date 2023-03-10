<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agropwa ❘ Verduras</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/verduras.css?3.0">
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
                    <li class="menu__item"><a href="agricultores.html"  title="Compra" class="menu__link">Compra</a></li>
                    <li class="menu__item"><a href="nosotros.html"  title="Nosotros" class="menu__link">Nosotros</a></li>
                    <li class="menu__item"><a href="galeria.html" title="Galería" class="menu__link">Galería</a></li>
                </ul>
                <div class="social-icon">
                    <a class="cerrarsesion" href="index.php">Cerrar Sesión</a>
                </div>
            </div>
        </nav>
        <section class="banner">
        	<img class="banner__img" src="img/verdurasbanner.jpg" alt="">
			<div class="banner__content">¡Las mejores<span style="color:#44bd32 "> verduras!</span></div>
			<div class="banner__content2">Al alcance de tus manos</div>
        </section>
        
        <main class="main">
                <h2 class="main__title" style="margin-top:20px; margin-bottom:20px; font-weight: 100; text-align: center;font-size: 80px"><span style="color:#44bd32;text-align: center">¡B</span>usca tu verdura favorita!</h2>
            <div class="espaciobuscador"></div> 
             
            <div class="contenedor">
		<header>
			<form action="">
				<input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Ingresa el nombre de una verdura o el nombre de un agricultor">
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
					 data-etiquetas=" rosario guillen Rosario Guillen zanahoria Zanahoria">
						<div class="item-contenido">
							<img src="img/apple.jpg" alt="">
							<h3>Rosario Guillén</h2>
							<h2>Zanahoria</h2>
							<h1>1.20 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
						</div>
					</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="ademir sanchez Ademir Sanchez rabano Rabano" 
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ademir Sánchez</h2>
							<h2>Rábano</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="francisco magallanes Francisco Magallanes nabo Nabo"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Francisco Magallanes</h2>
							<h2>Nabo</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="maria ochoa Maria Ochoa cebolla Cebolla"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>María Ochoa</h2>
							<h2>Cebolla</h2>
							<h1>0.90 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="merly tueros Merly Tueros ajo Ajo"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Merly Tueros</h2>
							<h2>Ajo</h2>
							<h1>2.40 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="alonso mendoza Alonso Mendoza remolacha Remolacha"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Alonso Mendoza</h2>
							<h2>Remolacha</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="rosario guillen Rosario Guillen esparrago Esparrago"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Rosario Guillén</h2>
							<h2>Espárrago</h2>
							<h1>1.50 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item" 
				 data-categoria="ofertas"
				 data-etiquetas="ademir sanchez Ademir Sanchez apio Apio"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ademir Sánchez</h2>
							<h2>Apio</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>

			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="francisco magallanes Francisco Magallanes espinaca Espinaca"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Francisco Magallanes</h2>
							<h2>Espinaca</h2>
							<h1>1.60 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="maria ochoa Maria Ochoa lechuga Lechuga "
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>María Ochoa</h2>
							<h2>Lechuga</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="merly tueros Merly Tueros arverja Arverja"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Merly Tueros</h2>
							<h2>Arverja</h2>
							<h1>1.70 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="alonso mendoza Alonso Mendoza tomate Tomate"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Alonso Mendoza</h2>
							<h2>Tomate</h2>
							<h1>1.40 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="rosario guillen Rosario Guillen coliflor Coliflor"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Rosario Guillén</h2>
							<h2>Coliflor</h2>
							<h1>1.20 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="ademir sanchez Ademir Sanchez brocoli Brocoli"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ademir Sánchez</h2>
							<h2>Brócoli</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="francisco magallanes Francisco Magallanes alcachofa Alcachofa"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Francisco Magallanes</h2>
							<h2>Alcachofa</h2>
							<h1>1.80 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="maria ochoa Maria Ochoa hongo Hongo"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>María Ochoa</h2>
							<h2>Hongo</h2>
							<h1>1.20 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="merly tueros Merly Tueros pimientos Pimientos"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Merly Tueros</h2>
							<h2>Pimientos</h2>
							<h1>1.60 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="todos"
				 data-etiquetas="rosario guillen Rosario Guillen choclo Choclo"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Rosario Guillén</h2>
							<h2>Choclo</h2>
							<h1>1.10 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="demandadas"
				 data-etiquetas="ademir sanchez Ademir Sanchez zapallo Zapallo"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Ademir Sánchez</h2>
							<h2>Zapallo</h2>
							<h1>1.30 x Kg</h1>
							<a href="frutas.html" class="btnverproduc">Ver Productos</a>
				</div>
			</div>
			<div class="item"
				 data-categoria="ofertas"
				 data-etiquetas="francisco magallanes Francisco Magallanes beterraga Beterraga"
			>
				<div class="item-contenido">
					<img src="img/apple.jpg" alt="">
							<h3>Andrés Almeyda</h2>
							<h2>Beterraga</h2>
							<h1>1.40 x Kg</h1>
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