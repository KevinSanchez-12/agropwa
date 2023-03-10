<?php 

	include 'baseDeDatos.php';

    session_start();

	$id_presente = $_GET['id'];
	$nombre_agricultor_presente = $_GET['nombre_agricultor'];
	$correo_agricultor=$_GET['correo_agricultor'];

	$id_agricultor = $_SESSION['usuario_id'];
	$tipo_usuario=$_SESSION['usuario_tipo'];
    

    $productos = "SELECT * FROM productos";
	$producto = mysqli_query($conexion, $productos);
	$cuadro = mysqli_query($conexion, $productos);

	$certificados = "SELECT * FROM certificados";
	$certificado = mysqli_query($conexion, $certificados);
	$certific = mysqli_fetch_array($certificado);
	$documento = $certific['documento'];
	$id_certificado = $certific['id_agricultorC'];

	$cuentas = "SELECT * FROM cuenta_qr";
	$tablaCuentas = mysqli_query($conexion, $cuentas);
	// $array_cuentas = mysqli_fetch_array($cuenta);
	// $cuenta_qr = $array_cuentas['imagen_qr'];
	// $id_cuenta = $cuenta_qr['id_agricultorC'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agropwa ❘ Julio Córdova</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/perfila1.css?4.8">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/boton.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Didact+Gothic&family=Thasadith:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logoagro.ico">
</head>
<script>
	function sumar() {

var total = 0;

$(".monto").each(function() {

  if (isNaN(parseFloat($(this).val()))) {

	total += 0;

  } else {

	total += parseFloat($(this).val())*1.4;
  }

});

//alert(total);
document.getElementById('spTotal').innerHTML = total;

}
</script>
<body bgcolor="white">

		<?php

			include_once 'nombre.php';

		?>

        <header class="main-header">
            <div class="container container--flex">
            <div class="logo-container column column--50">
              <div class="space1"></div>
               <img href="index.html" class="logoagro" src="img/logoagro.ico" alt="">
                <a href="index.html" style="text-decoration:none"><h1 class="logo">Agropwa</h1></a>
				
						<img class="imagenusuario" src="img/user1.png">
						  
						<div class="nombreusuario">
				  	    	<?php echo $nombre . "</br>". $tipo; ?>
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
						<li class="menu__item"><a href="misProductos.php"  title="Mis Productos" class="menu__link">Mis Productos</a></li>
                    </ul>  
                    <div class="social-icon">
                        <a class="cerrar" href="cerrar.php">Cerrar Sesión</a>
                    </div>
                </div>
            <?php }  ?>
                    
        </nav>

        <section class="banner">
        	<img class="banner__img" src="img/frutasbanner.jpg" alt="">
			<div class="banner__content"> <span style="color:#44bd32 "> <?php echo $nombre_agricultor_presente; ?></span></div>
			<div class="banner__content2">Sunampe - Chincha - Ica</div>
        </section>
        
        <main class="main">
                <div class="tituloinicio">
        			<h2><span>P</span>erfil Agropwa</h2>
        		</div>
        		
        		<section class="contenedorprincipal">
        			<img src="img/agricultor1.png" alt="">
        			<div class="contenedorprincipalsub">
        				<div class="valoracion">
        					<img src="img/check.png" alt="">
        					<h3>Valoración</h3>
        				</div>
        				<div class="valoracionimg">
        					<img src="img/star.png" alt="">
							<img src="img/star.png" alt="">
							<img src="img/star.png" alt="">
							<img src="img/star.png" alt="">
        				</div>
        				<div class="medios">
        					<img src="img/check.png" alt="">
        					<h3>Medios de entrega de pedidos</h3>
        				</div>
        				<div class="mediosimg">
        					<img src="img/trailer.png" alt="">
							<img src="img/carro.png" alt="">
							<img src="img/moto.png" alt="">
        				</div>
        				<div class="certificado">
        					<img src="img/check.png" alt="">
        					<h3>Certificado SENASA</h3>
						</div>
							<?php if($tipo=="Cliente"){ ?>
								<?php if($id_agricultor == $id_certificado){ ?>
									<a href="<?php $documento; ?>" download="Certificado SENASA">Descargar</a>
								<?php }  ?>
							<?php } elseif($tipo=="Agricultor"){ ?>  
								<form action="certificados.php?id=<?php echo $id_agricultor?>" method="post" enctype="multipart/form-data">
									<input type="file" name="file">
									<input type="submit" value="ENVIAR">
								</form>
							<?php }  ?>
        				
        			</div>
        		</section>
        		<section class="contenedorsecundario">
					<h2>¡Calcula el monto de tu compra!</h2>
					<div class="contenedor_tabla">
						<table id="tabla">

							<span>Producto 1</span>
							<input type="text" id="txt_campo_3" class="monto" onkeyup="sumar();" />
							<br/>

							<span>Producto 2</span>
							<input type="text" id="txt_campo_3" class="monto" onkeyup="sumar();" />
							<br/>

							<span>Producto 3</span>
							<input type="text" id="txt_campo_3" class="monto" onkeyup="sumar();" />
							<br/>

							<span>Producto 4</span>
							<input type="text" id="txt_campo_3" class="monto" onkeyup="sumar();" />
							<br/>

							<span>Producto 5</span>
							<input type="text" id="txt_campo_3" class="monto" onkeyup="sumar();" />
							<br/>

							<span>Producto 6</span>
							<input type="text" id="txt_campo_3" class="monto" onkeyup="sumar();" />
							<br/>
							
							<div class="resultado">	
								<span>El resultado es: </span><span id="spTotal"></span><span> soles</span> 
							</div>
						</table>
					</div>
					</section>
					<section class="contenedorterciario">
						<h3>Productos Ofertados</h3>
						
						<div class="contenidoitem">
							<?php while($fila_producto = mysqli_fetch_array($cuadro)){ 
								if($id_agricultor == $fila_producto['agricultor_producto'] || $tipo_usuario =="Cliente"){
								?>
								<div class="item-contenido">
									<img src="<?php echo $fila_producto['imagen_producto']; ?>" alt="PRODUCTO">

									<h2><?php echo $fila_producto['nombre_producto'] ?></h2>
									<h1><?php echo $fila_producto['precio_producto_kg'] ?> x Kg</h1>
								</div>
								<?php } ?>
							<?php } ?>
							
						</div>
						
        		</section>
        		<section class="contenedorcuarto">
        			<h3>Dirección Geográfica</h3>
        			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2307.524232971419!2d-76.16614291254676!3d-13.426081944434292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x729c37b6201512a!2sRestaurante%20Campestre%20%22La%20Chacra%20del%20Abuelo%22!5e0!3m2!1ses!2spe!4v1599553694975!5m2!1ses!2spe" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        		</section>
        		<section class="contenedorquinto">
        			<form action="comentario.php?">
						<h3>¡Realiza tu pedido!</h3>
						<h2 class="descripcionfinal2">Envía un correo a <strong><?php echo $nombre_agricultor_presente;?></strong> y negocien un precio.</h2>
						<div class="contactogeneral2">
							<a class="contacto" href="mailto:<?php echo $correo_agricultor;?>">CONTACTAR</a>
						</div>
					</form>
					
					<p style="text-align:center">Paga por Yape</p>
					<div class="contenedor_qr">
						<?php if($tipo == "Agricultor"){ ?>
							<form style="margin-top:20px" action="subir_qr.php" method="post" enctype="multipart/form-data">
								<input type="file" name="file">
								<input class="boton" type="submit" value="ENVIAR">
							</form>
							<?php
								while($fila_cuentas=mysqli_fetch_array($tablaCuentas)){
									if($id_agricultor == $fila_cuentas["id_agricultorqr"]){
										?>
										<img src="<?php echo $fila_cuentas['imagen_qr'];?>" alt="IMAGEN QR">
							<?php
									}
								}
							?>
						<?php } elseif ($tipo == "Cliente"){ ?>
							<?php
								while($fila_cuentas=mysqli_fetch_array($tablaCuentas)){
									if($id_presente == $fila_cuentas["id_agricultorqr"]){
										?>
										<img src="<?php echo $fila_cuentas['imagen_qr'];?>" alt="IMAGEN QR">
							<?php
									}
								}
							?>
						<?php } ?>
           
					</div>
					
					
        		</section>
        </main> 
        <span class="ir-arriba icon-ea41"></span>
        <footer class="footer">
        	<img class="logo" src="img/logoagro.png" alt="">
        	<div class="contenedorfootergeneral">
        		<div class="contenedorf1">
        			<h2>Agropwa</h2>
        			<p class="descripcionfinal">Somos una empresa que ofrece productos agrícolas de calidad y a bajos precios.</p>
        			<a href="nosotros.php">Saber más</a>
        		</div>
        		<div class="contenedorf2">
        			<h2>Redes Sociales</h2>
        			<p>Encuéntranos en:</p>
        			<div>
						<a href=""><img src="img/fbwhite.png" alt=""></a>
						<a href=""><img src="img/instagramwhite.png" alt=""></a>
						<a href=""><img src="img/wsptwhite.png" alt=""></a>
						<a href=""><img src="img/slackwhite.png" alt=""></a>
        			</div>
        		</div>
        		<div class="contenedorf3">
        			<h2>Información</h2>
        			<p>Contáctanos en:</p>
        			<div>
						<div class="correof">
							<img src="img/emailwhite.png" alt="">
							<h3>consultas@agropwa.com</h3>
						</div>
       					<div class="wsptf">
							<img src="img/wsptwhite.png" alt="">
							<h3>+51 987147390</h3>
						</div>
       					<div class="wsptf">
							<img src="img/slackwhite.png" alt="">
							<h3>Agropwa Consultas</h3>
						</div>
        			</div>
        		</div>
        	</div>
        	<h4>Copyright © 2020 Agropwa. Todos los Derechos Reservados.</h4>
		</footer>
<script src="js/menu.js"></script>
<script src="js/btnarriba.js"></script>
<script src="js/calcular.js"></script>
<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>