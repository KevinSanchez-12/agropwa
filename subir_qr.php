<?php

    include 'baseDeDatos.php';


    //----------------------------------------------------REGISTRO------------------------------------------------------------
    $mensaje_nombre = null;
    $mensaje_precio = null;
    $mensaje_tipo = null;
    $mensaje = null;

    session_start();


    // Reemplazar la variable $id por el dato enviado por el usuario $_SESSION[usuario_id]
    $id_agricultor = $_SESSION['usuario_id'];

    $ruta_temporal = $_FILES["file"]["tmp_name"];
    /* var_dump($_FILES["file"]); */
    $directorio = "cuentas/";
    // OBTENEMOS EL NOMBRE DEL ARCHIVO
    $archivo = $directorio . basename($_FILES["file"]["name"]);
    // OBTENEMOS EL TIPO DE DATO CON PATHINFO_EXTENSION
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    //validar imagen
    $verificarimg = getimagesize($_FILES["file"]["tmp_name"]);
	// Verificamos que los campos enviados no estén vacios
	

            /* REGISTRO */

                    $size = $_FILES["file"]["size"];

                    if($size > 20000000) {
                        echo "El archivo tiene que ser menor a 20 Mb";
                    } else {
                        /* VALIDAR TIPO IMAGEN */
                        if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo =="png"){
                            /* TRASLADAR ARCHIVO DESDE LA RUTA TEMPORAL A LA DEFINITIVA CON EL NOMBRE*/
                            if(move_uploaded_file($ruta_temporal, $archivo)){
                                    
                                /* INSERTAR A LA BASE DE DATOS */
                                    
                                    $rutaimagen = $archivo;
                                    $datos_producto = "INSERT INTO cuenta_qr(imagen_qr, id_agricultorqr) VALUES ('$rutaimagen','$id_agricultor')";			
                                    // Ejecutamos la consulta con prepare
                                    $declarar_producto = mysqli_query($conexion, $datos_producto);		
                                    // Comprobar la ejecución correcta
                                    if($declarar_producto) {
                                        echo "<script> 
                                        alert('REGISTRO EXITOSO'); 
                                        window.location = 'perfila1.php'
                                    </script>";
                                    }
            
            
                            }else{
                                echo "<script> 
                                        alert('Hubo error al subir el archivo'); 
                                        window.location = 'perfila1.php'
                                    </script>";
                                    
                            }
            
                        }else{
                            echo "<script> 
                            alert('Solo se admiten archivos en formato PDF'); 
                            window.location = 'perfila1.php'
                        </script>";
                        }
                    }    
                    

                
?>