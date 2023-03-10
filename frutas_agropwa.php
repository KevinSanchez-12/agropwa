<?php 

    include 'baseDeDatos.php';

    session_start();

    $frutas = "SELECT id, nombre, precio, proveedor FROM frutas_agro WHERE nombre = 'Mandarina'";

    $ejecutar_frutas = mysqli_query($conexion, $frutas);

    if($datos_frutas = mysqli_fetch_array($ejecutar_frutas)){

        $_SESSION['frutas_id'] = $datos_frutas['id'];
        $_SESSION['frutas_nombre'] = $datos_frutas['nombre'];
        $_SESSION['frutas_precio'] = $datos_frutas['correo'];
        $_SESSION['frutas_proveedor'] = $datos_frutas['id'];

    }

?>