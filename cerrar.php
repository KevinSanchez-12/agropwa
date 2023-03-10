<?php 

    session_start();
    unset($_SESSION['usuario_id']);
    unset($_SESSION['usuario_correo']);
    unset($_SESSION['usuario_nombre']);
    session_destroy();
    
    echo "
    <script> 
        location.href= 'inicioSesion.php';
    </script>
    ";

?>
