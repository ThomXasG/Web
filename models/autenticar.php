<?php
    include_once 'conexion.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['clave'];
    
    // Consulta para verificar la autenticación
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$contrasena'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Usuario autenticado correctamente
        session_start();
        
        $_SESSION['usuario'] = $usuario; // Puedes almacenar cualquier información del usuario aquí
        $_SESSION['autenticado'] = true;
        header("Location: ../index.php?action=servicios");
        exit(); 
    } else {
        // Usuario no autenticado
        header("Location: ../index.php?action=login&error=1");
    }
    
    // Cerrar la conexión
    $conn->close();
    ?>