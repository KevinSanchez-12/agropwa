<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECUPERAR CONTRASEÑA</title>
    <link rel="stylesheet" href="css/imagen.css">
</head>

<body>
        <?php

            include 'baseDeDatos.php';

            $consultaimagen = "SELECT * FROM imagenes WHERE id_imagen = 13";
            $imprimirImagen = mysqli_query($conexion, $consultaimagen);
            $imagen = mysqli_fetch_array($imprimirImagen);
            echo $imagen['imagen']; 

        ?>

		<form class="inputs" action="subir.php" method="post" enctype="multipart/form-data" >
            <h2>SUBIR ARCHIVO</h2>
            <input class="inputarchivo" name="file"  type="file"> <br>
			<input type="submit" name="Registrar" class="btnlogeo">
        </form>

        <img src="" width=200px height=300px>

</body>
</html>