<?php
    include_once 'conexion.php';

    $nuevoUsuario = $_POST['nuevoUsuario'];
    $nuevaContrasena = $_POST['nuevaContrasena'];
    
    // Consulta para insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO usuarios (usuario, clave) VALUES ('$nuevoUsuario', '$nuevaContrasena')";
    
    if ($conn->query($sql) === TRUE) {
        echo "¡Nuevo usuario creado con éxito!";
    } else {
        echo "Error al crear el usuario: " . $conn->error;
    }
    
    // Cerrar la conexión
    $conn->close();
?>