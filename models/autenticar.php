<?php
    include_once 'conexion.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['clave'];
    
    // Consulta para verificar la autenticación
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$contrasena'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Usuario autenticado correctamente
        header("Location: ../index.php?action=servicios");
        exit(); 
    } else {
        // Usuario no autenticado
        echo "Nombre de usuario o contraseña incorrectos.";
    }
    
    // Cerrar la conexión
    $conn->close();
    ?>