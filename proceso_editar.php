<?php

    include 'baseDeDatos.php';

    $id=$_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];
    

    /* -------------------------------------------DATOS IMAGEN---------------------------------------------*/




        $editar="UPDATE productos SET nombre_producto = '$nombre', precio_producto_kg = '$precio', tipo_producto='$tipo' WHERE id_producto = '$id' ";
        $actualizar = mysqli_query($conexion, $editar);
        if($actualizar){
            echo "<script> 
                alert('Actualización Exitosa');
                window.location= 'misProductos.php'
            </script>";    
        } 



    


?>