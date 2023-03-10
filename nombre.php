<!-- TRABAJAMOS DENTRO DE HTML PARA LA CONEXIÓN DIRECTA DE LOS DATOS -->
<?php

    // Comprobamos si la sesión se ha iniciado
    session_start();
    
    /* ---------------------------------EVITAR INGRESAR SIN LOGEO CLIENTE------------------------------------- */
    if(!isset($_SESSION['usuario_id']) && !isset($_SESSION['usuario_correo']) && !isset(($_SESSION['usuario_nombre']))){
        header('Location: inicioSesion.php');
    }
    /* --------------------------------------------------------------------------------------------- */

    // SIEMPRE USAR include_once
    include_once 'baseDeDatos.php';

    // Reemplazar la variable $id por el dato enviado por el usuario $_SESSION[usuario_id]
    $id = $_SESSION['usuario_id'];
    $correo = $_SESSION['usuario_correo'];
    $nombre = $_SESSION['usuario_nombre'];
    $tipo = $_SESSION['usuario_tipo'];

    // Para obtener los datos completos debemos realizar una consulta a la base de datos
    //$sql = "SELECT id, correo FROM clientes WHERE id = '$id' AND tipo = '$tipo'";
    // Condicionamos el campo que quermos comparar WHERE id = $id 
        
    // Ejecutamos la consulta almacenada en $sql
    //$consulta = $conexion -> query($sql);
        
    // Inicializamos la variable $correo que almacenará el correo del usuario logeado
    /* $correo = null; */
        
    //while ($fila = $consulta -> fetch_assoc()){
    //    $correo = $fila['correo'];
    //    $nombre = $fila['nombre'];
    //    $tipo = $fila['tipo'];
    //};
    
        
    /* // Ejecutamos consulta
    $ejecutar_consulta = mysqli_query($conexion, $consulta);
        
    // Obetener los datos de la fila correspondiente
    $datos_usuario = mysqli_fetch_array($ejecutar_consulta); */


?>