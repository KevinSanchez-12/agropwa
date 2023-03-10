<?php

    $servidor = 'localhost';

    $usuario = 'root';

    $contrasena = '';

    $baseDeDatos = 'agropwa';

    // Establecemos conexion
    $conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDeDatos);
    

    // Verificamos la conexion
   /*  if(!$conexion){

        echo "<script> alert('No estas conectado') </script>";
    
    }else{

        echo "<script> alert('Estas conectado') </script>";

    }
 */

?>

