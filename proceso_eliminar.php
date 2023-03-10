<?php

    include 'baseDeDatos.php';

    $id = $_GET['id'];

    $consulta = "DELETE FROM productos WHERE id_producto = '$id' ";
    $eliminar = mysqli_query($conexion, $consulta);

    if($eliminar){

        echo "<script> 
            alert('Exito al eliminar');
            window.location= 'misProductos.php'
        </script>";

    } else {
        echo "<script> alert('Fallo al eliminar') </script>";
    }

?>