<?php 

    include 'baseDeDatos.php';

    session_start();

    $id_agricultor = $_SESSION['usuario_id'];
    

    $productos = "SELECT id_producto, nombre_producto, precio_producto_kg, tipo_producto, agricultor_producto, imagen_producto FROM productos WHERE agricultor_producto = '$id_agricultor' ";
    $producto = mysqli_query($conexion, $productos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agropwa</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/misProductos.css?7.0">
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
            include_once 'soloAgricultor.php';

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
            <?php if($tipo=="Cliente"){ ?>
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
            <?php } elseif($tipo=="Agricultor"){ ?>  
                <div class="container container--flex">
                    <span class="icon-menu" id="btnmenu"></span>
                    <ul class="menu" id="menu">
                        <li class="menu__item"><a href="inicio.php" title="Inicio" class="menu__link  menu__link--select">Inicio</a></li>
                        <li class="menu__item"><a href="perfila1.php"  title="Perfil" class="menu__link">Perfil</a></li>
                        <li class="menu__item"><a href="misProductos.php"  title="Perfil" class="menu__link">Mis Productos</a></li>
                    </ul>  
                    <div class="social-icon">
                        <a class="cerrar" href="cerrar.php">Cerrar Sesión</a>
                    </div>
                </div>
            <?php }  ?>
                    
        </nav>

        <section class="banner">
        	<img class="banner__img" src="img/banner2.jpg" alt="">
			<div class="banner__content">¡Bienvenido <span style="color:#44bd32 "> Agrícultor!</span></div>
			<div class="banner__content2">Esta es su sección registro de productos</div>
        </section>
        
        <main class="main">
            <div class="contenedoriniciarsesion" >
            <h2>Mis Productos</h2>    
            
                <table class="tabla">
                    <tr>
                        <td class="td">Nombre</td>
                        <td class="td">Precio</td>
                        <td class="td">Tipo</td>
                        <td class="operacion">Operación</td>
                    </tr>
                    

                    <?php 
                        while($fila_producto = mysqli_fetch_array($producto)){ ?>

                        <tr>
                            <td class="td"><?php echo $fila_producto['nombre_producto'] ?></td>
                            <td class="td"><?php echo $fila_producto['precio_producto_kg'] ?></td>
                            <td class="td"><?php echo $fila_producto['tipo_producto'] ?></td>
                            <td class="operacion">
                                <!-- ENVIAMOS EL ID POR URL -->
                                <a href="editar.php?id=<?php echo $fila_producto['id_producto']; ?>" class="btnEditar" >Editar</a>
                                <a href="proceso_eliminar.php?id=<?php echo $fila_producto['id_producto']; ?>" class="btnEliminar" >Eliminar</a>
                            </td>
                        </tr>
                        
                    <?php } ?>

                </table>

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
    <script src="js/precio.js"></script>
    <script src="js/alertaEliminar.js"></script>
</body>
</html>