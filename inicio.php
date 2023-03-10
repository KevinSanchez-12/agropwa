<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agropwa</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css?3.0">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/boton.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Didact+Gothic&family=Thasadith:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logoagro.ico">
</head>
<body bgcolor="white">

        <!-- TRABAJAMOS DENTRO DE HTML PARA LA CONEXIÓN DIRECTA DE LOS DATOS -->
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
                    <li class="menu__item"><a href="nosotros.php"  title="Nosotros" class="menu__link">Nosotros</a></li>
                    <li class="menu__item"><a href="galeria.html" title="Galería" class="menu__link">Galería</a></li>
                </ul>
                <div class="social-icon">
                    <a class="cerrar" href="cerrar.php">Cerrar Sesión</a>
                </div>
            </div>
        </nav>
        <section class="banner">
        	<img class="banner__img" src="img/banner2.jpg" alt="">
			<div class="banner__content">¡Los mejores productos <span style="color:#44bd32 "> Agrícolas!</span></div>
			<div class="banner__content2">Al alcance de tus manos</div>
        </section>
        
        <main class="main">
                <h2 class="main__title" style="text-align: center;font-size: 80px"><span style="color:#44bd32;text-align: center">A</span>gropwa</h2>
            
            <section>
            	<div class="contentfrutas"></div>
                <img class="contentfrutas1" src="img/fresa.jpg" alt="">
                <h2 class="contenttitlefrutas">Frutas</h2>
          		<p class="contentdescriptionfrutas">Las mejores frutas de las Provincias de Cañete y Chincha. Frutas con una excelente calidad, con certificado del <b>SENASA</b>.</p>
          		<p class="contentdescription2frutas">Para más información haga clic en <b>Ver Productos</b>.</p>
          		<div class="spaciobtn"></div>
                <a href="frutas.php" class="btnverproduc">Ver Productos</a>
            </section>
            <section>
            	<div class="contentfrutas"></div>
                <img class="contentfrutas1" src="img/arverja.jpg" alt="">
                <h2 class="contenttitlefrutas">Verduras</h2>
          		<p class="contentdescriptionfrutas">Las mejores verduras de las Provincias de Cañete y Chincha. Verduras con una excelente calidad, con certificado del <b>SENASA</b>.</p>
          		<p class="contentdescription2frutas">Para más información haga clic en <b>Ver Productos</b>.</p>
          		<div class="spaciobtn"></div>
                <a href="verduras.php" class="btnverproduc">Ver Productos</a>
            </section>
            <section>
            	<div class="contentfrutas"></div>
                <img class="contentfrutas1" src="img/papa.jpg" alt="">
                <h2 class="contenttitlefrutas">Tubérculos</h2>
          		<p class="contentdescriptionfrutas">Las mejores verduras de las Provincias de Cañete y Chincha. Verduras con una excelente calidad, con certificado del <b>SENASA</b>.</p>
          		<p class="contentdescription2frutas">Para más información haga clic en <b>Ver Productos</b>.</p>
          		<div class="spaciobtn"></div>
                <a href="tuberculos.php" class="btnverproduc">Ver Productos</a>
            </section>
            <section>
            	<div class="contentfrutas"></div>
                <img class="contentfrutas1" src="img/cereales.jpg" alt="">
                <h2 class="contenttitlefrutas">Cereales</h2>
          		<p class="contentdescriptionfrutas">Las mejores verduras de las Provincias de Cañete y Chincha. Verduras con una excelente calidad, con certificado del <b>SENASA</b>.</p>
          		<p class="contentdescription2frutas">Para más información haga clic en <b>Ver Productos</b>.</p>
          		<div class="spaciobtn"></div>
                <a href="cereales.php" class="btnverproduc">Ver Productos</a>
            </section>
             
            <div class="espaciobuscador"></div> 
    </main> 
     <main>

   <section class="testimonios">
    <div class="testimonios-title">
    <h2 class="main__title" style="text-align: center;font-size: 80px;margin-top: -130px"><span style="color:#44bd32;text-align: center">T</span>estimonios</h2>
    </div>

     <div class="box-testimonio">
      <div class="card-testimonio">
        <div class="card-img"><img src="img/peaple-1.jpg" alt=""></div>
        <div class="testimonio-text">
        <h4>Silvia Castello</h4>
        <p>"¡La plataforma Agropwa me parece genial!, es muy usable, pude contactarme con los agricultores y pedir productos al por mayor para mi minimarket. ¡Se los recomiendo!"</p>
        </div>
      </div>

      <div class="card-testimonio">
          <div class="card-img"><img src="img/peaple-2.jpg" alt=""></div>
          <div class="testimonio-text">
          <h4>Maribel Magallanes</h4>
          <p>"¡Agropwa es increíble! pude contactarme de forma directa con los agricultores, lo mejor de todo son los productos a muy bajo precio ¡Excelente!</p>
          </div>
        </div>

        <div class="card-testimonio">
            <div class="card-img"><img src="img/peaple-3.jpg" alt=""></div>
            <div class="testimonio-text">
            <h4>Arturo Sánchez</h4>
            <p>"Me gusta mucho esta plataforma, lo mejor para mí es el cálculo automático de los precios, solo ingreso los Kg y me muestra cuánto me costaría ¡Se los recomiendo!"</p>
            </div>
          </div>

          <div class="card-testimonio">
              <div class="card-img"><img src="img/peaple-4.jpg" alt=""></div>
              <div class="testimonio-text">
              <h4>Ademir Gutiérrez</h4>
              <p>"Me parece genial esta web, puedo comprar productos de calidad para mi negocio, les recomiendo comprar al por mayor ¡sale muy a cuenta!"</p>
              </div>
            </div>
     </div>
   </section>
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