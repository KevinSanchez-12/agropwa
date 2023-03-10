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
    $directorio = "uploads/";
    // OBTENEMOS EL NOMBRE DEL ARCHIVO
    $archivo = $directorio . basename($_FILES["file"]["name"]);
    // OBTENEMOS EL TIPO DE DATO CON PATHINFO_EXTENSION
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    //validar imagen
    $verificarimg = getimagesize($_FILES["file"]["tmp_name"]);

	// Verificamos que los campos enviados no estén vacios
	if(!empty($_POST['nombre']) && !empty($_POST['precio']) && isset($id_agricultor)){

		    // Guardamos los datos enviados por el usuario
			$nombre = $_POST['nombre'];
			$precio = $_POST['precio'];
            $tipo_producto = $_POST['tipo'];

            

		    // VALIDACIÓN DE PRODUCTO EXISTENTE 

			/* ------------------------------NOMBRE-------------------------------- */


			$consultar_producto = "SELECT nombre_producto FROM productos WHERE nombre_producto = '$nombre' ";
			$consulta_producto = mysqli_query($conexion, $consultar_producto);
			$campos_producto = mysqli_fetch_array($consulta_producto);


			if(isset($campos_producto['nombre_producto']) && isset($campos_producto['agricultor_producto'])==$id_agricultor){
				$mensaje_nombre= "Ya existe, quizás deseas modificar";
				/* alert('Este correo ya existe, intenta con otro');  */
				echo "
                <script> 
                    alert('Ya existe, quizás deseas modificar');
                    windows.history.back();
                    windows.location = 'inicioAgricultor';
				</script>
				";
            } 

            /* REGISTRO */

            if(!isset($campos_producto) && strlen($precio)<5 && $precio != "" && !preg_match('/[1-9]/', $nombre) && $tipo_producto != "" && isset($id_agricultor)
            && $verificarimg){
                if(!isset($campos_producto['agricultor_producto']) || !isset($campos_producto['nombre_producto'])){

                    $size = $_FILES["file"]["size"];

                    if($size > 500000) {
                        echo "El archivo tiene que ser menor a 500 kb";
                    } else {
                        /* VALIDAR TIPO IMAGEN */
                        if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo =="png"){
                            /* TRASLADAR ARCHIVO DESDE LA RUTA TEMPORAL A LA DEFINITIVA CON EL NOMBRE*/
                            if(move_uploaded_file($ruta_temporal, $archivo)){
                                    
                                /* INSERTAR A LA BASE DE DATOS */
                                    
                                    $rutaimagen = $archivo;
                                    $datos_producto = "INSERT INTO productos(nombre_producto, precio_producto_kg, tipo_producto, agricultor_producto, imagen_producto) VALUES ('$nombre', '$precio', '$tipo_producto', '$id_agricultor', '$rutaimagen')";			
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
                                echo "Hubo error al subir el archivo";
                            }
            
                        }else{
                            echo "Solo se admiten archivos jpg, jpeg y png";
                        }
                    }

                    }

                

                

            } else {
                    echo "<script> alert('No se pudo registrar') 
                    window.location = 'inicioAgricultor.php'
                    </script>";
		    }
         
            /* --------------------------------------------VALIDACIÓN DE CAMPOS---------------------------------------------------------*/


            if(preg_match('/[1-9]/', $nombre)){
                $mensaje_nombre = "No puede contener números";
            }

            if(strlen($precio)>4 || empty($precio)){
                $mensaje_precio = "El precio no es válido";  
            }

            if($tipo_producto == ""){
                $mensaje_tipo = "Elige un tipo de producto"; 
            }
            
            if(!isset($id_agricultor)) {
                echo "<script> alert('NO EXISTE USUARIO') </script>";
            }            
     }
 
?>