<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agropwa ❘ Nosotros</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/nosotros.css?3.0">
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
                    <a class="cerrarsesion" href="cerrar.php">Cerrar Sesión</a>
                </div>
            </div>
        </nav>
        <section class="banner">
        	<img class="banner__img" src="img/banner2.jpg" alt="">
			<div class="banner__content">¡Los mejores productos <span style="color:#44bd32 "> Agrícolas!</span></div>
			<div class="banner__content2">Al alcance de tus manos</div>
        </section>

 </main>

        <span class="ir-arriba icon-ea41"></span>
		<section>
            <div>
               <div class="cuadro"></div>
                <div class="imgkevinxxx1">
                  <img class="imgkevinxxx" src="img/kevin.jpg" alt="img">
                </div>
                <h1 class="h1kevin">Giuliana <span class="spankevin">Paredes</span></h1>
                <h3 class="h3kevin1">Estudiante de Ingeniería de Sistemas</h3>
                <h3 class="h3kevin2">Universidad Nacional de Cañete</h3>
                <p class="pkevin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At error dolore, consequuntur. Dolorem magni autem, nemo, saepe dignissimos, quam cumque dolorum laborum fugit voluptate pariatur esse magnam iusto suscipit impedit.</p>
                <a class="descargar" href="">Descargar Hoja de Vida</a>
                <div class="logokevin1">
                    <a class="alogo" href=""><img src="img/logocircularfb.png" title="Facebook"></a>
                </div>
                <div class="logokevin2">
                    <a class="alogo" href=""><img src="img/logocircularwspt.png" title="Facebook"></a>
                </div>
                <div class="logokevin3">
                    <a class="alogo" href=""><img src="img/logocircularlinkedin.png" title="Facebook"></a>
                </div>
            </div>
            <div>
               <div class="cuadro"></div>
                <div class="imgkevinxxx1">
                  <img class="imgkevinxxx" src="img/kevin.jpg" alt="img">
                </div>
                <h1 class="h1kevin">Angie <span class="spankevin">Sánchez</span></h1>
                <h3 class="h3kevin1">Estudiante de Ingeniería de Sistemas</h3>
                <h3 class="h3kevin2">Universidad Nacional de Cañete</h3>
                <p class="pkevin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At error dolore, consequuntur. Dolorem magni autem, nemo, saepe dignissimos, quam cumque dolorum laborum fugit voluptate pariatur esse magnam iusto suscipit impedit.</p>
                <a class="descargar" href="">Descargar Hoja de Vida</a>
                <div class="logokevin1">
                    <a class="alogo" href=""><img src="img/logocircularfb.png" title="Facebook"></a>
                </div>
                <div class="logokevin2">
                    <a class="alogo" href=""><img src="img/logocircularwspt.png" title="Facebook"></a>
                </div>
                <div class="logokevin3">
                    <a class="alogo" href=""><img src="img/logocircularlinkedin.png" title="Facebook"></a>
                </div>
            </div>
            <div>
               <div class="cuadro"></div>
                <div class="imgkevinxxx1">
                  <img class="imgkevinxxx" src="img/kevin.jpg" alt="img">
                </div>
                <h1 class="h1kevin">Kevin <span class="spankevin">Sánchez</span></h1>
                <h3 class="h3kevin1">Estudiante de Ingeniería de Sistemas</h3>
                <h3 class="h3kevin2">Universidad Nacional de Cañete</h3>
                <p class="pkevin">Hola, soy desarrollador Frelance, mi especialidad son el desarollo móvil, desktop y Proyectos Web's. Tambien he desarrollado proyectos de Desarrollo Móviles en la ultima Hackaton del Ministerio de Transporte y Telecomunicaciones. <br>Los lenguajes que manejo actualmente son: <b>Java</b>,<b> JavaScript</b>,<b> Python</b> y<b> JQuery</b>.</p>
                <a class="descargar" href="">Descargar Hoja de Vida</a>
                <div class="logokevin1">
                    <a target="_blank" class="alogo" href="https://www.facebook.com/kevinsanchezmagallanes"><img src="img/logocircularfb.png" title="Facebook"></a>
                </div>
                <div class="logokevin2">
                    <a target="_blank" class="alogo" href="https://api.whatsapp.com/send?phone=51987147390&text=Hola%20soy%20Kevin,%20en%20que%20te%20puedo%20ayudar?"><img src="img/logocircularwspt.png" title="Facebook"></a>
                </div>
                <div class="logokevin3">
                    <a target="_blank" class="alogo" href="https://www.linkedin.com/in/kevin-arturo-sanchez-magallanes-215420196/"><img src="img/logocircularlinkedin.png" title="Facebook"></a>
                </div>
            </div>
            <div>
               <div class="cuadro"></div>
                <div class="imgkevinxxx1">
                  <img class="imgkevinxxx" src="img/kevin.jpg" alt="img">
                </div>
                <h1 class="h1kevin">Renato <span class="spankevin">Yupanqui</span></h1>
                <h3 class="h3kevin1">Estudiante de Ingeniería de Sistemas</h3>
                <h3 class="h3kevin2">Universidad Nacional de Cañete</h3>
                <p class="pkevin">He desarrollado aplicaciones móviles y webs, además he trabajado en Proyectos para el Ministerio de Transportes y Telecomunicaciones, tambien estoy desarrollando un Proyecto de Webinars con AWS Educate. Mis lenguajes de programación dominadas son: <b>JavaScript</b>, <b>Phyton</b>, <b>Java</b> y <b>JQuery</b>.</p>
                <a class="descargarrenato" href="">Descargar Hoja de Vida</a>
                <div class="logokevin1">
                    <a  target="_blank" class="alogo" href="https://meet.google.com/linkredirect?authuser=0&dest=https%3A%2F%2Fwww.facebook.com%2Frenatoalonso.yupanquiquispe"><img src="img/logocircularfb.png" title="Facebook"></a>
                </div>
                <div class="logokevin2">
                    <a  target="_blank" class="alogo" href="https://api.whatsapp.com/send?phone=51967718928&text=Hola%20soy%20Renato,%20en%20que%20te%20puedo%20ayudar?"><img src="img/logocircularwspt.png" title="Facebook"></a>
                </div>
                <div class="logokevin3">
                    <a  target="_blank" class="alogo" href="https://meet.google.com/linkredirect?authuser=0&dest=https%3A%2F%2Fwww.linkedin.com%2Fin%2Frenato-yupanqui-bb15701a0%2F"><img src="img/logocircularlinkedin.png" title="Facebook"></a>
                </div>
                <div class="logokevin4">
                    <a target="_blank" class="alogo" href="https://meet.google.com/linkredirect?authuser=0&dest=https%3A%2F%2Fbootcamp-institute.slack.com%2Farchives%2FC018HPENBGB"><img src="img/logocircularslack.png" title="Slack"></a>
                </div>
            </div>
        </section>   
         
        
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